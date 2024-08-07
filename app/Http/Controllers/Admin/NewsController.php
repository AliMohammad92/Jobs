<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Http\Resources\NewsResource;
use App\Models\News;
use App\Models\User;
use App\services\FileService;
use App\Traits\responseTrait;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    use responseTrait;
    public function create(NewsRequest $request, FileService $fileService) {
        try {
            $file = $request->file('file');
            $file_path = $fileService->store($file, 'Dashboard/News');
            $user = User::where('id', Auth::user()->id)->first();
            $news = News::create([
                'title' => $request->title,
                'body' => $request->body,
                'file' => $file_path,
                'created_by' => $user->user_name
            ]);
            return $this->apiResponse($news, __('strings.added_successfully'), 201);
        } catch (\Exception $th) {
            return $this->apiResponse(null, $th->getMessage(), 500);
        }
    }

    public function update($id, Request $request, FileService $fileService) {
        $news = News::where('id', $id)->first();
        $new_file = $request->file('file');
        $file_path = null;
        if ($new_file) {
            $old_file = $news->file;
            $file_path = $fileService->update($new_file, $old_file,  'Dashboard/News');
        }
        $user = User::where('id', Auth::user()->id)->first();
        $news->update([
            'title' => $request['title'] ?? $news['title'],
            'body' => $request['body'] ?? $news['body'] ,
            'file' => $file_path,
        ]);

        if ($news) {
            return $this->apiResponse($news, __('strings.updated_successfully'), 201);
        }
        return $this->apiResponse(null, __('strings.error_occurred_talk_developer'), 500);
    }

    public function delete($id) {
        $news = News::where('id', $id)->first();
        if ($news->delete()){
            return $this->apiResponse(null, __('strings.deleted_successfully'), 200);
        }
        return $this->apiResponse(null, __('strings.error_occurred'),  500);
    }

    public function getNews() {
        $news = NewsResource::collection(News::all());
        if($news) {
            return $this->apiResponse($news, __('strings.all_news'), 200);
        }
        return $this->apiResponse(null, __('strings.error_occurred'), 500);
    }
}

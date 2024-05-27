<?php


namespace App\services;


use App\Models\Post;
use App\Models\Seeker;
use Illuminate\Support\Facades\Auth;

class PostService
{

    protected $fileService;
    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function store($seeker_id , $title , $body ,$file){
        $file = $this->fileService->store($file,'images/job_seeker/posts');
        Post::create([
            'seeker_id' => $seeker_id,
            'title' => $title,
            'body' => $body,
            'file' => $file
        ]);
    }

    public function edit($request, $post)
    {
        $file = null;
        $old_file = $post['file'];
        if ($request->hasFile('file') && $request->file != '') {
            $file = $this->fileService->update($request->file, $old_file, 'post');
        }

        return $post->update([
            'title' => $request['title'] ?? $post['title'],
            'body' => $request['body'] ?? $post['body'],
            'file' => $file ?? $post['file']
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Resources\FollowerResource;
use App\Models\User;
use App\Traits\responseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    use responseTrait;

    public function follow($user_id){
        $user = User::query()->find($user_id);
        if($user) {
            $follower_id = Auth::user()->id;

            if ($user->followers()->where('followee_id', $follower_id)->exists()) {
                return $this->unFollowUser($user);
            }
            return $this->followUser($user);
        }

        return $this->apiResponse(null,'user not found',400);

    }

    public function followUser($user)
    {
        $user->followers()->attach(auth()->user()->id);
        return $this->apiResponse(null, 'Successfully followed the user.',200);
    }

    public function unFollowUser($user)
    {
        $user->followers()->detach(auth()->user()->id);
        return $this->apiResponse(null, 'Successfully unfollowed the user.',200);
    }


    public function showFollowers($userId)
    {
        $user = User::find($userId);
        $followers = $user->followers;
        return response()->json(FollowerResource::collection($followers));
    }

    public function showFollowings($userId)
    {
        $user = User::find($userId);
        $followings  = $user->followings;
        return response()->json(FollowerResource::collection($followings));
    }

}

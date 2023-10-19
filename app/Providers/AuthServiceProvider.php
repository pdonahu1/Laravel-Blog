<?php

namespace App\Providers;

// use App\Models\Post;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rules\Password;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];
     /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    
    {
    //    $this->registerPolicies();
    //    Password::defaults(fn () =>
    //        Password::min(8)->uncompromised()
    // );

        // Gate::define('edit-post', function (User $user, Post $post) {
        //     return $post->user()->is($user);
        //     dd;

        // });

        //
    }
}

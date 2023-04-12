<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.post.create');
    }

    public function submit()
    {
        $this->validate();

        $this->post->save();

        return redirect()->route('admin.posts.index');
    }

    protected function rules(): array
    {
        return [
            'post.post_title' => [
                'string',
                'nullable',
            ],
            'post.post_description' => [
                'string',
                'nullable',
            ],
        ];
    }
}

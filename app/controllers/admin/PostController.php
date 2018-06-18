<?php 
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BlogPost;
use Sirius\Validation\Validator;
class PostController extends BaseController {

	public function getIndex() {
		$blogPosts = BlogPost::all();
		return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
	}
	public function getCreate() {
		//admin/posts/create
		return $this->render('admin/insert-post.twig');
	
	}
	public function postCreate() {
		$errors = [];
		$result = false;
		$validator = new Validator();
		//haremos que el titulo y el contenido sean requeridos:
		$validator->add('title', 'required');
		$validator->add('content', 'required');

		if ($validator->validate($_POST)) {
			$blogPosts = new BlogPost([
		'title' => $_POST['title'],
		'content' => $_POST['content']
	]);
		$blogPosts ->save();
		$result = true;
	} else {
		$errors = $validator->getMessages();
	}
	return $this->render('admin/insert-post.twig', [
		'result' => $result,
		'errors' => $errors
		]);

	}	
}

 ?>
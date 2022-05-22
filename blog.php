<?php

use App\Blog\Article;
use App\Blog\Category;

require __DIR__.'/vendor/autoload.php';

$categories = [
    new Category(1, 'foo', null),
    new Category(2, 'bar', null),
    new Category(3, 'baz', null),
];
dump($categories);

$articles = [
    new Article(1, 'Lorem', 'Lorem ipsum', $categories[0]),
    new Article(2, 'Ipsum', 'Ipsum ipsum', $categories[1]),
    new Article(3, 'Sit', 'Sit sit', $categories[1]),
];
dump($articles);

foreach($articles as $article) {
    echo "title: {$article->getTitle()}";
    echo '<br>';
    // echo "category: {$article->getCategory()->getName()}";
    // echo '<br>';
    
    $category = $article->getCategory();
    echo "category: {$category->getName()}";
    echo '<br>';

    foreach ($category->getArticles() as $article) {
        echo "same category title: {$article->getTitle()}";
    }
}
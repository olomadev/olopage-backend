<?php

namespace App\Schema\Posts;

/**
 * @OA\Schema()
 */
class PostSave
{
    /**
     * @var string
     * @OA\Property(
     *     format="uuid"
     * )
     */
    public $postId;
    /**
    * @var object
    * @OA\Property(
    *     ref="#/components/schemas/ObjectId",
    *     format="uuid",
    * )
    */
    public $authorId;
    /**
     * @var string
     * @OA\Property()
     */
    public $title;
    /**
     * @var string
     * @OA\Property()
     */
    public $permalink;
    /**
     * @var string
     * @OA\Property()
     */
    public $content;
    /**
     * @var string
     * @OA\Property()
     */
    public $published;
    /**
    *  @var array
    *  @OA\Property(
    *      type="array",
    *      @OA\Items(
    *           @OA\Property(
    *             property="categoryId",
    *             type="string",
    *           )
    *     ),
    *  );
    */
    public $categories;
    /**
    *  @var array
    *  @OA\Property(
    *      type="array",
    *      @OA\Items(
    *           @OA\Property(
    *             property="permId",
    *             type="string",
    *           )
    *     ),
    *  );
    */
    public $tags;
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumRequest;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumRequest\querySubscriptionAlbumRequest\page;
use AlibabaCloud\Tea\Model;

class querySubscriptionAlbumRequest extends Model
{
    /**
     * @var string
     */
    public $albumId;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var page
     */
    public $page;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'albumId'    => 'AlbumId',
        'categoryId' => 'CategoryId',
        'page'       => 'Page',
        'title'      => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albumId) {
            $res['AlbumId'] = $this->albumId;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return querySubscriptionAlbumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbumId'])) {
            $model->albumId = $map['AlbumId'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class FetchAlbumTagPhotosRequest extends Model
{
    /**
     * @var int
     */
    public $albumId;

    /**
     * @var int
     */
    public $tagId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'albumId'   => 'AlbumId',
        'tagId'     => 'TagId',
        'size'      => 'Size',
        'page'      => 'Page',
        'storeName' => 'StoreName',
        'libraryId' => 'LibraryId',
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
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FetchAlbumTagPhotosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbumId'])) {
            $model->albumId = $map['AlbumId'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }

        return $model;
    }
}

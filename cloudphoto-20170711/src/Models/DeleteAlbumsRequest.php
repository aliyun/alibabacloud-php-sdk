<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class DeleteAlbumsRequest extends Model
{
    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var int[]
     */
    public $albumId;
    protected $_name = [
        'storeName' => 'StoreName',
        'libraryId' => 'LibraryId',
        'albumId'   => 'AlbumId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }
        if (null !== $this->albumId) {
            $res['AlbumId'] = $this->albumId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAlbumsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }
        if (isset($map['AlbumId'])) {
            if (!empty($map['AlbumId'])) {
                $model->albumId = $map['AlbumId'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class MoveAlbumPhotosRequest extends Model
{
    /**
     * @var int
     */
    public $sourceAlbumId;

    /**
     * @var int
     */
    public $targetAlbumId;

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
    public $photoId;
    protected $_name = [
        'sourceAlbumId' => 'SourceAlbumId',
        'targetAlbumId' => 'TargetAlbumId',
        'storeName'     => 'StoreName',
        'libraryId'     => 'LibraryId',
        'photoId'       => 'PhotoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceAlbumId) {
            $res['SourceAlbumId'] = $this->sourceAlbumId;
        }
        if (null !== $this->targetAlbumId) {
            $res['TargetAlbumId'] = $this->targetAlbumId;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }
        if (null !== $this->photoId) {
            $res['PhotoId'] = $this->photoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveAlbumPhotosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceAlbumId'])) {
            $model->sourceAlbumId = $map['SourceAlbumId'];
        }
        if (isset($map['TargetAlbumId'])) {
            $model->targetAlbumId = $map['TargetAlbumId'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }
        if (isset($map['PhotoId'])) {
            if (!empty($map['PhotoId'])) {
                $model->photoId = $map['PhotoId'];
            }
        }

        return $model;
    }
}

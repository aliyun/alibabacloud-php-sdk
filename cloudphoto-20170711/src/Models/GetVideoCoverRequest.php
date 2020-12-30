<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class GetVideoCoverRequest extends Model
{
    /**
     * @var int
     */
    public $photoId;

    /**
     * @var string
     */
    public $zoomType;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'photoId'   => 'PhotoId',
        'zoomType'  => 'ZoomType',
        'storeName' => 'StoreName',
        'libraryId' => 'LibraryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->photoId) {
            $res['PhotoId'] = $this->photoId;
        }
        if (null !== $this->zoomType) {
            $res['ZoomType'] = $this->zoomType;
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
     * @return GetVideoCoverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhotoId'])) {
            $model->photoId = $map['PhotoId'];
        }
        if (isset($map['ZoomType'])) {
            $model->zoomType = $map['ZoomType'];
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

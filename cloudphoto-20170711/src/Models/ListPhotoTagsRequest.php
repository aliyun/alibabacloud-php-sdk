<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class ListPhotoTagsRequest extends Model
{
    /**
     * @var int
     */
    public $photoId;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'photoId'   => 'PhotoId',
        'storeName' => 'StoreName',
        'libraryId' => 'LibraryId',
        'lang'      => 'Lang',
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
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPhotoTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhotoId'])) {
            $model->photoId = $map['PhotoId'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}

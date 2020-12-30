<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class TagPhotoRequest extends Model
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
     * @var int
     */
    public $photoId;

    /**
     * @var string[]
     */
    public $tagKey;

    /**
     * @var int[]
     */
    public $confidence;
    protected $_name = [
        'storeName'  => 'StoreName',
        'libraryId'  => 'LibraryId',
        'photoId'    => 'PhotoId',
        'tagKey'     => 'TagKey',
        'confidence' => 'Confidence',
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
        if (null !== $this->photoId) {
            $res['PhotoId'] = $this->photoId;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagPhotoRequest
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
        if (isset($map['PhotoId'])) {
            $model->photoId = $map['PhotoId'];
        }
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = $map['TagKey'];
            }
        }
        if (isset($map['Confidence'])) {
            if (!empty($map['Confidence'])) {
                $model->confidence = $map['Confidence'];
            }
        }

        return $model;
    }
}

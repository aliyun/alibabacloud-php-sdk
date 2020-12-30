<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class MoveFacePhotosRequest extends Model
{
    /**
     * @var int
     */
    public $sourceFaceId;

    /**
     * @var int
     */
    public $targetFaceId;

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
        'sourceFaceId' => 'SourceFaceId',
        'targetFaceId' => 'TargetFaceId',
        'storeName'    => 'StoreName',
        'libraryId'    => 'LibraryId',
        'photoId'      => 'PhotoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceFaceId) {
            $res['SourceFaceId'] = $this->sourceFaceId;
        }
        if (null !== $this->targetFaceId) {
            $res['TargetFaceId'] = $this->targetFaceId;
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
     * @return MoveFacePhotosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceFaceId'])) {
            $model->sourceFaceId = $map['SourceFaceId'];
        }
        if (isset($map['TargetFaceId'])) {
            $model->targetFaceId = $map['TargetFaceId'];
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

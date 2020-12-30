<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class MergeFacesRequest extends Model
{
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
    public $faceId;
    protected $_name = [
        'targetFaceId' => 'TargetFaceId',
        'storeName'    => 'StoreName',
        'libraryId'    => 'LibraryId',
        'faceId'       => 'FaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetFaceId) {
            $res['TargetFaceId'] = $this->targetFaceId;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeFacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetFaceId'])) {
            $model->targetFaceId = $map['TargetFaceId'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }
        if (isset($map['FaceId'])) {
            if (!empty($map['FaceId'])) {
                $model->faceId = $map['FaceId'];
            }
        }

        return $model;
    }
}

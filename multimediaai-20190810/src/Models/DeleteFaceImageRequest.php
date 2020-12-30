<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DeleteFaceImageRequest extends Model
{
    /**
     * @var int
     */
    public $faceGroupId;

    /**
     * @var int
     */
    public $facePersonId;

    /**
     * @var int
     */
    public $faceImageId;
    protected $_name = [
        'faceGroupId'  => 'FaceGroupId',
        'facePersonId' => 'FacePersonId',
        'faceImageId'  => 'FaceImageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceGroupId) {
            $res['FaceGroupId'] = $this->faceGroupId;
        }
        if (null !== $this->facePersonId) {
            $res['FacePersonId'] = $this->facePersonId;
        }
        if (null !== $this->faceImageId) {
            $res['FaceImageId'] = $this->faceImageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFaceImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceGroupId'])) {
            $model->faceGroupId = $map['FaceGroupId'];
        }
        if (isset($map['FacePersonId'])) {
            $model->facePersonId = $map['FacePersonId'];
        }
        if (isset($map['FaceImageId'])) {
            $model->faceImageId = $map['FaceImageId'];
        }

        return $model;
    }
}

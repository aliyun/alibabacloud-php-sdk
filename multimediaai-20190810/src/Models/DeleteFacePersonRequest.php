<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DeleteFacePersonRequest extends Model
{
    /**
     * @var int
     */
    public $faceGroupId;

    /**
     * @var int
     */
    public $facePersonId;
    protected $_name = [
        'faceGroupId'  => 'FaceGroupId',
        'facePersonId' => 'FacePersonId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFacePersonRequest
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

        return $model;
    }
}

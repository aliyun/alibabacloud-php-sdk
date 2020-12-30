<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DeleteFaceGroupRequest extends Model
{
    /**
     * @var int
     */
    public $faceGroupId;
    protected $_name = [
        'faceGroupId' => 'FaceGroupId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFaceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceGroupId'])) {
            $model->faceGroupId = $map['FaceGroupId'];
        }

        return $model;
    }
}

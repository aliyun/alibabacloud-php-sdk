<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\Tea\Model;

class RegisterFaceImageRequest extends Model
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
     * @var string
     */
    public $imageUrl;
    protected $_name = [
        'faceGroupId'  => 'FaceGroupId',
        'facePersonId' => 'FacePersonId',
        'imageUrl'     => 'ImageUrl',
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
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterFaceImageRequest
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
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        return $model;
    }
}

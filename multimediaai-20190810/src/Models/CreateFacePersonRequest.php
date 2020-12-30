<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\Tea\Model;

class CreateFacePersonRequest extends Model
{
    /**
     * @var int
     */
    public $faceGroupId;

    /**
     * @var string
     */
    public $facePersonName;

    /**
     * @var string
     */
    public $imageUrls;
    protected $_name = [
        'faceGroupId'    => 'FaceGroupId',
        'facePersonName' => 'FacePersonName',
        'imageUrls'      => 'ImageUrls',
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
        if (null !== $this->facePersonName) {
            $res['FacePersonName'] = $this->facePersonName;
        }
        if (null !== $this->imageUrls) {
            $res['ImageUrls'] = $this->imageUrls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFacePersonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceGroupId'])) {
            $model->faceGroupId = $map['FaceGroupId'];
        }
        if (isset($map['FacePersonName'])) {
            $model->facePersonName = $map['FacePersonName'];
        }
        if (isset($map['ImageUrls'])) {
            $model->imageUrls = $map['ImageUrls'];
        }

        return $model;
    }
}

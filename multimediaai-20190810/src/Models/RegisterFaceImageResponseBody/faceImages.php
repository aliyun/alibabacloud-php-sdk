<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models\RegisterFaceImageResponseBody;

use AlibabaCloud\Tea\Model;

class faceImages extends Model
{
    /**
     * @var int
     */
    public $faceImageId;
    protected $_name = [
        'faceImageId' => 'FaceImageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceImageId) {
            $res['FaceImageId'] = $this->faceImageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceImageId'])) {
            $model->faceImageId = $map['FaceImageId'];
        }

        return $model;
    }
}

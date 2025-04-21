<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class DeepfakeDetectRequest extends Model
{
    /**
     * @var string
     */
    public $faceBase64;

    /**
     * @var string
     */
    public $faceInputType;

    /**
     * @var string
     */
    public $faceUrl;

    /**
     * @var string
     */
    public $outerOrderNo;
    protected $_name = [
        'faceBase64' => 'FaceBase64',
        'faceInputType' => 'FaceInputType',
        'faceUrl' => 'FaceUrl',
        'outerOrderNo' => 'OuterOrderNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceBase64) {
            $res['FaceBase64'] = $this->faceBase64;
        }

        if (null !== $this->faceInputType) {
            $res['FaceInputType'] = $this->faceInputType;
        }

        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }

        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceBase64'])) {
            $model->faceBase64 = $map['FaceBase64'];
        }

        if (isset($map['FaceInputType'])) {
            $model->faceInputType = $map['FaceInputType'];
        }

        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }

        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }

        return $model;
    }
}

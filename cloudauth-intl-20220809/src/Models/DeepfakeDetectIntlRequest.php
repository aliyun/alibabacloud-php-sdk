<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class DeepfakeDetectIntlRequest extends Model
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
    public $merchantBizId;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $sceneCode;
    protected $_name = [
        'faceBase64' => 'FaceBase64',
        'faceInputType' => 'FaceInputType',
        'faceUrl' => 'FaceUrl',
        'merchantBizId' => 'MerchantBizId',
        'productCode' => 'ProductCode',
        'sceneCode' => 'SceneCode',
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

        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
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

        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }

        return $model;
    }
}

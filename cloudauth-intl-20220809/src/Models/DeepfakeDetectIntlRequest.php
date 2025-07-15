<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class DeepfakeDetectIntlRequest extends Model
{
    /**
     * @example /9j/4AAQSkZJRgABAQAASxxxxxxx
     *
     * @var string
     */
    public $faceBase64;

    /**
     * @example IMAGE
     *
     * @var string
     */
    public $faceInputType;

    /**
     * @example https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg
     *
     * @var string
     */
    public $faceUrl;

    /**
     * @description This parameter is required.
     *
     * @example e0c34a77f5ac40a5aa5e6ed20c******
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @description This parameter is required.
     *
     * @example FACE_DEEPFAKE
     *
     * @var string
     */
    public $productCode;

    /**
     * @example 1234567890
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeepfakeDetectIntlRequest
     */
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

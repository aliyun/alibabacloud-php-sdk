<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class FaceLivenessRequest extends Model
{
    /**
     * @example T
     *
     * @var string
     */
    public $crop;

    /**
     * @example dsjisaj***oekwodsm
     *
     * @var string
     */
    public $facePictureBase64;

    /**
     * @example https://digital-face-prod8.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg
     *
     * @var string
     */
    public $facePictureUrl;

    /**
     * @example T
     *
     * @var string
     */
    public $faceQuality;

    /**
     * @example e0c34a77f5ac40a5aa5e6ed20c353888
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $merchantUserId;

    /**
     * @example T
     *
     * @var string
     */
    public $occlusion;

    /**
     * @example FACE_LIVENESS_MIN
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'crop'              => 'Crop',
        'facePictureBase64' => 'FacePictureBase64',
        'facePictureUrl'    => 'FacePictureUrl',
        'faceQuality'       => 'FaceQuality',
        'merchantBizId'     => 'MerchantBizId',
        'merchantUserId'    => 'MerchantUserId',
        'occlusion'         => 'Occlusion',
        'productCode'       => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }
        if (null !== $this->facePictureBase64) {
            $res['FacePictureBase64'] = $this->facePictureBase64;
        }
        if (null !== $this->facePictureUrl) {
            $res['FacePictureUrl'] = $this->facePictureUrl;
        }
        if (null !== $this->faceQuality) {
            $res['FaceQuality'] = $this->faceQuality;
        }
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }
        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
        }
        if (null !== $this->occlusion) {
            $res['Occlusion'] = $this->occlusion;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceLivenessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['FacePictureBase64'])) {
            $model->facePictureBase64 = $map['FacePictureBase64'];
        }
        if (isset($map['FacePictureUrl'])) {
            $model->facePictureUrl = $map['FacePictureUrl'];
        }
        if (isset($map['FaceQuality'])) {
            $model->faceQuality = $map['FaceQuality'];
        }
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }
        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }
        if (isset($map['Occlusion'])) {
            $model->occlusion = $map['Occlusion'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}

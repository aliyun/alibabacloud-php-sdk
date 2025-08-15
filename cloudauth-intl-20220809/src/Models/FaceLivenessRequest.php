<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class FaceLivenessRequest extends Model
{
    /**
     * @var string
     */
    public $crop;

    /**
     * @var string
     */
    public $facePictureBase64;

    /**
     * @var string
     */
    public $facePictureUrl;

    /**
     * @var string
     */
    public $faceQuality;

    /**
     * @var string
     */
    public $merchantBizId;

    /**
     * @var string
     */
    public $merchantUserId;

    /**
     * @var string
     */
    public $occlusion;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'crop' => 'Crop',
        'facePictureBase64' => 'FacePictureBase64',
        'facePictureUrl' => 'FacePictureUrl',
        'faceQuality' => 'FaceQuality',
        'merchantBizId' => 'MerchantBizId',
        'merchantUserId' => 'MerchantUserId',
        'occlusion' => 'Occlusion',
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

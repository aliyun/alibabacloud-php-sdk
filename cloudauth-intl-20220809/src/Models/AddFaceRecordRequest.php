<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class AddFaceRecordRequest extends Model
{
    /**
     * @var string
     */
    public $faceGroupCode;

    /**
     * @var string
     */
    public $facePicture;

    /**
     * @var string
     */
    public $facePictureFile;

    /**
     * @var string
     */
    public $facePictureUrl;

    /**
     * @var string
     */
    public $faceQualityCheck;

    /**
     * @var string
     */
    public $merchantUserId;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'faceGroupCode' => 'FaceGroupCode',
        'facePicture' => 'FacePicture',
        'facePictureFile' => 'FacePictureFile',
        'facePictureUrl' => 'FacePictureUrl',
        'faceQualityCheck' => 'FaceQualityCheck',
        'merchantUserId' => 'MerchantUserId',
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceGroupCode) {
            $res['FaceGroupCode'] = $this->faceGroupCode;
        }

        if (null !== $this->facePicture) {
            $res['FacePicture'] = $this->facePicture;
        }

        if (null !== $this->facePictureFile) {
            $res['FacePictureFile'] = $this->facePictureFile;
        }

        if (null !== $this->facePictureUrl) {
            $res['FacePictureUrl'] = $this->facePictureUrl;
        }

        if (null !== $this->faceQualityCheck) {
            $res['FaceQualityCheck'] = $this->faceQualityCheck;
        }

        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
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
        if (isset($map['FaceGroupCode'])) {
            $model->faceGroupCode = $map['FaceGroupCode'];
        }

        if (isset($map['FacePicture'])) {
            $model->facePicture = $map['FacePicture'];
        }

        if (isset($map['FacePictureFile'])) {
            $model->facePictureFile = $map['FacePictureFile'];
        }

        if (isset($map['FacePictureUrl'])) {
            $model->facePictureUrl = $map['FacePictureUrl'];
        }

        if (isset($map['FaceQualityCheck'])) {
            $model->faceQualityCheck = $map['FaceQualityCheck'];
        }

        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}

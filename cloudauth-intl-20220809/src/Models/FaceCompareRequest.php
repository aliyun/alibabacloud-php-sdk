<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class FaceCompareRequest extends Model
{
    /**
     * @var string
     */
    public $facePictureQualityCheck;

    /**
     * @var string
     */
    public $merchantBizId;

    /**
     * @var string
     */
    public $sourceFacePicture;

    /**
     * @var string
     */
    public $sourceFacePictureUrl;

    /**
     * @var string
     */
    public $targetFacePicture;

    /**
     * @var string
     */
    public $targetFacePictureUrl;
    protected $_name = [
        'facePictureQualityCheck' => 'FacePictureQualityCheck',
        'merchantBizId' => 'MerchantBizId',
        'sourceFacePicture' => 'SourceFacePicture',
        'sourceFacePictureUrl' => 'SourceFacePictureUrl',
        'targetFacePicture' => 'TargetFacePicture',
        'targetFacePictureUrl' => 'TargetFacePictureUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->facePictureQualityCheck) {
            $res['FacePictureQualityCheck'] = $this->facePictureQualityCheck;
        }

        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }

        if (null !== $this->sourceFacePicture) {
            $res['SourceFacePicture'] = $this->sourceFacePicture;
        }

        if (null !== $this->sourceFacePictureUrl) {
            $res['SourceFacePictureUrl'] = $this->sourceFacePictureUrl;
        }

        if (null !== $this->targetFacePicture) {
            $res['TargetFacePicture'] = $this->targetFacePicture;
        }

        if (null !== $this->targetFacePictureUrl) {
            $res['TargetFacePictureUrl'] = $this->targetFacePictureUrl;
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
        if (isset($map['FacePictureQualityCheck'])) {
            $model->facePictureQualityCheck = $map['FacePictureQualityCheck'];
        }

        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }

        if (isset($map['SourceFacePicture'])) {
            $model->sourceFacePicture = $map['SourceFacePicture'];
        }

        if (isset($map['SourceFacePictureUrl'])) {
            $model->sourceFacePictureUrl = $map['SourceFacePictureUrl'];
        }

        if (isset($map['TargetFacePicture'])) {
            $model->targetFacePicture = $map['TargetFacePicture'];
        }

        if (isset($map['TargetFacePictureUrl'])) {
            $model->targetFacePictureUrl = $map['TargetFacePictureUrl'];
        }

        return $model;
    }
}

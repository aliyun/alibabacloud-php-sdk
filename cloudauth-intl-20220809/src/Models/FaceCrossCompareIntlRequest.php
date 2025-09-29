<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class FaceCrossCompareIntlRequest extends Model
{
    /**
     * @var string
     */
    public $compareModel;

    /**
     * @var string
     */
    public $faceVerifyThreshold;

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

    /**
     * @var string
     */
    public $sourceAFacePicture;

    /**
     * @var string
     */
    public $sourceAFacePictureUrl;

    /**
     * @var string
     */
    public $sourceBFacePicture;

    /**
     * @var string
     */
    public $sourceBFacePictureUrl;

    /**
     * @var string
     */
    public $sourceCFacePicture;

    /**
     * @var string
     */
    public $sourceCFacePictureUrl;
    protected $_name = [
        'compareModel' => 'CompareModel',
        'faceVerifyThreshold' => 'FaceVerifyThreshold',
        'merchantBizId' => 'MerchantBizId',
        'productCode' => 'ProductCode',
        'sceneCode' => 'SceneCode',
        'sourceAFacePicture' => 'SourceAFacePicture',
        'sourceAFacePictureUrl' => 'SourceAFacePictureUrl',
        'sourceBFacePicture' => 'SourceBFacePicture',
        'sourceBFacePictureUrl' => 'SourceBFacePictureUrl',
        'sourceCFacePicture' => 'SourceCFacePicture',
        'sourceCFacePictureUrl' => 'SourceCFacePictureUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compareModel) {
            $res['CompareModel'] = $this->compareModel;
        }

        if (null !== $this->faceVerifyThreshold) {
            $res['FaceVerifyThreshold'] = $this->faceVerifyThreshold;
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

        if (null !== $this->sourceAFacePicture) {
            $res['SourceAFacePicture'] = $this->sourceAFacePicture;
        }

        if (null !== $this->sourceAFacePictureUrl) {
            $res['SourceAFacePictureUrl'] = $this->sourceAFacePictureUrl;
        }

        if (null !== $this->sourceBFacePicture) {
            $res['SourceBFacePicture'] = $this->sourceBFacePicture;
        }

        if (null !== $this->sourceBFacePictureUrl) {
            $res['SourceBFacePictureUrl'] = $this->sourceBFacePictureUrl;
        }

        if (null !== $this->sourceCFacePicture) {
            $res['SourceCFacePicture'] = $this->sourceCFacePicture;
        }

        if (null !== $this->sourceCFacePictureUrl) {
            $res['SourceCFacePictureUrl'] = $this->sourceCFacePictureUrl;
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
        if (isset($map['CompareModel'])) {
            $model->compareModel = $map['CompareModel'];
        }

        if (isset($map['FaceVerifyThreshold'])) {
            $model->faceVerifyThreshold = $map['FaceVerifyThreshold'];
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

        if (isset($map['SourceAFacePicture'])) {
            $model->sourceAFacePicture = $map['SourceAFacePicture'];
        }

        if (isset($map['SourceAFacePictureUrl'])) {
            $model->sourceAFacePictureUrl = $map['SourceAFacePictureUrl'];
        }

        if (isset($map['SourceBFacePicture'])) {
            $model->sourceBFacePicture = $map['SourceBFacePicture'];
        }

        if (isset($map['SourceBFacePictureUrl'])) {
            $model->sourceBFacePictureUrl = $map['SourceBFacePictureUrl'];
        }

        if (isset($map['SourceCFacePicture'])) {
            $model->sourceCFacePicture = $map['SourceCFacePicture'];
        }

        if (isset($map['SourceCFacePictureUrl'])) {
            $model->sourceCFacePictureUrl = $map['SourceCFacePictureUrl'];
        }

        return $model;
    }
}

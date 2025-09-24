<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class FaceDuplicationCheckIntlRequest extends Model
{
    /**
     * @var string
     */
    public $autoRegistration;

    /**
     * @var string
     */
    public $faceGroupCodes;

    /**
     * @var string
     */
    public $faceRegisterGroupCode;

    /**
     * @var string
     */
    public $faceVerifyThreshold;

    /**
     * @var string
     */
    public $liveness;

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
    public $productCode;

    /**
     * @var string
     */
    public $returnFaces;

    /**
     * @var string
     */
    public $saveFacePicture;

    /**
     * @var string
     */
    public $sceneCode;

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

    /**
     * @var string
     */
    public $verifyModel;
    protected $_name = [
        'autoRegistration' => 'AutoRegistration',
        'faceGroupCodes' => 'FaceGroupCodes',
        'faceRegisterGroupCode' => 'FaceRegisterGroupCode',
        'faceVerifyThreshold' => 'FaceVerifyThreshold',
        'liveness' => 'Liveness',
        'merchantBizId' => 'MerchantBizId',
        'merchantUserId' => 'MerchantUserId',
        'productCode' => 'ProductCode',
        'returnFaces' => 'ReturnFaces',
        'saveFacePicture' => 'SaveFacePicture',
        'sceneCode' => 'SceneCode',
        'sourceFacePicture' => 'SourceFacePicture',
        'sourceFacePictureUrl' => 'SourceFacePictureUrl',
        'targetFacePicture' => 'TargetFacePicture',
        'targetFacePictureUrl' => 'TargetFacePictureUrl',
        'verifyModel' => 'VerifyModel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRegistration) {
            $res['AutoRegistration'] = $this->autoRegistration;
        }

        if (null !== $this->faceGroupCodes) {
            $res['FaceGroupCodes'] = $this->faceGroupCodes;
        }

        if (null !== $this->faceRegisterGroupCode) {
            $res['FaceRegisterGroupCode'] = $this->faceRegisterGroupCode;
        }

        if (null !== $this->faceVerifyThreshold) {
            $res['FaceVerifyThreshold'] = $this->faceVerifyThreshold;
        }

        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }

        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }

        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->returnFaces) {
            $res['ReturnFaces'] = $this->returnFaces;
        }

        if (null !== $this->saveFacePicture) {
            $res['SaveFacePicture'] = $this->saveFacePicture;
        }

        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
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

        if (null !== $this->verifyModel) {
            $res['VerifyModel'] = $this->verifyModel;
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
        if (isset($map['AutoRegistration'])) {
            $model->autoRegistration = $map['AutoRegistration'];
        }

        if (isset($map['FaceGroupCodes'])) {
            $model->faceGroupCodes = $map['FaceGroupCodes'];
        }

        if (isset($map['FaceRegisterGroupCode'])) {
            $model->faceRegisterGroupCode = $map['FaceRegisterGroupCode'];
        }

        if (isset($map['FaceVerifyThreshold'])) {
            $model->faceVerifyThreshold = $map['FaceVerifyThreshold'];
        }

        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }

        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }

        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ReturnFaces'])) {
            $model->returnFaces = $map['ReturnFaces'];
        }

        if (isset($map['SaveFacePicture'])) {
            $model->saveFacePicture = $map['SaveFacePicture'];
        }

        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
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

        if (isset($map['VerifyModel'])) {
            $model->verifyModel = $map['VerifyModel'];
        }

        return $model;
    }
}

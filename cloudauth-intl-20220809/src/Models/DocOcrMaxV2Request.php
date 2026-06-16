<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class DocOcrMaxV2Request extends Model
{
    /**
     * @var string
     */
    public $authorize;

    /**
     * @var string
     */
    public $docPage;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $idOcrPictureBase64;

    /**
     * @var string
     */
    public $idOcrPictureFile;

    /**
     * @var string
     */
    public $idOcrPictureUrl;

    /**
     * @var string
     */
    public $idSpoof;

    /**
     * @var string
     */
    public $idThreshold;

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
    public $ocrModel;

    /**
     * @var string
     */
    public $ocrValueStandard;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $sceneCode;
    protected $_name = [
        'authorize' => 'Authorize',
        'docPage' => 'DocPage',
        'docType' => 'DocType',
        'idOcrPictureBase64' => 'IdOcrPictureBase64',
        'idOcrPictureFile' => 'IdOcrPictureFile',
        'idOcrPictureUrl' => 'IdOcrPictureUrl',
        'idSpoof' => 'IdSpoof',
        'idThreshold' => 'IdThreshold',
        'merchantBizId' => 'MerchantBizId',
        'merchantUserId' => 'MerchantUserId',
        'ocrModel' => 'OcrModel',
        'ocrValueStandard' => 'OcrValueStandard',
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
        if (null !== $this->authorize) {
            $res['Authorize'] = $this->authorize;
        }

        if (null !== $this->docPage) {
            $res['DocPage'] = $this->docPage;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->idOcrPictureBase64) {
            $res['IdOcrPictureBase64'] = $this->idOcrPictureBase64;
        }

        if (null !== $this->idOcrPictureFile) {
            $res['IdOcrPictureFile'] = $this->idOcrPictureFile;
        }

        if (null !== $this->idOcrPictureUrl) {
            $res['IdOcrPictureUrl'] = $this->idOcrPictureUrl;
        }

        if (null !== $this->idSpoof) {
            $res['IdSpoof'] = $this->idSpoof;
        }

        if (null !== $this->idThreshold) {
            $res['IdThreshold'] = $this->idThreshold;
        }

        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }

        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
        }

        if (null !== $this->ocrModel) {
            $res['OcrModel'] = $this->ocrModel;
        }

        if (null !== $this->ocrValueStandard) {
            $res['OcrValueStandard'] = $this->ocrValueStandard;
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
        if (isset($map['Authorize'])) {
            $model->authorize = $map['Authorize'];
        }

        if (isset($map['DocPage'])) {
            $model->docPage = $map['DocPage'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['IdOcrPictureBase64'])) {
            $model->idOcrPictureBase64 = $map['IdOcrPictureBase64'];
        }

        if (isset($map['IdOcrPictureFile'])) {
            $model->idOcrPictureFile = $map['IdOcrPictureFile'];
        }

        if (isset($map['IdOcrPictureUrl'])) {
            $model->idOcrPictureUrl = $map['IdOcrPictureUrl'];
        }

        if (isset($map['IdSpoof'])) {
            $model->idSpoof = $map['IdSpoof'];
        }

        if (isset($map['IdThreshold'])) {
            $model->idThreshold = $map['IdThreshold'];
        }

        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }

        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }

        if (isset($map['OcrModel'])) {
            $model->ocrModel = $map['OcrModel'];
        }

        if (isset($map['OcrValueStandard'])) {
            $model->ocrValueStandard = $map['OcrValueStandard'];
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

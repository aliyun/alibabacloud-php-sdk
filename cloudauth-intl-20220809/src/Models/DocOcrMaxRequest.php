<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class DocOcrMaxRequest extends Model
{
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
    public $productCode;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @var string
     */
    public $spoof;
    protected $_name = [
        'docPage' => 'DocPage',
        'docType' => 'DocType',
        'idOcrPictureBase64' => 'IdOcrPictureBase64',
        'idOcrPictureUrl' => 'IdOcrPictureUrl',
        'idSpoof' => 'IdSpoof',
        'idThreshold' => 'IdThreshold',
        'merchantBizId' => 'MerchantBizId',
        'merchantUserId' => 'MerchantUserId',
        'ocrModel' => 'OcrModel',
        'productCode' => 'ProductCode',
        'prompt' => 'Prompt',
        'sceneCode' => 'SceneCode',
        'spoof' => 'Spoof',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docPage) {
            $res['DocPage'] = $this->docPage;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->idOcrPictureBase64) {
            $res['IdOcrPictureBase64'] = $this->idOcrPictureBase64;
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

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }

        if (null !== $this->spoof) {
            $res['Spoof'] = $this->spoof;
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
        if (isset($map['DocPage'])) {
            $model->docPage = $map['DocPage'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['IdOcrPictureBase64'])) {
            $model->idOcrPictureBase64 = $map['IdOcrPictureBase64'];
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

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }

        if (isset($map['Spoof'])) {
            $model->spoof = $map['Spoof'];
        }

        return $model;
    }
}

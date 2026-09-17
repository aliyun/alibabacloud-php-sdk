<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class CredentialRecognitionIntlV2AdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $checkRuleConfig;

    /**
     * @var string
     */
    public $credentialOcrPictureBase64;

    /**
     * @var Stream
     */
    public $credentialOcrPictureFileObject;

    /**
     * @var string
     */
    public $credentialOcrPictureUrl;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $fileInputType;

    /**
     * @var string
     */
    public $fraudCheck;

    /**
     * @var string
     */
    public $idQuality;

    /**
     * @var string
     */
    public $ocrArea;

    /**
     * @var string
     */
    public $ocrTranslation;

    /**
     * @var string
     */
    public $ocrValueStandard;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'checkRuleConfig' => 'CheckRuleConfig',
        'credentialOcrPictureBase64' => 'CredentialOcrPictureBase64',
        'credentialOcrPictureFileObject' => 'CredentialOcrPictureFile',
        'credentialOcrPictureUrl' => 'CredentialOcrPictureUrl',
        'docType' => 'DocType',
        'fileInputType' => 'FileInputType',
        'fraudCheck' => 'FraudCheck',
        'idQuality' => 'IdQuality',
        'ocrArea' => 'OcrArea',
        'ocrTranslation' => 'OcrTranslation',
        'ocrValueStandard' => 'OcrValueStandard',
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkRuleConfig) {
            $res['CheckRuleConfig'] = $this->checkRuleConfig;
        }

        if (null !== $this->credentialOcrPictureBase64) {
            $res['CredentialOcrPictureBase64'] = $this->credentialOcrPictureBase64;
        }

        if (null !== $this->credentialOcrPictureFileObject) {
            $res['CredentialOcrPictureFile'] = $this->credentialOcrPictureFileObject;
        }

        if (null !== $this->credentialOcrPictureUrl) {
            $res['CredentialOcrPictureUrl'] = $this->credentialOcrPictureUrl;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->fileInputType) {
            $res['FileInputType'] = $this->fileInputType;
        }

        if (null !== $this->fraudCheck) {
            $res['FraudCheck'] = $this->fraudCheck;
        }

        if (null !== $this->idQuality) {
            $res['IdQuality'] = $this->idQuality;
        }

        if (null !== $this->ocrArea) {
            $res['OcrArea'] = $this->ocrArea;
        }

        if (null !== $this->ocrTranslation) {
            $res['OcrTranslation'] = $this->ocrTranslation;
        }

        if (null !== $this->ocrValueStandard) {
            $res['OcrValueStandard'] = $this->ocrValueStandard;
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
        if (isset($map['CheckRuleConfig'])) {
            $model->checkRuleConfig = $map['CheckRuleConfig'];
        }

        if (isset($map['CredentialOcrPictureBase64'])) {
            $model->credentialOcrPictureBase64 = $map['CredentialOcrPictureBase64'];
        }

        if (isset($map['CredentialOcrPictureFile'])) {
            $model->credentialOcrPictureFileObject = $map['CredentialOcrPictureFile'];
        }

        if (isset($map['CredentialOcrPictureUrl'])) {
            $model->credentialOcrPictureUrl = $map['CredentialOcrPictureUrl'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['FileInputType'])) {
            $model->fileInputType = $map['FileInputType'];
        }

        if (isset($map['FraudCheck'])) {
            $model->fraudCheck = $map['FraudCheck'];
        }

        if (isset($map['IdQuality'])) {
            $model->idQuality = $map['IdQuality'];
        }

        if (isset($map['OcrArea'])) {
            $model->ocrArea = $map['OcrArea'];
        }

        if (isset($map['OcrTranslation'])) {
            $model->ocrTranslation = $map['OcrTranslation'];
        }

        if (isset($map['OcrValueStandard'])) {
            $model->ocrValueStandard = $map['OcrValueStandard'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class InitializeRequest extends Model
{
    /**
     * @var string
     */
    public $authorize;

    /**
     * @var string
     */
    public $callbackToken;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @example *
     *
     * @var string
     */
    public $crop;

    /**
     * @var string
     */
    public $docScanMode;

    /**
     * @example 01000000
     *
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $experienceCode;

    /**
     * @var string
     */
    public $facePictureBase64;

    /**
     * @example ***
     *
     * @var string
     */
    public $facePictureUrl;

    /**
     * @example *
     *
     * @var string
     */
    public $idFaceQuality;

    /**
     * @example Y
     *
     * @var string
     */
    public $idSpoof;

    /**
     * @var string
     */
    public $languageConfig;

    /**
     * @example e0c34a***353888
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @example 1221****6543
     *
     * @var string
     */
    public $merchantUserId;

    /**
     * @example {\\"bioMetaInfo\\":\\"4.1.0:2916352,0\\",\\"deviceType\\":\\"web\\",\\"ua\\":\\"Mozilla/5.0 (Macintosh
     *
     * @var string
     */
    public $metaInfo;

    /**
     * @description OCR。
     *
     * @example *
     *
     * @var string
     */
    public $ocr;

    /**
     * @example eKYC
     *
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productFlow;

    /**
     * @example http*****
     *
     * @var string
     */
    public $returnUrl;

    /**
     * @example PAY**
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @var string
     */
    public $securityLevel;

    /**
     * @var string
     */
    public $styleConfig;
    protected $_name = [
        'authorize'         => 'Authorize',
        'callbackToken'     => 'CallbackToken',
        'callbackUrl'       => 'CallbackUrl',
        'crop'              => 'Crop',
        'docScanMode'       => 'DocScanMode',
        'docType'           => 'DocType',
        'experienceCode'    => 'ExperienceCode',
        'facePictureBase64' => 'FacePictureBase64',
        'facePictureUrl'    => 'FacePictureUrl',
        'idFaceQuality'     => 'IdFaceQuality',
        'idSpoof'           => 'IdSpoof',
        'languageConfig'    => 'LanguageConfig',
        'merchantBizId'     => 'MerchantBizId',
        'merchantUserId'    => 'MerchantUserId',
        'metaInfo'          => 'MetaInfo',
        'ocr'               => 'Ocr',
        'productCode'       => 'ProductCode',
        'productFlow'       => 'ProductFlow',
        'returnUrl'         => 'ReturnUrl',
        'sceneCode'         => 'SceneCode',
        'securityLevel'     => 'SecurityLevel',
        'styleConfig'       => 'StyleConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorize) {
            $res['Authorize'] = $this->authorize;
        }
        if (null !== $this->callbackToken) {
            $res['CallbackToken'] = $this->callbackToken;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }
        if (null !== $this->docScanMode) {
            $res['DocScanMode'] = $this->docScanMode;
        }
        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }
        if (null !== $this->experienceCode) {
            $res['ExperienceCode'] = $this->experienceCode;
        }
        if (null !== $this->facePictureBase64) {
            $res['FacePictureBase64'] = $this->facePictureBase64;
        }
        if (null !== $this->facePictureUrl) {
            $res['FacePictureUrl'] = $this->facePictureUrl;
        }
        if (null !== $this->idFaceQuality) {
            $res['IdFaceQuality'] = $this->idFaceQuality;
        }
        if (null !== $this->idSpoof) {
            $res['IdSpoof'] = $this->idSpoof;
        }
        if (null !== $this->languageConfig) {
            $res['LanguageConfig'] = $this->languageConfig;
        }
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }
        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
        }
        if (null !== $this->metaInfo) {
            $res['MetaInfo'] = $this->metaInfo;
        }
        if (null !== $this->ocr) {
            $res['Ocr'] = $this->ocr;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productFlow) {
            $res['ProductFlow'] = $this->productFlow;
        }
        if (null !== $this->returnUrl) {
            $res['ReturnUrl'] = $this->returnUrl;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }
        if (null !== $this->styleConfig) {
            $res['StyleConfig'] = $this->styleConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitializeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authorize'])) {
            $model->authorize = $map['Authorize'];
        }
        if (isset($map['CallbackToken'])) {
            $model->callbackToken = $map['CallbackToken'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['DocScanMode'])) {
            $model->docScanMode = $map['DocScanMode'];
        }
        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }
        if (isset($map['ExperienceCode'])) {
            $model->experienceCode = $map['ExperienceCode'];
        }
        if (isset($map['FacePictureBase64'])) {
            $model->facePictureBase64 = $map['FacePictureBase64'];
        }
        if (isset($map['FacePictureUrl'])) {
            $model->facePictureUrl = $map['FacePictureUrl'];
        }
        if (isset($map['IdFaceQuality'])) {
            $model->idFaceQuality = $map['IdFaceQuality'];
        }
        if (isset($map['IdSpoof'])) {
            $model->idSpoof = $map['IdSpoof'];
        }
        if (isset($map['LanguageConfig'])) {
            $model->languageConfig = $map['LanguageConfig'];
        }
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }
        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }
        if (isset($map['MetaInfo'])) {
            $model->metaInfo = $map['MetaInfo'];
        }
        if (isset($map['Ocr'])) {
            $model->ocr = $map['Ocr'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductFlow'])) {
            $model->productFlow = $map['ProductFlow'];
        }
        if (isset($map['ReturnUrl'])) {
            $model->returnUrl = $map['ReturnUrl'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }
        if (isset($map['StyleConfig'])) {
            $model->styleConfig = $map['StyleConfig'];
        }

        return $model;
    }
}

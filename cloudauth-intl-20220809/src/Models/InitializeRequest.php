<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class InitializeRequest extends Model
{
    /**
     * @example *
     *
     * @var string
     */
    public $crop;

    /**
     * @example 01000000
     *
     * @var string
     */
    public $docType;

    /**
     * @example dsjisaj***oekwodsm
     *
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
     * @example ***
     *
     * @var string
     */
    public $flowType;

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
     * @example {\"bioMetaInfo\":\"4.1.0:2916352,0\",\"deviceType\":\"web\",\"ua\":\"Mozilla/5.0 (Macintosh
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
     * @example ***
     *
     * @var string
     */
    public $operationMode;

    /**
     * @example 1
     *
     * @var string
     */
    public $pages;

    /**
     * @example eKYC
     *
     * @var string
     */
    public $productCode;

    /**
     * @example ***
     *
     * @var string
     */
    public $productConfig;

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
     * @example ****
     *
     * @var string
     */
    public $serviceLevel;
    protected $_name = [
        'crop'              => 'Crop',
        'docType'           => 'DocType',
        'facePictureBase64' => 'FacePictureBase64',
        'facePictureUrl'    => 'FacePictureUrl',
        'flowType'          => 'FlowType',
        'idFaceQuality'     => 'IdFaceQuality',
        'idSpoof'           => 'IdSpoof',
        'merchantBizId'     => 'MerchantBizId',
        'merchantUserId'    => 'MerchantUserId',
        'metaInfo'          => 'MetaInfo',
        'ocr'               => 'Ocr',
        'operationMode'     => 'OperationMode',
        'pages'             => 'Pages',
        'productCode'       => 'ProductCode',
        'productConfig'     => 'ProductConfig',
        'returnUrl'         => 'ReturnUrl',
        'sceneCode'         => 'SceneCode',
        'serviceLevel'      => 'ServiceLevel',
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
        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }
        if (null !== $this->facePictureBase64) {
            $res['FacePictureBase64'] = $this->facePictureBase64;
        }
        if (null !== $this->facePictureUrl) {
            $res['FacePictureUrl'] = $this->facePictureUrl;
        }
        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }
        if (null !== $this->idFaceQuality) {
            $res['IdFaceQuality'] = $this->idFaceQuality;
        }
        if (null !== $this->idSpoof) {
            $res['IdSpoof'] = $this->idSpoof;
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
        if (null !== $this->operationMode) {
            $res['OperationMode'] = $this->operationMode;
        }
        if (null !== $this->pages) {
            $res['Pages'] = $this->pages;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productConfig) {
            $res['ProductConfig'] = $this->productConfig;
        }
        if (null !== $this->returnUrl) {
            $res['ReturnUrl'] = $this->returnUrl;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->serviceLevel) {
            $res['ServiceLevel'] = $this->serviceLevel;
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
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }
        if (isset($map['FacePictureBase64'])) {
            $model->facePictureBase64 = $map['FacePictureBase64'];
        }
        if (isset($map['FacePictureUrl'])) {
            $model->facePictureUrl = $map['FacePictureUrl'];
        }
        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }
        if (isset($map['IdFaceQuality'])) {
            $model->idFaceQuality = $map['IdFaceQuality'];
        }
        if (isset($map['IdSpoof'])) {
            $model->idSpoof = $map['IdSpoof'];
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
        if (isset($map['OperationMode'])) {
            $model->operationMode = $map['OperationMode'];
        }
        if (isset($map['Pages'])) {
            $model->pages = $map['Pages'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductConfig'])) {
            $model->productConfig = $map['ProductConfig'];
        }
        if (isset($map['ReturnUrl'])) {
            $model->returnUrl = $map['ReturnUrl'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['ServiceLevel'])) {
            $model->serviceLevel = $map['ServiceLevel'];
        }

        return $model;
    }
}

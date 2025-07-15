<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class DocOcrMaxRequest extends Model
{
    /**
     * @var string
     */
    public $docPage;

    /**
     * @example CNSSC01
     *
     * @var string
     */
    public $docType;

    /**
     * @example base64
     *
     * @var string
     */
    public $idOcrPictureBase64;

    /**
     * @example https://***********.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg
     *
     * @var string
     */
    public $idOcrPictureUrl;

    /**
     * @var string
     */
    public $idSpoof;

    /**
     * @example 0
     *
     * @var string
     */
    public $idThreshold;

    /**
     * @example e0c34a77f5ac40a5aa5e6ed20c******
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $merchantUserId;

    /**
     * @example 0
     *
     * @var string
     */
    public $ocrModel;

    /**
     * @example ID_OCR_MAX
     *
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @example 1234567890
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @example F
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DocOcrMaxRequest
     */
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

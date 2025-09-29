<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class CredentialSubmitIntlRequest extends Model
{
    /**
     * @var string
     */
    public $credentialOcrPictureBase64;

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
    public $fraudCheck;

    /**
     * @var string
     */
    public $merchantBizId;

    /**
     * @var string
     */
    public $ocrArea;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $sceneCode;
    protected $_name = [
        'credentialOcrPictureBase64' => 'CredentialOcrPictureBase64',
        'credentialOcrPictureUrl' => 'CredentialOcrPictureUrl',
        'docType' => 'DocType',
        'fraudCheck' => 'FraudCheck',
        'merchantBizId' => 'MerchantBizId',
        'ocrArea' => 'OcrArea',
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
        if (null !== $this->credentialOcrPictureBase64) {
            $res['CredentialOcrPictureBase64'] = $this->credentialOcrPictureBase64;
        }

        if (null !== $this->credentialOcrPictureUrl) {
            $res['CredentialOcrPictureUrl'] = $this->credentialOcrPictureUrl;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->fraudCheck) {
            $res['FraudCheck'] = $this->fraudCheck;
        }

        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }

        if (null !== $this->ocrArea) {
            $res['OcrArea'] = $this->ocrArea;
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
        if (isset($map['CredentialOcrPictureBase64'])) {
            $model->credentialOcrPictureBase64 = $map['CredentialOcrPictureBase64'];
        }

        if (isset($map['CredentialOcrPictureUrl'])) {
            $model->credentialOcrPictureUrl = $map['CredentialOcrPictureUrl'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['FraudCheck'])) {
            $model->fraudCheck = $map['FraudCheck'];
        }

        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }

        if (isset($map['OcrArea'])) {
            $model->ocrArea = $map['OcrArea'];
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

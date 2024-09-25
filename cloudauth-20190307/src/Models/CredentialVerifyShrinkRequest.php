<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CredentialVerifyShrinkRequest extends Model
{
    /**
     * @example 4601*****
     *
     * @var string
     */
    public $certNum;

    /**
     * @example 0104
     *
     * @var string
     */
    public $credName;

    /**
     * @example 01
     *
     * @var string
     */
    public $credType;

    /**
     * @example 429001********8211
     *
     * @var string
     */
    public $identifyNum;

    /**
     * @example base64
     *
     * @var string
     */
    public $imageContext;

    /**
     * @example http://marry.momocdn.com/avatar/3B/B6/3BB6527E-7467-926E-1048-B43614F20CC420230803_L.jpg
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example 0
     *
     * @var string
     */
    public $isCheck;

    /**
     * @example 1
     *
     * @var string
     */
    public $isOCR;

    /**
     * @var string
     */
    public $merchantDetailShrink;

    /**
     * @var string
     */
    public $merchantId;

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
    public $promptModel;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'certNum'              => 'CertNum',
        'credName'             => 'CredName',
        'credType'             => 'CredType',
        'identifyNum'          => 'IdentifyNum',
        'imageContext'         => 'ImageContext',
        'imageUrl'             => 'ImageUrl',
        'isCheck'              => 'IsCheck',
        'isOCR'                => 'IsOCR',
        'merchantDetailShrink' => 'MerchantDetail',
        'merchantId'           => 'MerchantId',
        'productCode'          => 'ProductCode',
        'prompt'               => 'Prompt',
        'promptModel'          => 'PromptModel',
        'userName'             => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certNum) {
            $res['CertNum'] = $this->certNum;
        }
        if (null !== $this->credName) {
            $res['CredName'] = $this->credName;
        }
        if (null !== $this->credType) {
            $res['CredType'] = $this->credType;
        }
        if (null !== $this->identifyNum) {
            $res['IdentifyNum'] = $this->identifyNum;
        }
        if (null !== $this->imageContext) {
            $res['ImageContext'] = $this->imageContext;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->isCheck) {
            $res['IsCheck'] = $this->isCheck;
        }
        if (null !== $this->isOCR) {
            $res['IsOCR'] = $this->isOCR;
        }
        if (null !== $this->merchantDetailShrink) {
            $res['MerchantDetail'] = $this->merchantDetailShrink;
        }
        if (null !== $this->merchantId) {
            $res['MerchantId'] = $this->merchantId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->promptModel) {
            $res['PromptModel'] = $this->promptModel;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CredentialVerifyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertNum'])) {
            $model->certNum = $map['CertNum'];
        }
        if (isset($map['CredName'])) {
            $model->credName = $map['CredName'];
        }
        if (isset($map['CredType'])) {
            $model->credType = $map['CredType'];
        }
        if (isset($map['IdentifyNum'])) {
            $model->identifyNum = $map['IdentifyNum'];
        }
        if (isset($map['ImageContext'])) {
            $model->imageContext = $map['ImageContext'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['IsCheck'])) {
            $model->isCheck = $map['IsCheck'];
        }
        if (isset($map['IsOCR'])) {
            $model->isOCR = $map['IsOCR'];
        }
        if (isset($map['MerchantDetail'])) {
            $model->merchantDetailShrink = $map['MerchantDetail'];
        }
        if (isset($map['MerchantId'])) {
            $model->merchantId = $map['MerchantId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['PromptModel'])) {
            $model->promptModel = $map['PromptModel'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

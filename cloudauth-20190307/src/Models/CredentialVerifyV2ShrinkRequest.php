<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class CredentialVerifyV2ShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $certNum;

    /**
     * @var string
     */
    public $credName;

    /**
     * @var string
     */
    public $credType;

    /**
     * @var string
     */
    public $identifyNum;

    /**
     * @var string
     */
    public $imageContext;

    /**
     * @var string
     */
    public $imageFile;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $isCheck;

    /**
     * @var string
     */
    public $isOcr;

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
        'certNum' => 'CertNum',
        'credName' => 'CredName',
        'credType' => 'CredType',
        'identifyNum' => 'IdentifyNum',
        'imageContext' => 'ImageContext',
        'imageFile' => 'ImageFile',
        'imageUrl' => 'ImageUrl',
        'isCheck' => 'IsCheck',
        'isOcr' => 'IsOcr',
        'merchantDetailShrink' => 'MerchantDetail',
        'merchantId' => 'MerchantId',
        'productCode' => 'ProductCode',
        'prompt' => 'Prompt',
        'promptModel' => 'PromptModel',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->imageFile) {
            $res['ImageFile'] = $this->imageFile;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->isCheck) {
            $res['IsCheck'] = $this->isCheck;
        }

        if (null !== $this->isOcr) {
            $res['IsOcr'] = $this->isOcr;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ImageFile'])) {
            $model->imageFile = $map['ImageFile'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['IsCheck'])) {
            $model->isCheck = $map['IsCheck'];
        }

        if (isset($map['IsOcr'])) {
            $model->isOcr = $map['IsOcr'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class InitCardVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $callbackToken;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $cardPageNumber;

    /**
     * @var string
     */
    public $cardType;

    /**
     * @var string
     */
    public $docScanMode;

    /**
     * @var string
     */
    public $merchantBizId;

    /**
     * @var string
     */
    public $metaInfo;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $pictureSave;

    /**
     * @var string
     */
    public $verifyMeta;
    protected $_name = [
        'callbackToken' => 'CallbackToken',
        'callbackUrl' => 'CallbackUrl',
        'cardPageNumber' => 'CardPageNumber',
        'cardType' => 'CardType',
        'docScanMode' => 'DocScanMode',
        'merchantBizId' => 'MerchantBizId',
        'metaInfo' => 'MetaInfo',
        'model' => 'Model',
        'pictureSave' => 'PictureSave',
        'verifyMeta' => 'VerifyMeta',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackToken) {
            $res['CallbackToken'] = $this->callbackToken;
        }

        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->cardPageNumber) {
            $res['CardPageNumber'] = $this->cardPageNumber;
        }

        if (null !== $this->cardType) {
            $res['CardType'] = $this->cardType;
        }

        if (null !== $this->docScanMode) {
            $res['DocScanMode'] = $this->docScanMode;
        }

        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }

        if (null !== $this->metaInfo) {
            $res['MetaInfo'] = $this->metaInfo;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->pictureSave) {
            $res['PictureSave'] = $this->pictureSave;
        }

        if (null !== $this->verifyMeta) {
            $res['VerifyMeta'] = $this->verifyMeta;
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
        if (isset($map['CallbackToken'])) {
            $model->callbackToken = $map['CallbackToken'];
        }

        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['CardPageNumber'])) {
            $model->cardPageNumber = $map['CardPageNumber'];
        }

        if (isset($map['CardType'])) {
            $model->cardType = $map['CardType'];
        }

        if (isset($map['DocScanMode'])) {
            $model->docScanMode = $map['DocScanMode'];
        }

        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }

        if (isset($map['MetaInfo'])) {
            $model->metaInfo = $map['MetaInfo'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['PictureSave'])) {
            $model->pictureSave = $map['PictureSave'];
        }

        if (isset($map['VerifyMeta'])) {
            $model->verifyMeta = $map['VerifyMeta'];
        }

        return $model;
    }
}

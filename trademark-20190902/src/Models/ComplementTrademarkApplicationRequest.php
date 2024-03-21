<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class ComplementTrademarkApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $agreementId;

    /**
     * @var string
     */
    public $authorizationOssKey;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var bool
     */
    public $isBlackIcon;

    /**
     * @var string
     */
    public $materialId;

    /**
     * @var string
     */
    public $orderData;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $trademarkComment;

    /**
     * @var string
     */
    public $trademarkIconOssKey;

    /**
     * @var string
     */
    public $trademarkName;

    /**
     * @var string
     */
    public $trademarkNameType;

    /**
     * @var int
     */
    public $trademarkType;
    protected $_name = [
        'agreementId'         => 'AgreementId',
        'authorizationOssKey' => 'AuthorizationOssKey',
        'bizId'               => 'BizId',
        'isBlackIcon'         => 'IsBlackIcon',
        'materialId'          => 'MaterialId',
        'orderData'           => 'OrderData',
        'source'              => 'Source',
        'trademarkComment'    => 'TrademarkComment',
        'trademarkIconOssKey' => 'TrademarkIconOssKey',
        'trademarkName'       => 'TrademarkName',
        'trademarkNameType'   => 'TrademarkNameType',
        'trademarkType'       => 'TrademarkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreementId) {
            $res['AgreementId'] = $this->agreementId;
        }
        if (null !== $this->authorizationOssKey) {
            $res['AuthorizationOssKey'] = $this->authorizationOssKey;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->isBlackIcon) {
            $res['IsBlackIcon'] = $this->isBlackIcon;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->orderData) {
            $res['OrderData'] = $this->orderData;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->trademarkComment) {
            $res['TrademarkComment'] = $this->trademarkComment;
        }
        if (null !== $this->trademarkIconOssKey) {
            $res['TrademarkIconOssKey'] = $this->trademarkIconOssKey;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }
        if (null !== $this->trademarkNameType) {
            $res['TrademarkNameType'] = $this->trademarkNameType;
        }
        if (null !== $this->trademarkType) {
            $res['TrademarkType'] = $this->trademarkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ComplementTrademarkApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgreementId'])) {
            $model->agreementId = $map['AgreementId'];
        }
        if (isset($map['AuthorizationOssKey'])) {
            $model->authorizationOssKey = $map['AuthorizationOssKey'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['IsBlackIcon'])) {
            $model->isBlackIcon = $map['IsBlackIcon'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['OrderData'])) {
            $model->orderData = $map['OrderData'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TrademarkComment'])) {
            $model->trademarkComment = $map['TrademarkComment'];
        }
        if (isset($map['TrademarkIconOssKey'])) {
            $model->trademarkIconOssKey = $map['TrademarkIconOssKey'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }
        if (isset($map['TrademarkNameType'])) {
            $model->trademarkNameType = $map['TrademarkNameType'];
        }
        if (isset($map['TrademarkType'])) {
            $model->trademarkType = $map['TrademarkType'];
        }

        return $model;
    }
}

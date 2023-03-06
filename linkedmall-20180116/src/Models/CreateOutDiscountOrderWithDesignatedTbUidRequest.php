<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class CreateOutDiscountOrderWithDesignatedTbUidRequest extends Model
{
    /**
     * @example LMALL2022***01
     *
     * @var string
     */
    public $bizId;

    /**
     * @example ""
     *
     * @var string
     */
    public $buyerMessages;

    /**
     * @var string
     */
    public $deliveryAddress;

    /**
     * @example {\"id\":\"20\",\"postFee\":0,\"serviceType\":-4}
     *
     * @var string
     */
    public $deliveryInfo;

    /**
     * @example {}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @example 3600
     *
     * @var int
     */
    public $orderExpireTime;

    /**
     * @example [{\"lmItemId\":\"100***1-6300***472\",\"number\":1,\"outDiscountFee\":\"6810\",\"price\":\"8800\",\"skuId\":4649***225}]
     *
     * @var string
     */
    public $orderItems;

    /**
     * @example {\"promotionInfos\":[{\"discountFee\":\"10000\",\"promotionInstanceId\":\"{\\\"couponId\\\":\\\"136807***98136\\\",\\\"couponTemplateId\\\":\\\"50***5\\\"}\"}],\"totalDiscountFee\":\"10000\"}
     *
     * @var string
     */
    public $outDiscountInfos;

    /**
     * @example 134860***596130
     *
     * @var string
     */
    public $outTradeId;

    /**
     * @example ANONY
     *
     * @var string
     */
    public $tbAccountType;

    /**
     * @example 321**123
     *
     * @var int
     */
    public $tbUserId;

    /**
     * @example user***001
     *
     * @var string
     */
    public $thirdPartyUserId;
    protected $_name = [
        'bizId'            => 'BizId',
        'buyerMessages'    => 'BuyerMessages',
        'deliveryAddress'  => 'DeliveryAddress',
        'deliveryInfo'     => 'DeliveryInfo',
        'extInfo'          => 'ExtInfo',
        'orderExpireTime'  => 'OrderExpireTime',
        'orderItems'       => 'OrderItems',
        'outDiscountInfos' => 'OutDiscountInfos',
        'outTradeId'       => 'OutTradeId',
        'tbAccountType'    => 'TbAccountType',
        'tbUserId'         => 'TbUserId',
        'thirdPartyUserId' => 'ThirdPartyUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->buyerMessages) {
            $res['BuyerMessages'] = $this->buyerMessages;
        }
        if (null !== $this->deliveryAddress) {
            $res['DeliveryAddress'] = $this->deliveryAddress;
        }
        if (null !== $this->deliveryInfo) {
            $res['DeliveryInfo'] = $this->deliveryInfo;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->orderExpireTime) {
            $res['OrderExpireTime'] = $this->orderExpireTime;
        }
        if (null !== $this->orderItems) {
            $res['OrderItems'] = $this->orderItems;
        }
        if (null !== $this->outDiscountInfos) {
            $res['OutDiscountInfos'] = $this->outDiscountInfos;
        }
        if (null !== $this->outTradeId) {
            $res['OutTradeId'] = $this->outTradeId;
        }
        if (null !== $this->tbAccountType) {
            $res['TbAccountType'] = $this->tbAccountType;
        }
        if (null !== $this->tbUserId) {
            $res['TbUserId'] = $this->tbUserId;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOutDiscountOrderWithDesignatedTbUidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BuyerMessages'])) {
            $model->buyerMessages = $map['BuyerMessages'];
        }
        if (isset($map['DeliveryAddress'])) {
            $model->deliveryAddress = $map['DeliveryAddress'];
        }
        if (isset($map['DeliveryInfo'])) {
            $model->deliveryInfo = $map['DeliveryInfo'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['OrderExpireTime'])) {
            $model->orderExpireTime = $map['OrderExpireTime'];
        }
        if (isset($map['OrderItems'])) {
            $model->orderItems = $map['OrderItems'];
        }
        if (isset($map['OutDiscountInfos'])) {
            $model->outDiscountInfos = $map['OutDiscountInfos'];
        }
        if (isset($map['OutTradeId'])) {
            $model->outTradeId = $map['OutTradeId'];
        }
        if (isset($map['TbAccountType'])) {
            $model->tbAccountType = $map['TbAccountType'];
        }
        if (isset($map['TbUserId'])) {
            $model->tbUserId = $map['TbUserId'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }

        return $model;
    }
}

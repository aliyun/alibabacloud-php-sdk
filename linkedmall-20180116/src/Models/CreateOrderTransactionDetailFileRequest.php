<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderTransactionDetailFileRequest extends Model
{
    /**
     * @example LMALL20211102****
     *
     * @var string
     */
    public $bizId;

    /**
     * @example click_page
     *
     * @var string
     */
    public $bizName;

    /**
     * @example tcp_v
     *
     * @var string
     */
    public $channelName;

    /**
     * @example 2021-12-31 14:03:28
     *
     * @var string
     */
    public $createEndTime;

    /**
     * @example 2021-02-26 04:55:31
     *
     * @var string
     */
    public $createStartTime;

    /**
     * @example 655******148
     *
     * @var string
     */
    public $itemId;

    /**
     * @example 10026953
     *
     * @var string
     */
    public $lmShopId;

    /**
     * @example 6
     *
     * @var string
     */
    public $orderStatus;

    /**
     * @example 2
     *
     * @var string
     */
    public $payStatus;

    /**
     * @example 2021-12-31 14:03:28
     *
     * @var string
     */
    public $paymentEndTime;

    /**
     * @example 2021-12-31 14:03:28
     *
     * @var string
     */
    public $paymentStartTime;

    /**
     * @var string
     */
    public $poCode;

    /**
     * @example 2021-12-31 14:05:21
     *
     * @var string
     */
    public $refundEndTime;

    /**
     * @example 2021-12-31 14:03:28
     *
     * @var string
     */
    public $refundStartTime;

    /**
     * @example 220680193****
     *
     * @var string
     */
    public $sellerId;

    /**
     * @var string
     */
    public $sellerName;

    /**
     * @var string
     */
    public $settlementNode;

    /**
     * @example hyq-1
     *
     * @var string
     */
    public $shopName;

    /**
     * @example 201312321321312
     *
     * @var string
     */
    public $tbMainOrderId;

    /**
     * @example 18******263
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example NYBQJYWZ
     *
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'bizId'            => 'BizId',
        'bizName'          => 'BizName',
        'channelName'      => 'ChannelName',
        'createEndTime'    => 'CreateEndTime',
        'createStartTime'  => 'CreateStartTime',
        'itemId'           => 'ItemId',
        'lmShopId'         => 'LmShopId',
        'orderStatus'      => 'OrderStatus',
        'payStatus'        => 'PayStatus',
        'paymentEndTime'   => 'PaymentEndTime',
        'paymentStartTime' => 'PaymentStartTime',
        'poCode'           => 'PoCode',
        'refundEndTime'    => 'RefundEndTime',
        'refundStartTime'  => 'RefundStartTime',
        'sellerId'         => 'SellerId',
        'sellerName'       => 'SellerName',
        'settlementNode'   => 'SettlementNode',
        'shopName'         => 'ShopName',
        'tbMainOrderId'    => 'TbMainOrderId',
        'tenantId'         => 'TenantId',
        'tenantName'       => 'TenantName',
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
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->createEndTime) {
            $res['CreateEndTime'] = $this->createEndTime;
        }
        if (null !== $this->createStartTime) {
            $res['CreateStartTime'] = $this->createStartTime;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmShopId) {
            $res['LmShopId'] = $this->lmShopId;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->payStatus) {
            $res['PayStatus'] = $this->payStatus;
        }
        if (null !== $this->paymentEndTime) {
            $res['PaymentEndTime'] = $this->paymentEndTime;
        }
        if (null !== $this->paymentStartTime) {
            $res['PaymentStartTime'] = $this->paymentStartTime;
        }
        if (null !== $this->poCode) {
            $res['PoCode'] = $this->poCode;
        }
        if (null !== $this->refundEndTime) {
            $res['RefundEndTime'] = $this->refundEndTime;
        }
        if (null !== $this->refundStartTime) {
            $res['RefundStartTime'] = $this->refundStartTime;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->sellerName) {
            $res['SellerName'] = $this->sellerName;
        }
        if (null !== $this->settlementNode) {
            $res['SettlementNode'] = $this->settlementNode;
        }
        if (null !== $this->shopName) {
            $res['ShopName'] = $this->shopName;
        }
        if (null !== $this->tbMainOrderId) {
            $res['TbMainOrderId'] = $this->tbMainOrderId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderTransactionDetailFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['CreateEndTime'])) {
            $model->createEndTime = $map['CreateEndTime'];
        }
        if (isset($map['CreateStartTime'])) {
            $model->createStartTime = $map['CreateStartTime'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmShopId'])) {
            $model->lmShopId = $map['LmShopId'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['PayStatus'])) {
            $model->payStatus = $map['PayStatus'];
        }
        if (isset($map['PaymentEndTime'])) {
            $model->paymentEndTime = $map['PaymentEndTime'];
        }
        if (isset($map['PaymentStartTime'])) {
            $model->paymentStartTime = $map['PaymentStartTime'];
        }
        if (isset($map['PoCode'])) {
            $model->poCode = $map['PoCode'];
        }
        if (isset($map['RefundEndTime'])) {
            $model->refundEndTime = $map['RefundEndTime'];
        }
        if (isset($map['RefundStartTime'])) {
            $model->refundStartTime = $map['RefundStartTime'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['SellerName'])) {
            $model->sellerName = $map['SellerName'];
        }
        if (isset($map['SettlementNode'])) {
            $model->settlementNode = $map['SettlementNode'];
        }
        if (isset($map['ShopName'])) {
            $model->shopName = $map['ShopName'];
        }
        if (isset($map['TbMainOrderId'])) {
            $model->tbMainOrderId = $map['TbMainOrderId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        return $model;
    }
}

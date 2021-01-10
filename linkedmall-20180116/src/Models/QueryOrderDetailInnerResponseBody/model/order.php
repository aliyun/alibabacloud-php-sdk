<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\fundStructureModels;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\postFee;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\subItemOrderList;
use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @var postFee
     */
    public $postFee;

    /**
     * @var bool
     */
    public $eticket;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $logisticsCompName;

    /**
     * @var string
     */
    public $channelCode;

    /**
     * @var string
     */
    public $logisticsMobilePhone;

    /**
     * @var string
     */
    public $resExtInfo;

    /**
     * @var int
     */
    public $enableStatus;

    /**
     * @var string
     */
    public $channelBizType;

    /**
     * @var string
     */
    public $shipping;

    /**
     * @var string
     */
    public $orderPayInfo;

    /**
     * @var string
     */
    public $logisticsStatusDesc;

    /**
     * @var string
     */
    public $tbOrderId;

    /**
     * @var fundStructureModels
     */
    public $fundStructureModels;

    /**
     * @var int
     */
    public $logisticsStatus;

    /**
     * @var int
     */
    public $lmOrderId;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var int
     */
    public $orderAmount;

    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @var string
     */
    public $logisticsNo;

    /**
     * @var subItemOrderList
     */
    public $subItemOrderList;

    /**
     * @var string
     */
    public $logisticsUserName;

    /**
     * @var string
     */
    public $logisticsAddress;

    /**
     * @var int
     */
    public $payWaterStatus;

    /**
     * @var int
     */
    public $refundStatus;

    /**
     * @var string
     */
    public $sellerNick;

    /**
     * @var string
     */
    public $channelOrderId;
    protected $_name = [
        'postFee'              => 'PostFee',
        'eticket'              => 'Eticket',
        'createDate'           => 'CreateDate',
        'logisticsCompName'    => 'LogisticsCompName',
        'channelCode'          => 'ChannelCode',
        'logisticsMobilePhone' => 'LogisticsMobilePhone',
        'resExtInfo'           => 'ResExtInfo',
        'enableStatus'         => 'EnableStatus',
        'channelBizType'       => 'ChannelBizType',
        'shipping'             => 'Shipping',
        'orderPayInfo'         => 'OrderPayInfo',
        'logisticsStatusDesc'  => 'LogisticsStatusDesc',
        'tbOrderId'            => 'TbOrderId',
        'fundStructureModels'  => 'FundStructureModels',
        'logisticsStatus'      => 'LogisticsStatus',
        'lmOrderId'            => 'LmOrderId',
        'shopName'             => 'ShopName',
        'sellerId'             => 'SellerId',
        'orderAmount'          => 'OrderAmount',
        'extInfo'              => 'ExtInfo',
        'endTime'              => 'EndTime',
        'payStatus'            => 'PayStatus',
        'logisticsNo'          => 'LogisticsNo',
        'subItemOrderList'     => 'SubItemOrderList',
        'logisticsUserName'    => 'LogisticsUserName',
        'logisticsAddress'     => 'LogisticsAddress',
        'payWaterStatus'       => 'PayWaterStatus',
        'refundStatus'         => 'RefundStatus',
        'sellerNick'           => 'SellerNick',
        'channelOrderId'       => 'ChannelOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postFee) {
            $res['PostFee'] = null !== $this->postFee ? $this->postFee->toMap() : null;
        }
        if (null !== $this->eticket) {
            $res['Eticket'] = $this->eticket;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->logisticsCompName) {
            $res['LogisticsCompName'] = $this->logisticsCompName;
        }
        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }
        if (null !== $this->logisticsMobilePhone) {
            $res['LogisticsMobilePhone'] = $this->logisticsMobilePhone;
        }
        if (null !== $this->resExtInfo) {
            $res['ResExtInfo'] = $this->resExtInfo;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->channelBizType) {
            $res['ChannelBizType'] = $this->channelBizType;
        }
        if (null !== $this->shipping) {
            $res['Shipping'] = $this->shipping;
        }
        if (null !== $this->orderPayInfo) {
            $res['OrderPayInfo'] = $this->orderPayInfo;
        }
        if (null !== $this->logisticsStatusDesc) {
            $res['LogisticsStatusDesc'] = $this->logisticsStatusDesc;
        }
        if (null !== $this->tbOrderId) {
            $res['TbOrderId'] = $this->tbOrderId;
        }
        if (null !== $this->fundStructureModels) {
            $res['FundStructureModels'] = null !== $this->fundStructureModels ? $this->fundStructureModels->toMap() : null;
        }
        if (null !== $this->logisticsStatus) {
            $res['LogisticsStatus'] = $this->logisticsStatus;
        }
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->shopName) {
            $res['ShopName'] = $this->shopName;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->orderAmount) {
            $res['OrderAmount'] = $this->orderAmount;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->payStatus) {
            $res['PayStatus'] = $this->payStatus;
        }
        if (null !== $this->logisticsNo) {
            $res['LogisticsNo'] = $this->logisticsNo;
        }
        if (null !== $this->subItemOrderList) {
            $res['SubItemOrderList'] = null !== $this->subItemOrderList ? $this->subItemOrderList->toMap() : null;
        }
        if (null !== $this->logisticsUserName) {
            $res['LogisticsUserName'] = $this->logisticsUserName;
        }
        if (null !== $this->logisticsAddress) {
            $res['LogisticsAddress'] = $this->logisticsAddress;
        }
        if (null !== $this->payWaterStatus) {
            $res['PayWaterStatus'] = $this->payWaterStatus;
        }
        if (null !== $this->refundStatus) {
            $res['RefundStatus'] = $this->refundStatus;
        }
        if (null !== $this->sellerNick) {
            $res['SellerNick'] = $this->sellerNick;
        }
        if (null !== $this->channelOrderId) {
            $res['ChannelOrderId'] = $this->channelOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return order
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PostFee'])) {
            $model->postFee = postFee::fromMap($map['PostFee']);
        }
        if (isset($map['Eticket'])) {
            $model->eticket = $map['Eticket'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['LogisticsCompName'])) {
            $model->logisticsCompName = $map['LogisticsCompName'];
        }
        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }
        if (isset($map['LogisticsMobilePhone'])) {
            $model->logisticsMobilePhone = $map['LogisticsMobilePhone'];
        }
        if (isset($map['ResExtInfo'])) {
            $model->resExtInfo = $map['ResExtInfo'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['ChannelBizType'])) {
            $model->channelBizType = $map['ChannelBizType'];
        }
        if (isset($map['Shipping'])) {
            $model->shipping = $map['Shipping'];
        }
        if (isset($map['OrderPayInfo'])) {
            $model->orderPayInfo = $map['OrderPayInfo'];
        }
        if (isset($map['LogisticsStatusDesc'])) {
            $model->logisticsStatusDesc = $map['LogisticsStatusDesc'];
        }
        if (isset($map['TbOrderId'])) {
            $model->tbOrderId = $map['TbOrderId'];
        }
        if (isset($map['FundStructureModels'])) {
            $model->fundStructureModels = fundStructureModels::fromMap($map['FundStructureModels']);
        }
        if (isset($map['LogisticsStatus'])) {
            $model->logisticsStatus = $map['LogisticsStatus'];
        }
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['ShopName'])) {
            $model->shopName = $map['ShopName'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['OrderAmount'])) {
            $model->orderAmount = $map['OrderAmount'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PayStatus'])) {
            $model->payStatus = $map['PayStatus'];
        }
        if (isset($map['LogisticsNo'])) {
            $model->logisticsNo = $map['LogisticsNo'];
        }
        if (isset($map['SubItemOrderList'])) {
            $model->subItemOrderList = subItemOrderList::fromMap($map['SubItemOrderList']);
        }
        if (isset($map['LogisticsUserName'])) {
            $model->logisticsUserName = $map['LogisticsUserName'];
        }
        if (isset($map['LogisticsAddress'])) {
            $model->logisticsAddress = $map['LogisticsAddress'];
        }
        if (isset($map['PayWaterStatus'])) {
            $model->payWaterStatus = $map['PayWaterStatus'];
        }
        if (isset($map['RefundStatus'])) {
            $model->refundStatus = $map['RefundStatus'];
        }
        if (isset($map['SellerNick'])) {
            $model->sellerNick = $map['SellerNick'];
        }
        if (isset($map['ChannelOrderId'])) {
            $model->channelOrderId = $map['ChannelOrderId'];
        }

        return $model;
    }
}

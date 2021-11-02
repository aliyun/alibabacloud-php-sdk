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
     * @var string
     */
    public $channelBizType;

    /**
     * @var string
     */
    public $channelCode;

    /**
     * @var string
     */
    public $channelOrderId;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var int
     */
    public $enableStatus;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var bool
     */
    public $eticket;

    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @var fundStructureModels
     */
    public $fundStructureModels;

    /**
     * @var int
     */
    public $lmOrderId;

    /**
     * @var string
     */
    public $logisticsAddress;

    /**
     * @var string
     */
    public $logisticsCompName;

    /**
     * @var string
     */
    public $logisticsMobilePhone;

    /**
     * @var string
     */
    public $logisticsNo;

    /**
     * @var int
     */
    public $logisticsStatus;

    /**
     * @var string
     */
    public $logisticsStatusDesc;

    /**
     * @var string
     */
    public $logisticsUserName;

    /**
     * @var int
     */
    public $orderAmount;

    /**
     * @var string
     */
    public $orderPayInfo;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @var int
     */
    public $payWaterStatus;

    /**
     * @var postFee
     */
    public $postFee;

    /**
     * @var int
     */
    public $refundStatus;

    /**
     * @var string
     */
    public $resExtInfo;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var string
     */
    public $sellerNick;

    /**
     * @var string
     */
    public $shipping;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @var subItemOrderList
     */
    public $subItemOrderList;

    /**
     * @var string
     */
    public $tbOrderId;
    protected $_name = [
        'channelBizType'       => 'ChannelBizType',
        'channelCode'          => 'ChannelCode',
        'channelOrderId'       => 'ChannelOrderId',
        'createDate'           => 'CreateDate',
        'enableStatus'         => 'EnableStatus',
        'endTime'              => 'EndTime',
        'eticket'              => 'Eticket',
        'extInfo'              => 'ExtInfo',
        'fundStructureModels'  => 'FundStructureModels',
        'lmOrderId'            => 'LmOrderId',
        'logisticsAddress'     => 'LogisticsAddress',
        'logisticsCompName'    => 'LogisticsCompName',
        'logisticsMobilePhone' => 'LogisticsMobilePhone',
        'logisticsNo'          => 'LogisticsNo',
        'logisticsStatus'      => 'LogisticsStatus',
        'logisticsStatusDesc'  => 'LogisticsStatusDesc',
        'logisticsUserName'    => 'LogisticsUserName',
        'orderAmount'          => 'OrderAmount',
        'orderPayInfo'         => 'OrderPayInfo',
        'payStatus'            => 'PayStatus',
        'payWaterStatus'       => 'PayWaterStatus',
        'postFee'              => 'PostFee',
        'refundStatus'         => 'RefundStatus',
        'resExtInfo'           => 'ResExtInfo',
        'sellerId'             => 'SellerId',
        'sellerNick'           => 'SellerNick',
        'shipping'             => 'Shipping',
        'shopName'             => 'ShopName',
        'subItemOrderList'     => 'SubItemOrderList',
        'tbOrderId'            => 'TbOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelBizType) {
            $res['ChannelBizType'] = $this->channelBizType;
        }
        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }
        if (null !== $this->channelOrderId) {
            $res['ChannelOrderId'] = $this->channelOrderId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eticket) {
            $res['Eticket'] = $this->eticket;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->fundStructureModels) {
            $res['FundStructureModels'] = null !== $this->fundStructureModels ? $this->fundStructureModels->toMap() : null;
        }
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->logisticsAddress) {
            $res['LogisticsAddress'] = $this->logisticsAddress;
        }
        if (null !== $this->logisticsCompName) {
            $res['LogisticsCompName'] = $this->logisticsCompName;
        }
        if (null !== $this->logisticsMobilePhone) {
            $res['LogisticsMobilePhone'] = $this->logisticsMobilePhone;
        }
        if (null !== $this->logisticsNo) {
            $res['LogisticsNo'] = $this->logisticsNo;
        }
        if (null !== $this->logisticsStatus) {
            $res['LogisticsStatus'] = $this->logisticsStatus;
        }
        if (null !== $this->logisticsStatusDesc) {
            $res['LogisticsStatusDesc'] = $this->logisticsStatusDesc;
        }
        if (null !== $this->logisticsUserName) {
            $res['LogisticsUserName'] = $this->logisticsUserName;
        }
        if (null !== $this->orderAmount) {
            $res['OrderAmount'] = $this->orderAmount;
        }
        if (null !== $this->orderPayInfo) {
            $res['OrderPayInfo'] = $this->orderPayInfo;
        }
        if (null !== $this->payStatus) {
            $res['PayStatus'] = $this->payStatus;
        }
        if (null !== $this->payWaterStatus) {
            $res['PayWaterStatus'] = $this->payWaterStatus;
        }
        if (null !== $this->postFee) {
            $res['PostFee'] = null !== $this->postFee ? $this->postFee->toMap() : null;
        }
        if (null !== $this->refundStatus) {
            $res['RefundStatus'] = $this->refundStatus;
        }
        if (null !== $this->resExtInfo) {
            $res['ResExtInfo'] = $this->resExtInfo;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->sellerNick) {
            $res['SellerNick'] = $this->sellerNick;
        }
        if (null !== $this->shipping) {
            $res['Shipping'] = $this->shipping;
        }
        if (null !== $this->shopName) {
            $res['ShopName'] = $this->shopName;
        }
        if (null !== $this->subItemOrderList) {
            $res['SubItemOrderList'] = null !== $this->subItemOrderList ? $this->subItemOrderList->toMap() : null;
        }
        if (null !== $this->tbOrderId) {
            $res['TbOrderId'] = $this->tbOrderId;
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
        if (isset($map['ChannelBizType'])) {
            $model->channelBizType = $map['ChannelBizType'];
        }
        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }
        if (isset($map['ChannelOrderId'])) {
            $model->channelOrderId = $map['ChannelOrderId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Eticket'])) {
            $model->eticket = $map['Eticket'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['FundStructureModels'])) {
            $model->fundStructureModels = fundStructureModels::fromMap($map['FundStructureModels']);
        }
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['LogisticsAddress'])) {
            $model->logisticsAddress = $map['LogisticsAddress'];
        }
        if (isset($map['LogisticsCompName'])) {
            $model->logisticsCompName = $map['LogisticsCompName'];
        }
        if (isset($map['LogisticsMobilePhone'])) {
            $model->logisticsMobilePhone = $map['LogisticsMobilePhone'];
        }
        if (isset($map['LogisticsNo'])) {
            $model->logisticsNo = $map['LogisticsNo'];
        }
        if (isset($map['LogisticsStatus'])) {
            $model->logisticsStatus = $map['LogisticsStatus'];
        }
        if (isset($map['LogisticsStatusDesc'])) {
            $model->logisticsStatusDesc = $map['LogisticsStatusDesc'];
        }
        if (isset($map['LogisticsUserName'])) {
            $model->logisticsUserName = $map['LogisticsUserName'];
        }
        if (isset($map['OrderAmount'])) {
            $model->orderAmount = $map['OrderAmount'];
        }
        if (isset($map['OrderPayInfo'])) {
            $model->orderPayInfo = $map['OrderPayInfo'];
        }
        if (isset($map['PayStatus'])) {
            $model->payStatus = $map['PayStatus'];
        }
        if (isset($map['PayWaterStatus'])) {
            $model->payWaterStatus = $map['PayWaterStatus'];
        }
        if (isset($map['PostFee'])) {
            $model->postFee = postFee::fromMap($map['PostFee']);
        }
        if (isset($map['RefundStatus'])) {
            $model->refundStatus = $map['RefundStatus'];
        }
        if (isset($map['ResExtInfo'])) {
            $model->resExtInfo = $map['ResExtInfo'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['SellerNick'])) {
            $model->sellerNick = $map['SellerNick'];
        }
        if (isset($map['Shipping'])) {
            $model->shipping = $map['Shipping'];
        }
        if (isset($map['ShopName'])) {
            $model->shopName = $map['ShopName'];
        }
        if (isset($map['SubItemOrderList'])) {
            $model->subItemOrderList = subItemOrderList::fromMap($map['SubItemOrderList']);
        }
        if (isset($map['TbOrderId'])) {
            $model->tbOrderId = $map['TbOrderId'];
        }

        return $model;
    }
}

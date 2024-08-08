<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\BatchSaveOrderPopRequest;

use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\BatchSaveOrderPopRequest\orders\subOrderModelList;
use AlibabaCloud\Tea\Model;

class orders extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example doudian
     *
     * @var string
     */
    public $channelCode;

    /**
     * @description This parameter is required.
     *
     * @example 1699b2b974d444e3aa489f96457ef204
     *
     * @var string
     */
    public $channelOpenId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $feature;

    /**
     * @description This parameter is required.
     *
     * @example testOpenMerchantId
     *
     * @var string
     */
    public $openMerchantId;

    /**
     * @description This parameter is required.
     *
     * @example testOpenOrderId
     *
     * @var string
     */
    public $openOrderId;

    /**
     * @description This parameter is required.
     *
     * @example 2023-12-20 12:12:12
     *
     * @var string
     */
    public $orderCreateTime;

    /**
     * @description This parameter is required.
     *
     * @example 10000
     *
     * @var string
     */
    public $orderPayment;

    /**
     * @var string
     */
    public $payTime;

    /**
     * @description This parameter is required.
     *
     * @example DOUDIAN
     *
     * @var string
     */
    public $platformType;

    /**
     * @description This parameter is required.
     *
     * @example testShopId
     *
     * @var string
     */
    public $shopId;

    /**
     * @description This parameter is required.
     *
     * @example TRADE_FINISHED
     *
     * @var string
     */
    public $status;

    /**
     * @description This parameter is required.
     *
     * @var subOrderModelList[]
     */
    public $subOrderModelList;

    /**
     * @description This parameter is required.
     *
     * @example 10000
     *
     * @var string
     */
    public $totalFee;

    /**
     * @var string
     */
    public $buyerOpenUid;
    protected $_name = [
        'channelCode'       => 'ChannelCode',
        'channelOpenId'     => 'ChannelOpenId',
        'endTime'           => 'EndTime',
        'feature'           => 'Feature',
        'openMerchantId'    => 'OpenMerchantId',
        'openOrderId'       => 'OpenOrderId',
        'orderCreateTime'   => 'OrderCreateTime',
        'orderPayment'      => 'OrderPayment',
        'payTime'           => 'PayTime',
        'platformType'      => 'PlatformType',
        'shopId'            => 'ShopId',
        'status'            => 'Status',
        'subOrderModelList' => 'SubOrderModelList',
        'totalFee'          => 'TotalFee',
        'buyerOpenUid'      => 'buyerOpenUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }
        if (null !== $this->channelOpenId) {
            $res['ChannelOpenId'] = $this->channelOpenId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->openMerchantId) {
            $res['OpenMerchantId'] = $this->openMerchantId;
        }
        if (null !== $this->openOrderId) {
            $res['OpenOrderId'] = $this->openOrderId;
        }
        if (null !== $this->orderCreateTime) {
            $res['OrderCreateTime'] = $this->orderCreateTime;
        }
        if (null !== $this->orderPayment) {
            $res['OrderPayment'] = $this->orderPayment;
        }
        if (null !== $this->payTime) {
            $res['PayTime'] = $this->payTime;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->shopId) {
            $res['ShopId'] = $this->shopId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subOrderModelList) {
            $res['SubOrderModelList'] = [];
            if (null !== $this->subOrderModelList && \is_array($this->subOrderModelList)) {
                $n = 0;
                foreach ($this->subOrderModelList as $item) {
                    $res['SubOrderModelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalFee) {
            $res['TotalFee'] = $this->totalFee;
        }
        if (null !== $this->buyerOpenUid) {
            $res['buyerOpenUid'] = $this->buyerOpenUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }
        if (isset($map['ChannelOpenId'])) {
            $model->channelOpenId = $map['ChannelOpenId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['OpenMerchantId'])) {
            $model->openMerchantId = $map['OpenMerchantId'];
        }
        if (isset($map['OpenOrderId'])) {
            $model->openOrderId = $map['OpenOrderId'];
        }
        if (isset($map['OrderCreateTime'])) {
            $model->orderCreateTime = $map['OrderCreateTime'];
        }
        if (isset($map['OrderPayment'])) {
            $model->orderPayment = $map['OrderPayment'];
        }
        if (isset($map['PayTime'])) {
            $model->payTime = $map['PayTime'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['ShopId'])) {
            $model->shopId = $map['ShopId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubOrderModelList'])) {
            if (!empty($map['SubOrderModelList'])) {
                $model->subOrderModelList = [];
                $n                        = 0;
                foreach ($map['SubOrderModelList'] as $item) {
                    $model->subOrderModelList[$n++] = null !== $item ? subOrderModelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalFee'])) {
            $model->totalFee = $map['TotalFee'];
        }
        if (isset($map['buyerOpenUid'])) {
            $model->buyerOpenUid = $map['buyerOpenUid'];
        }

        return $model;
    }
}

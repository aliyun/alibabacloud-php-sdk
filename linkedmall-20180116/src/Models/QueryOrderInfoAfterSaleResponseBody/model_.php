<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderInfoAfterSaleResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderInfoAfterSaleResponseBody\model\logisticsList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $cashAmount;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $extJson;

    /**
     * @var int
     */
    public $lmOrderId;

    /**
     * @var logisticsList
     */
    public $logisticsList;

    /**
     * @var string
     */
    public $orderStatus;

    /**
     * @var int
     */
    public $points;

    /**
     * @var int
     */
    public $pointsAmount;

    /**
     * @var int
     */
    public $refundAmount;

    /**
     * @var int
     */
    public $refundPoints;

    /**
     * @var string
     */
    public $refundRate;

    /**
     * @var string
     */
    public $refundStatus;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @var string
     */
    public $shopServiceTelephone;

    /**
     * @var int
     */
    public $tbOrderId;

    /**
     * @var string
     */
    public $xiaomiCode;
    protected $_name = [
        'cashAmount'           => 'CashAmount',
        'createDate'           => 'CreateDate',
        'extJson'              => 'ExtJson',
        'lmOrderId'            => 'LmOrderId',
        'logisticsList'        => 'LogisticsList',
        'orderStatus'          => 'OrderStatus',
        'points'               => 'Points',
        'pointsAmount'         => 'PointsAmount',
        'refundAmount'         => 'RefundAmount',
        'refundPoints'         => 'RefundPoints',
        'refundRate'           => 'RefundRate',
        'refundStatus'         => 'RefundStatus',
        'shopName'             => 'ShopName',
        'shopServiceTelephone' => 'ShopServiceTelephone',
        'tbOrderId'            => 'TbOrderId',
        'xiaomiCode'           => 'XiaomiCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cashAmount) {
            $res['CashAmount'] = $this->cashAmount;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->logisticsList) {
            $res['LogisticsList'] = null !== $this->logisticsList ? $this->logisticsList->toMap() : null;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->refundAmount) {
            $res['RefundAmount'] = $this->refundAmount;
        }
        if (null !== $this->refundPoints) {
            $res['RefundPoints'] = $this->refundPoints;
        }
        if (null !== $this->refundRate) {
            $res['RefundRate'] = $this->refundRate;
        }
        if (null !== $this->refundStatus) {
            $res['RefundStatus'] = $this->refundStatus;
        }
        if (null !== $this->shopName) {
            $res['ShopName'] = $this->shopName;
        }
        if (null !== $this->shopServiceTelephone) {
            $res['ShopServiceTelephone'] = $this->shopServiceTelephone;
        }
        if (null !== $this->tbOrderId) {
            $res['TbOrderId'] = $this->tbOrderId;
        }
        if (null !== $this->xiaomiCode) {
            $res['XiaomiCode'] = $this->xiaomiCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CashAmount'])) {
            $model->cashAmount = $map['CashAmount'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['LogisticsList'])) {
            $model->logisticsList = logisticsList::fromMap($map['LogisticsList']);
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['RefundAmount'])) {
            $model->refundAmount = $map['RefundAmount'];
        }
        if (isset($map['RefundPoints'])) {
            $model->refundPoints = $map['RefundPoints'];
        }
        if (isset($map['RefundRate'])) {
            $model->refundRate = $map['RefundRate'];
        }
        if (isset($map['RefundStatus'])) {
            $model->refundStatus = $map['RefundStatus'];
        }
        if (isset($map['ShopName'])) {
            $model->shopName = $map['ShopName'];
        }
        if (isset($map['ShopServiceTelephone'])) {
            $model->shopServiceTelephone = $map['ShopServiceTelephone'];
        }
        if (isset($map['TbOrderId'])) {
            $model->tbOrderId = $map['TbOrderId'];
        }
        if (isset($map['XiaomiCode'])) {
            $model->xiaomiCode = $map['XiaomiCode'];
        }

        return $model;
    }
}

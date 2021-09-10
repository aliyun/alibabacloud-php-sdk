<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderInfoAfterSaleResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderInfoAfterSaleResponseBody\model\logisticsList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var int
     */
    public $lmOrderId;

    /**
     * @var string
     */
    public $shopServiceTelephone;

    /**
     * @var int
     */
    public $refundAmount;

    /**
     * @var string
     */
    public $xiaomiCode;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $refundRate;

    /**
     * @var string
     */
    public $extJson;

    /**
     * @var string
     */
    public $orderStatus;

    /**
     * @var int
     */
    public $refundPoints;

    /**
     * @var int
     */
    public $tbOrderId;

    /**
     * @var int
     */
    public $points;

    /**
     * @var string
     */
    public $refundStatus;

    /**
     * @var int
     */
    public $pointsAmount;

    /**
     * @var string
     */
    public $cashAmount;

    /**
     * @var logisticsList
     */
    public $logisticsList;
    protected $_name = [
        'lmOrderId'            => 'LmOrderId',
        'shopServiceTelephone' => 'ShopServiceTelephone',
        'refundAmount'         => 'RefundAmount',
        'xiaomiCode'           => 'XiaomiCode',
        'shopName'             => 'ShopName',
        'createDate'           => 'CreateDate',
        'refundRate'           => 'RefundRate',
        'extJson'              => 'ExtJson',
        'orderStatus'          => 'OrderStatus',
        'refundPoints'         => 'RefundPoints',
        'tbOrderId'            => 'TbOrderId',
        'points'               => 'Points',
        'refundStatus'         => 'RefundStatus',
        'pointsAmount'         => 'PointsAmount',
        'cashAmount'           => 'CashAmount',
        'logisticsList'        => 'LogisticsList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->shopServiceTelephone) {
            $res['ShopServiceTelephone'] = $this->shopServiceTelephone;
        }
        if (null !== $this->refundAmount) {
            $res['RefundAmount'] = $this->refundAmount;
        }
        if (null !== $this->xiaomiCode) {
            $res['XiaomiCode'] = $this->xiaomiCode;
        }
        if (null !== $this->shopName) {
            $res['ShopName'] = $this->shopName;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->refundRate) {
            $res['RefundRate'] = $this->refundRate;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->refundPoints) {
            $res['RefundPoints'] = $this->refundPoints;
        }
        if (null !== $this->tbOrderId) {
            $res['TbOrderId'] = $this->tbOrderId;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->refundStatus) {
            $res['RefundStatus'] = $this->refundStatus;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->cashAmount) {
            $res['CashAmount'] = $this->cashAmount;
        }
        if (null !== $this->logisticsList) {
            $res['LogisticsList'] = null !== $this->logisticsList ? $this->logisticsList->toMap() : null;
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
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['ShopServiceTelephone'])) {
            $model->shopServiceTelephone = $map['ShopServiceTelephone'];
        }
        if (isset($map['RefundAmount'])) {
            $model->refundAmount = $map['RefundAmount'];
        }
        if (isset($map['XiaomiCode'])) {
            $model->xiaomiCode = $map['XiaomiCode'];
        }
        if (isset($map['ShopName'])) {
            $model->shopName = $map['ShopName'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['RefundRate'])) {
            $model->refundRate = $map['RefundRate'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['RefundPoints'])) {
            $model->refundPoints = $map['RefundPoints'];
        }
        if (isset($map['TbOrderId'])) {
            $model->tbOrderId = $map['TbOrderId'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['RefundStatus'])) {
            $model->refundStatus = $map['RefundStatus'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['CashAmount'])) {
            $model->cashAmount = $map['CashAmount'];
        }
        if (isset($map['LogisticsList'])) {
            $model->logisticsList = logisticsList::fromMap($map['LogisticsList']);
        }

        return $model;
    }
}

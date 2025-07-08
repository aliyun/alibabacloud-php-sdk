<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageNewResponseBody\list_;

use AlibabaCloud\Dara\Model;

class smsPackageInfo extends Model
{
    /**
     * @var string
     */
    public $buyTime;

    /**
     * @var string
     */
    public $detailOrderId;

    /**
     * @var string
     */
    public $effTime;

    /**
     * @var string
     */
    public $expTime;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $packageName;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var float
     */
    public $payPrice;

    /**
     * @var int
     */
    public $pkgId;

    /**
     * @var int
     */
    public $refundStatus;

    /**
     * @var int
     */
    public $state;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $usage;
    protected $_name = [
        'buyTime' => 'BuyTime',
        'detailOrderId' => 'DetailOrderId',
        'effTime' => 'EffTime',
        'expTime' => 'ExpTime',
        'orderId' => 'OrderId',
        'packageName' => 'PackageName',
        'packageType' => 'PackageType',
        'payPrice' => 'PayPrice',
        'pkgId' => 'PkgId',
        'refundStatus' => 'RefundStatus',
        'state' => 'State',
        'total' => 'Total',
        'usage' => 'Usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buyTime) {
            $res['BuyTime'] = $this->buyTime;
        }

        if (null !== $this->detailOrderId) {
            $res['DetailOrderId'] = $this->detailOrderId;
        }

        if (null !== $this->effTime) {
            $res['EffTime'] = $this->effTime;
        }

        if (null !== $this->expTime) {
            $res['ExpTime'] = $this->expTime;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->payPrice) {
            $res['PayPrice'] = $this->payPrice;
        }

        if (null !== $this->pkgId) {
            $res['PkgId'] = $this->pkgId;
        }

        if (null !== $this->refundStatus) {
            $res['RefundStatus'] = $this->refundStatus;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
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
        if (isset($map['BuyTime'])) {
            $model->buyTime = $map['BuyTime'];
        }

        if (isset($map['DetailOrderId'])) {
            $model->detailOrderId = $map['DetailOrderId'];
        }

        if (isset($map['EffTime'])) {
            $model->effTime = $map['EffTime'];
        }

        if (isset($map['ExpTime'])) {
            $model->expTime = $map['ExpTime'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['PayPrice'])) {
            $model->payPrice = $map['PayPrice'];
        }

        if (isset($map['PkgId'])) {
            $model->pkgId = $map['PkgId'];
        }

        if (isset($map['RefundStatus'])) {
            $model->refundStatus = $map['RefundStatus'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}

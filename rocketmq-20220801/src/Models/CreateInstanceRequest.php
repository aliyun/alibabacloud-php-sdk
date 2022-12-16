<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\networkInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\productInfo;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @example enable
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example 3
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @example rmq-cn-72u3048uxxx
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var networkInfo
     */
    public $networkInfo;

    /**
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example 3
     *
     * @var int
     */
    public $period;

    /**
     * @example Year
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @var productInfo
     */
    public $productInfo;

    /**
     * @example This is the remark for test.
     *
     * @var string
     */
    public $remark;

    /**
     * @example rg-aekzy6pist7uuna
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example standard
     *
     * @var string
     */
    public $seriesCode;

    /**
     * @example rmq
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @example cluster_ha
     *
     * @var string
     */
    public $subSeriesCode;

    /**
     * @example c2c5d1274a8d4317a13bc5b0d4c888df
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'autoRenew'       => 'autoRenew',
        'autoRenewPeriod' => 'autoRenewPeriod',
        'instanceName'    => 'instanceName',
        'networkInfo'     => 'networkInfo',
        'paymentType'     => 'paymentType',
        'period'          => 'period',
        'periodUnit'      => 'periodUnit',
        'productInfo'     => 'productInfo',
        'remark'          => 'remark',
        'resourceGroupId' => 'resourceGroupId',
        'seriesCode'      => 'seriesCode',
        'serviceCode'     => 'serviceCode',
        'subSeriesCode'   => 'subSeriesCode',
        'clientToken'     => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['autoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['autoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }
        if (null !== $this->networkInfo) {
            $res['networkInfo'] = null !== $this->networkInfo ? $this->networkInfo->toMap() : null;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['periodUnit'] = $this->periodUnit;
        }
        if (null !== $this->productInfo) {
            $res['productInfo'] = null !== $this->productInfo ? $this->productInfo->toMap() : null;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->seriesCode) {
            $res['seriesCode'] = $this->seriesCode;
        }
        if (null !== $this->serviceCode) {
            $res['serviceCode'] = $this->serviceCode;
        }
        if (null !== $this->subSeriesCode) {
            $res['subSeriesCode'] = $this->subSeriesCode;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoRenew'])) {
            $model->autoRenew = $map['autoRenew'];
        }
        if (isset($map['autoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['autoRenewPeriod'];
        }
        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }
        if (isset($map['networkInfo'])) {
            $model->networkInfo = networkInfo::fromMap($map['networkInfo']);
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }
        if (isset($map['periodUnit'])) {
            $model->periodUnit = $map['periodUnit'];
        }
        if (isset($map['productInfo'])) {
            $model->productInfo = productInfo::fromMap($map['productInfo']);
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['seriesCode'])) {
            $model->seriesCode = $map['seriesCode'];
        }
        if (isset($map['serviceCode'])) {
            $model->serviceCode = $map['serviceCode'];
        }
        if (isset($map['subSeriesCode'])) {
            $model->subSeriesCode = $map['subSeriesCode'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}

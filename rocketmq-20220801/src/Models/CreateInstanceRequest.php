<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\networkInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\productInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\tags;

class CreateInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var networkInfo
     */
    public $networkInfo;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var productInfo
     */
    public $productInfo;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $seriesCode;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $subSeriesCode;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'autoRenew' => 'autoRenew',
        'autoRenewPeriod' => 'autoRenewPeriod',
        'commodityCode' => 'commodityCode',
        'instanceName' => 'instanceName',
        'networkInfo' => 'networkInfo',
        'paymentType' => 'paymentType',
        'period' => 'period',
        'periodUnit' => 'periodUnit',
        'productInfo' => 'productInfo',
        'remark' => 'remark',
        'resourceGroupId' => 'resourceGroupId',
        'seriesCode' => 'seriesCode',
        'serviceCode' => 'serviceCode',
        'subSeriesCode' => 'subSeriesCode',
        'tags' => 'tags',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (null !== $this->networkInfo) {
            $this->networkInfo->validate();
        }
        if (null !== $this->productInfo) {
            $this->productInfo->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['autoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoRenewPeriod) {
            $res['autoRenewPeriod'] = $this->autoRenewPeriod;
        }

        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->networkInfo) {
            $res['networkInfo'] = null !== $this->networkInfo ? $this->networkInfo->toArray($noStream) : $this->networkInfo;
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
            $res['productInfo'] = null !== $this->productInfo ? $this->productInfo->toArray($noStream) : $this->productInfo;
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['autoRenew'])) {
            $model->autoRenew = $map['autoRenew'];
        }

        if (isset($map['autoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['autoRenewPeriod'];
        }

        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
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

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}

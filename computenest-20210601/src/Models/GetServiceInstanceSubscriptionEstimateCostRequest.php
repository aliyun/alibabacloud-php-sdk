<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostRequest\resourcePeriod;

class GetServiceInstanceSubscriptionEstimateCostRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var resourcePeriod[]
     */
    public $resourcePeriod;

    /**
     * @var string
     */
    public $serviceInstanceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'orderType' => 'OrderType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'regionId' => 'RegionId',
        'resourcePeriod' => 'ResourcePeriod',
        'serviceInstanceId' => 'ServiceInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePeriod)) {
            Model::validateArray($this->resourcePeriod);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourcePeriod) {
            if (\is_array($this->resourcePeriod)) {
                $res['ResourcePeriod'] = [];
                $n1 = 0;
                foreach ($this->resourcePeriod as $item1) {
                    $res['ResourcePeriod'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourcePeriod'])) {
            if (!empty($map['ResourcePeriod'])) {
                $model->resourcePeriod = [];
                $n1 = 0;
                foreach ($map['ResourcePeriod'] as $item1) {
                    $model->resourcePeriod[$n1++] = resourcePeriod::fromMap($item1);
                }
            }
        }

        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }

        return $model;
    }
}

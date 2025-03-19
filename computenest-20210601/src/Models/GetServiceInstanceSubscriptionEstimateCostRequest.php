<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostRequest\resourcePeriod;
use AlibabaCloud\Tea\Model;

class GetServiceInstanceSubscriptionEstimateCostRequest extends Model
{
    /**
     * @description Ensures idempotence of the request. Generate a parameter value from your client to ensure its uniqueness across different requests. **ClientToken** supports only ASCII characters and cannot exceed 64 characters.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Order type. Possible value: Renewal.
     *
     * This parameter is required.
     *
     * @example Renewal
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The renewal duration for all prepaid resources of the service instance. The unit is specified by PeriodUnit.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The time unit for the renewal duration of all prepaid resources of the service instance, which is the unit of the Period parameter. Valid values: Month, Year. Default value: Month.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description Region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource renewal configuration.
     *
     * @var resourcePeriod[]
     */
    public $resourcePeriod;

    /**
     * @description Service instance ID.
     *
     * This parameter is required.
     *
     * @example si-d6ab3a63ccbb4b17****
     *
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

    public function validate() {}

    public function toMap()
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
            $res['ResourcePeriod'] = [];
            if (null !== $this->resourcePeriod && \is_array($this->resourcePeriod)) {
                $n = 0;
                foreach ($this->resourcePeriod as $item) {
                    $res['ResourcePeriod'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceInstanceSubscriptionEstimateCostRequest
     */
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
                $n = 0;
                foreach ($map['ResourcePeriod'] as $item) {
                    $model->resourcePeriod[$n++] = null !== $item ? resourcePeriod::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }

        return $model;
    }
}

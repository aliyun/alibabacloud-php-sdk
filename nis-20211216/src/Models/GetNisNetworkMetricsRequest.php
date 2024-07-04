<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\SDK\Nis\V20211216\Models\GetNisNetworkMetricsRequest\dimensions;
use AlibabaCloud\Tea\Model;

class GetNisNetworkMetricsRequest extends Model
{
    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @example 1638239092000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description This parameter is required.
     *
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @example 1684373700099
     *
     * @var int
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example bps
     *
     * @var string
     */
    public $metricName;

    /**
     * @description This parameter is required.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description This parameter is required.
     *
     * @example AccessInternetIPV4
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example TimestampAscending
     *
     * @var string
     */
    public $scanBy;

    /**
     * @example false
     *
     * @var bool
     */
    public $useCrossAccount;
    protected $_name = [
        'accountIds'      => 'AccountIds',
        'beginTime'       => 'BeginTime',
        'dimensions'      => 'Dimensions',
        'endTime'         => 'EndTime',
        'metricName'      => 'MetricName',
        'regionNo'        => 'RegionNo',
        'resourceType'    => 'ResourceType',
        'scanBy'          => 'ScanBy',
        'useCrossAccount' => 'UseCrossAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scanBy) {
            $res['ScanBy'] = $this->scanBy;
        }
        if (null !== $this->useCrossAccount) {
            $res['UseCrossAccount'] = $this->useCrossAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNisNetworkMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ScanBy'])) {
            $model->scanBy = $map['ScanBy'];
        }
        if (isset($map['UseCrossAccount'])) {
            $model->useCrossAccount = $map['UseCrossAccount'];
        }

        return $model;
    }
}

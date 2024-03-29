<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricListRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. **The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe63****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the data migration or synchronization task.
     *
     * @example k2gm967v16f****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The timestamp that indicates the end of the time range to query. Unit: milliseconds.
     *
     * @example 1642476194000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description Default value: **ALIYUN**.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $env;

    /**
     * @description *   **InternetOut**: the outbound traffic over the Internet. Unit: byte.
     *   **diskusage_utilization**: the disk usage.
     *   **IntranetInRate**: the inbound traffic over the internal network. Unit: byte.
     *   **InternetIn**: the inbound traffic from the Internet. Unit: byte.
     *   **cpu_total**: the CPU utilization.
     *   **memory_usedutilization**: the memory usage.
     *   **IntranetOutRate**: the outbound traffic over the internal network. Unit: byte.
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description Specifies whether to query the metrics of the cluster or a node. Valid values:
     *
     *   **CLUSTER**: query the metrics of the cluster.
     *   **NODE**: query the metrics of a node.
     *
     * @example NODE
     *
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $ownerID;

    /**
     * @description The monitored object. If the **MetricType** parameter is set to **NODE**, set this parameter to the ID of the node that is monitored.
     *
     * @example nodeid
     *
     * @var string
     */
    public $param;

    /**
     * @description The monitoring interval. Unit: seconds. Minimum value: 15.
     *
     * @example 15
     *
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The timestamp that indicates the beginning of the time range to query. Unit: milliseconds.
     *
     * @example 1642476144000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'accountId'       => 'AccountId',
        'clientToken'     => 'ClientToken',
        'dtsJobId'        => 'DtsJobId',
        'endTime'         => 'EndTime',
        'env'             => 'Env',
        'metricName'      => 'MetricName',
        'metricType'      => 'MetricType',
        'ownerID'         => 'OwnerID',
        'param'           => 'Param',
        'period'          => 'Period',
        'resourceGroupId' => 'ResourceGroupId',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

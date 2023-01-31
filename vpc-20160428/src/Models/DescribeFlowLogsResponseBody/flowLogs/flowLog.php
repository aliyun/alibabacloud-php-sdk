<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponseBody\flowLogs;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponseBody\flowLogs\flowLog\trafficPath;
use AlibabaCloud\Tea\Model;

class flowLog extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $aggregationInterval;

    /**
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @example 2022-01-21T03:08:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @example fl-bp1f6qqhsrc2c12ta****
     *
     * @var string
     */
    public $flowLogId;

    /**
     * @example myFlowlog
     *
     * @var string
     */
    public $flowLogName;

    /**
     * @example FlowLogStore
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @example FlowLogProject
     *
     * @var string
     */
    public $projectName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example eni-askldfas****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example NetworkInterface
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example sls
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @var trafficPath
     */
    public $trafficPath;

    /**
     * @example All
     *
     * @var string
     */
    public $trafficType;
    protected $_name = [
        'aggregationInterval' => 'AggregationInterval',
        'businessStatus'      => 'BusinessStatus',
        'creationTime'        => 'CreationTime',
        'description'         => 'Description',
        'flowLogId'           => 'FlowLogId',
        'flowLogName'         => 'FlowLogName',
        'logStoreName'        => 'LogStoreName',
        'projectName'         => 'ProjectName',
        'regionId'            => 'RegionId',
        'resourceId'          => 'ResourceId',
        'resourceType'        => 'ResourceType',
        'serviceType'         => 'ServiceType',
        'status'              => 'Status',
        'trafficPath'         => 'TrafficPath',
        'trafficType'         => 'TrafficType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregationInterval) {
            $res['AggregationInterval'] = $this->aggregationInterval;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
        }
        if (null !== $this->flowLogName) {
            $res['FlowLogName'] = $this->flowLogName;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trafficPath) {
            $res['TrafficPath'] = null !== $this->trafficPath ? $this->trafficPath->toMap() : null;
        }
        if (null !== $this->trafficType) {
            $res['TrafficType'] = $this->trafficType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregationInterval'])) {
            $model->aggregationInterval = $map['AggregationInterval'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FlowLogId'])) {
            $model->flowLogId = $map['FlowLogId'];
        }
        if (isset($map['FlowLogName'])) {
            $model->flowLogName = $map['FlowLogName'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TrafficPath'])) {
            $model->trafficPath = trafficPath::fromMap($map['TrafficPath']);
        }
        if (isset($map['TrafficType'])) {
            $model->trafficType = $map['TrafficType'];
        }

        return $model;
    }
}

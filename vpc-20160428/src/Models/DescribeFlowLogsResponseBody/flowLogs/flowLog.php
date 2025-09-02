<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponseBody\flowLogs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponseBody\flowLogs\flowLog\tags;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponseBody\flowLogs\flowLog\trafficPath;

class flowLog extends Model
{
    /**
     * @var int
     */
    public $aggregationInterval;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $flowLogDeliverErrorMessage;

    /**
     * @var string
     */
    public $flowLogDeliverStatus;

    /**
     * @var string
     */
    public $flowLogId;

    /**
     * @var string
     */
    public $flowLogName;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var trafficPath
     */
    public $trafficPath;

    /**
     * @var string
     */
    public $trafficType;
    protected $_name = [
        'aggregationInterval' => 'AggregationInterval',
        'businessStatus' => 'BusinessStatus',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'flowLogDeliverErrorMessage' => 'FlowLogDeliverErrorMessage',
        'flowLogDeliverStatus' => 'FlowLogDeliverStatus',
        'flowLogId' => 'FlowLogId',
        'flowLogName' => 'FlowLogName',
        'ipVersion' => 'IpVersion',
        'logStoreName' => 'LogStoreName',
        'projectName' => 'ProjectName',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'serviceType' => 'ServiceType',
        'status' => 'Status',
        'tags' => 'Tags',
        'trafficPath' => 'TrafficPath',
        'trafficType' => 'TrafficType',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->trafficPath) {
            $this->trafficPath->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->flowLogDeliverErrorMessage) {
            $res['FlowLogDeliverErrorMessage'] = $this->flowLogDeliverErrorMessage;
        }

        if (null !== $this->flowLogDeliverStatus) {
            $res['FlowLogDeliverStatus'] = $this->flowLogDeliverStatus;
        }

        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
        }

        if (null !== $this->flowLogName) {
            $res['FlowLogName'] = $this->flowLogName;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->trafficPath) {
            $res['TrafficPath'] = null !== $this->trafficPath ? $this->trafficPath->toArray($noStream) : $this->trafficPath;
        }

        if (null !== $this->trafficType) {
            $res['TrafficType'] = $this->trafficType;
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

        if (isset($map['FlowLogDeliverErrorMessage'])) {
            $model->flowLogDeliverErrorMessage = $map['FlowLogDeliverErrorMessage'];
        }

        if (isset($map['FlowLogDeliverStatus'])) {
            $model->flowLogDeliverStatus = $map['FlowLogDeliverStatus'];
        }

        if (isset($map['FlowLogId'])) {
            $model->flowLogId = $map['FlowLogId'];
        }

        if (isset($map['FlowLogName'])) {
            $model->flowLogName = $map['FlowLogName'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
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

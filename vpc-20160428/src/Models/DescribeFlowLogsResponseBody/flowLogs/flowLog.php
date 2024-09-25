<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponseBody\flowLogs;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponseBody\flowLogs\flowLog\tags;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponseBody\flowLogs\flowLog\trafficPath;
use AlibabaCloud\Tea\Model;

class flowLog extends Model
{
    /**
     * @description The sampling interval of the flow log. Unit: minutes.
     *
     * @example 10
     *
     * @var int
     */
    public $aggregationInterval;

    /**
     * @description The business status of the flow log. Valid values:
     *
     *   **Normal**
     *   **FinancialLocked**
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The time when the flow log was created.
     *
     * @example 2022-01-21T03:08:50Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the flow log.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description If the flow log failed to be delivered, you can troubleshoot based on the following error messages that may be returned:
     *
     *   **UnavaliableTarget**: The Logstore of SLS is unavailable and cannot receive logs. Check whether the Logstore is available.
     *   **ProjectNotExist**: The project of SLS does not exist. We recommend that you delete the project and create a new one.
     *   **UnknownError**: An internal error occurred. Try again later.
     *
     * @example UnavaliableTarget
     *
     * @var string
     */
    public $flowLogDeliverErrorMessage;

    /**
     * @description Indicates whether the flow log is delivered. Valid values:
     * - **SUCCESS**
     * - **FAILED**
     * @example FAILED
     *
     * @var string
     */
    public $flowLogDeliverStatus;

    /**
     * @description The ID of the flow log.
     *
     * @example fl-bp1f6qqhsrc2c12ta****
     *
     * @var string
     */
    public $flowLogId;

    /**
     * @description The name of the flow log.
     *
     * @example myFlowlog
     *
     * @var string
     */
    public $flowLogName;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @description The Logstore that stores the captured traffic data.
     *
     * @example FlowLogStore
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @description The project that manages the captured traffic data.
     *
     * @example FlowLogProject
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The region ID of the flow log.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the flow log belongs.
     *
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the resource from which traffic is captured.
     *
     * @example eni-askldfas****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource from which traffic is captured. Valid values:
     *
     *   **NetworkInterface**: ENI
     *   **VSwitch**: all ENIs in a vSwitch
     *   **VPC**: all ENIs in a VPC
     *
     * @example NetworkInterface
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The hosting type of the cloud service.
     *
     *   This parameter can be empty, which indicates that the flow log is created by the user.
     *   If this parameter is not empty, the value is set to **sls**. The value sls indicates that the flow log is created in the Simple Log Service (SLS) console.
     *
     * > A flow log that is created in the SLS console can be displayed in the VPC list. However, you cannot modify, start, stop, or delete the flow log in the VPC console. If you want to manage the flow log, you can log on to the [SLS console](https://sls.console.aliyun.com) and perform required operations.
     * @example sls
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The status of the flow log. Valid values:
     *
     *   **Active**
     *   **Activating**
     *   **Inactive**
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The list of tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The sampling scope of the traffic that is collected. Valid values:
     *
     *   **all** (default value): all traffic
     *   **internetGateway**: Internet traffic
     *
     * > By default, the traffic path feature is unavailable. To use this feature, [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.11182188.console-base-top.dworkorder.18ae4882n3v6ZW#/ticket/createIndex).
     * @var trafficPath
     */
    public $trafficPath;

    /**
     * @description The type of traffic that is captured by the flow log. Valid values:
     *
     *   **All**: all traffic
     *   **Allow**: traffic that is allowed by access control
     *   **Drop**: traffic that is denied by access control
     *
     * @example All
     *
     * @var string
     */
    public $trafficType;
    protected $_name = [
        'aggregationInterval'        => 'AggregationInterval',
        'businessStatus'             => 'BusinessStatus',
        'creationTime'               => 'CreationTime',
        'description'                => 'Description',
        'flowLogDeliverErrorMessage' => 'FlowLogDeliverErrorMessage',
        'flowLogDeliverStatus'       => 'FlowLogDeliverStatus',
        'flowLogId'                  => 'FlowLogId',
        'flowLogName'                => 'FlowLogName',
        'ipVersion'                  => 'IpVersion',
        'logStoreName'               => 'LogStoreName',
        'projectName'                => 'ProjectName',
        'regionId'                   => 'RegionId',
        'resourceGroupId'            => 'ResourceGroupId',
        'resourceId'                 => 'ResourceId',
        'resourceType'               => 'ResourceType',
        'serviceType'                => 'ServiceType',
        'status'                     => 'Status',
        'tags'                       => 'Tags',
        'trafficPath'                => 'TrafficPath',
        'trafficType'                => 'TrafficType',
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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

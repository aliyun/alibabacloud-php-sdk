<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeFlowLogsResponseBody;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeFlowLogsResponseBody\flowLogs\tags;
use AlibabaCloud\Tea\Model;

class flowLogs extends Model
{
    /**
     * @description The time when the flow log was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format.
     *
     * @example 2023-09-21T04:20Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the flow log.
     *
     * @example myFlowlog
     *
     * @var string
     */
    public $description;

    /**
     * @description The ECR ID.
     *
     * @example ecr-h4cop1khw98*****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @description The ID of the flow log.
     *
     * @example flowlog-leypqehtgtia2*****
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
     * @description The ID of the network instance.
     *
     * @example vbr-9dpty76irpf4u15*****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the network instance. Valid values:
     *
     * - **VBR**: virtual border router (VBR)
     *
     * @example VBR
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The time window for collecting log data. Unit: seconds. Valid values:
     *
     * - **60**
     * - **600**
     *
     * Default value: **600**.
     *
     * @example 600
     *
     * @var int
     */
    public $interval;

    /**
     * @description The Logstore that stores the captured traffic data.
     *
     * @example FlowLogStore
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @description The name of the project that stores the captured traffic data.
     *
     * @example FlowLogProject
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The region ID of the flow log.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the ECR belongs.
     *
     * @example rg-aekzb3xwrexc4ry
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The sampling proportion. Valid values:
     *
     * - **1:4096**
     * - **1:2048**
     * - **1:1024**
     *
     * Default value: **1:4096**.
     *
     * @example 1:4096
     *
     * @var string
     */
    public $samplingRate;

    /**
     * @description The ID of the region where Log Service is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $slsRegionId;

    /**
     * @description The status of the flow log. Valid values:
     *
     *   **Active**
     *
     *   **Inactive**
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag key.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'ecrId' => 'EcrId',
        'flowLogId' => 'FlowLogId',
        'flowLogName' => 'FlowLogName',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'interval' => 'Interval',
        'logStoreName' => 'LogStoreName',
        'projectName' => 'ProjectName',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'samplingRate' => 'SamplingRate',
        'slsRegionId' => 'SlsRegionId',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
        }
        if (null !== $this->flowLogName) {
            $res['FlowLogName'] = $this->flowLogName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
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
        if (null !== $this->samplingRate) {
            $res['SamplingRate'] = $this->samplingRate;
        }
        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['FlowLogId'])) {
            $model->flowLogId = $map['FlowLogId'];
        }
        if (isset($map['FlowLogName'])) {
            $model->flowLogName = $map['FlowLogName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
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
        if (isset($map['SamplingRate'])) {
            $model->samplingRate = $map['SamplingRate'];
        }
        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

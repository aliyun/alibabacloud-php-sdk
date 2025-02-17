<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeFlowLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeFlowLogsResponseBody\flowLogs\tags;

class flowLogs extends Model
{
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
    public $ecrId;
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
    public $instanceId;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var int
     */
    public $interval;
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
    public $samplingRate;
    /**
     * @var string
     */
    public $slsRegionId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'description'     => 'Description',
        'ecrId'           => 'EcrId',
        'flowLogId'       => 'FlowLogId',
        'flowLogName'     => 'FlowLogName',
        'instanceId'      => 'InstanceId',
        'instanceType'    => 'InstanceType',
        'interval'        => 'Interval',
        'logStoreName'    => 'LogStoreName',
        'projectName'     => 'ProjectName',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'samplingRate'    => 'SamplingRate',
        'slsRegionId'     => 'SlsRegionId',
        'status'          => 'Status',
        'tags'            => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponseBody\flowLogs;

use AlibabaCloud\Tea\Model;

class flowLog extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $flowLogName;

    /**
     * @var string
     */
    public $trafficType;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $flowLogId;
    protected $_name = [
        'status'       => 'Status',
        'creationTime' => 'CreationTime',
        'flowLogName'  => 'FlowLogName',
        'trafficType'  => 'TrafficType',
        'resourceType' => 'ResourceType',
        'description'  => 'Description',
        'projectName'  => 'ProjectName',
        'logStoreName' => 'LogStoreName',
        'resourceId'   => 'ResourceId',
        'regionId'     => 'RegionId',
        'flowLogId'    => 'FlowLogId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->flowLogName) {
            $res['FlowLogName'] = $this->flowLogName;
        }
        if (null !== $this->trafficType) {
            $res['TrafficType'] = $this->trafficType;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FlowLogName'])) {
            $model->flowLogName = $map['FlowLogName'];
        }
        if (isset($map['TrafficType'])) {
            $model->trafficType = $map['TrafficType'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['FlowLogId'])) {
            $model->flowLogId = $map['FlowLogId'];
        }

        return $model;
    }
}

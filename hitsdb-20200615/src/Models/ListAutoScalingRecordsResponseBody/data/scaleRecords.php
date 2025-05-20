<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingRecordsResponseBody\data;

use AlibabaCloud\Dara\Model;

class scaleRecords extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $oldValue;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $specGroupId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $strategy;

    /**
     * @var string
     */
    public $targetValue;
    protected $_name = [
        'detail' => 'Detail',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'oldValue' => 'OldValue',
        'resourceType' => 'ResourceType',
        'specGroupId' => 'SpecGroupId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'strategy' => 'Strategy',
        'targetValue' => 'TargetValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->specGroupId) {
            $res['SpecGroupId'] = $this->specGroupId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }

        if (null !== $this->targetValue) {
            $res['TargetValue'] = $this->targetValue;
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
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SpecGroupId'])) {
            $model->specGroupId = $map['SpecGroupId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        if (isset($map['TargetValue'])) {
            $model->targetValue = $map['TargetValue'];
        }

        return $model;
    }
}

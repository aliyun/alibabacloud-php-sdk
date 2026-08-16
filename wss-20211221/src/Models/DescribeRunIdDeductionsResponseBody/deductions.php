<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeRunIdDeductionsResponseBody;

use AlibabaCloud\Dara\Model;

class deductions extends Model
{
    /**
     * @var string
     */
    public $agentType;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $groupResourceType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $packageId;

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
    public $runId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var int
     */
    public $usedTime;

    /**
     * @var string
     */
    public $usedTimeDecimal;
    protected $_name = [
        'agentType' => 'AgentType',
        'endTime' => 'EndTime',
        'groupResourceType' => 'GroupResourceType',
        'instanceId' => 'InstanceId',
        'model' => 'Model',
        'packageId' => 'PackageId',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'runId' => 'RunId',
        'startTime' => 'StartTime',
        'summary' => 'Summary',
        'usedTime' => 'UsedTime',
        'usedTimeDecimal' => 'UsedTimeDecimal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->groupResourceType) {
            $res['GroupResourceType'] = $this->groupResourceType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        if (null !== $this->usedTimeDecimal) {
            $res['UsedTimeDecimal'] = $this->usedTimeDecimal;
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
        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['GroupResourceType'])) {
            $model->groupResourceType = $map['GroupResourceType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        if (isset($map['UsedTimeDecimal'])) {
            $model->usedTimeDecimal = $map['UsedTimeDecimal'];
        }

        return $model;
    }
}

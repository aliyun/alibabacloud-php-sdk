<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyJobGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 174952ab-9825-4cc9-a5e2-de82d7fa4cdd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 3edc0260-6f7c-4de4-8535-09372240618b
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example Draft
     *
     * @var string
     */
    public $jobGroupStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $minConcurrency;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @example {\"emptyNumberIgnore\":false,\"inArrearsIgnore\":false,\"outOfServiceIgnore\":false}
     *
     * @var string
     */
    public $recallStrategyJson;

    /**
     * @example 25
     *
     * @var int
     */
    public $ringingDuration;

    /**
     * @example c6a668d1-3145-4048-9101-cb3678bb8884
     *
     * @var string
     */
    public $scenarioId;

    /**
     * @example 5a3940ce-a12f-4222-9f0f-605a9b89ea7c
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example {\"maxAttemptsPerDay\":\"0\",\"minAttemptInterval\":\"5\",\"Id\":\"689fc584-7f9f-4dc2-933d-8711beef7b15\"}
     *
     * @var string
     */
    public $strategyJson;
    protected $_name = [
        'callingNumber'      => 'CallingNumber',
        'description'        => 'Description',
        'instanceId'         => 'InstanceId',
        'jobGroupId'         => 'JobGroupId',
        'jobGroupStatus'     => 'JobGroupStatus',
        'minConcurrency'     => 'MinConcurrency',
        'name'               => 'Name',
        'priority'           => 'Priority',
        'recallStrategyJson' => 'RecallStrategyJson',
        'ringingDuration'    => 'RingingDuration',
        'scenarioId'         => 'ScenarioId',
        'scriptId'           => 'ScriptId',
        'strategyJson'       => 'StrategyJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobGroupStatus) {
            $res['JobGroupStatus'] = $this->jobGroupStatus;
        }
        if (null !== $this->minConcurrency) {
            $res['MinConcurrency'] = $this->minConcurrency;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->recallStrategyJson) {
            $res['RecallStrategyJson'] = $this->recallStrategyJson;
        }
        if (null !== $this->ringingDuration) {
            $res['RingingDuration'] = $this->ringingDuration;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->strategyJson) {
            $res['StrategyJson'] = $this->strategyJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyJobGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallingNumber'])) {
            if (!empty($map['CallingNumber'])) {
                $model->callingNumber = $map['CallingNumber'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['JobGroupStatus'])) {
            $model->jobGroupStatus = $map['JobGroupStatus'];
        }
        if (isset($map['MinConcurrency'])) {
            $model->minConcurrency = $map['MinConcurrency'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RecallStrategyJson'])) {
            $model->recallStrategyJson = $map['RecallStrategyJson'];
        }
        if (isset($map['RingingDuration'])) {
            $model->ringingDuration = $map['RingingDuration'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['StrategyJson'])) {
            $model->strategyJson = $map['StrategyJson'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateJobGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $callingNumber;

    /**
     * @example 174952ab-9825-4cc9-a5e2-de82d7fa4cdd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobGroupDescription;

    /**
     * @var string
     */
    public $jobGroupName;

    /**
     * @example 1
     *
     * @var int
     */
    public $minConcurrency;

    /**
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @example {\"emptyNumberIgnore\":true,\"inArrearsIgnore\":true,\"outOfServiceIgnore\":true}
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
     * @example b9ff4e88-65f9-4eb3-987c-11ba51f3f24d
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example {\"maxAttemptsPerDay\":1,\"name\":\"fa16dc2e-f778-44ab-8f25-54b7901df82a\",\"startTime\":1640157314127,\"endTime\":1640160914127,\"minAttemptInterval\":10}
     *
     * @var string
     */
    public $strategyJson;
    protected $_name = [
        'callingNumber'       => 'CallingNumber',
        'instanceId'          => 'InstanceId',
        'jobGroupDescription' => 'JobGroupDescription',
        'jobGroupName'        => 'JobGroupName',
        'minConcurrency'      => 'MinConcurrency',
        'priority'            => 'Priority',
        'recallStrategyJson'  => 'RecallStrategyJson',
        'ringingDuration'     => 'RingingDuration',
        'scenarioId'          => 'ScenarioId',
        'scriptId'            => 'ScriptId',
        'strategyJson'        => 'StrategyJson',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobGroupDescription) {
            $res['JobGroupDescription'] = $this->jobGroupDescription;
        }
        if (null !== $this->jobGroupName) {
            $res['JobGroupName'] = $this->jobGroupName;
        }
        if (null !== $this->minConcurrency) {
            $res['MinConcurrency'] = $this->minConcurrency;
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
     * @return CreateJobGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallingNumber'])) {
            if (!empty($map['CallingNumber'])) {
                $model->callingNumber = $map['CallingNumber'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobGroupDescription'])) {
            $model->jobGroupDescription = $map['JobGroupDescription'];
        }
        if (isset($map['JobGroupName'])) {
            $model->jobGroupName = $map['JobGroupName'];
        }
        if (isset($map['MinConcurrency'])) {
            $model->minConcurrency = $map['MinConcurrency'];
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

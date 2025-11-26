<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $flashSmsExtras;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobGroupStatus;

    /**
     * @var int
     */
    public $minConcurrency;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string[]
     */
    public $recallCallingNumber;

    /**
     * @var string
     */
    public $recallStrategyJson;

    /**
     * @var int
     */
    public $ringingDuration;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $strategyJson;
    protected $_name = [
        'callingNumber' => 'CallingNumber',
        'description' => 'Description',
        'flashSmsExtras' => 'FlashSmsExtras',
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
        'jobGroupStatus' => 'JobGroupStatus',
        'minConcurrency' => 'MinConcurrency',
        'name' => 'Name',
        'priority' => 'Priority',
        'recallCallingNumber' => 'RecallCallingNumber',
        'recallStrategyJson' => 'RecallStrategyJson',
        'ringingDuration' => 'RingingDuration',
        'scenarioId' => 'ScenarioId',
        'scriptId' => 'ScriptId',
        'strategyJson' => 'StrategyJson',
    ];

    public function validate()
    {
        if (\is_array($this->callingNumber)) {
            Model::validateArray($this->callingNumber);
        }
        if (\is_array($this->recallCallingNumber)) {
            Model::validateArray($this->recallCallingNumber);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callingNumber) {
            if (\is_array($this->callingNumber)) {
                $res['CallingNumber'] = [];
                $n1 = 0;
                foreach ($this->callingNumber as $item1) {
                    $res['CallingNumber'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->flashSmsExtras) {
            $res['FlashSmsExtras'] = $this->flashSmsExtras;
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

        if (null !== $this->recallCallingNumber) {
            if (\is_array($this->recallCallingNumber)) {
                $res['RecallCallingNumber'] = [];
                $n1 = 0;
                foreach ($this->recallCallingNumber as $item1) {
                    $res['RecallCallingNumber'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallingNumber'])) {
            if (!empty($map['CallingNumber'])) {
                $model->callingNumber = [];
                $n1 = 0;
                foreach ($map['CallingNumber'] as $item1) {
                    $model->callingNumber[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FlashSmsExtras'])) {
            $model->flashSmsExtras = $map['FlashSmsExtras'];
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

        if (isset($map['RecallCallingNumber'])) {
            if (!empty($map['RecallCallingNumber'])) {
                $model->recallCallingNumber = [];
                $n1 = 0;
                foreach ($map['RecallCallingNumber'] as $item1) {
                    $model->recallCallingNumber[$n1] = $item1;
                    ++$n1;
                }
            }
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

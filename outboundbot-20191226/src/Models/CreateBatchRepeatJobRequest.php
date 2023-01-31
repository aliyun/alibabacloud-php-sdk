<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateBatchRepeatJobRequest extends Model
{
    /**
     * @example []
     *
     * @var string[]
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $description;

    /**
     * @example Succeeded,NoInteraction,Failed,Cancelled
     *
     * @var string
     */
    public $filterStatus;

    /**
     * @example 2bfa5ae4-7185-4227-a3b8-328f26f11be1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 2
     *
     * @var int
     */
    public $minConcurrency;

    /**
     * @example 24
     *
     * @var string
     */
    public $name;

    /**
     * @example 10
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
     * @example 0fe7f71c-8771-42ef-9bb1-19aa16ae7120
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example c4f8a3d3-2e94-4bd4-aef8-e35f663d4847
     *
     * @var string
     */
    public $sourceGroupId;

    /**
     * @example {\"maxAttemptsPerDay\":1,\"minAttemptInterval\":1,\"routingStrategy\":\"LocalFirst\"}
     *
     * @var string
     */
    public $strategyJson;
    protected $_name = [
        'callingNumber'      => 'CallingNumber',
        'description'        => 'Description',
        'filterStatus'       => 'FilterStatus',
        'instanceId'         => 'InstanceId',
        'minConcurrency'     => 'MinConcurrency',
        'name'               => 'Name',
        'priority'           => 'Priority',
        'recallStrategyJson' => 'RecallStrategyJson',
        'ringingDuration'    => 'RingingDuration',
        'scriptId'           => 'ScriptId',
        'sourceGroupId'      => 'SourceGroupId',
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
        if (null !== $this->filterStatus) {
            $res['FilterStatus'] = $this->filterStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->sourceGroupId) {
            $res['SourceGroupId'] = $this->sourceGroupId;
        }
        if (null !== $this->strategyJson) {
            $res['StrategyJson'] = $this->strategyJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBatchRepeatJobRequest
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
        if (isset($map['FilterStatus'])) {
            $model->filterStatus = $map['FilterStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['SourceGroupId'])) {
            $model->sourceGroupId = $map['SourceGroupId'];
        }
        if (isset($map['StrategyJson'])) {
            $model->strategyJson = $map['StrategyJson'];
        }

        return $model;
    }
}

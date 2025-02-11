<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class UpdateAiOutboundTaskShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $concurrentRate;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $executionTime;
    /**
     * @var float
     */
    public $forecastCallRate;
    /**
     * @var int
     */
    public $handlerId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $numRepeated;
    /**
     * @var string
     */
    public $outboundNumsShrink;
    /**
     * @var string
     */
    public $recallRuleShrink;
    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'concurrentRate'     => 'ConcurrentRate',
        'description'        => 'Description',
        'executionTime'      => 'ExecutionTime',
        'forecastCallRate'   => 'ForecastCallRate',
        'handlerId'          => 'HandlerId',
        'instanceId'         => 'InstanceId',
        'name'               => 'Name',
        'numRepeated'        => 'NumRepeated',
        'outboundNumsShrink' => 'OutboundNums',
        'recallRuleShrink'   => 'RecallRule',
        'taskId'             => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concurrentRate) {
            $res['ConcurrentRate'] = $this->concurrentRate;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->executionTime) {
            $res['ExecutionTime'] = $this->executionTime;
        }

        if (null !== $this->forecastCallRate) {
            $res['ForecastCallRate'] = $this->forecastCallRate;
        }

        if (null !== $this->handlerId) {
            $res['HandlerId'] = $this->handlerId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->numRepeated) {
            $res['NumRepeated'] = $this->numRepeated;
        }

        if (null !== $this->outboundNumsShrink) {
            $res['OutboundNums'] = $this->outboundNumsShrink;
        }

        if (null !== $this->recallRuleShrink) {
            $res['RecallRule'] = $this->recallRuleShrink;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ConcurrentRate'])) {
            $model->concurrentRate = $map['ConcurrentRate'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExecutionTime'])) {
            $model->executionTime = $map['ExecutionTime'];
        }

        if (isset($map['ForecastCallRate'])) {
            $model->forecastCallRate = $map['ForecastCallRate'];
        }

        if (isset($map['HandlerId'])) {
            $model->handlerId = $map['HandlerId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NumRepeated'])) {
            $model->numRepeated = $map['NumRepeated'];
        }

        if (isset($map['OutboundNums'])) {
            $model->outboundNumsShrink = $map['OutboundNums'];
        }

        if (isset($map['RecallRule'])) {
            $model->recallRuleShrink = $map['RecallRule'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

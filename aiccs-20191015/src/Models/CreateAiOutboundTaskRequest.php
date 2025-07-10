<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAiOutboundTaskRequest\recallRule;

class CreateAiOutboundTaskRequest extends Model
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
     * @var string[]
     */
    public $outboundNums;

    /**
     * @var recallRule
     */
    public $recallRule;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'concurrentRate' => 'ConcurrentRate',
        'description' => 'Description',
        'executionTime' => 'ExecutionTime',
        'forecastCallRate' => 'ForecastCallRate',
        'handlerId' => 'HandlerId',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'numRepeated' => 'NumRepeated',
        'outboundNums' => 'OutboundNums',
        'recallRule' => 'RecallRule',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->outboundNums)) {
            Model::validateArray($this->outboundNums);
        }
        if (null !== $this->recallRule) {
            $this->recallRule->validate();
        }
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

        if (null !== $this->outboundNums) {
            if (\is_array($this->outboundNums)) {
                $res['OutboundNums'] = [];
                $n1 = 0;
                foreach ($this->outboundNums as $item1) {
                    $res['OutboundNums'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recallRule) {
            $res['RecallRule'] = null !== $this->recallRule ? $this->recallRule->toArray($noStream) : $this->recallRule;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
            if (!empty($map['OutboundNums'])) {
                $model->outboundNums = [];
                $n1 = 0;
                foreach ($map['OutboundNums'] as $item1) {
                    $model->outboundNums[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RecallRule'])) {
            $model->recallRule = recallRule::fromMap($map['RecallRule']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

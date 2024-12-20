<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAiOutboundTaskRequest\recallRule;
use AlibabaCloud\Tea\Model;

class CreateAiOutboundTaskRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $concurrentRate;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example {"TUESDAY":[{"start":"06:00","end":"06:05"}],"MONDAY":[{"start":"09:00","end":"18:00"},{"start":"20:30","end":"21:45"},{"start":"22:30","end":"22:50"}],"WEDNESDAY":[{"start":"09:00","end":"18:00"}],"THURSDAY":[{"start":"09:00","end":"18:00"}],"FRIDAY":[{"start":"09:00","end":"18:00"}],"SATURDAY":[{"start":"09:00","end":"18:00"}],"SUNDAY":[{"start":"17:00","end":"23:45"}]}
     *
     * @var string
     */
    public $executionTime;

    /**
     * @example 1.5
     *
     * @var float
     */
    public $forecastCallRate;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var int
     */
    public $handlerId;

    /**
     * @description This parameter is required.
     *
     * @example cc_xp_pre-cn-***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example xx外呼任务
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $numRepeated;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $outboundNums;

    /**
     * @var recallRule
     */
    public $recallRule;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'concurrentRate'   => 'ConcurrentRate',
        'description'      => 'Description',
        'executionTime'    => 'ExecutionTime',
        'forecastCallRate' => 'ForecastCallRate',
        'handlerId'        => 'HandlerId',
        'instanceId'       => 'InstanceId',
        'name'             => 'Name',
        'numRepeated'      => 'NumRepeated',
        'outboundNums'     => 'OutboundNums',
        'recallRule'       => 'RecallRule',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['OutboundNums'] = $this->outboundNums;
        }
        if (null !== $this->recallRule) {
            $res['RecallRule'] = null !== $this->recallRule ? $this->recallRule->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAiOutboundTaskRequest
     */
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
                $model->outboundNums = $map['OutboundNums'];
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

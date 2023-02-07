<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskDetailResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskDetailResponseBody\data\recallRule;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @example {"TUESDAY":[{"start":"06:00","end":"06:05"}],"MONDAY":[{"start":"09:00","end":"18:00"},{"start":"20:30","end":"21:45"},{"start":"22:30","end":"22:50"}],"WEDNESDAY":[{"start":"09:00","end":"18:00"}],"THURSDAY":[{"start":"09:00","end":"18:00"}],"FRIDAY":[{"start":"09:00","end":"18:00"}],"SATURDAY":[{"start":"09:00","end":"18:00"}],"SUNDAY":[{"start":"17:00","end":"23:45"}]}
     *
     * @var string
     */
    public $executionTime;

    /**
     * @example 1.2
     *
     * @var float
     */
    public $forecastCallRate;

    /**
     * @example 123456
     *
     * @var int
     */
    public $handlerId;

    /**
     * @example 热线技能组
     *
     * @var string
     */
    public $handlerName;

    /**
     * @example xx外呼任务
     *
     * @var string
     */
    public $name;

    /**
     * @example 0
     *
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
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 未开始
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @example 123
     *
     * @var int
     */
    public $taskId;

    /**
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
        'handlerName'      => 'HandlerName',
        'name'             => 'Name',
        'numRepeated'      => 'NumRepeated',
        'outboundNums'     => 'OutboundNums',
        'recallRule'       => 'RecallRule',
        'status'           => 'Status',
        'statusDesc'       => 'StatusDesc',
        'taskId'           => 'TaskId',
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
        if (null !== $this->handlerName) {
            $res['HandlerName'] = $this->handlerName;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['HandlerName'])) {
            $model->handlerName = $map['HandlerName'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

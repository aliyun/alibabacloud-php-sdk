<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class NotifyExecutionRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $executionId;

    /**
     * @var string
     */
    public $notifyType;

    /**
     * @var string
     */
    public $notifyNote;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskExecutionId;

    /**
     * @var string
     */
    public $executionStatus;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $loopItem;

    /**
     * @var string
     */
    public $taskExecutionIds;
    protected $_name = [
        'regionId'         => 'RegionId',
        'executionId'      => 'ExecutionId',
        'notifyType'       => 'NotifyType',
        'notifyNote'       => 'NotifyNote',
        'taskName'         => 'TaskName',
        'taskExecutionId'  => 'TaskExecutionId',
        'executionStatus'  => 'ExecutionStatus',
        'parameters'       => 'Parameters',
        'loopItem'         => 'LoopItem',
        'taskExecutionIds' => 'TaskExecutionIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }
        if (null !== $this->notifyNote) {
            $res['NotifyNote'] = $this->notifyNote;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskExecutionId) {
            $res['TaskExecutionId'] = $this->taskExecutionId;
        }
        if (null !== $this->executionStatus) {
            $res['ExecutionStatus'] = $this->executionStatus;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->loopItem) {
            $res['LoopItem'] = $this->loopItem;
        }
        if (null !== $this->taskExecutionIds) {
            $res['TaskExecutionIds'] = $this->taskExecutionIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NotifyExecutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }
        if (isset($map['NotifyNote'])) {
            $model->notifyNote = $map['NotifyNote'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskExecutionId'])) {
            $model->taskExecutionId = $map['TaskExecutionId'];
        }
        if (isset($map['ExecutionStatus'])) {
            $model->executionStatus = $map['ExecutionStatus'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['LoopItem'])) {
            $model->loopItem = $map['LoopItem'];
        }
        if (isset($map['TaskExecutionIds'])) {
            $model->taskExecutionIds = $map['TaskExecutionIds'];
        }

        return $model;
    }
}

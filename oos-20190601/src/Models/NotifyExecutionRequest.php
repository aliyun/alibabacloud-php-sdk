<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class NotifyExecutionRequest extends Model
{
    /**
     * @var string
     */
    public $executionId;

    /**
     * @var string
     */
    public $executionStatus;

    /**
     * @var string
     */
    public $loopItem;

    /**
     * @var string
     */
    public $notifyNote;

    /**
     * @var string
     */
    public $notifyType;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $taskExecutionId;

    /**
     * @var string
     */
    public $taskExecutionIds;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'executionId'      => 'ExecutionId',
        'executionStatus'  => 'ExecutionStatus',
        'loopItem'         => 'LoopItem',
        'notifyNote'       => 'NotifyNote',
        'notifyType'       => 'NotifyType',
        'parameters'       => 'Parameters',
        'regionId'         => 'RegionId',
        'taskExecutionId'  => 'TaskExecutionId',
        'taskExecutionIds' => 'TaskExecutionIds',
        'taskName'         => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->executionStatus) {
            $res['ExecutionStatus'] = $this->executionStatus;
        }
        if (null !== $this->loopItem) {
            $res['LoopItem'] = $this->loopItem;
        }
        if (null !== $this->notifyNote) {
            $res['NotifyNote'] = $this->notifyNote;
        }
        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskExecutionId) {
            $res['TaskExecutionId'] = $this->taskExecutionId;
        }
        if (null !== $this->taskExecutionIds) {
            $res['TaskExecutionIds'] = $this->taskExecutionIds;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['ExecutionStatus'])) {
            $model->executionStatus = $map['ExecutionStatus'];
        }
        if (isset($map['LoopItem'])) {
            $model->loopItem = $map['LoopItem'];
        }
        if (isset($map['NotifyNote'])) {
            $model->notifyNote = $map['NotifyNote'];
        }
        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskExecutionId'])) {
            $model->taskExecutionId = $map['TaskExecutionId'];
        }
        if (isset($map['TaskExecutionIds'])) {
            $model->taskExecutionIds = $map['TaskExecutionIds'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}

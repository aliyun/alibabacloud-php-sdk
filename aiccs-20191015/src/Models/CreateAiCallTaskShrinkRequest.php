<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class CreateAiCallTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $callDayShrink;

    /**
     * @var int
     */
    public $callRetryInterval;

    /**
     * @var string
     */
    public $callRetryReasonShrink;

    /**
     * @var int
     */
    public $callRetryTimes;

    /**
     * @var string
     */
    public $callTimeShrink;

    /**
     * @var bool
     */
    public $missCallRetry;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $startType;

    /**
     * @var int
     */
    public $taskCps;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $taskStartTime;

    /**
     * @var string
     */
    public $virtualNumber;
    protected $_name = [
        'agentId' => 'AgentId',
        'callDayShrink' => 'CallDay',
        'callRetryInterval' => 'CallRetryInterval',
        'callRetryReasonShrink' => 'CallRetryReason',
        'callRetryTimes' => 'CallRetryTimes',
        'callTimeShrink' => 'CallTime',
        'missCallRetry' => 'MissCallRetry',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startType' => 'StartType',
        'taskCps' => 'TaskCps',
        'taskName' => 'TaskName',
        'taskStartTime' => 'TaskStartTime',
        'virtualNumber' => 'VirtualNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->callDayShrink) {
            $res['CallDay'] = $this->callDayShrink;
        }

        if (null !== $this->callRetryInterval) {
            $res['CallRetryInterval'] = $this->callRetryInterval;
        }

        if (null !== $this->callRetryReasonShrink) {
            $res['CallRetryReason'] = $this->callRetryReasonShrink;
        }

        if (null !== $this->callRetryTimes) {
            $res['CallRetryTimes'] = $this->callRetryTimes;
        }

        if (null !== $this->callTimeShrink) {
            $res['CallTime'] = $this->callTimeShrink;
        }

        if (null !== $this->missCallRetry) {
            $res['MissCallRetry'] = $this->missCallRetry;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->startType) {
            $res['StartType'] = $this->startType;
        }

        if (null !== $this->taskCps) {
            $res['TaskCps'] = $this->taskCps;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskStartTime) {
            $res['TaskStartTime'] = $this->taskStartTime;
        }

        if (null !== $this->virtualNumber) {
            $res['VirtualNumber'] = $this->virtualNumber;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['CallDay'])) {
            $model->callDayShrink = $map['CallDay'];
        }

        if (isset($map['CallRetryInterval'])) {
            $model->callRetryInterval = $map['CallRetryInterval'];
        }

        if (isset($map['CallRetryReason'])) {
            $model->callRetryReasonShrink = $map['CallRetryReason'];
        }

        if (isset($map['CallRetryTimes'])) {
            $model->callRetryTimes = $map['CallRetryTimes'];
        }

        if (isset($map['CallTime'])) {
            $model->callTimeShrink = $map['CallTime'];
        }

        if (isset($map['MissCallRetry'])) {
            $model->missCallRetry = $map['MissCallRetry'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StartType'])) {
            $model->startType = $map['StartType'];
        }

        if (isset($map['TaskCps'])) {
            $model->taskCps = $map['TaskCps'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskStartTime'])) {
            $model->taskStartTime = $map['TaskStartTime'];
        }

        if (isset($map['VirtualNumber'])) {
            $model->virtualNumber = $map['VirtualNumber'];
        }

        return $model;
    }
}

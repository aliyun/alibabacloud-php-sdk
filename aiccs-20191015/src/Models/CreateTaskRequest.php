<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class CreateTaskRequest extends Model
{
    /**
     * @var string
     */
    public $callString;
    /**
     * @var string
     */
    public $callStringType;
    /**
     * @var string
     */
    public $caller;
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
     * @var int
     */
    public $retryCount;
    /**
     * @var int
     */
    public $retryFlag;
    /**
     * @var int
     */
    public $retryInterval;
    /**
     * @var string
     */
    public $retryStatusCode;
    /**
     * @var string
     */
    public $robotId;
    /**
     * @var string
     */
    public $seatCount;
    /**
     * @var bool
     */
    public $startNow;
    /**
     * @var string
     */
    public $taskName;
    /**
     * @var string
     */
    public $workDay;
    /**
     * @var string
     */
    public $workTimeList;
    protected $_name = [
        'callString'           => 'CallString',
        'callStringType'       => 'CallStringType',
        'caller'               => 'Caller',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'retryCount'           => 'RetryCount',
        'retryFlag'            => 'RetryFlag',
        'retryInterval'        => 'RetryInterval',
        'retryStatusCode'      => 'RetryStatusCode',
        'robotId'              => 'RobotId',
        'seatCount'            => 'SeatCount',
        'startNow'             => 'StartNow',
        'taskName'             => 'TaskName',
        'workDay'              => 'WorkDay',
        'workTimeList'         => 'WorkTimeList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callString) {
            $res['CallString'] = $this->callString;
        }

        if (null !== $this->callStringType) {
            $res['CallStringType'] = $this->callStringType;
        }

        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
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

        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }

        if (null !== $this->retryFlag) {
            $res['RetryFlag'] = $this->retryFlag;
        }

        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }

        if (null !== $this->retryStatusCode) {
            $res['RetryStatusCode'] = $this->retryStatusCode;
        }

        if (null !== $this->robotId) {
            $res['RobotId'] = $this->robotId;
        }

        if (null !== $this->seatCount) {
            $res['SeatCount'] = $this->seatCount;
        }

        if (null !== $this->startNow) {
            $res['StartNow'] = $this->startNow;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->workDay) {
            $res['WorkDay'] = $this->workDay;
        }

        if (null !== $this->workTimeList) {
            $res['WorkTimeList'] = $this->workTimeList;
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
        if (isset($map['CallString'])) {
            $model->callString = $map['CallString'];
        }

        if (isset($map['CallStringType'])) {
            $model->callStringType = $map['CallStringType'];
        }

        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
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

        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }

        if (isset($map['RetryFlag'])) {
            $model->retryFlag = $map['RetryFlag'];
        }

        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }

        if (isset($map['RetryStatusCode'])) {
            $model->retryStatusCode = $map['RetryStatusCode'];
        }

        if (isset($map['RobotId'])) {
            $model->robotId = $map['RobotId'];
        }

        if (isset($map['SeatCount'])) {
            $model->seatCount = $map['SeatCount'];
        }

        if (isset($map['StartNow'])) {
            $model->startNow = $map['StartNow'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['WorkDay'])) {
            $model->workDay = $map['WorkDay'];
        }

        if (isset($map['WorkTimeList'])) {
            $model->workTimeList = $map['WorkTimeList'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class UpdateAiCallTaskRequest extends Model
{
    /**
     * @var string[]
     */
    public $callDay;

    /**
     * @var int
     */
    public $callRetryInterval;

    /**
     * @var string[]
     */
    public $callRetryReason;

    /**
     * @var int
     */
    public $callRetryTimes;

    /**
     * @var string[]
     */
    public $callTime;

    /**
     * @var string
     */
    public $lineEncoding;

    /**
     * @var string
     */
    public $linePhoneNum;

    /**
     * @var bool
     */
    public $missCallRetry;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $phoneType;

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
    public $source;

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
    public $taskId;

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
        'callDay' => 'CallDay',
        'callRetryInterval' => 'CallRetryInterval',
        'callRetryReason' => 'CallRetryReason',
        'callRetryTimes' => 'CallRetryTimes',
        'callTime' => 'CallTime',
        'lineEncoding' => 'LineEncoding',
        'linePhoneNum' => 'LinePhoneNum',
        'missCallRetry' => 'MissCallRetry',
        'ownerId' => 'OwnerId',
        'phoneType' => 'PhoneType',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'source' => 'Source',
        'startType' => 'StartType',
        'taskCps' => 'TaskCps',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskStartTime' => 'TaskStartTime',
        'virtualNumber' => 'VirtualNumber',
    ];

    public function validate()
    {
        if (\is_array($this->callDay)) {
            Model::validateArray($this->callDay);
        }
        if (\is_array($this->callRetryReason)) {
            Model::validateArray($this->callRetryReason);
        }
        if (\is_array($this->callTime)) {
            Model::validateArray($this->callTime);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callDay) {
            if (\is_array($this->callDay)) {
                $res['CallDay'] = [];
                $n1 = 0;
                foreach ($this->callDay as $item1) {
                    $res['CallDay'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->callRetryInterval) {
            $res['CallRetryInterval'] = $this->callRetryInterval;
        }

        if (null !== $this->callRetryReason) {
            if (\is_array($this->callRetryReason)) {
                $res['CallRetryReason'] = [];
                $n1 = 0;
                foreach ($this->callRetryReason as $item1) {
                    $res['CallRetryReason'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->callRetryTimes) {
            $res['CallRetryTimes'] = $this->callRetryTimes;
        }

        if (null !== $this->callTime) {
            if (\is_array($this->callTime)) {
                $res['CallTime'] = [];
                $n1 = 0;
                foreach ($this->callTime as $item1) {
                    $res['CallTime'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lineEncoding) {
            $res['LineEncoding'] = $this->lineEncoding;
        }

        if (null !== $this->linePhoneNum) {
            $res['LinePhoneNum'] = $this->linePhoneNum;
        }

        if (null !== $this->missCallRetry) {
            $res['MissCallRetry'] = $this->missCallRetry;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->phoneType) {
            $res['PhoneType'] = $this->phoneType;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->startType) {
            $res['StartType'] = $this->startType;
        }

        if (null !== $this->taskCps) {
            $res['TaskCps'] = $this->taskCps;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CallDay'])) {
            if (!empty($map['CallDay'])) {
                $model->callDay = [];
                $n1 = 0;
                foreach ($map['CallDay'] as $item1) {
                    $model->callDay[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CallRetryInterval'])) {
            $model->callRetryInterval = $map['CallRetryInterval'];
        }

        if (isset($map['CallRetryReason'])) {
            if (!empty($map['CallRetryReason'])) {
                $model->callRetryReason = [];
                $n1 = 0;
                foreach ($map['CallRetryReason'] as $item1) {
                    $model->callRetryReason[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CallRetryTimes'])) {
            $model->callRetryTimes = $map['CallRetryTimes'];
        }

        if (isset($map['CallTime'])) {
            if (!empty($map['CallTime'])) {
                $model->callTime = [];
                $n1 = 0;
                foreach ($map['CallTime'] as $item1) {
                    $model->callTime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LineEncoding'])) {
            $model->lineEncoding = $map['LineEncoding'];
        }

        if (isset($map['LinePhoneNum'])) {
            $model->linePhoneNum = $map['LinePhoneNum'];
        }

        if (isset($map['MissCallRetry'])) {
            $model->missCallRetry = $map['MissCallRetry'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PhoneType'])) {
            $model->phoneType = $map['PhoneType'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['StartType'])) {
            $model->startType = $map['StartType'];
        }

        if (isset($map['TaskCps'])) {
            $model->taskCps = $map['TaskCps'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
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

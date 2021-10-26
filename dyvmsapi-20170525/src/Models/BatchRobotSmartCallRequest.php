<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class BatchRobotSmartCallRequest extends Model
{
    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $calledShowNumber;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $dialogId;

    /**
     * @var bool
     */
    public $earlyMediaAsr;

    /**
     * @var bool
     */
    public $isSelfLine;

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
     * @var bool
     */
    public $scheduleCall;

    /**
     * @var int
     */
    public $scheduleTime;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $ttsParam;

    /**
     * @var string
     */
    public $ttsParamHead;
    protected $_name = [
        'calledNumber'         => 'CalledNumber',
        'calledShowNumber'     => 'CalledShowNumber',
        'corpName'             => 'CorpName',
        'dialogId'             => 'DialogId',
        'earlyMediaAsr'        => 'EarlyMediaAsr',
        'isSelfLine'           => 'IsSelfLine',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'scheduleCall'         => 'ScheduleCall',
        'scheduleTime'         => 'ScheduleTime',
        'taskName'             => 'TaskName',
        'ttsParam'             => 'TtsParam',
        'ttsParamHead'         => 'TtsParamHead',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->calledShowNumber) {
            $res['CalledShowNumber'] = $this->calledShowNumber;
        }
        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->earlyMediaAsr) {
            $res['EarlyMediaAsr'] = $this->earlyMediaAsr;
        }
        if (null !== $this->isSelfLine) {
            $res['IsSelfLine'] = $this->isSelfLine;
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
        if (null !== $this->scheduleCall) {
            $res['ScheduleCall'] = $this->scheduleCall;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->ttsParam) {
            $res['TtsParam'] = $this->ttsParam;
        }
        if (null !== $this->ttsParamHead) {
            $res['TtsParamHead'] = $this->ttsParamHead;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchRobotSmartCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CalledShowNumber'])) {
            $model->calledShowNumber = $map['CalledShowNumber'];
        }
        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['EarlyMediaAsr'])) {
            $model->earlyMediaAsr = $map['EarlyMediaAsr'];
        }
        if (isset($map['IsSelfLine'])) {
            $model->isSelfLine = $map['IsSelfLine'];
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
        if (isset($map['ScheduleCall'])) {
            $model->scheduleCall = $map['ScheduleCall'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TtsParam'])) {
            $model->ttsParam = $map['TtsParam'];
        }
        if (isset($map['TtsParamHead'])) {
            $model->ttsParamHead = $map['TtsParamHead'];
        }

        return $model;
    }
}

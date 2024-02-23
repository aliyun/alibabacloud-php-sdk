<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class BatchRobotSmartCallRequest extends Model
{
    /**
     * @description The called number. Only mobile phone numbers in the Chinese mainland are supported.
     *
     * You can set up to 1,000 called numbers and separate the numbers with commas (,).
     * @example 1390000****
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @description The number displayed to called parties, which must be a number you purchased. You can view the numbers you purchased in the [Voice Messaging Service console](https://dyvms.console.aliyun.com/dyvms.htm#/number/normal).
     *
     * You can set up to 100 numbers and separate the numbers with commas (,).
     * @example 222
     *
     * @var string
     */
    public $calledShowNumber;

    /**
     * @description The company name, which must be the same as the **company name** specified on the [qualification management page](https://dyvms.console.aliyun.com/dyvms.htm#/corp/normal).
     *
     * > This parameter is optional if **isSelfLine** is set to **true**.
     * @example Alibaba
     *
     * @var string
     */
    public $corpName;

    /**
     * @description The ID of the robot or communication script that is used to initiate a call.
     *
     * You can obtain the **communication script ID** from the [Communication script management](https://dyvms.console.aliyun.com/dyvms.htm#/smart-call/saas/robot/list) page.
     * @example 1234567
     *
     * @var string
     */
    public $dialogId;

    /**
     * @description The speech recognition identifier of early media. The default value is **false**, which means that the speech recognition identifier of early media is not enabled.
     *
     * Set the parameter to **true** if you want to enable the speech recognition identifier of early media.
     * @example true
     *
     * @var bool
     */
    public $earlyMediaAsr;

    /**
     * @description Specifies whether to call the self-managed line. Default value: **false**.
     *
     * @example true
     *
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
     * @description Specifies whether the call is scheduled. If you set this parameter to **true**, the **ScheduleTime** parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $scheduleCall;

    /**
     * @description The preset call time. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * >  This parameter is required only when **ScheduleCall** is set to **true**.
     * @example 12
     *
     * @var int
     */
    public $scheduleTime;

    /**
     * @description The task name. The task name can be up to 30 characters in length.
     *
     * @example Batch Tasks
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The variable value of the TTS template, in the JSON format.
     *
     * The variable value must correspond to a number. The TtsParam parameter must be used together with the TtsParamHead parameter.
     * @example [{"number":"1390000****","params":[“Miss li”,"miss wang","Mr.li"]}]
     *
     * @var string
     */
    public $ttsParam;

    /**
     * @description The call tasks with variables, in the JSON format.
     *
     * The parameter value is a list of variable names. The TtsParamHead parameter must be used together with the TtsParam parameter.
     * @example ["name1","name2","name3"]
     *
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

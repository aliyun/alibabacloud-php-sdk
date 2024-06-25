<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\SDK\Aiccs\V20230516\Models\EditTaskRequest\callTimeList;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\EditTaskRequest\sendSmsPlan;
use AlibabaCloud\Tea\Model;

class EditTaskRequest extends Model
{
    /**
     * @description 外呼时间
     *
     * @var callTimeList[]
     */
    public $callTimeList;

    /**
     * @description 回调地址
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description 并发数
     *
     * @example 83
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description 任务名称
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description 播放间隔时长
     *
     * @example 29
     *
     * @var int
     */
    public $playSleepVal;

    /**
     * @description 录音播放次数
     *
     * @example 60
     *
     * @var int
     */
    public $playTimes;

    /**
     * @description 重呼配置
     *
     * @example 1
     *
     * @var int
     */
    public $recallType;

    /**
     * @description 录音地址
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $recordPath;

    /**
     * @description 重呼次数
     *
     * @example 51
     *
     * @var int
     */
    public $repeatCount;

    /**
     * @description 重呼间隔
     *
     * @example 91
     *
     * @var int
     */
    public $repeatInterval;

    /**
     * @description 重呼条件
     *
     * @var int[]
     */
    public $repeatReason;

    /**
     * @description 重呼时间
     *
     * @var string[]
     */
    public $repeatTimes;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description 短信发送规则
     *
     * @var sendSmsPlan[]
     */
    public $sendSmsPlan;

    /**
     * @description 任务状态
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description 任务id
     *
     * This parameter is required.
     * @example 29
     *
     * @var int
     */
    public $taskId;

    /**
     * @description 话术模板ID
     *
     * @example 24
     *
     * @var int
     */
    public $templateId;

    /**
     * @description 话术模板类型
     *
     * @example 1
     *
     * @var int
     */
    public $templateType;
    protected $_name = [
        'callTimeList'         => 'CallTimeList',
        'callbackUrl'          => 'CallbackUrl',
        'maxConcurrency'       => 'MaxConcurrency',
        'name'                 => 'Name',
        'ownerId'              => 'OwnerId',
        'playSleepVal'         => 'PlaySleepVal',
        'playTimes'            => 'PlayTimes',
        'recallType'           => 'RecallType',
        'recordPath'           => 'RecordPath',
        'repeatCount'          => 'RepeatCount',
        'repeatInterval'       => 'RepeatInterval',
        'repeatReason'         => 'RepeatReason',
        'repeatTimes'          => 'RepeatTimes',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sendSmsPlan'          => 'SendSmsPlan',
        'status'               => 'Status',
        'taskId'               => 'TaskId',
        'templateId'           => 'TemplateId',
        'templateType'         => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callTimeList) {
            $res['CallTimeList'] = [];
            if (null !== $this->callTimeList && \is_array($this->callTimeList)) {
                $n = 0;
                foreach ($this->callTimeList as $item) {
                    $res['CallTimeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->playSleepVal) {
            $res['PlaySleepVal'] = $this->playSleepVal;
        }
        if (null !== $this->playTimes) {
            $res['PlayTimes'] = $this->playTimes;
        }
        if (null !== $this->recallType) {
            $res['RecallType'] = $this->recallType;
        }
        if (null !== $this->recordPath) {
            $res['RecordPath'] = $this->recordPath;
        }
        if (null !== $this->repeatCount) {
            $res['RepeatCount'] = $this->repeatCount;
        }
        if (null !== $this->repeatInterval) {
            $res['RepeatInterval'] = $this->repeatInterval;
        }
        if (null !== $this->repeatReason) {
            $res['RepeatReason'] = $this->repeatReason;
        }
        if (null !== $this->repeatTimes) {
            $res['RepeatTimes'] = $this->repeatTimes;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sendSmsPlan) {
            $res['SendSmsPlan'] = [];
            if (null !== $this->sendSmsPlan && \is_array($this->sendSmsPlan)) {
                $n = 0;
                foreach ($this->sendSmsPlan as $item) {
                    $res['SendSmsPlan'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallTimeList'])) {
            if (!empty($map['CallTimeList'])) {
                $model->callTimeList = [];
                $n                   = 0;
                foreach ($map['CallTimeList'] as $item) {
                    $model->callTimeList[$n++] = null !== $item ? callTimeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PlaySleepVal'])) {
            $model->playSleepVal = $map['PlaySleepVal'];
        }
        if (isset($map['PlayTimes'])) {
            $model->playTimes = $map['PlayTimes'];
        }
        if (isset($map['RecallType'])) {
            $model->recallType = $map['RecallType'];
        }
        if (isset($map['RecordPath'])) {
            $model->recordPath = $map['RecordPath'];
        }
        if (isset($map['RepeatCount'])) {
            $model->repeatCount = $map['RepeatCount'];
        }
        if (isset($map['RepeatInterval'])) {
            $model->repeatInterval = $map['RepeatInterval'];
        }
        if (isset($map['RepeatReason'])) {
            if (!empty($map['RepeatReason'])) {
                $model->repeatReason = $map['RepeatReason'];
            }
        }
        if (isset($map['RepeatTimes'])) {
            if (!empty($map['RepeatTimes'])) {
                $model->repeatTimes = $map['RepeatTimes'];
            }
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SendSmsPlan'])) {
            if (!empty($map['SendSmsPlan'])) {
                $model->sendSmsPlan = [];
                $n                  = 0;
                foreach ($map['SendSmsPlan'] as $item) {
                    $model->sendSmsPlan[$n++] = null !== $item ? sendSmsPlan::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}

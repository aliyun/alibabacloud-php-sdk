<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\Tea\Model;

class AddTaskShrinkRequest extends Model
{
    /**
     * @description 外呼时间
     *
     * @var string
     */
    public $callTimeListShrink;

    /**
     * @description 回调地址
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description 当发送闪信配置为1时，闪信模板ID必填
     *
     * @example 96
     *
     * @var int
     */
    public $flashSmsTemplateId;

    /**
     * @description 发送闪信配置
     *
     * @example 0
     *
     * @var int
     */
    public $flashSmsType;

    /**
     * @description 并发数
     *
     * @example 99
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description 任务名称
     *
     * This parameter is required.
     * @example 示例值示例值示例值
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
     * @example 89
     *
     * @var int
     */
    public $playSleepVal;

    /**
     * @description 录音播放次数
     *
     * @example 51
     *
     * @var int
     */
    public $playTimes;

    /**
     * @description 重呼配置
     *
     * @example 53
     *
     * @var int
     */
    public $recallType;

    /**
     * @description 录音地址
     *
     * @example 示例值
     *
     * @var string
     */
    public $recordPath;

    /**
     * @description 重呼次数
     *
     * @example 37
     *
     * @var int
     */
    public $repeatCount;

    /**
     * @description 重呼间隔
     *
     * @example 14
     *
     * @var int
     */
    public $repeatInterval;

    /**
     * @description 重呼条件
     *
     * @var string
     */
    public $repeatReasonShrink;

    /**
     * @description 重呼时间
     *
     * @var string
     */
    public $repeatTimesShrink;

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
     * @var string
     */
    public $sendSmsPlanShrink;

    /**
     * @description 任务启动日期
     *
     * @example 2022-09-16
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 任务类型
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $taskType;

    /**
     * @description 话术模板ID
     *
     * @example 17
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
        'callTimeListShrink'   => 'CallTimeList',
        'callbackUrl'          => 'CallbackUrl',
        'flashSmsTemplateId'   => 'FlashSmsTemplateId',
        'flashSmsType'         => 'FlashSmsType',
        'maxConcurrency'       => 'MaxConcurrency',
        'name'                 => 'Name',
        'ownerId'              => 'OwnerId',
        'playSleepVal'         => 'PlaySleepVal',
        'playTimes'            => 'PlayTimes',
        'recallType'           => 'RecallType',
        'recordPath'           => 'RecordPath',
        'repeatCount'          => 'RepeatCount',
        'repeatInterval'       => 'RepeatInterval',
        'repeatReasonShrink'   => 'RepeatReason',
        'repeatTimesShrink'    => 'RepeatTimes',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sendSmsPlanShrink'    => 'SendSmsPlan',
        'startTime'            => 'StartTime',
        'taskType'             => 'TaskType',
        'templateId'           => 'TemplateId',
        'templateType'         => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callTimeListShrink) {
            $res['CallTimeList'] = $this->callTimeListShrink;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->flashSmsTemplateId) {
            $res['FlashSmsTemplateId'] = $this->flashSmsTemplateId;
        }
        if (null !== $this->flashSmsType) {
            $res['FlashSmsType'] = $this->flashSmsType;
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
        if (null !== $this->repeatReasonShrink) {
            $res['RepeatReason'] = $this->repeatReasonShrink;
        }
        if (null !== $this->repeatTimesShrink) {
            $res['RepeatTimes'] = $this->repeatTimesShrink;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sendSmsPlanShrink) {
            $res['SendSmsPlan'] = $this->sendSmsPlanShrink;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
     * @return AddTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallTimeList'])) {
            $model->callTimeListShrink = $map['CallTimeList'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['FlashSmsTemplateId'])) {
            $model->flashSmsTemplateId = $map['FlashSmsTemplateId'];
        }
        if (isset($map['FlashSmsType'])) {
            $model->flashSmsType = $map['FlashSmsType'];
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
            $model->repeatReasonShrink = $map['RepeatReason'];
        }
        if (isset($map['RepeatTimes'])) {
            $model->repeatTimesShrink = $map['RepeatTimes'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SendSmsPlan'])) {
            $model->sendSmsPlanShrink = $map['SendSmsPlan'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
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

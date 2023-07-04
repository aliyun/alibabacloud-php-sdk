<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskListResponseBody;

use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskListResponseBody\model\intentTags;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @description 外呼时间段
     *
     * @example “8:00~20:30”
     *
     * @var string
     */
    public $allowCallTime;

    /**
     * @description 外呼时间段格式化
     *
     * @example “8:00 ~ 20:00”
     *
     * @var string
     */
    public $allowCallTimeFormat;

    /**
     * @description 外呼时间
     *
     * @example “1,2,3”
     *
     * @var string
     */
    public $allowDayOfWeek;

    /**
     * @description 外呼类型
     *
     * @example 95
     *
     * @var int
     */
    public $callType;

    /**
     * @description 创建时间
     *
     * @example 2023-04-05 12:11:11
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 最近导入时间
     *
     * @example 2023-04-05 12:11:11
     *
     * @var string
     */
    public $importTime;

    /**
     * @description 意向标签列表
     *
     * @var intentTags[]
     */
    public $intentTags;

    /**
     * @description 接通重呼次数
     *
     * @example 31
     *
     * @var int
     */
    public $invalidReCall;

    /**
     * @description 最后外呼时间
     *
     * @example 2023-04-05 12:11:11
     *
     * @var string
     */
    public $lastCallTime;

    /**
     * @description 最大并发数
     *
     * @example 95
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description 个性标签列表
     *
     * @var string[]
     */
    public $personalityTags;

    /**
     * @description 优先任务
     *
     * @example 66
     *
     * @var int
     */
    public $priority;

    /**
     * @description 任务所需参数
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $properties;

    /**
     * @description 自动重呼
     *
     * @example 20
     *
     * @var int
     */
    public $recallType;

    /**
     * @description 发送短信
     *
     * @example 39
     *
     * @var int
     */
    public $sendSms;

    /**
     * @description 短信模板
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $smsName;

    /**
     * @description 任务状态
     *
     * @example 79
     *
     * @var int
     */
    public $status;

    /**
     * @description 任务ID
     *
     * @example 68
     *
     * @var int
     */
    public $taskId;

    /**
     * @description 任务名称
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $taskName;

    /**
     * @description 话术模板名称
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'allowCallTime'       => 'AllowCallTime',
        'allowCallTimeFormat' => 'AllowCallTimeFormat',
        'allowDayOfWeek'      => 'AllowDayOfWeek',
        'callType'            => 'CallType',
        'createTime'          => 'CreateTime',
        'importTime'          => 'ImportTime',
        'intentTags'          => 'IntentTags',
        'invalidReCall'       => 'InvalidReCall',
        'lastCallTime'        => 'LastCallTime',
        'maxConcurrency'      => 'MaxConcurrency',
        'personalityTags'     => 'PersonalityTags',
        'priority'            => 'Priority',
        'properties'          => 'Properties',
        'recallType'          => 'RecallType',
        'sendSms'             => 'SendSms',
        'smsName'             => 'SmsName',
        'status'              => 'Status',
        'taskId'              => 'TaskId',
        'taskName'            => 'TaskName',
        'templateName'        => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowCallTime) {
            $res['AllowCallTime'] = $this->allowCallTime;
        }
        if (null !== $this->allowCallTimeFormat) {
            $res['AllowCallTimeFormat'] = $this->allowCallTimeFormat;
        }
        if (null !== $this->allowDayOfWeek) {
            $res['AllowDayOfWeek'] = $this->allowDayOfWeek;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->importTime) {
            $res['ImportTime'] = $this->importTime;
        }
        if (null !== $this->intentTags) {
            $res['IntentTags'] = [];
            if (null !== $this->intentTags && \is_array($this->intentTags)) {
                $n = 0;
                foreach ($this->intentTags as $item) {
                    $res['IntentTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invalidReCall) {
            $res['InvalidReCall'] = $this->invalidReCall;
        }
        if (null !== $this->lastCallTime) {
            $res['LastCallTime'] = $this->lastCallTime;
        }
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->personalityTags) {
            $res['PersonalityTags'] = $this->personalityTags;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->recallType) {
            $res['RecallType'] = $this->recallType;
        }
        if (null !== $this->sendSms) {
            $res['SendSms'] = $this->sendSms;
        }
        if (null !== $this->smsName) {
            $res['SmsName'] = $this->smsName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowCallTime'])) {
            $model->allowCallTime = $map['AllowCallTime'];
        }
        if (isset($map['AllowCallTimeFormat'])) {
            $model->allowCallTimeFormat = $map['AllowCallTimeFormat'];
        }
        if (isset($map['AllowDayOfWeek'])) {
            $model->allowDayOfWeek = $map['AllowDayOfWeek'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ImportTime'])) {
            $model->importTime = $map['ImportTime'];
        }
        if (isset($map['IntentTags'])) {
            if (!empty($map['IntentTags'])) {
                $model->intentTags = [];
                $n                 = 0;
                foreach ($map['IntentTags'] as $item) {
                    $model->intentTags[$n++] = null !== $item ? intentTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InvalidReCall'])) {
            $model->invalidReCall = $map['InvalidReCall'];
        }
        if (isset($map['LastCallTime'])) {
            $model->lastCallTime = $map['LastCallTime'];
        }
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['PersonalityTags'])) {
            if (!empty($map['PersonalityTags'])) {
                $model->personalityTags = $map['PersonalityTags'];
            }
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['RecallType'])) {
            $model->recallType = $map['RecallType'];
        }
        if (isset($map['SendSms'])) {
            $model->sendSms = $map['SendSms'];
        }
        if (isset($map['SmsName'])) {
            $model->smsName = $map['SmsName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}

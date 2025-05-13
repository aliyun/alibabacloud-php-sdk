<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskListResponseBody\model\intentTags;

class model_ extends Model
{
    /**
     * @var string
     */
    public $allowCallTime;

    /**
     * @var string
     */
    public $allowCallTimeFormat;

    /**
     * @var string
     */
    public $allowDayOfWeek;

    /**
     * @var int
     */
    public $callType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $flashSmsTemplateId;

    /**
     * @var string
     */
    public $flashSmsTemplateName;

    /**
     * @var int
     */
    public $flashSmsType;

    /**
     * @var string
     */
    public $importTime;

    /**
     * @var intentTags[]
     */
    public $intentTags;

    /**
     * @var int
     */
    public $invalidReCall;

    /**
     * @var string
     */
    public $lastCallTime;

    /**
     * @var int
     */
    public $maxConcurrency;

    /**
     * @var string[]
     */
    public $personalityTags;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var int
     */
    public $recallType;

    /**
     * @var int
     */
    public $sendSms;

    /**
     * @var string
     */
    public $smsName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'allowCallTime' => 'AllowCallTime',
        'allowCallTimeFormat' => 'AllowCallTimeFormat',
        'allowDayOfWeek' => 'AllowDayOfWeek',
        'callType' => 'CallType',
        'createTime' => 'CreateTime',
        'flashSmsTemplateId' => 'FlashSmsTemplateId',
        'flashSmsTemplateName' => 'FlashSmsTemplateName',
        'flashSmsType' => 'FlashSmsType',
        'importTime' => 'ImportTime',
        'intentTags' => 'IntentTags',
        'invalidReCall' => 'InvalidReCall',
        'lastCallTime' => 'LastCallTime',
        'maxConcurrency' => 'MaxConcurrency',
        'personalityTags' => 'PersonalityTags',
        'priority' => 'Priority',
        'properties' => 'Properties',
        'recallType' => 'RecallType',
        'sendSms' => 'SendSms',
        'smsName' => 'SmsName',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        if (\is_array($this->intentTags)) {
            Model::validateArray($this->intentTags);
        }
        if (\is_array($this->personalityTags)) {
            Model::validateArray($this->personalityTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->flashSmsTemplateId) {
            $res['FlashSmsTemplateId'] = $this->flashSmsTemplateId;
        }

        if (null !== $this->flashSmsTemplateName) {
            $res['FlashSmsTemplateName'] = $this->flashSmsTemplateName;
        }

        if (null !== $this->flashSmsType) {
            $res['FlashSmsType'] = $this->flashSmsType;
        }

        if (null !== $this->importTime) {
            $res['ImportTime'] = $this->importTime;
        }

        if (null !== $this->intentTags) {
            if (\is_array($this->intentTags)) {
                $res['IntentTags'] = [];
                $n1 = 0;
                foreach ($this->intentTags as $item1) {
                    $res['IntentTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->personalityTags)) {
                $res['PersonalityTags'] = [];
                $n1 = 0;
                foreach ($this->personalityTags as $item1) {
                    $res['PersonalityTags'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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

        if (isset($map['FlashSmsTemplateId'])) {
            $model->flashSmsTemplateId = $map['FlashSmsTemplateId'];
        }

        if (isset($map['FlashSmsTemplateName'])) {
            $model->flashSmsTemplateName = $map['FlashSmsTemplateName'];
        }

        if (isset($map['FlashSmsType'])) {
            $model->flashSmsType = $map['FlashSmsType'];
        }

        if (isset($map['ImportTime'])) {
            $model->importTime = $map['ImportTime'];
        }

        if (isset($map['IntentTags'])) {
            if (!empty($map['IntentTags'])) {
                $model->intentTags = [];
                $n1 = 0;
                foreach ($map['IntentTags'] as $item1) {
                    $model->intentTags[$n1++] = intentTags::fromMap($item1);
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
                $model->personalityTags = [];
                $n1 = 0;
                foreach ($map['PersonalityTags'] as $item1) {
                    $model->personalityTags[$n1++] = $item1;
                }
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

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}

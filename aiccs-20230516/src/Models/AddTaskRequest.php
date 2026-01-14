<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AddTaskRequest\callTimeList;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AddTaskRequest\sendSmsPlan;

class AddTaskRequest extends Model
{
    /**
     * @var callTimeList[]
     */
    public $callTimeList;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var int
     */
    public $flashSmsTemplateId;

    /**
     * @var int
     */
    public $flashSmsType;

    /**
     * @var int
     */
    public $maxConcurrency;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $playSleepVal;

    /**
     * @var int
     */
    public $playTimes;

    /**
     * @var int
     */
    public $recallType;

    /**
     * @var string
     */
    public $recordPath;

    /**
     * @var int
     */
    public $repeatCount;

    /**
     * @var int
     */
    public $repeatInterval;

    /**
     * @var string[]
     */
    public $repeatReason;

    /**
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
     * @var sendSmsPlan[]
     */
    public $sendSmsPlan;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $taskType;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var int
     */
    public $templateType;
    protected $_name = [
        'callTimeList' => 'CallTimeList',
        'callbackUrl' => 'CallbackUrl',
        'flashSmsTemplateId' => 'FlashSmsTemplateId',
        'flashSmsType' => 'FlashSmsType',
        'maxConcurrency' => 'MaxConcurrency',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'playSleepVal' => 'PlaySleepVal',
        'playTimes' => 'PlayTimes',
        'recallType' => 'RecallType',
        'recordPath' => 'RecordPath',
        'repeatCount' => 'RepeatCount',
        'repeatInterval' => 'RepeatInterval',
        'repeatReason' => 'RepeatReason',
        'repeatTimes' => 'RepeatTimes',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sendSmsPlan' => 'SendSmsPlan',
        'startTime' => 'StartTime',
        'taskType' => 'TaskType',
        'templateId' => 'TemplateId',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
        if (\is_array($this->callTimeList)) {
            Model::validateArray($this->callTimeList);
        }
        if (\is_array($this->repeatReason)) {
            Model::validateArray($this->repeatReason);
        }
        if (\is_array($this->repeatTimes)) {
            Model::validateArray($this->repeatTimes);
        }
        if (\is_array($this->sendSmsPlan)) {
            Model::validateArray($this->sendSmsPlan);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callTimeList) {
            if (\is_array($this->callTimeList)) {
                $res['CallTimeList'] = [];
                $n1 = 0;
                foreach ($this->callTimeList as $item1) {
                    $res['CallTimeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->repeatReason) {
            if (\is_array($this->repeatReason)) {
                $res['RepeatReason'] = [];
                $n1 = 0;
                foreach ($this->repeatReason as $item1) {
                    $res['RepeatReason'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->repeatTimes) {
            if (\is_array($this->repeatTimes)) {
                $res['RepeatTimes'] = [];
                $n1 = 0;
                foreach ($this->repeatTimes as $item1) {
                    $res['RepeatTimes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->sendSmsPlan) {
            if (\is_array($this->sendSmsPlan)) {
                $res['SendSmsPlan'] = [];
                $n1 = 0;
                foreach ($this->sendSmsPlan as $item1) {
                    $res['SendSmsPlan'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallTimeList'])) {
            if (!empty($map['CallTimeList'])) {
                $model->callTimeList = [];
                $n1 = 0;
                foreach ($map['CallTimeList'] as $item1) {
                    $model->callTimeList[$n1] = callTimeList::fromMap($item1);
                    ++$n1;
                }
            }
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
            if (!empty($map['RepeatReason'])) {
                $model->repeatReason = [];
                $n1 = 0;
                foreach ($map['RepeatReason'] as $item1) {
                    $model->repeatReason[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RepeatTimes'])) {
            if (!empty($map['RepeatTimes'])) {
                $model->repeatTimes = [];
                $n1 = 0;
                foreach ($map['RepeatTimes'] as $item1) {
                    $model->repeatTimes[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['SendSmsPlan'] as $item1) {
                    $model->sendSmsPlan[$n1] = sendSmsPlan::fromMap($item1);
                    ++$n1;
                }
            }
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

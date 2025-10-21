<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyDefaultOptionsResponseBody\harmfulCategoryInfoList;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyDefaultOptionsResponseBody\promptAttackInfo;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyDefaultOptionsResponseBody\promptAttackInfoList;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyDefaultOptionsResponseBody\sensitiveDataTypeList;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyDefaultOptionsResponseBody\topicConfigInfoList;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyDefaultOptionsResponseBody\wordGroupInfoList;

class GetPolicyDefaultOptionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $enableSensitiveInputCheck;

    /**
     * @var int
     */
    public $enableSensitiveOutputCheck;

    /**
     * @var harmfulCategoryInfoList[]
     */
    public $harmfulCategoryInfoList;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $inputSafeAnswer;

    /**
     * @var int
     */
    public $inputSafeAnswerSwitch;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $outputSafeAnswer;

    /**
     * @var int
     */
    public $outputSafeAnswerSwitch;

    /**
     * @var promptAttackInfo
     */
    public $promptAttackInfo;

    /**
     * @var promptAttackInfoList[]
     */
    public $promptAttackInfoList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sensitiveDataTypeList[]
     */
    public $sensitiveDataTypeList;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var topicConfigInfoList[]
     */
    public $topicConfigInfoList;

    /**
     * @var wordGroupInfoList[]
     */
    public $wordGroupInfoList;
    protected $_name = [
        'code' => 'Code',
        'enableSensitiveInputCheck' => 'EnableSensitiveInputCheck',
        'enableSensitiveOutputCheck' => 'EnableSensitiveOutputCheck',
        'harmfulCategoryInfoList' => 'HarmfulCategoryInfoList',
        'httpStatusCode' => 'HttpStatusCode',
        'inputSafeAnswer' => 'InputSafeAnswer',
        'inputSafeAnswerSwitch' => 'InputSafeAnswerSwitch',
        'message' => 'Message',
        'outputSafeAnswer' => 'OutputSafeAnswer',
        'outputSafeAnswerSwitch' => 'OutputSafeAnswerSwitch',
        'promptAttackInfo' => 'PromptAttackInfo',
        'promptAttackInfoList' => 'PromptAttackInfoList',
        'requestId' => 'RequestId',
        'sensitiveDataTypeList' => 'SensitiveDataTypeList',
        'success' => 'Success',
        'topicConfigInfoList' => 'TopicConfigInfoList',
        'wordGroupInfoList' => 'WordGroupInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->harmfulCategoryInfoList)) {
            Model::validateArray($this->harmfulCategoryInfoList);
        }
        if (null !== $this->promptAttackInfo) {
            $this->promptAttackInfo->validate();
        }
        if (\is_array($this->promptAttackInfoList)) {
            Model::validateArray($this->promptAttackInfoList);
        }
        if (\is_array($this->sensitiveDataTypeList)) {
            Model::validateArray($this->sensitiveDataTypeList);
        }
        if (\is_array($this->topicConfigInfoList)) {
            Model::validateArray($this->topicConfigInfoList);
        }
        if (\is_array($this->wordGroupInfoList)) {
            Model::validateArray($this->wordGroupInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->enableSensitiveInputCheck) {
            $res['EnableSensitiveInputCheck'] = $this->enableSensitiveInputCheck;
        }

        if (null !== $this->enableSensitiveOutputCheck) {
            $res['EnableSensitiveOutputCheck'] = $this->enableSensitiveOutputCheck;
        }

        if (null !== $this->harmfulCategoryInfoList) {
            if (\is_array($this->harmfulCategoryInfoList)) {
                $res['HarmfulCategoryInfoList'] = [];
                $n1 = 0;
                foreach ($this->harmfulCategoryInfoList as $item1) {
                    $res['HarmfulCategoryInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->inputSafeAnswer) {
            $res['InputSafeAnswer'] = $this->inputSafeAnswer;
        }

        if (null !== $this->inputSafeAnswerSwitch) {
            $res['InputSafeAnswerSwitch'] = $this->inputSafeAnswerSwitch;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->outputSafeAnswer) {
            $res['OutputSafeAnswer'] = $this->outputSafeAnswer;
        }

        if (null !== $this->outputSafeAnswerSwitch) {
            $res['OutputSafeAnswerSwitch'] = $this->outputSafeAnswerSwitch;
        }

        if (null !== $this->promptAttackInfo) {
            $res['PromptAttackInfo'] = null !== $this->promptAttackInfo ? $this->promptAttackInfo->toArray($noStream) : $this->promptAttackInfo;
        }

        if (null !== $this->promptAttackInfoList) {
            if (\is_array($this->promptAttackInfoList)) {
                $res['PromptAttackInfoList'] = [];
                $n1 = 0;
                foreach ($this->promptAttackInfoList as $item1) {
                    $res['PromptAttackInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sensitiveDataTypeList) {
            if (\is_array($this->sensitiveDataTypeList)) {
                $res['SensitiveDataTypeList'] = [];
                $n1 = 0;
                foreach ($this->sensitiveDataTypeList as $item1) {
                    $res['SensitiveDataTypeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->topicConfigInfoList) {
            if (\is_array($this->topicConfigInfoList)) {
                $res['TopicConfigInfoList'] = [];
                $n1 = 0;
                foreach ($this->topicConfigInfoList as $item1) {
                    $res['TopicConfigInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wordGroupInfoList) {
            if (\is_array($this->wordGroupInfoList)) {
                $res['WordGroupInfoList'] = [];
                $n1 = 0;
                foreach ($this->wordGroupInfoList as $item1) {
                    $res['WordGroupInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['EnableSensitiveInputCheck'])) {
            $model->enableSensitiveInputCheck = $map['EnableSensitiveInputCheck'];
        }

        if (isset($map['EnableSensitiveOutputCheck'])) {
            $model->enableSensitiveOutputCheck = $map['EnableSensitiveOutputCheck'];
        }

        if (isset($map['HarmfulCategoryInfoList'])) {
            if (!empty($map['HarmfulCategoryInfoList'])) {
                $model->harmfulCategoryInfoList = [];
                $n1 = 0;
                foreach ($map['HarmfulCategoryInfoList'] as $item1) {
                    $model->harmfulCategoryInfoList[$n1] = harmfulCategoryInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['InputSafeAnswer'])) {
            $model->inputSafeAnswer = $map['InputSafeAnswer'];
        }

        if (isset($map['InputSafeAnswerSwitch'])) {
            $model->inputSafeAnswerSwitch = $map['InputSafeAnswerSwitch'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OutputSafeAnswer'])) {
            $model->outputSafeAnswer = $map['OutputSafeAnswer'];
        }

        if (isset($map['OutputSafeAnswerSwitch'])) {
            $model->outputSafeAnswerSwitch = $map['OutputSafeAnswerSwitch'];
        }

        if (isset($map['PromptAttackInfo'])) {
            $model->promptAttackInfo = promptAttackInfo::fromMap($map['PromptAttackInfo']);
        }

        if (isset($map['PromptAttackInfoList'])) {
            if (!empty($map['PromptAttackInfoList'])) {
                $model->promptAttackInfoList = [];
                $n1 = 0;
                foreach ($map['PromptAttackInfoList'] as $item1) {
                    $model->promptAttackInfoList[$n1] = promptAttackInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SensitiveDataTypeList'])) {
            if (!empty($map['SensitiveDataTypeList'])) {
                $model->sensitiveDataTypeList = [];
                $n1 = 0;
                foreach ($map['SensitiveDataTypeList'] as $item1) {
                    $model->sensitiveDataTypeList[$n1] = sensitiveDataTypeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TopicConfigInfoList'])) {
            if (!empty($map['TopicConfigInfoList'])) {
                $model->topicConfigInfoList = [];
                $n1 = 0;
                foreach ($map['TopicConfigInfoList'] as $item1) {
                    $model->topicConfigInfoList[$n1] = topicConfigInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WordGroupInfoList'])) {
            if (!empty($map['WordGroupInfoList'])) {
                $model->wordGroupInfoList = [];
                $n1 = 0;
                foreach ($map['WordGroupInfoList'] as $item1) {
                    $model->wordGroupInfoList[$n1] = wordGroupInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

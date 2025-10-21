<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody\contentSafeModelInfo;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody\harmfulCategoryConfigInfoList;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody\promptAttackInfo;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody\promptAttackInfoList;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody\promptAttackModelInfo;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody\regularExpressList;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody\sensitiveConfigList;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody\sensitiveTopicList;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody\sensitiveTopicModelInfo;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody\sensitiveWordList;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody\topicConfigInfoList;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody\wordGroupInfoList;

class GetPolicyInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var contentSafeModelInfo
     */
    public $contentSafeModelInfo;

    /**
     * @var int
     */
    public $enableSensitiveInputCheck;

    /**
     * @var int
     */
    public $enableSensitiveOutputCheck;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var harmfulCategoryConfigInfoList[]
     */
    public $harmfulCategoryConfigInfoList;

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
     * @var int
     */
    public $isSidecarPolicy;

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
     * @var string
     */
    public $policyIdentifier;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var promptAttackInfo
     */
    public $promptAttackInfo;

    /**
     * @var promptAttackInfoList[]
     */
    public $promptAttackInfoList;

    /**
     * @var promptAttackModelInfo
     */
    public $promptAttackModelInfo;

    /**
     * @var regularExpressList[]
     */
    public $regularExpressList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sceneType;

    /**
     * @var sensitiveConfigList[]
     */
    public $sensitiveConfigList;

    /**
     * @var sensitiveTopicList[]
     */
    public $sensitiveTopicList;

    /**
     * @var sensitiveTopicModelInfo
     */
    public $sensitiveTopicModelInfo;

    /**
     * @var sensitiveWordList[]
     */
    public $sensitiveWordList;

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
        'contentSafeModelInfo' => 'ContentSafeModelInfo',
        'enableSensitiveInputCheck' => 'EnableSensitiveInputCheck',
        'enableSensitiveOutputCheck' => 'EnableSensitiveOutputCheck',
        'gmtModified' => 'GmtModified',
        'harmfulCategoryConfigInfoList' => 'HarmfulCategoryConfigInfoList',
        'httpStatusCode' => 'HttpStatusCode',
        'inputSafeAnswer' => 'InputSafeAnswer',
        'inputSafeAnswerSwitch' => 'InputSafeAnswerSwitch',
        'isSidecarPolicy' => 'IsSidecarPolicy',
        'message' => 'Message',
        'outputSafeAnswer' => 'OutputSafeAnswer',
        'outputSafeAnswerSwitch' => 'OutputSafeAnswerSwitch',
        'policyIdentifier' => 'PolicyIdentifier',
        'policyName' => 'PolicyName',
        'promptAttackInfo' => 'PromptAttackInfo',
        'promptAttackInfoList' => 'PromptAttackInfoList',
        'promptAttackModelInfo' => 'PromptAttackModelInfo',
        'regularExpressList' => 'RegularExpressList',
        'requestId' => 'RequestId',
        'sceneType' => 'SceneType',
        'sensitiveConfigList' => 'SensitiveConfigList',
        'sensitiveTopicList' => 'SensitiveTopicList',
        'sensitiveTopicModelInfo' => 'SensitiveTopicModelInfo',
        'sensitiveWordList' => 'SensitiveWordList',
        'success' => 'Success',
        'topicConfigInfoList' => 'TopicConfigInfoList',
        'wordGroupInfoList' => 'WordGroupInfoList',
    ];

    public function validate()
    {
        if (null !== $this->contentSafeModelInfo) {
            $this->contentSafeModelInfo->validate();
        }
        if (\is_array($this->harmfulCategoryConfigInfoList)) {
            Model::validateArray($this->harmfulCategoryConfigInfoList);
        }
        if (null !== $this->promptAttackInfo) {
            $this->promptAttackInfo->validate();
        }
        if (\is_array($this->promptAttackInfoList)) {
            Model::validateArray($this->promptAttackInfoList);
        }
        if (null !== $this->promptAttackModelInfo) {
            $this->promptAttackModelInfo->validate();
        }
        if (\is_array($this->regularExpressList)) {
            Model::validateArray($this->regularExpressList);
        }
        if (\is_array($this->sensitiveConfigList)) {
            Model::validateArray($this->sensitiveConfigList);
        }
        if (\is_array($this->sensitiveTopicList)) {
            Model::validateArray($this->sensitiveTopicList);
        }
        if (null !== $this->sensitiveTopicModelInfo) {
            $this->sensitiveTopicModelInfo->validate();
        }
        if (\is_array($this->sensitiveWordList)) {
            Model::validateArray($this->sensitiveWordList);
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

        if (null !== $this->contentSafeModelInfo) {
            $res['ContentSafeModelInfo'] = null !== $this->contentSafeModelInfo ? $this->contentSafeModelInfo->toArray($noStream) : $this->contentSafeModelInfo;
        }

        if (null !== $this->enableSensitiveInputCheck) {
            $res['EnableSensitiveInputCheck'] = $this->enableSensitiveInputCheck;
        }

        if (null !== $this->enableSensitiveOutputCheck) {
            $res['EnableSensitiveOutputCheck'] = $this->enableSensitiveOutputCheck;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->harmfulCategoryConfigInfoList) {
            if (\is_array($this->harmfulCategoryConfigInfoList)) {
                $res['HarmfulCategoryConfigInfoList'] = [];
                $n1 = 0;
                foreach ($this->harmfulCategoryConfigInfoList as $item1) {
                    $res['HarmfulCategoryConfigInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->isSidecarPolicy) {
            $res['IsSidecarPolicy'] = $this->isSidecarPolicy;
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

        if (null !== $this->policyIdentifier) {
            $res['PolicyIdentifier'] = $this->policyIdentifier;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
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

        if (null !== $this->promptAttackModelInfo) {
            $res['PromptAttackModelInfo'] = null !== $this->promptAttackModelInfo ? $this->promptAttackModelInfo->toArray($noStream) : $this->promptAttackModelInfo;
        }

        if (null !== $this->regularExpressList) {
            if (\is_array($this->regularExpressList)) {
                $res['RegularExpressList'] = [];
                $n1 = 0;
                foreach ($this->regularExpressList as $item1) {
                    $res['RegularExpressList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }

        if (null !== $this->sensitiveConfigList) {
            if (\is_array($this->sensitiveConfigList)) {
                $res['SensitiveConfigList'] = [];
                $n1 = 0;
                foreach ($this->sensitiveConfigList as $item1) {
                    $res['SensitiveConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sensitiveTopicList) {
            if (\is_array($this->sensitiveTopicList)) {
                $res['SensitiveTopicList'] = [];
                $n1 = 0;
                foreach ($this->sensitiveTopicList as $item1) {
                    $res['SensitiveTopicList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sensitiveTopicModelInfo) {
            $res['SensitiveTopicModelInfo'] = null !== $this->sensitiveTopicModelInfo ? $this->sensitiveTopicModelInfo->toArray($noStream) : $this->sensitiveTopicModelInfo;
        }

        if (null !== $this->sensitiveWordList) {
            if (\is_array($this->sensitiveWordList)) {
                $res['SensitiveWordList'] = [];
                $n1 = 0;
                foreach ($this->sensitiveWordList as $item1) {
                    $res['SensitiveWordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ContentSafeModelInfo'])) {
            $model->contentSafeModelInfo = contentSafeModelInfo::fromMap($map['ContentSafeModelInfo']);
        }

        if (isset($map['EnableSensitiveInputCheck'])) {
            $model->enableSensitiveInputCheck = $map['EnableSensitiveInputCheck'];
        }

        if (isset($map['EnableSensitiveOutputCheck'])) {
            $model->enableSensitiveOutputCheck = $map['EnableSensitiveOutputCheck'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['HarmfulCategoryConfigInfoList'])) {
            if (!empty($map['HarmfulCategoryConfigInfoList'])) {
                $model->harmfulCategoryConfigInfoList = [];
                $n1 = 0;
                foreach ($map['HarmfulCategoryConfigInfoList'] as $item1) {
                    $model->harmfulCategoryConfigInfoList[$n1] = harmfulCategoryConfigInfoList::fromMap($item1);
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

        if (isset($map['IsSidecarPolicy'])) {
            $model->isSidecarPolicy = $map['IsSidecarPolicy'];
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

        if (isset($map['PolicyIdentifier'])) {
            $model->policyIdentifier = $map['PolicyIdentifier'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
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

        if (isset($map['PromptAttackModelInfo'])) {
            $model->promptAttackModelInfo = promptAttackModelInfo::fromMap($map['PromptAttackModelInfo']);
        }

        if (isset($map['RegularExpressList'])) {
            if (!empty($map['RegularExpressList'])) {
                $model->regularExpressList = [];
                $n1 = 0;
                foreach ($map['RegularExpressList'] as $item1) {
                    $model->regularExpressList[$n1] = regularExpressList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }

        if (isset($map['SensitiveConfigList'])) {
            if (!empty($map['SensitiveConfigList'])) {
                $model->sensitiveConfigList = [];
                $n1 = 0;
                foreach ($map['SensitiveConfigList'] as $item1) {
                    $model->sensitiveConfigList[$n1] = sensitiveConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SensitiveTopicList'])) {
            if (!empty($map['SensitiveTopicList'])) {
                $model->sensitiveTopicList = [];
                $n1 = 0;
                foreach ($map['SensitiveTopicList'] as $item1) {
                    $model->sensitiveTopicList[$n1] = sensitiveTopicList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SensitiveTopicModelInfo'])) {
            $model->sensitiveTopicModelInfo = sensitiveTopicModelInfo::fromMap($map['SensitiveTopicModelInfo']);
        }

        if (isset($map['SensitiveWordList'])) {
            if (!empty($map['SensitiveWordList'])) {
                $model->sensitiveWordList = [];
                $n1 = 0;
                foreach ($map['SensitiveWordList'] as $item1) {
                    $model->sensitiveWordList[$n1] = sensitiveWordList::fromMap($item1);
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

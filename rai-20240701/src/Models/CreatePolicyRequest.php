<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyRequest\harmfulCategoryConfigInfoList;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyRequest\promptAttackInfo;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyRequest\promptAttackInfoList;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyRequest\regularExpressList;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyRequest\sensitiveConfigList;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyRequest\sensitiveTopicList;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyRequest\sensitiveWordList;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyRequest\topicConfigInfoList;
use AlibabaCloud\SDK\RAI\V20240701\Models\CreatePolicyRequest\wordGroupInfoList;

class CreatePolicyRequest extends Model
{
    /**
     * @var int
     */
    public $contentSafeModelInstanceId;

    /**
     * @var int
     */
    public $enableSensitiveInputCheck;

    /**
     * @var int
     */
    public $enableSensitiveOutputCheck;

    /**
     * @var harmfulCategoryConfigInfoList[]
     */
    public $harmfulCategoryConfigInfoList;

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
    public $outputSafeAnswer;

    /**
     * @var int
     */
    public $outputSafeAnswerSwitch;

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
     * @var int
     */
    public $promptAttackModelInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var regularExpressList[]
     */
    public $regularExpressList;

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
     * @var int
     */
    public $sensitiveTopicModelInstanceId;

    /**
     * @var sensitiveWordList[]
     */
    public $sensitiveWordList;

    /**
     * @var topicConfigInfoList[]
     */
    public $topicConfigInfoList;

    /**
     * @var wordGroupInfoList[]
     */
    public $wordGroupInfoList;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'contentSafeModelInstanceId' => 'ContentSafeModelInstanceId',
        'enableSensitiveInputCheck' => 'EnableSensitiveInputCheck',
        'enableSensitiveOutputCheck' => 'EnableSensitiveOutputCheck',
        'harmfulCategoryConfigInfoList' => 'HarmfulCategoryConfigInfoList',
        'inputSafeAnswer' => 'InputSafeAnswer',
        'inputSafeAnswerSwitch' => 'InputSafeAnswerSwitch',
        'isSidecarPolicy' => 'IsSidecarPolicy',
        'outputSafeAnswer' => 'OutputSafeAnswer',
        'outputSafeAnswerSwitch' => 'OutputSafeAnswerSwitch',
        'policyName' => 'PolicyName',
        'promptAttackInfo' => 'PromptAttackInfo',
        'promptAttackInfoList' => 'PromptAttackInfoList',
        'promptAttackModelInstanceId' => 'PromptAttackModelInstanceId',
        'regionId' => 'RegionId',
        'regularExpressList' => 'RegularExpressList',
        'sceneType' => 'SceneType',
        'sensitiveConfigList' => 'SensitiveConfigList',
        'sensitiveTopicList' => 'SensitiveTopicList',
        'sensitiveTopicModelInstanceId' => 'SensitiveTopicModelInstanceId',
        'sensitiveWordList' => 'SensitiveWordList',
        'topicConfigInfoList' => 'TopicConfigInfoList',
        'wordGroupInfoList' => 'WordGroupInfoList',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->harmfulCategoryConfigInfoList)) {
            Model::validateArray($this->harmfulCategoryConfigInfoList);
        }
        if (null !== $this->promptAttackInfo) {
            $this->promptAttackInfo->validate();
        }
        if (\is_array($this->promptAttackInfoList)) {
            Model::validateArray($this->promptAttackInfoList);
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
        if (null !== $this->contentSafeModelInstanceId) {
            $res['ContentSafeModelInstanceId'] = $this->contentSafeModelInstanceId;
        }

        if (null !== $this->enableSensitiveInputCheck) {
            $res['EnableSensitiveInputCheck'] = $this->enableSensitiveInputCheck;
        }

        if (null !== $this->enableSensitiveOutputCheck) {
            $res['EnableSensitiveOutputCheck'] = $this->enableSensitiveOutputCheck;
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

        if (null !== $this->inputSafeAnswer) {
            $res['InputSafeAnswer'] = $this->inputSafeAnswer;
        }

        if (null !== $this->inputSafeAnswerSwitch) {
            $res['InputSafeAnswerSwitch'] = $this->inputSafeAnswerSwitch;
        }

        if (null !== $this->isSidecarPolicy) {
            $res['IsSidecarPolicy'] = $this->isSidecarPolicy;
        }

        if (null !== $this->outputSafeAnswer) {
            $res['OutputSafeAnswer'] = $this->outputSafeAnswer;
        }

        if (null !== $this->outputSafeAnswerSwitch) {
            $res['OutputSafeAnswerSwitch'] = $this->outputSafeAnswerSwitch;
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

        if (null !== $this->promptAttackModelInstanceId) {
            $res['PromptAttackModelInstanceId'] = $this->promptAttackModelInstanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (null !== $this->sensitiveTopicModelInstanceId) {
            $res['SensitiveTopicModelInstanceId'] = $this->sensitiveTopicModelInstanceId;
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

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ContentSafeModelInstanceId'])) {
            $model->contentSafeModelInstanceId = $map['ContentSafeModelInstanceId'];
        }

        if (isset($map['EnableSensitiveInputCheck'])) {
            $model->enableSensitiveInputCheck = $map['EnableSensitiveInputCheck'];
        }

        if (isset($map['EnableSensitiveOutputCheck'])) {
            $model->enableSensitiveOutputCheck = $map['EnableSensitiveOutputCheck'];
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

        if (isset($map['InputSafeAnswer'])) {
            $model->inputSafeAnswer = $map['InputSafeAnswer'];
        }

        if (isset($map['InputSafeAnswerSwitch'])) {
            $model->inputSafeAnswerSwitch = $map['InputSafeAnswerSwitch'];
        }

        if (isset($map['IsSidecarPolicy'])) {
            $model->isSidecarPolicy = $map['IsSidecarPolicy'];
        }

        if (isset($map['OutputSafeAnswer'])) {
            $model->outputSafeAnswer = $map['OutputSafeAnswer'];
        }

        if (isset($map['OutputSafeAnswerSwitch'])) {
            $model->outputSafeAnswerSwitch = $map['OutputSafeAnswerSwitch'];
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

        if (isset($map['PromptAttackModelInstanceId'])) {
            $model->promptAttackModelInstanceId = $map['PromptAttackModelInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        if (isset($map['SensitiveTopicModelInstanceId'])) {
            $model->sensitiveTopicModelInstanceId = $map['SensitiveTopicModelInstanceId'];
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

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

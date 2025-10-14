<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\checkCheatConfig;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\completeStrategy;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\customReplyRules;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\expressivenessList;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\pointDeductionRuleList;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\points;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\sampleDialogueList;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\scoreConfig;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\weights;

class GetAICoachScriptResponseBody extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var bool
     */
    public $appendQuestionFlag;

    /**
     * @var string
     */
    public $assessmentScope;

    /**
     * @var checkCheatConfig
     */
    public $checkCheatConfig;

    /**
     * @var string
     */
    public $closingRemarks;

    /**
     * @var completeStrategy
     */
    public $completeStrategy;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var customReplyRules[]
     */
    public $customReplyRules;

    /**
     * @var int
     */
    public $dialogueInputTextLimit;

    /**
     * @var bool
     */
    public $dialogueTextFlag;

    /**
     * @var bool
     */
    public $dialogueTipFlag;

    /**
     * @var int
     */
    public $dialogueVoiceLimit;

    /**
     * @var bool
     */
    public $evaluateReportFlag;

    /**
     * @var int[]
     */
    public $expressiveness;

    /**
     * @var expressivenessList[]
     */
    public $expressivenessList;

    /**
     * @var string
     */
    public $gifDynamicUrl;

    /**
     * @var string
     */
    public $gifStaticUrl;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $initiator;

    /**
     * @var string[]
     */
    public $interactionInputTypes;

    /**
     * @var int
     */
    public $interactionType;

    /**
     * @var string
     */
    public $introduce;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $openingRemarks;

    /**
     * @var bool
     */
    public $orderAckFlag;

    /**
     * @var pointDeductionRuleList[]
     */
    public $pointDeductionRuleList;

    /**
     * @var points[]
     */
    public $points;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sampleDialogueList[]
     */
    public $sampleDialogueList;

    /**
     * @var scoreConfig
     */
    public $scoreConfig;

    /**
     * @var string
     */
    public $scriptRecordId;

    /**
     * @var string
     */
    public $sparringTipContent;

    /**
     * @var string
     */
    public $sparringTipTitle;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $studentThinkTimeFlag;

    /**
     * @var int
     */
    public $studentThinkTimeLimit;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $voiceId;

    /**
     * @var string
     */
    public $voiceLanguage;

    /**
     * @var weights
     */
    public $weights;
    protected $_name = [
        'agentId' => 'agentId',
        'appendQuestionFlag' => 'appendQuestionFlag',
        'assessmentScope' => 'assessmentScope',
        'checkCheatConfig' => 'checkCheatConfig',
        'closingRemarks' => 'closingRemarks',
        'completeStrategy' => 'completeStrategy',
        'coverUrl' => 'coverUrl',
        'customReplyRules' => 'customReplyRules',
        'dialogueInputTextLimit' => 'dialogueInputTextLimit',
        'dialogueTextFlag' => 'dialogueTextFlag',
        'dialogueTipFlag' => 'dialogueTipFlag',
        'dialogueVoiceLimit' => 'dialogueVoiceLimit',
        'evaluateReportFlag' => 'evaluateReportFlag',
        'expressiveness' => 'expressiveness',
        'expressivenessList' => 'expressivenessList',
        'gifDynamicUrl' => 'gifDynamicUrl',
        'gifStaticUrl' => 'gifStaticUrl',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'initiator' => 'initiator',
        'interactionInputTypes' => 'interactionInputTypes',
        'interactionType' => 'interactionType',
        'introduce' => 'introduce',
        'name' => 'name',
        'openingRemarks' => 'openingRemarks',
        'orderAckFlag' => 'orderAckFlag',
        'pointDeductionRuleList' => 'pointDeductionRuleList',
        'points' => 'points',
        'requestId' => 'requestId',
        'sampleDialogueList' => 'sampleDialogueList',
        'scoreConfig' => 'scoreConfig',
        'scriptRecordId' => 'scriptRecordId',
        'sparringTipContent' => 'sparringTipContent',
        'sparringTipTitle' => 'sparringTipTitle',
        'status' => 'status',
        'studentThinkTimeFlag' => 'studentThinkTimeFlag',
        'studentThinkTimeLimit' => 'studentThinkTimeLimit',
        'type' => 'type',
        'voiceId' => 'voiceId',
        'voiceLanguage' => 'voiceLanguage',
        'weights' => 'weights',
    ];

    public function validate()
    {
        if (null !== $this->checkCheatConfig) {
            $this->checkCheatConfig->validate();
        }
        if (null !== $this->completeStrategy) {
            $this->completeStrategy->validate();
        }
        if (\is_array($this->customReplyRules)) {
            Model::validateArray($this->customReplyRules);
        }
        if (\is_array($this->expressiveness)) {
            Model::validateArray($this->expressiveness);
        }
        if (\is_array($this->expressivenessList)) {
            Model::validateArray($this->expressivenessList);
        }
        if (\is_array($this->interactionInputTypes)) {
            Model::validateArray($this->interactionInputTypes);
        }
        if (\is_array($this->pointDeductionRuleList)) {
            Model::validateArray($this->pointDeductionRuleList);
        }
        if (\is_array($this->points)) {
            Model::validateArray($this->points);
        }
        if (\is_array($this->sampleDialogueList)) {
            Model::validateArray($this->sampleDialogueList);
        }
        if (null !== $this->scoreConfig) {
            $this->scoreConfig->validate();
        }
        if (null !== $this->weights) {
            $this->weights->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->appendQuestionFlag) {
            $res['appendQuestionFlag'] = $this->appendQuestionFlag;
        }

        if (null !== $this->assessmentScope) {
            $res['assessmentScope'] = $this->assessmentScope;
        }

        if (null !== $this->checkCheatConfig) {
            $res['checkCheatConfig'] = null !== $this->checkCheatConfig ? $this->checkCheatConfig->toArray($noStream) : $this->checkCheatConfig;
        }

        if (null !== $this->closingRemarks) {
            $res['closingRemarks'] = $this->closingRemarks;
        }

        if (null !== $this->completeStrategy) {
            $res['completeStrategy'] = null !== $this->completeStrategy ? $this->completeStrategy->toArray($noStream) : $this->completeStrategy;
        }

        if (null !== $this->coverUrl) {
            $res['coverUrl'] = $this->coverUrl;
        }

        if (null !== $this->customReplyRules) {
            if (\is_array($this->customReplyRules)) {
                $res['customReplyRules'] = [];
                $n1 = 0;
                foreach ($this->customReplyRules as $item1) {
                    $res['customReplyRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dialogueInputTextLimit) {
            $res['dialogueInputTextLimit'] = $this->dialogueInputTextLimit;
        }

        if (null !== $this->dialogueTextFlag) {
            $res['dialogueTextFlag'] = $this->dialogueTextFlag;
        }

        if (null !== $this->dialogueTipFlag) {
            $res['dialogueTipFlag'] = $this->dialogueTipFlag;
        }

        if (null !== $this->dialogueVoiceLimit) {
            $res['dialogueVoiceLimit'] = $this->dialogueVoiceLimit;
        }

        if (null !== $this->evaluateReportFlag) {
            $res['evaluateReportFlag'] = $this->evaluateReportFlag;
        }

        if (null !== $this->expressiveness) {
            if (\is_array($this->expressiveness)) {
                $res['expressiveness'] = [];
                foreach ($this->expressiveness as $key1 => $value1) {
                    $res['expressiveness'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->expressivenessList) {
            if (\is_array($this->expressivenessList)) {
                $res['expressivenessList'] = [];
                $n1 = 0;
                foreach ($this->expressivenessList as $item1) {
                    $res['expressivenessList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gifDynamicUrl) {
            $res['gifDynamicUrl'] = $this->gifDynamicUrl;
        }

        if (null !== $this->gifStaticUrl) {
            $res['gifStaticUrl'] = $this->gifStaticUrl;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->initiator) {
            $res['initiator'] = $this->initiator;
        }

        if (null !== $this->interactionInputTypes) {
            if (\is_array($this->interactionInputTypes)) {
                $res['interactionInputTypes'] = [];
                $n1 = 0;
                foreach ($this->interactionInputTypes as $item1) {
                    $res['interactionInputTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->interactionType) {
            $res['interactionType'] = $this->interactionType;
        }

        if (null !== $this->introduce) {
            $res['introduce'] = $this->introduce;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->openingRemarks) {
            $res['openingRemarks'] = $this->openingRemarks;
        }

        if (null !== $this->orderAckFlag) {
            $res['orderAckFlag'] = $this->orderAckFlag;
        }

        if (null !== $this->pointDeductionRuleList) {
            if (\is_array($this->pointDeductionRuleList)) {
                $res['pointDeductionRuleList'] = [];
                $n1 = 0;
                foreach ($this->pointDeductionRuleList as $item1) {
                    $res['pointDeductionRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->points) {
            if (\is_array($this->points)) {
                $res['points'] = [];
                $n1 = 0;
                foreach ($this->points as $item1) {
                    $res['points'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sampleDialogueList) {
            if (\is_array($this->sampleDialogueList)) {
                $res['sampleDialogueList'] = [];
                $n1 = 0;
                foreach ($this->sampleDialogueList as $item1) {
                    $res['sampleDialogueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scoreConfig) {
            $res['scoreConfig'] = null !== $this->scoreConfig ? $this->scoreConfig->toArray($noStream) : $this->scoreConfig;
        }

        if (null !== $this->scriptRecordId) {
            $res['scriptRecordId'] = $this->scriptRecordId;
        }

        if (null !== $this->sparringTipContent) {
            $res['sparringTipContent'] = $this->sparringTipContent;
        }

        if (null !== $this->sparringTipTitle) {
            $res['sparringTipTitle'] = $this->sparringTipTitle;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->studentThinkTimeFlag) {
            $res['studentThinkTimeFlag'] = $this->studentThinkTimeFlag;
        }

        if (null !== $this->studentThinkTimeLimit) {
            $res['studentThinkTimeLimit'] = $this->studentThinkTimeLimit;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->voiceId) {
            $res['voiceId'] = $this->voiceId;
        }

        if (null !== $this->voiceLanguage) {
            $res['voiceLanguage'] = $this->voiceLanguage;
        }

        if (null !== $this->weights) {
            $res['weights'] = null !== $this->weights ? $this->weights->toArray($noStream) : $this->weights;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['appendQuestionFlag'])) {
            $model->appendQuestionFlag = $map['appendQuestionFlag'];
        }

        if (isset($map['assessmentScope'])) {
            $model->assessmentScope = $map['assessmentScope'];
        }

        if (isset($map['checkCheatConfig'])) {
            $model->checkCheatConfig = checkCheatConfig::fromMap($map['checkCheatConfig']);
        }

        if (isset($map['closingRemarks'])) {
            $model->closingRemarks = $map['closingRemarks'];
        }

        if (isset($map['completeStrategy'])) {
            $model->completeStrategy = completeStrategy::fromMap($map['completeStrategy']);
        }

        if (isset($map['coverUrl'])) {
            $model->coverUrl = $map['coverUrl'];
        }

        if (isset($map['customReplyRules'])) {
            if (!empty($map['customReplyRules'])) {
                $model->customReplyRules = [];
                $n1 = 0;
                foreach ($map['customReplyRules'] as $item1) {
                    $model->customReplyRules[$n1] = customReplyRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['dialogueInputTextLimit'])) {
            $model->dialogueInputTextLimit = $map['dialogueInputTextLimit'];
        }

        if (isset($map['dialogueTextFlag'])) {
            $model->dialogueTextFlag = $map['dialogueTextFlag'];
        }

        if (isset($map['dialogueTipFlag'])) {
            $model->dialogueTipFlag = $map['dialogueTipFlag'];
        }

        if (isset($map['dialogueVoiceLimit'])) {
            $model->dialogueVoiceLimit = $map['dialogueVoiceLimit'];
        }

        if (isset($map['evaluateReportFlag'])) {
            $model->evaluateReportFlag = $map['evaluateReportFlag'];
        }

        if (isset($map['expressiveness'])) {
            if (!empty($map['expressiveness'])) {
                $model->expressiveness = [];
                foreach ($map['expressiveness'] as $key1 => $value1) {
                    $model->expressiveness[$key1] = $value1;
                }
            }
        }

        if (isset($map['expressivenessList'])) {
            if (!empty($map['expressivenessList'])) {
                $model->expressivenessList = [];
                $n1 = 0;
                foreach ($map['expressivenessList'] as $item1) {
                    $model->expressivenessList[$n1] = expressivenessList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['gifDynamicUrl'])) {
            $model->gifDynamicUrl = $map['gifDynamicUrl'];
        }

        if (isset($map['gifStaticUrl'])) {
            $model->gifStaticUrl = $map['gifStaticUrl'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['initiator'])) {
            $model->initiator = $map['initiator'];
        }

        if (isset($map['interactionInputTypes'])) {
            if (!empty($map['interactionInputTypes'])) {
                $model->interactionInputTypes = [];
                $n1 = 0;
                foreach ($map['interactionInputTypes'] as $item1) {
                    $model->interactionInputTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['interactionType'])) {
            $model->interactionType = $map['interactionType'];
        }

        if (isset($map['introduce'])) {
            $model->introduce = $map['introduce'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['openingRemarks'])) {
            $model->openingRemarks = $map['openingRemarks'];
        }

        if (isset($map['orderAckFlag'])) {
            $model->orderAckFlag = $map['orderAckFlag'];
        }

        if (isset($map['pointDeductionRuleList'])) {
            if (!empty($map['pointDeductionRuleList'])) {
                $model->pointDeductionRuleList = [];
                $n1 = 0;
                foreach ($map['pointDeductionRuleList'] as $item1) {
                    $model->pointDeductionRuleList[$n1] = pointDeductionRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['points'])) {
            if (!empty($map['points'])) {
                $model->points = [];
                $n1 = 0;
                foreach ($map['points'] as $item1) {
                    $model->points[$n1] = points::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sampleDialogueList'])) {
            if (!empty($map['sampleDialogueList'])) {
                $model->sampleDialogueList = [];
                $n1 = 0;
                foreach ($map['sampleDialogueList'] as $item1) {
                    $model->sampleDialogueList[$n1] = sampleDialogueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['scoreConfig'])) {
            $model->scoreConfig = scoreConfig::fromMap($map['scoreConfig']);
        }

        if (isset($map['scriptRecordId'])) {
            $model->scriptRecordId = $map['scriptRecordId'];
        }

        if (isset($map['sparringTipContent'])) {
            $model->sparringTipContent = $map['sparringTipContent'];
        }

        if (isset($map['sparringTipTitle'])) {
            $model->sparringTipTitle = $map['sparringTipTitle'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['studentThinkTimeFlag'])) {
            $model->studentThinkTimeFlag = $map['studentThinkTimeFlag'];
        }

        if (isset($map['studentThinkTimeLimit'])) {
            $model->studentThinkTimeLimit = $map['studentThinkTimeLimit'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['voiceId'])) {
            $model->voiceId = $map['voiceId'];
        }

        if (isset($map['voiceLanguage'])) {
            $model->voiceLanguage = $map['voiceLanguage'];
        }

        if (isset($map['weights'])) {
            $model->weights = weights::fromMap($map['weights']);
        }

        return $model;
    }
}

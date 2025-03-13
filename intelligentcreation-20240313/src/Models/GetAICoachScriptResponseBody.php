<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\completeStrategy;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\pointDeductionRuleList;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\points;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\sampleDialogueList;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\weights;
use AlibabaCloud\Tea\Model;

class GetAICoachScriptResponseBody extends Model
{
    /**
     * @example point
     *
     * @var string
     */
    public $assessmentScope;

    /**
     * @var completeStrategy
     */
    public $completeStrategy;

    /**
     * @example https://demo.com
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @example 500
     *
     * @var int
     */
    public $dialogueInputTextLimit;

    /**
     * @example true
     *
     * @var bool
     */
    public $dialogueTextFlag;

    /**
     * @example true
     *
     * @var bool
     */
    public $dialogueTipFlag;

    /**
     * @example 30
     *
     * @var int
     */
    public $dialogueVoiceLimit;

    /**
     * @example true
     *
     * @var bool
     */
    public $evaluateReportFlag;

    /**
     * @var int[]
     */
    public $expressiveness;

    /**
     * @example 2025-02-24 12:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2025-02-24 12:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example coach
     *
     * @var string
     */
    public $initiator;

    /**
     * @var string[]
     */
    public $interactionInputTypes;

    /**
     * @example 1
     *
     * @var int
     */
    public $interactionType;

    /**
     * @example demo
     *
     * @var string
     */
    public $introduce;

    /**
     * @example demo
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
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
     * @example 1
     *
     * @var string
     */
    public $requestId;

    /**
     * @var sampleDialogueList[]
     */
    public $sampleDialogueList;

    /**
     * @example 1
     *
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
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example true
     *
     * @var bool
     */
    public $studentThinkTimeFlag;

    /**
     * @example 100
     *
     * @var int
     */
    public $studentThinkTimeLimit;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @var weights
     */
    public $weights;
    protected $_name = [
        'assessmentScope'        => 'assessmentScope',
        'completeStrategy'       => 'completeStrategy',
        'coverUrl'               => 'coverUrl',
        'dialogueInputTextLimit' => 'dialogueInputTextLimit',
        'dialogueTextFlag'       => 'dialogueTextFlag',
        'dialogueTipFlag'        => 'dialogueTipFlag',
        'dialogueVoiceLimit'     => 'dialogueVoiceLimit',
        'evaluateReportFlag'     => 'evaluateReportFlag',
        'expressiveness'         => 'expressiveness',
        'gmtCreate'              => 'gmtCreate',
        'gmtModified'            => 'gmtModified',
        'initiator'              => 'initiator',
        'interactionInputTypes'  => 'interactionInputTypes',
        'interactionType'        => 'interactionType',
        'introduce'              => 'introduce',
        'name'                   => 'name',
        'orderAckFlag'           => 'orderAckFlag',
        'pointDeductionRuleList' => 'pointDeductionRuleList',
        'points'                 => 'points',
        'requestId'              => 'requestId',
        'sampleDialogueList'     => 'sampleDialogueList',
        'scriptRecordId'         => 'scriptRecordId',
        'sparringTipContent'     => 'sparringTipContent',
        'sparringTipTitle'       => 'sparringTipTitle',
        'status'                 => 'status',
        'studentThinkTimeFlag'   => 'studentThinkTimeFlag',
        'studentThinkTimeLimit'  => 'studentThinkTimeLimit',
        'type'                   => 'type',
        'weights'                => 'weights',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assessmentScope) {
            $res['assessmentScope'] = $this->assessmentScope;
        }
        if (null !== $this->completeStrategy) {
            $res['completeStrategy'] = null !== $this->completeStrategy ? $this->completeStrategy->toMap() : null;
        }
        if (null !== $this->coverUrl) {
            $res['coverUrl'] = $this->coverUrl;
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
            $res['expressiveness'] = $this->expressiveness;
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
            $res['interactionInputTypes'] = $this->interactionInputTypes;
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
        if (null !== $this->orderAckFlag) {
            $res['orderAckFlag'] = $this->orderAckFlag;
        }
        if (null !== $this->pointDeductionRuleList) {
            $res['pointDeductionRuleList'] = [];
            if (null !== $this->pointDeductionRuleList && \is_array($this->pointDeductionRuleList)) {
                $n = 0;
                foreach ($this->pointDeductionRuleList as $item) {
                    $res['pointDeductionRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->points) {
            $res['points'] = [];
            if (null !== $this->points && \is_array($this->points)) {
                $n = 0;
                foreach ($this->points as $item) {
                    $res['points'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->sampleDialogueList) {
            $res['sampleDialogueList'] = [];
            if (null !== $this->sampleDialogueList && \is_array($this->sampleDialogueList)) {
                $n = 0;
                foreach ($this->sampleDialogueList as $item) {
                    $res['sampleDialogueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->weights) {
            $res['weights'] = null !== $this->weights ? $this->weights->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAICoachScriptResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assessmentScope'])) {
            $model->assessmentScope = $map['assessmentScope'];
        }
        if (isset($map['completeStrategy'])) {
            $model->completeStrategy = completeStrategy::fromMap($map['completeStrategy']);
        }
        if (isset($map['coverUrl'])) {
            $model->coverUrl = $map['coverUrl'];
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
            $model->expressiveness = $map['expressiveness'];
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
                $model->interactionInputTypes = $map['interactionInputTypes'];
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
        if (isset($map['orderAckFlag'])) {
            $model->orderAckFlag = $map['orderAckFlag'];
        }
        if (isset($map['pointDeductionRuleList'])) {
            if (!empty($map['pointDeductionRuleList'])) {
                $model->pointDeductionRuleList = [];
                $n                             = 0;
                foreach ($map['pointDeductionRuleList'] as $item) {
                    $model->pointDeductionRuleList[$n++] = null !== $item ? pointDeductionRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['points'])) {
            if (!empty($map['points'])) {
                $model->points = [];
                $n             = 0;
                foreach ($map['points'] as $item) {
                    $model->points[$n++] = null !== $item ? points::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['sampleDialogueList'])) {
            if (!empty($map['sampleDialogueList'])) {
                $model->sampleDialogueList = [];
                $n                         = 0;
                foreach ($map['sampleDialogueList'] as $item) {
                    $model->sampleDialogueList[$n++] = null !== $item ? sampleDialogueList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['weights'])) {
            $model->weights = weights::fromMap($map['weights']);
        }

        return $model;
    }
}

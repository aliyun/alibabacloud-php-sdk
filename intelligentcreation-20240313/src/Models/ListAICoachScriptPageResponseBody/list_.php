<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\completeStrategy;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\sampleDialogueList;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\scoreConfig;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\weights;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $appendQuestionFlag;

    /**
     * @var string
     */
    public $assessmentScope;

    /**
     * @var completeStrategy
     */
    public $completeStrategy;

    /**
     * @example https://oss-ata.alibaba.com/front/live/banner1.png
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @var bool
     */
    public $dialogueTextFlag;

    /**
     * @var bool
     */
    public $dialogueTipFlag;

    /**
     * @var bool
     */
    public $evaluateReportFlag;

    /**
     * @var string[]
     */
    public $expressiveness;

    /**
     * @example 2024-12-25 14:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-12-25 14:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example student
     *
     * @var string
     */
    public $initiator;

    /**
     * @example 4
     *
     * @var string
     */
    public $interactionType;

    /**
     * @var string
     */
    public $introduce;

    /**
     * @example prod-ydsf
     *
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $orderAckFlag;

    /**
     * @var sampleDialogueList[]
     */
    public $sampleDialogueList;

    /**
     * @var scoreConfig
     */
    public $scoreConfig;

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
     * @var bool
     */
    public $studentThinkTimeFlag;

    /**
     * @var int
     */
    public $type;

    /**
     * @var weights
     */
    public $weights;
    protected $_name = [
        'appendQuestionFlag'   => 'appendQuestionFlag',
        'assessmentScope'      => 'assessmentScope',
        'completeStrategy'     => 'completeStrategy',
        'coverUrl'             => 'coverUrl',
        'dialogueTextFlag'     => 'dialogueTextFlag',
        'dialogueTipFlag'      => 'dialogueTipFlag',
        'evaluateReportFlag'   => 'evaluateReportFlag',
        'expressiveness'       => 'expressiveness',
        'gmtCreate'            => 'gmtCreate',
        'gmtModified'          => 'gmtModified',
        'initiator'            => 'initiator',
        'interactionType'      => 'interactionType',
        'introduce'            => 'introduce',
        'name'                 => 'name',
        'orderAckFlag'         => 'orderAckFlag',
        'sampleDialogueList'   => 'sampleDialogueList',
        'scoreConfig'          => 'scoreConfig',
        'scriptRecordId'       => 'scriptRecordId',
        'sparringTipContent'   => 'sparringTipContent',
        'sparringTipTitle'     => 'sparringTipTitle',
        'status'               => 'status',
        'studentThinkTimeFlag' => 'studentThinkTimeFlag',
        'type'                 => 'type',
        'weights'              => 'weights',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appendQuestionFlag) {
            $res['appendQuestionFlag'] = $this->appendQuestionFlag;
        }
        if (null !== $this->assessmentScope) {
            $res['assessmentScope'] = $this->assessmentScope;
        }
        if (null !== $this->completeStrategy) {
            $res['completeStrategy'] = null !== $this->completeStrategy ? $this->completeStrategy->toMap() : null;
        }
        if (null !== $this->coverUrl) {
            $res['coverUrl'] = $this->coverUrl;
        }
        if (null !== $this->dialogueTextFlag) {
            $res['dialogueTextFlag'] = $this->dialogueTextFlag;
        }
        if (null !== $this->dialogueTipFlag) {
            $res['dialogueTipFlag'] = $this->dialogueTipFlag;
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
        if (null !== $this->sampleDialogueList) {
            $res['sampleDialogueList'] = [];
            if (null !== $this->sampleDialogueList && \is_array($this->sampleDialogueList)) {
                $n = 0;
                foreach ($this->sampleDialogueList as $item) {
                    $res['sampleDialogueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scoreConfig) {
            $res['scoreConfig'] = null !== $this->scoreConfig ? $this->scoreConfig->toMap() : null;
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
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appendQuestionFlag'])) {
            $model->appendQuestionFlag = $map['appendQuestionFlag'];
        }
        if (isset($map['assessmentScope'])) {
            $model->assessmentScope = $map['assessmentScope'];
        }
        if (isset($map['completeStrategy'])) {
            $model->completeStrategy = completeStrategy::fromMap($map['completeStrategy']);
        }
        if (isset($map['coverUrl'])) {
            $model->coverUrl = $map['coverUrl'];
        }
        if (isset($map['dialogueTextFlag'])) {
            $model->dialogueTextFlag = $map['dialogueTextFlag'];
        }
        if (isset($map['dialogueTipFlag'])) {
            $model->dialogueTipFlag = $map['dialogueTipFlag'];
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
        if (isset($map['sampleDialogueList'])) {
            if (!empty($map['sampleDialogueList'])) {
                $model->sampleDialogueList = [];
                $n                         = 0;
                foreach ($map['sampleDialogueList'] as $item) {
                    $model->sampleDialogueList[$n++] = null !== $item ? sampleDialogueList::fromMap($item) : $item;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['weights'])) {
            $model->weights = weights::fromMap($map['weights']);
        }

        return $model;
    }
}

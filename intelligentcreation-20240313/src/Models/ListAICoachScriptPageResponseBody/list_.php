<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\completeStrategy;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\sampleDialogueList;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\scoreConfig;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\weights;

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
     * @var string
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
        if (null !== $this->completeStrategy) {
            $this->completeStrategy->validate();
        }
        if (\is_array($this->expressiveness)) {
            Model::validateArray($this->expressiveness);
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
        if (null !== $this->appendQuestionFlag) {
            $res['appendQuestionFlag'] = $this->appendQuestionFlag;
        }

        if (null !== $this->assessmentScope) {
            $res['assessmentScope'] = $this->assessmentScope;
        }

        if (null !== $this->completeStrategy) {
            $res['completeStrategy'] = null !== $this->completeStrategy ? $this->completeStrategy->toArray($noStream) : $this->completeStrategy;
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
            if (\is_array($this->expressiveness)) {
                $res['expressiveness'] = [];
                foreach ($this->expressiveness as $key1 => $value1) {
                    $res['expressiveness'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->sampleDialogueList)) {
                $res['sampleDialogueList'] = [];
                $n1                        = 0;
                foreach ($this->sampleDialogueList as $item1) {
                    $res['sampleDialogueList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
            if (!empty($map['expressiveness'])) {
                $model->expressiveness = [];
                foreach ($map['expressiveness'] as $key1 => $value1) {
                    $model->expressiveness[$key1] = $value1;
                }
            }
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
                $n1                        = 0;
                foreach ($map['sampleDialogueList'] as $item1) {
                    $model->sampleDialogueList[$n1++] = sampleDialogueList::fromMap($item1);
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

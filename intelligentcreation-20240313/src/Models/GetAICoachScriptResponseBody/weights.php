<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody;

use AlibabaCloud\Dara\Model;

class weights extends Model
{
    /**
     * @var int
     */
    public $abilityEvaluation;

    /**
     * @var bool
     */
    public $abilityEvaluationEnabled;

    /**
     * @var int
     */
    public $assessmentPoint;

    /**
     * @var bool
     */
    public $assessmentPointEnabled;

    /**
     * @var bool
     */
    public $customReplyRuleEnabled;

    /**
     * @var int
     */
    public $expressiveness;

    /**
     * @var bool
     */
    public $expressivenessEnabled;

    /**
     * @var int
     */
    public $pointDeductionRule;

    /**
     * @var bool
     */
    public $pointDeductionRuleEnabled;

    /**
     * @var bool
     */
    public $similarPronunciationScoringEnabled;

    /**
     * @var int
     */
    public $standard;

    /**
     * @var bool
     */
    public $standardEnabled;
    protected $_name = [
        'abilityEvaluation' => 'abilityEvaluation',
        'abilityEvaluationEnabled' => 'abilityEvaluationEnabled',
        'assessmentPoint' => 'assessmentPoint',
        'assessmentPointEnabled' => 'assessmentPointEnabled',
        'customReplyRuleEnabled' => 'customReplyRuleEnabled',
        'expressiveness' => 'expressiveness',
        'expressivenessEnabled' => 'expressivenessEnabled',
        'pointDeductionRule' => 'pointDeductionRule',
        'pointDeductionRuleEnabled' => 'pointDeductionRuleEnabled',
        'similarPronunciationScoringEnabled' => 'similarPronunciationScoringEnabled',
        'standard' => 'standard',
        'standardEnabled' => 'standardEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abilityEvaluation) {
            $res['abilityEvaluation'] = $this->abilityEvaluation;
        }

        if (null !== $this->abilityEvaluationEnabled) {
            $res['abilityEvaluationEnabled'] = $this->abilityEvaluationEnabled;
        }

        if (null !== $this->assessmentPoint) {
            $res['assessmentPoint'] = $this->assessmentPoint;
        }

        if (null !== $this->assessmentPointEnabled) {
            $res['assessmentPointEnabled'] = $this->assessmentPointEnabled;
        }

        if (null !== $this->customReplyRuleEnabled) {
            $res['customReplyRuleEnabled'] = $this->customReplyRuleEnabled;
        }

        if (null !== $this->expressiveness) {
            $res['expressiveness'] = $this->expressiveness;
        }

        if (null !== $this->expressivenessEnabled) {
            $res['expressivenessEnabled'] = $this->expressivenessEnabled;
        }

        if (null !== $this->pointDeductionRule) {
            $res['pointDeductionRule'] = $this->pointDeductionRule;
        }

        if (null !== $this->pointDeductionRuleEnabled) {
            $res['pointDeductionRuleEnabled'] = $this->pointDeductionRuleEnabled;
        }

        if (null !== $this->similarPronunciationScoringEnabled) {
            $res['similarPronunciationScoringEnabled'] = $this->similarPronunciationScoringEnabled;
        }

        if (null !== $this->standard) {
            $res['standard'] = $this->standard;
        }

        if (null !== $this->standardEnabled) {
            $res['standardEnabled'] = $this->standardEnabled;
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
        if (isset($map['abilityEvaluation'])) {
            $model->abilityEvaluation = $map['abilityEvaluation'];
        }

        if (isset($map['abilityEvaluationEnabled'])) {
            $model->abilityEvaluationEnabled = $map['abilityEvaluationEnabled'];
        }

        if (isset($map['assessmentPoint'])) {
            $model->assessmentPoint = $map['assessmentPoint'];
        }

        if (isset($map['assessmentPointEnabled'])) {
            $model->assessmentPointEnabled = $map['assessmentPointEnabled'];
        }

        if (isset($map['customReplyRuleEnabled'])) {
            $model->customReplyRuleEnabled = $map['customReplyRuleEnabled'];
        }

        if (isset($map['expressiveness'])) {
            $model->expressiveness = $map['expressiveness'];
        }

        if (isset($map['expressivenessEnabled'])) {
            $model->expressivenessEnabled = $map['expressivenessEnabled'];
        }

        if (isset($map['pointDeductionRule'])) {
            $model->pointDeductionRule = $map['pointDeductionRule'];
        }

        if (isset($map['pointDeductionRuleEnabled'])) {
            $model->pointDeductionRuleEnabled = $map['pointDeductionRuleEnabled'];
        }

        if (isset($map['similarPronunciationScoringEnabled'])) {
            $model->similarPronunciationScoringEnabled = $map['similarPronunciationScoringEnabled'];
        }

        if (isset($map['standard'])) {
            $model->standard = $map['standard'];
        }

        if (isset($map['standardEnabled'])) {
            $model->standardEnabled = $map['standardEnabled'];
        }

        return $model;
    }
}

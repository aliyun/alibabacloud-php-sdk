<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class DetachDataQualityRulesFromEvaluationTaskShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $dataQualityEvaluationTaskId;

    /**
     * @var string
     */
    public $dataQualityRuleIdsShrink;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'dataQualityEvaluationTaskId' => 'DataQualityEvaluationTaskId',
        'dataQualityRuleIdsShrink' => 'DataQualityRuleIds',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityEvaluationTaskId) {
            $res['DataQualityEvaluationTaskId'] = $this->dataQualityEvaluationTaskId;
        }

        if (null !== $this->dataQualityRuleIdsShrink) {
            $res['DataQualityRuleIds'] = $this->dataQualityRuleIdsShrink;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['DataQualityEvaluationTaskId'])) {
            $model->dataQualityEvaluationTaskId = $map['DataQualityEvaluationTaskId'];
        }

        if (isset($map['DataQualityRuleIds'])) {
            $model->dataQualityRuleIdsShrink = $map['DataQualityRuleIds'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

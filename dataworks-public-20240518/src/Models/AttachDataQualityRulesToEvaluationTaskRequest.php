<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class AttachDataQualityRulesToEvaluationTaskRequest extends Model
{
    /**
     * @var int
     */
    public $dataQualityEvaluationTaskId;
    /**
     * @var int[]
     */
    public $dataQualityRuleIds;
    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'dataQualityEvaluationTaskId' => 'DataQualityEvaluationTaskId',
        'dataQualityRuleIds'          => 'DataQualityRuleIds',
        'projectId'                   => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->dataQualityRuleIds)) {
            Model::validateArray($this->dataQualityRuleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityEvaluationTaskId) {
            $res['DataQualityEvaluationTaskId'] = $this->dataQualityEvaluationTaskId;
        }

        if (null !== $this->dataQualityRuleIds) {
            if (\is_array($this->dataQualityRuleIds)) {
                $res['DataQualityRuleIds'] = [];
                $n1                        = 0;
                foreach ($this->dataQualityRuleIds as $item1) {
                    $res['DataQualityRuleIds'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['DataQualityRuleIds'])) {
                $model->dataQualityRuleIds = [];
                $n1                        = 0;
                foreach ($map['DataQualityRuleIds'] as $item1) {
                    $model->dataQualityRuleIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class DetachDataQualityRulesFromEvaluationTaskShrinkRequest extends Model
{
    /**
     * @description The ID of the data quality monitoring task that is associated with the rule.
     *
     * This parameter is required.
     *
     * @example 10000
     *
     * @var int
     */
    public $dataQualityEvaluationTaskId;

    /**
     * @description The IDs of the monitoring rules.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $dataQualityRuleIdsShrink;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the workspace configuration page to obtain the workspace ID.
     *
     * This parameter is required.
     *
     * @example 10002
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'dataQualityEvaluationTaskId' => 'DataQualityEvaluationTaskId',
        'dataQualityRuleIdsShrink' => 'DataQualityRuleIds',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DetachDataQualityRulesFromEvaluationTaskShrinkRequest
     */
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

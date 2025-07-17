<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class AttachDataQualityRulesToEvaluationTaskRequest extends Model
{
    /**
     * @description The ID of the data quality monitoring task that is associated with the rule.
     *
     * This parameter is required.
     *
     * @example 200001
     *
     * @var int
     */
    public $dataQualityEvaluationTaskId;

    /**
     * @description The IDs of the monitoring rules.
     *
     * This parameter is required.
     *
     * @var int[]
     */
    public $dataQualityRuleIds;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID. You must configure this parameter to specify the DataWorks workspace to which the API operation is applied.
     *
     * This parameter is required.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'dataQualityEvaluationTaskId' => 'DataQualityEvaluationTaskId',
        'dataQualityRuleIds' => 'DataQualityRuleIds',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityEvaluationTaskId) {
            $res['DataQualityEvaluationTaskId'] = $this->dataQualityEvaluationTaskId;
        }
        if (null !== $this->dataQualityRuleIds) {
            $res['DataQualityRuleIds'] = $this->dataQualityRuleIds;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachDataQualityRulesToEvaluationTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataQualityEvaluationTaskId'])) {
            $model->dataQualityEvaluationTaskId = $map['DataQualityEvaluationTaskId'];
        }
        if (isset($map['DataQualityRuleIds'])) {
            if (!empty($map['DataQualityRuleIds'])) {
                $model->dataQualityRuleIds = $map['DataQualityRuleIds'];
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

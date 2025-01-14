<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListDataQualityResultsRequest extends Model
{
    /**
     * @description The beginning of the time range to query.
     *
     * @example 2024-05-01
     *
     * @var string
     */
    public $bizdateFrom;

    /**
     * @description The end of the time range to query.
     *
     * @example 2024-05-04
     *
     * @var string
     */
    public $bizdateTo;

    /**
     * @example 1710239005403
     *
     * @var int
     */
    public $createTimeFrom;

    /**
     * @example 1710239005403
     *
     * @var int
     */
    public $createTimeTo;

    /**
     * @example 200001
     *
     * @var int
     */
    public $dataQualityEvaluationTaskId;

    /**
     * @example 10001
     *
     * @var int
     */
    public $dataQualityEvaluationTaskInstanceId;

    /**
     * @example 100001
     *
     * @var int
     */
    public $dataQualityRuleId;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The DataWorks workspace ID.
     *
     * @example 100
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'bizdateFrom'                         => 'BizdateFrom',
        'bizdateTo'                           => 'BizdateTo',
        'createTimeFrom'                      => 'CreateTimeFrom',
        'createTimeTo'                        => 'CreateTimeTo',
        'dataQualityEvaluationTaskId'         => 'DataQualityEvaluationTaskId',
        'dataQualityEvaluationTaskInstanceId' => 'DataQualityEvaluationTaskInstanceId',
        'dataQualityRuleId'                   => 'DataQualityRuleId',
        'pageNumber'                          => 'PageNumber',
        'pageSize'                            => 'PageSize',
        'projectId'                           => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizdateFrom) {
            $res['BizdateFrom'] = $this->bizdateFrom;
        }
        if (null !== $this->bizdateTo) {
            $res['BizdateTo'] = $this->bizdateTo;
        }
        if (null !== $this->createTimeFrom) {
            $res['CreateTimeFrom'] = $this->createTimeFrom;
        }
        if (null !== $this->createTimeTo) {
            $res['CreateTimeTo'] = $this->createTimeTo;
        }
        if (null !== $this->dataQualityEvaluationTaskId) {
            $res['DataQualityEvaluationTaskId'] = $this->dataQualityEvaluationTaskId;
        }
        if (null !== $this->dataQualityEvaluationTaskInstanceId) {
            $res['DataQualityEvaluationTaskInstanceId'] = $this->dataQualityEvaluationTaskInstanceId;
        }
        if (null !== $this->dataQualityRuleId) {
            $res['DataQualityRuleId'] = $this->dataQualityRuleId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataQualityResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizdateFrom'])) {
            $model->bizdateFrom = $map['BizdateFrom'];
        }
        if (isset($map['BizdateTo'])) {
            $model->bizdateTo = $map['BizdateTo'];
        }
        if (isset($map['CreateTimeFrom'])) {
            $model->createTimeFrom = $map['CreateTimeFrom'];
        }
        if (isset($map['CreateTimeTo'])) {
            $model->createTimeTo = $map['CreateTimeTo'];
        }
        if (isset($map['DataQualityEvaluationTaskId'])) {
            $model->dataQualityEvaluationTaskId = $map['DataQualityEvaluationTaskId'];
        }
        if (isset($map['DataQualityEvaluationTaskInstanceId'])) {
            $model->dataQualityEvaluationTaskInstanceId = $map['DataQualityEvaluationTaskInstanceId'];
        }
        if (isset($map['DataQualityRuleId'])) {
            $model->dataQualityRuleId = $map['DataQualityRuleId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class ListEvalResultsShrinkRequest extends Model
{
    /**
     * @description The task ID of the evaluation task to which the trace belongs.
     *
     * @example 0bb05ae2a2dc11ef9757faaa2a1ec0c6
     *
     * @var string
     */
    public $evaluationId;

    /**
     * @description The keyword to query from the evaluation inputs.
     *
     * @example foo
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The page number. Page starts from page 1. Default value: 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: 50. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The trace data IDs.
     *
     * @var string
     */
    public $recordIdsShrink;
    protected $_name = [
        'evaluationId' => 'EvaluationId',
        'keyword' => 'Keyword',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'recordIdsShrink' => 'RecordIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluationId) {
            $res['EvaluationId'] = $this->evaluationId;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->recordIdsShrink) {
            $res['RecordIds'] = $this->recordIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEvalResultsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluationId'])) {
            $model->evaluationId = $map['EvaluationId'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RecordIds'])) {
            $model->recordIdsShrink = $map['RecordIds'];
        }

        return $model;
    }
}

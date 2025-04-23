<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Dara\Model;

class ListOnlineEvalTaskResultsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $evaluationId;

    /**
     * @var bool
     */
    public $mostRecentResultsOnly;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $traceIdsShrink;
    protected $_name = [
        'evaluationId' => 'EvaluationId',
        'mostRecentResultsOnly' => 'MostRecentResultsOnly',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'traceIdsShrink' => 'TraceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evaluationId) {
            $res['EvaluationId'] = $this->evaluationId;
        }

        if (null !== $this->mostRecentResultsOnly) {
            $res['MostRecentResultsOnly'] = $this->mostRecentResultsOnly;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->traceIdsShrink) {
            $res['TraceIds'] = $this->traceIdsShrink;
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
        if (isset($map['EvaluationId'])) {
            $model->evaluationId = $map['EvaluationId'];
        }

        if (isset($map['MostRecentResultsOnly'])) {
            $model->mostRecentResultsOnly = $map['MostRecentResultsOnly'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TraceIds'])) {
            $model->traceIdsShrink = $map['TraceIds'];
        }

        return $model;
    }
}

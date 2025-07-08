<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Dara\Model;

class ListEvalResultsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $evaluationId;

    /**
     * @var string
     */
    public $keyword;

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
    public $recordIdsShrink;
    protected $_name = [
        'evaluationId' => 'EvaluationId',
        'keyword' => 'Keyword',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'recordIdsShrink' => 'RecordIds',
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

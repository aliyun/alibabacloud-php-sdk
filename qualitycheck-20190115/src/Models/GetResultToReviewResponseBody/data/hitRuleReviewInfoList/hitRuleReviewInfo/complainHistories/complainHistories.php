<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\complainHistories;

use AlibabaCloud\Tea\Model;

class complainHistories extends Model
{
    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var int
     */
    public $operator;

    /**
     * @var string
     */
    public $operationTime;

    /**
     * @var int
     */
    public $operationType;
    protected $_name = [
        'operatorName'  => 'OperatorName',
        'comments'      => 'Comments',
        'operator'      => 'Operator',
        'operationTime' => 'OperationTime',
        'operationType' => 'OperationType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->operationTime) {
            $res['OperationTime'] = $this->operationTime;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complainHistories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OperationTime'])) {
            $model->operationTime = $map['OperationTime'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        return $model;
    }
}

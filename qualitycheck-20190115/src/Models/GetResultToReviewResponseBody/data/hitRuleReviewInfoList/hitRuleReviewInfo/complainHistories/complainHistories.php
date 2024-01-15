<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\complainHistories;

use AlibabaCloud\Tea\Model;

class complainHistories extends Model
{
    /**
     * @var string
     */
    public $comments;

    /**
     * @example 2020-10-16T11:13Z
     *
     * @var string
     */
    public $operationTime;

    /**
     * @example 5
     *
     * @var int
     */
    public $operationType;

    /**
     * @example 123456
     *
     * @var int
     */
    public $operator;

    /**
     * @var string
     */
    public $operatorName;
    protected $_name = [
        'comments'      => 'Comments',
        'operationTime' => 'OperationTime',
        'operationType' => 'OperationType',
        'operator'      => 'Operator',
        'operatorName'  => 'OperatorName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->operationTime) {
            $res['OperationTime'] = $this->operationTime;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
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
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['OperationTime'])) {
            $model->operationTime = $map['OperationTime'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetPhysicalNodeOperationLogResponseBody;

use AlibabaCloud\Dara\Model;

class operationLogList extends Model
{
    /**
     * @var string
     */
    public $context;

    /**
     * @var string
     */
    public $operationTime;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $operatorName;
    protected $_name = [
        'context' => 'Context',
        'operationTime' => 'OperationTime',
        'operationType' => 'OperationType',
        'operator' => 'Operator',
        'operatorName' => 'OperatorName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = $this->context;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
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

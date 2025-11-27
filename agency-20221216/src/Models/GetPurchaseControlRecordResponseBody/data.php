<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetPurchaseControlRecordResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $changedType;

    /**
     * @var string
     */
    public $operationPath;

    /**
     * @var string
     */
    public $operationTime;

    /**
     * @var string
     */
    public $operator;
    protected $_name = [
        'changedType' => 'ChangedType',
        'operationPath' => 'OperationPath',
        'operationTime' => 'OperationTime',
        'operator' => 'Operator',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changedType) {
            $res['ChangedType'] = $this->changedType;
        }

        if (null !== $this->operationPath) {
            $res['OperationPath'] = $this->operationPath;
        }

        if (null !== $this->operationTime) {
            $res['OperationTime'] = $this->operationTime;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
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
        if (isset($map['ChangedType'])) {
            $model->changedType = $map['ChangedType'];
        }

        if (isset($map['OperationPath'])) {
            $model->operationPath = $map['OperationPath'];
        }

        if (isset($map['OperationTime'])) {
            $model->operationTime = $map['OperationTime'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetShutdownPolicyRecordResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $currentPolicy;

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

    /**
     * @var string
     */
    public $previousPolicy;
    protected $_name = [
        'currentPolicy' => 'CurrentPolicy',
        'operationPath' => 'OperationPath',
        'operationTime' => 'OperationTime',
        'operator' => 'Operator',
        'previousPolicy' => 'PreviousPolicy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPolicy) {
            $res['CurrentPolicy'] = $this->currentPolicy;
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

        if (null !== $this->previousPolicy) {
            $res['PreviousPolicy'] = $this->previousPolicy;
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
        if (isset($map['CurrentPolicy'])) {
            $model->currentPolicy = $map['CurrentPolicy'];
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

        if (isset($map['PreviousPolicy'])) {
            $model->previousPolicy = $map['PreviousPolicy'];
        }

        return $model;
    }
}

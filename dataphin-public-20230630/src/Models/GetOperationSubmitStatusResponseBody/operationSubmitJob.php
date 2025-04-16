<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetOperationSubmitStatusResponseBody;

use AlibabaCloud\Dara\Model;

class operationSubmitJob extends Model
{
    /**
     * @var string
     */
    public $externalBizId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $operationStatus;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $progress;
    protected $_name = [
        'externalBizId' => 'ExternalBizId',
        'jobId' => 'JobId',
        'operation' => 'Operation',
        'operationStatus' => 'OperationStatus',
        'operator' => 'Operator',
        'progress' => 'Progress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalBizId) {
            $res['ExternalBizId'] = $this->externalBizId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->operationStatus) {
            $res['OperationStatus'] = $this->operationStatus;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
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
        if (isset($map['ExternalBizId'])) {
            $model->externalBizId = $map['ExternalBizId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['OperationStatus'])) {
            $model->operationStatus = $map['OperationStatus'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        return $model;
    }
}

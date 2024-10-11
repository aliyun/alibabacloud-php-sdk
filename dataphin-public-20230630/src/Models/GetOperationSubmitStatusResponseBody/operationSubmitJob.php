<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetOperationSubmitStatusResponseBody;

use AlibabaCloud\Tea\Model;

class operationSubmitJob extends Model
{
    /**
     * @example f_122_232342
     *
     * @var string
     */
    public $externalBizId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $jobId;

    /**
     * @example SUPPLY_DATA
     *
     * @var string
     */
    public $operation;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $operationStatus;

    /**
     * @example 132344
     *
     * @var string
     */
    public $operator;

    /**
     * @example 80
     *
     * @var string
     */
    public $progress;
    protected $_name = [
        'externalBizId'   => 'ExternalBizId',
        'jobId'           => 'JobId',
        'operation'       => 'Operation',
        'operationStatus' => 'OperationStatus',
        'operator'        => 'Operator',
        'progress'        => 'Progress',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return operationSubmitJob
     */
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

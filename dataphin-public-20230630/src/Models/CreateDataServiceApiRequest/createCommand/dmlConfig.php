<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest\createCommand;

use AlibabaCloud\Dara\Model;

class dmlConfig extends Model
{
    /**
     * @var int
     */
    public $batchInputDataSize;

    /**
     * @var int
     */
    public $dataVolumeType;

    /**
     * @var int
     */
    public $errorHandlingType;

    /**
     * @var int
     */
    public $maxInputDataSize;

    /**
     * @var int
     */
    public $parallelNum;

    /**
     * @var int
     */
    public $transactionType;
    protected $_name = [
        'batchInputDataSize' => 'BatchInputDataSize',
        'dataVolumeType' => 'DataVolumeType',
        'errorHandlingType' => 'ErrorHandlingType',
        'maxInputDataSize' => 'MaxInputDataSize',
        'parallelNum' => 'ParallelNum',
        'transactionType' => 'TransactionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchInputDataSize) {
            $res['BatchInputDataSize'] = $this->batchInputDataSize;
        }

        if (null !== $this->dataVolumeType) {
            $res['DataVolumeType'] = $this->dataVolumeType;
        }

        if (null !== $this->errorHandlingType) {
            $res['ErrorHandlingType'] = $this->errorHandlingType;
        }

        if (null !== $this->maxInputDataSize) {
            $res['MaxInputDataSize'] = $this->maxInputDataSize;
        }

        if (null !== $this->parallelNum) {
            $res['ParallelNum'] = $this->parallelNum;
        }

        if (null !== $this->transactionType) {
            $res['TransactionType'] = $this->transactionType;
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
        if (isset($map['BatchInputDataSize'])) {
            $model->batchInputDataSize = $map['BatchInputDataSize'];
        }

        if (isset($map['DataVolumeType'])) {
            $model->dataVolumeType = $map['DataVolumeType'];
        }

        if (isset($map['ErrorHandlingType'])) {
            $model->errorHandlingType = $map['ErrorHandlingType'];
        }

        if (isset($map['MaxInputDataSize'])) {
            $model->maxInputDataSize = $map['MaxInputDataSize'];
        }

        if (isset($map['ParallelNum'])) {
            $model->parallelNum = $map['ParallelNum'];
        }

        if (isset($map['TransactionType'])) {
            $model->transactionType = $map['TransactionType'];
        }

        return $model;
    }
}

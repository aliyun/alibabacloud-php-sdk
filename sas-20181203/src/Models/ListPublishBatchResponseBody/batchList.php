<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListPublishBatchResponseBody;

use AlibabaCloud\Dara\Model;

class batchList extends Model
{
    /**
     * @var int
     */
    public $batchId;

    /**
     * @var int
     */
    public $batchInterval;

    /**
     * @var string
     */
    public $batchName;

    /**
     * @var int
     */
    public $batchNo;

    /**
     * @var int
     */
    public $batchProcess;

    /**
     * @var int
     */
    public $batchTotal;

    /**
     * @var int
     */
    public $operationBase;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'batchId' => 'BatchId',
        'batchInterval' => 'BatchInterval',
        'batchName' => 'BatchName',
        'batchNo' => 'BatchNo',
        'batchProcess' => 'BatchProcess',
        'batchTotal' => 'BatchTotal',
        'operationBase' => 'OperationBase',
        'status' => 'Status',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->batchInterval) {
            $res['BatchInterval'] = $this->batchInterval;
        }

        if (null !== $this->batchName) {
            $res['BatchName'] = $this->batchName;
        }

        if (null !== $this->batchNo) {
            $res['BatchNo'] = $this->batchNo;
        }

        if (null !== $this->batchProcess) {
            $res['BatchProcess'] = $this->batchProcess;
        }

        if (null !== $this->batchTotal) {
            $res['BatchTotal'] = $this->batchTotal;
        }

        if (null !== $this->operationBase) {
            $res['OperationBase'] = $this->operationBase;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['BatchInterval'])) {
            $model->batchInterval = $map['BatchInterval'];
        }

        if (isset($map['BatchName'])) {
            $model->batchName = $map['BatchName'];
        }

        if (isset($map['BatchNo'])) {
            $model->batchNo = $map['BatchNo'];
        }

        if (isset($map['BatchProcess'])) {
            $model->batchProcess = $map['BatchProcess'];
        }

        if (isset($map['BatchTotal'])) {
            $model->batchTotal = $map['BatchTotal'];
        }

        if (isset($map['OperationBase'])) {
            $model->operationBase = $map['OperationBase'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

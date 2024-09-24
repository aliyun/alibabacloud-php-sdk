<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListPublishBatchResponseBody;

use AlibabaCloud\Tea\Model;

class batchList extends Model
{
    /**
     * @example 1371
     *
     * @var int
     */
    public $batchId;

    /**
     * @example 12
     *
     * @var int
     */
    public $batchInterval;

    /**
     * @var string
     */
    public $batchName;

    /**
     * @example 2147483647
     *
     * @var int
     */
    public $batchNo;

    /**
     * @example 12
     *
     * @var int
     */
    public $batchProcess;

    /**
     * @example 3
     *
     * @var int
     */
    public $batchTotal;

    /**
     * @example 0
     *
     * @var int
     */
    public $operationBase;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 0.0.9
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'batchId'       => 'BatchId',
        'batchInterval' => 'BatchInterval',
        'batchName'     => 'BatchName',
        'batchNo'       => 'BatchNo',
        'batchProcess'  => 'BatchProcess',
        'batchTotal'    => 'BatchTotal',
        'operationBase' => 'OperationBase',
        'status'        => 'Status',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return batchList
     */
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

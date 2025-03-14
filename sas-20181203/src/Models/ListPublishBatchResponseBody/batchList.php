<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListPublishBatchResponseBody;

use AlibabaCloud\Tea\Model;

class batchList extends Model
{
    /**
     * @description The ID of the release batch.
     *
     * @example 1371
     *
     * @var int
     */
    public $batchId;

    /**
     * @description The interval between two release batches. Unit: hours.
     *
     * @example 12
     *
     * @var int
     */
    public $batchInterval;

    /**
     * @description The name of the release batch.
     *
     * @example test
     *
     * @var string
     */
    public $batchName;

    /**
     * @description The current batch number during a batch release.
     *
     * @example 2147483647
     *
     * @var int
     */
    public $batchNo;

    /**
     * @description The progress of the release batch. This parameter indicates the number of servers that are upgraded in the release batch.
     *
     * @example 12
     *
     * @var int
     */
    public $batchProcess;

    /**
     * @description The total number of batches.
     *
     * @example 3
     *
     * @var int
     */
    public $batchTotal;

    /**
     * @description The asset selection dimension. Valid values:
     *
     *   **0**: instance.
     *   **1**: machine group.
     *   **2**: Virtual Private Cloud (VPC) ID.
     *
     * @example 0
     *
     * @var int
     */
    public $operationBase;

    /**
     * @description The publish status of the Security Center agent. Valid values:
     *
     *   **0**: not started.
     *   **1**: publishing.
     *   **2**: published.
     *   **3**: publish suspended.
     *   **4**: forcibly upgrading.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The destination version of the Security Center agent.
     *
     * @example 0.0.9
     *
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

    public function validate() {}

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

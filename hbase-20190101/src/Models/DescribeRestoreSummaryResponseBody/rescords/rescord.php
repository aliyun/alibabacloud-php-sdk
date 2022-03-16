<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSummaryResponseBody\rescords;

use AlibabaCloud\Tea\Model;

class rescord extends Model
{
    /**
     * @var string
     */
    public $bulkLoadProcess;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $hfileRestoreProcess;

    /**
     * @var string
     */
    public $logProcess;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $schemaProcess;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'bulkLoadProcess'     => 'BulkLoadProcess',
        'createTime'          => 'CreateTime',
        'finishTime'          => 'FinishTime',
        'hfileRestoreProcess' => 'HfileRestoreProcess',
        'logProcess'          => 'LogProcess',
        'recordId'            => 'RecordId',
        'schemaProcess'       => 'SchemaProcess',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bulkLoadProcess) {
            $res['BulkLoadProcess'] = $this->bulkLoadProcess;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->hfileRestoreProcess) {
            $res['HfileRestoreProcess'] = $this->hfileRestoreProcess;
        }
        if (null !== $this->logProcess) {
            $res['LogProcess'] = $this->logProcess;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->schemaProcess) {
            $res['SchemaProcess'] = $this->schemaProcess;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rescord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BulkLoadProcess'])) {
            $model->bulkLoadProcess = $map['BulkLoadProcess'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['HfileRestoreProcess'])) {
            $model->hfileRestoreProcess = $map['HfileRestoreProcess'];
        }
        if (isset($map['LogProcess'])) {
            $model->logProcess = $map['LogProcess'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['SchemaProcess'])) {
            $model->schemaProcess = $map['SchemaProcess'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

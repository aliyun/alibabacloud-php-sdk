<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupSummaryResponseBody\full\records;

use AlibabaCloud\Tea\Model;

class record extends Model
{
    /**
     * @example 2020-11-02T18:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1.2 kB
     *
     * @var string
     */
    public $dataSize;

    /**
     * @example 2020-11-02T18:02:04Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @example 1/1
     *
     * @var string
     */
    public $process;

    /**
     * @example 20201103020000
     *
     * @var string
     */
    public $recordId;

    /**
     * @example 0.00 MB/s
     *
     * @var string
     */
    public $speed;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataSize'   => 'DataSize',
        'finishTime' => 'FinishTime',
        'process'    => 'Process',
        'recordId'   => 'RecordId',
        'speed'      => 'Speed',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return record
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

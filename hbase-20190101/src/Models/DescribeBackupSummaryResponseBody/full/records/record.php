<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupSummaryResponseBody\full\records;

use AlibabaCloud\Tea\Model;

class record extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $process;

    /**
     * @var string
     */
    public $dataSize;

    /**
     * @var string
     */
    public $speed;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'status'     => 'Status',
        'finishTime' => 'FinishTime',
        'process'    => 'Process',
        'dataSize'   => 'DataSize',
        'speed'      => 'Speed',
        'recordId'   => 'RecordId',
        'createTime' => 'CreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}

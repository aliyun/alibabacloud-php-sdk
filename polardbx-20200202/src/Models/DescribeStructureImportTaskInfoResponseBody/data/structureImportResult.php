<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeStructureImportTaskInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class structureImportResult extends Model
{
    /**
     * @var string
     */
    public $exceptionDetail;

    /**
     * @var string
     */
    public $exceptionFullTableName;

    /**
     * @var int
     */
    public $finishedNum;

    /**
     * @var int
     */
    public $percentage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'exceptionDetail' => 'ExceptionDetail',
        'exceptionFullTableName' => 'ExceptionFullTableName',
        'finishedNum' => 'FinishedNum',
        'percentage' => 'Percentage',
        'status' => 'Status',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceptionDetail) {
            $res['ExceptionDetail'] = $this->exceptionDetail;
        }

        if (null !== $this->exceptionFullTableName) {
            $res['ExceptionFullTableName'] = $this->exceptionFullTableName;
        }

        if (null !== $this->finishedNum) {
            $res['FinishedNum'] = $this->finishedNum;
        }

        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['ExceptionDetail'])) {
            $model->exceptionDetail = $map['ExceptionDetail'];
        }

        if (isset($map['ExceptionFullTableName'])) {
            $model->exceptionFullTableName = $map['ExceptionFullTableName'];
        }

        if (isset($map['FinishedNum'])) {
            $model->finishedNum = $map['FinishedNum'];
        }

        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}

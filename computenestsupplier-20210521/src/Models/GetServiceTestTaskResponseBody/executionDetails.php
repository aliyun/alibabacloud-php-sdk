<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTestTaskResponseBody;

use AlibabaCloud\Dara\Model;

class executionDetails extends Model
{
    /**
     * @var string
     */
    public $caseName;

    /**
     * @var string
     */
    public $executionReport;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subTaskId;
    protected $_name = [
        'caseName' => 'CaseName',
        'executionReport' => 'ExecutionReport',
        'status' => 'Status',
        'subTaskId' => 'SubTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caseName) {
            $res['CaseName'] = $this->caseName;
        }

        if (null !== $this->executionReport) {
            $res['ExecutionReport'] = $this->executionReport;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subTaskId) {
            $res['SubTaskId'] = $this->subTaskId;
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
        if (isset($map['CaseName'])) {
            $model->caseName = $map['CaseName'];
        }

        if (isset($map['ExecutionReport'])) {
            $model->executionReport = $map['ExecutionReport'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubTaskId'])) {
            $model->subTaskId = $map['SubTaskId'];
        }

        return $model;
    }
}

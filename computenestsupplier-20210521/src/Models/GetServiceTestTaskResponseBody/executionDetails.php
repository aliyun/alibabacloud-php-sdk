<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTestTaskResponseBody;

use AlibabaCloud\Tea\Model;

class executionDetails extends Model
{
    /**
     * @description The service test case name.
     *
     * @example case1
     *
     * @var string
     */
    public $caseName;

    /**
     * @description The execution report
     *
     * @example -----------------------------------------------------------------------------
     *****************************************************************************
     * @var string
     */
    public $executionReport;

    /**
     * @description The sub task status.
     *
     * @example Runing
     *
     * @var string
     */
    public $status;

    /**
     * @description The sub task id.
     *
     * @example stt-xxxx
     *
     * @var string
     */
    public $subTaskId;
    protected $_name = [
        'caseName'        => 'CaseName',
        'executionReport' => 'ExecutionReport',
        'status'          => 'Status',
        'subTaskId'       => 'SubTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return executionDetails
     */
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

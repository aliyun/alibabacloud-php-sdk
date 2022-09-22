<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDiagnosticReportResponseBody\commandInvokeResults;
use AlibabaCloud\Tea\Model;

class CreateDiagnosticReportResponseBody extends Model
{
    /**
     * @var commandInvokeResults
     */
    public $commandInvokeResults;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'commandInvokeResults' => 'CommandInvokeResults',
        'createTime'           => 'CreateTime',
        'reportId'             => 'ReportId',
        'requestId'            => 'RequestId',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandInvokeResults) {
            $res['CommandInvokeResults'] = null !== $this->commandInvokeResults ? $this->commandInvokeResults->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiagnosticReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandInvokeResults'])) {
            $model->commandInvokeResults = commandInvokeResults::fromMap($map['CommandInvokeResults']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

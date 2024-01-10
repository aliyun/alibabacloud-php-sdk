<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListDiagnosticsResponseBody;

use AlibabaCloud\Tea\Model;

class diagnostics extends Model
{
    /**
     * @description The time when the diagnostic report was generated.
     *
     * @example 2022-08-01T02:23:55
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The keyword in the diagnosis.
     *
     * @example 047D84D9-D3EB-5DA8-87F1-9A7DD5598A5D
     *
     * @var string
     */
    public $diagnosticKey;

    /**
     * @description The product that is diagnosed.
     *
     * @example ros
     *
     * @var string
     */
    public $diagnosticProduct;

    /**
     * @description The ID of the diagnostic report.
     *
     * @example dr-2963bfbcac834f1a****
     *
     * @var string
     */
    public $reportId;

    /**
     * @description The diagnosis status.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'diagnosticKey'     => 'DiagnosticKey',
        'diagnosticProduct' => 'DiagnosticProduct',
        'reportId'          => 'ReportId',
        'status'            => 'Status',
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
        if (null !== $this->diagnosticKey) {
            $res['DiagnosticKey'] = $this->diagnosticKey;
        }
        if (null !== $this->diagnosticProduct) {
            $res['DiagnosticProduct'] = $this->diagnosticProduct;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnostics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DiagnosticKey'])) {
            $model->diagnosticKey = $map['DiagnosticKey'];
        }
        if (isset($map['DiagnosticProduct'])) {
            $model->diagnosticProduct = $map['DiagnosticProduct'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

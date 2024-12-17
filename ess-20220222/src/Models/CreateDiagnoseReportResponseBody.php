<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class CreateDiagnoseReportResponseBody extends Model
{
    /**
     * @description The unique ID of the diagnostic report.
     *
     * @example dr-uf6enpbnri1xhcy9qc7s
     *
     * @var string
     */
    public $reportId;

    /**
     * @description The ID of the request.
     *
     * @example 0189C6CB-07BA-5AFE-B533-D93892324774
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'reportId'  => 'ReportId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiagnoseReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

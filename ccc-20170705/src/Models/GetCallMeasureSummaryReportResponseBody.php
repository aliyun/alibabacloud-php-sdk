<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportResponseBody\numberReports;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportResponseBody\summaryReport;
use AlibabaCloud\Tea\Model;

class GetCallMeasureSummaryReportResponseBody extends Model
{
    /**
     * @var numberReports
     */
    public $numberReports;

    /**
     * @var summaryReport
     */
    public $summaryReport;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'numberReports'  => 'NumberReports',
        'summaryReport'  => 'SummaryReport',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'httpStatusCode' => 'HttpStatusCode',
        'code'           => 'Code',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->numberReports) {
            $res['NumberReports'] = null !== $this->numberReports ? $this->numberReports->toMap() : null;
        }
        if (null !== $this->summaryReport) {
            $res['SummaryReport'] = null !== $this->summaryReport ? $this->summaryReport->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCallMeasureSummaryReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NumberReports'])) {
            $model->numberReports = numberReports::fromMap($map['NumberReports']);
        }
        if (isset($map['SummaryReport'])) {
            $model->summaryReport = summaryReport::fromMap($map['SummaryReport']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

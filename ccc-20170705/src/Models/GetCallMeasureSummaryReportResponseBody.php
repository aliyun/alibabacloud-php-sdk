<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportResponseBody\numberReports;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportResponseBody\summaryReport;

class GetCallMeasureSummaryReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var numberReports
     */
    public $numberReports;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var summaryReport
     */
    public $summaryReport;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'numberReports' => 'NumberReports',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'summaryReport' => 'SummaryReport',
    ];

    public function validate()
    {
        if (null !== $this->numberReports) {
            $this->numberReports->validate();
        }
        if (null !== $this->summaryReport) {
            $this->summaryReport->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->numberReports) {
            $res['NumberReports'] = null !== $this->numberReports ? $this->numberReports->toArray($noStream) : $this->numberReports;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->summaryReport) {
            $res['SummaryReport'] = null !== $this->summaryReport ? $this->summaryReport->toArray($noStream) : $this->summaryReport;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NumberReports'])) {
            $model->numberReports = numberReports::fromMap($map['NumberReports']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['SummaryReport'])) {
            $model->summaryReport = summaryReport::fromMap($map['SummaryReport']);
        }

        return $model;
    }
}

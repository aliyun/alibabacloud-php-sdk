<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetDiagnosticResponseBody\diagnosticResult;
use AlibabaCloud\Tea\Model;

class GetDiagnosticResponseBody extends Model
{
    /**
     * @example Forbidden
     *
     * @var string
     */
    public $code;

    /**
     * @example 0938F60C-A2CA-5A2E-9983-03EB1E6D7AE2
     *
     * @var string
     */
    public $diagnosticKey;

    /**
     * @example ros
     *
     * @var string
     */
    public $diagnosticProduct;

    /**
     * @var diagnosticResult
     */
    public $diagnosticResult;

    /**
     * @example 2023-03-27T03:32:03Z
     *
     * @var string
     */
    public $diagnosticTime;

    /**
     * @example 200
     *
     * @var string
     */
    public $httpCode;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example The specified parameter ReportId is invalid, Can not find diagnostic report dr-5f6135782f104b0f****.
     *
     * @var string
     */
    public $message;

    /**
     * @example {\"RosActionMessages\": {\"Reason\": \"Fail to delete stack (fc966920-450a-456b-983c-deeaec8e****), as deletion protection is enabled.\", \"Recommend\": \"\"}}
     *
     * @var mixed[]
     */
    public $recommends;

    /**
     * @example dr-cc80afc48c8741e9****
     *
     * @var string
     */
    public $reportId;

    /**
     * @example 96A24844-9603-5E79-BDF4-EFD412FC5D4C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example Complete
     *
     * @var string
     */
    public $statusReason;

    /**
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'              => 'Code',
        'diagnosticKey'     => 'DiagnosticKey',
        'diagnosticProduct' => 'DiagnosticProduct',
        'diagnosticResult'  => 'DiagnosticResult',
        'diagnosticTime'    => 'DiagnosticTime',
        'httpCode'          => 'HttpCode',
        'httpStatusCode'    => 'HttpStatusCode',
        'message'           => 'Message',
        'recommends'        => 'Recommends',
        'reportId'          => 'ReportId',
        'requestId'         => 'RequestId',
        'status'            => 'Status',
        'statusReason'      => 'StatusReason',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->diagnosticKey) {
            $res['DiagnosticKey'] = $this->diagnosticKey;
        }
        if (null !== $this->diagnosticProduct) {
            $res['DiagnosticProduct'] = $this->diagnosticProduct;
        }
        if (null !== $this->diagnosticResult) {
            $res['DiagnosticResult'] = null !== $this->diagnosticResult ? $this->diagnosticResult->toMap() : null;
        }
        if (null !== $this->diagnosticTime) {
            $res['DiagnosticTime'] = $this->diagnosticTime;
        }
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->recommends) {
            $res['Recommends'] = $this->recommends;
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
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiagnosticResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DiagnosticKey'])) {
            $model->diagnosticKey = $map['DiagnosticKey'];
        }
        if (isset($map['DiagnosticProduct'])) {
            $model->diagnosticProduct = $map['DiagnosticProduct'];
        }
        if (isset($map['DiagnosticResult'])) {
            $model->diagnosticResult = diagnosticResult::fromMap($map['DiagnosticResult']);
        }
        if (isset($map['DiagnosticTime'])) {
            $model->diagnosticTime = $map['DiagnosticTime'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Recommends'])) {
            $model->recommends = $map['Recommends'];
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
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

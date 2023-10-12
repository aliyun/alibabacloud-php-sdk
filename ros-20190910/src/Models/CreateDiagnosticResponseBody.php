<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CreateDiagnosticResponseBody extends Model
{
    /**
     * @example Forbidden
     *
     * @var string
     */
    public $code;

    /**
     * @example Stack
     *
     * @var string
     */
    public $diagnosticType;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example You are not authorized to complete this action.
     *
     * @var string
     */
    public $message;

    /**
     * @example dr-e94e39a1274d44b6****
     *
     * @var string
     */
    public $reportId;

    /**
     * @example 943B24D7-1A67-55A4-B045-818F90693D3A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'diagnosticType' => 'DiagnosticType',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'reportId'       => 'ReportId',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
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
        if (null !== $this->diagnosticType) {
            $res['DiagnosticType'] = $this->diagnosticType;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiagnosticResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DiagnosticType'])) {
            $model->diagnosticType = $map['DiagnosticType'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

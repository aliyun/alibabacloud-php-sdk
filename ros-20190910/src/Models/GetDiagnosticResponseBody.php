<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetDiagnosticResponseBody\diagnosticResult;

class GetDiagnosticResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $diagnosticKey;
    /**
     * @var string
     */
    public $diagnosticProduct;
    /**
     * @var diagnosticResult
     */
    public $diagnosticResult;
    /**
     * @var string
     */
    public $diagnosticTime;
    /**
     * @var string
     */
    public $httpCode;
    /**
     * @var int
     */
    public $httpStatusCode;
    /**
     * @var string
     */
    public $message;
    /**
     * @var mixed[]
     */
    public $recommends;
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
    /**
     * @var string
     */
    public $statusReason;
    /**
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
        if (null !== $this->diagnosticResult) {
            $this->diagnosticResult->validate();
        }
        if (\is_array($this->recommends)) {
            Model::validateArray($this->recommends);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['DiagnosticResult'] = null !== $this->diagnosticResult ? $this->diagnosticResult->toArray($noStream) : $this->diagnosticResult;
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
            if (\is_array($this->recommends)) {
                $res['Recommends'] = [];
                foreach ($this->recommends as $key1 => $value1) {
                    $res['Recommends'][$key1] = $value1;
                }
            }
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
            if (!empty($map['Recommends'])) {
                $model->recommends = [];
                foreach ($map['Recommends'] as $key1 => $value1) {
                    $model->recommends[$key1] = $value1;
                }
            }
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

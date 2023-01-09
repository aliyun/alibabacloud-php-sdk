<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetGatewayOptionResponseBody extends Model
{
    /**
     * @description The status code returned. The value 200 indicates that the request is successfully processed.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The detailed configurations of the gateway.
     *
     *   **TraceDetails**: the sampling description of Tracing Analysis. Content: TraceEnabled indicates whether Tracing Analysis is activated. Sample indicates the sampling rate of Tracing Analysis.
     *   **LogConfigDetails**: the description of Log Service. Content: LogEnabled indicates whether Log Service is activated. ProjectName indicates the Log Service project to which logs are delivered. LogStoreName indicates the name of the Logstore.
     *   **EnableHardwareAcceleration**: indicates whether hardware acceleration is enabled.
     *   **DisableHttp2Alpn**: indicates whether the HTTP/2 protocol is disabled.
     *   **EnableWaf**: indicates whether Web Application Firewall (WAF) is enabled.
     *
     * @example {\"LogConfigDetails\": {\"LogEnabled\": False}, \"TraceDetails\": {\"TraceEnabled\": False}}
     *
     * @var GatewayOption
     */
    public $data;

    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The message returned.
     *
     *   If the request is successful, a success message is returned.
     *   If the request fails, an error message is returned, such as the "TaskId not found" message.
     *
     * @example The request is successfully processed.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example C92F4A4D-A2FD-593E-839E-F3D4DFD2****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   `true`: The request was successful.
     *   `false`: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'data'           => 'Data',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
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
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
     * @return GetGatewayOptionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = GatewayOption::fromMap($map['Data']);
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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

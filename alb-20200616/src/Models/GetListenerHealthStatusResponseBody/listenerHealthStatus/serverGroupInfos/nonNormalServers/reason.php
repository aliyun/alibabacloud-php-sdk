<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos\nonNormalServers;

use AlibabaCloud\Tea\Model;

class reason extends Model
{
    /**
     * @description The HTTP status code returned from the server, for example, **302**.
     *
     * > A value is returned only if `ReasonCode` is set to **RESPONSE_MISMATCH**.
     * @example 302
     *
     * @var string
     */
    public $actualResponse;

    /**
     * @description The HTTP status code returned after backend servers pass health checks.
     *
     * Valid values: **HTTP\_2xx**, **HTTP\_3xx**, **HTTP\_4xx**, and **HTTP\_5xx**. Multiple status codes are separated by commas (,).
     *
     * > This value is returned only if **ReasonCode** is set to **RESPONSE_MISMATCH**.
     * @example HTTP_2xx
     *
     * @var string
     */
    public $expectedResponse;

    /**
     * @description The reason why the value of **Status** is Unhealthy. Only HTTP and HTTPS listeners support this parameter.
     *
     *   **CONNECT_TIMEOUT**: ALB failed to connect to the backend server within the specified period of time.
     *   **CONNECT_FAILED**: ALB failed to connect to the backend server.
     *   **RECV_RESPONSE_FAILED**: ALB failed to receive a response from the backend server.
     *   **RECV_RESPONSE_TIMEOUT**: ALB failed to receive a response from the backend server within the specified period of time.
     *   **SEND_REQUEST_FAILED**: ALB failed to send a request to the backend server.
     *   **SEND_REQUEST_TIMEOUT**: ALB failed to send a request to the backend server within the specified period of time.
     *   **RESPONSE_FORMAT_ERROR**: The format of the response from the backend server is invalid.
     *   **RESPONSE_FORMAT_ERROR**: The HTTP status code returned from the backend server is not the expected one.
     *
     * @example RESPONSE_MISMATCH
     *
     * @var string
     */
    public $reasonCode;
    protected $_name = [
        'actualResponse'   => 'ActualResponse',
        'expectedResponse' => 'ExpectedResponse',
        'reasonCode'       => 'ReasonCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualResponse) {
            $res['ActualResponse'] = $this->actualResponse;
        }
        if (null !== $this->expectedResponse) {
            $res['ExpectedResponse'] = $this->expectedResponse;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reason
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualResponse'])) {
            $model->actualResponse = $map['ActualResponse'];
        }
        if (isset($map['ExpectedResponse'])) {
            $model->expectedResponse = $map['ExpectedResponse'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        return $model;
    }
}

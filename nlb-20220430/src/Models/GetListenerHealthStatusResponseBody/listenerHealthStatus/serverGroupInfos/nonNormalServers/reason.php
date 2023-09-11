<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos\nonNormalServers;

use AlibabaCloud\Tea\Model;

class reason extends Model
{
    /**
     * @description The reason why the **status** is abnormal. Valid values:
     *
     *   **CONNECT_TIMEOUT**: The NLB instance failed to connect to the backend server within the specified period of time.
     *   **CONNECT_FAILED**: The NLB instance failed to connect to the backend server.
     *   **RECV_RESPONSE_TIMEOUT**: The NLB instance failed to receive a response from the backend server within the specified period of time.
     *   **CONNECT_INTERRUPT**: The connection between the health check and the backend servers was interrupted.
     *   **HTTP_CODE_NOT_MATCH**: The HTTP status code from the backend servers was not the expected one.
     *   **HTTP_INVALID_HEADER**: The format of the response from the backend servers is invalid.
     *
     * @example CONNECT_TIMEOUT
     *
     * @var string
     */
    public $reasonCode;
    protected $_name = [
        'reasonCode' => 'ReasonCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        return $model;
    }
}

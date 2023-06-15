<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeHADiagnoseConfigResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 06B220E2-EAC5-4DBE-A1FC-1B62DB6A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The availability check method of the instance. Valid values:
     *
     *   **LONG**: Alibaba Cloud uses persistent connections to check the availability of the instance.
     *   **SHORT**: Alibaba Cloud uses short-lived connections to check the availability of the instance.
     *
     * @example LONG
     *
     * @var string
     */
    public $tcpConnectionType;
    protected $_name = [
        'requestId'         => 'RequestId',
        'tcpConnectionType' => 'TcpConnectionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tcpConnectionType) {
            $res['TcpConnectionType'] = $this->tcpConnectionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHADiagnoseConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TcpConnectionType'])) {
            $model->tcpConnectionType = $map['TcpConnectionType'];
        }

        return $model;
    }
}

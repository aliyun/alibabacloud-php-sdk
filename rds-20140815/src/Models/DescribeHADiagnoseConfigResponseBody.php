<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeHADiagnoseConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
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

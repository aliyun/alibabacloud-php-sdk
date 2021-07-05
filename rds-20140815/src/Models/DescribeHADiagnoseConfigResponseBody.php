<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeHADiagnoseConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $tcpConnectionType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'tcpConnectionType' => 'TcpConnectionType',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tcpConnectionType) {
            $res['TcpConnectionType'] = $this->tcpConnectionType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['TcpConnectionType'])) {
            $model->tcpConnectionType = $map['TcpConnectionType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

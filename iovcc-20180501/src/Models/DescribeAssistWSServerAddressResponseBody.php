<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DescribeAssistWSServerAddressResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $wsServer;

    /**
     * @var string
     */
    public $OTP;
    protected $_name = [
        'requestId' => 'RequestId',
        'wsServer'  => 'WsServer',
        'OTP'       => 'OTP',
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
        if (null !== $this->wsServer) {
            $res['WsServer'] = $this->wsServer;
        }
        if (null !== $this->OTP) {
            $res['OTP'] = $this->OTP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssistWSServerAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WsServer'])) {
            $model->wsServer = $map['WsServer'];
        }
        if (isset($map['OTP'])) {
            $model->OTP = $map['OTP'];
        }

        return $model;
    }
}

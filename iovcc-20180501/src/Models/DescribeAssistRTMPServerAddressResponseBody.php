<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DescribeAssistRTMPServerAddressResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $RTMPServer;

    /**
     * @var string
     */
    public $OTP;
    protected $_name = [
        'requestId'  => 'RequestId',
        'RTMPServer' => 'RTMPServer',
        'OTP'        => 'OTP',
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
        if (null !== $this->RTMPServer) {
            $res['RTMPServer'] = $this->RTMPServer;
        }
        if (null !== $this->OTP) {
            $res['OTP'] = $this->OTP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssistRTMPServerAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RTMPServer'])) {
            $model->RTMPServer = $map['RTMPServer'];
        }
        if (isset($map['OTP'])) {
            $model->OTP = $map['OTP'];
        }

        return $model;
    }
}

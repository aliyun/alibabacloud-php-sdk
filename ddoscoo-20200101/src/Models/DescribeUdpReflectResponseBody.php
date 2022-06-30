<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeUdpReflectResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $udpSports;
    protected $_name = [
        'requestId' => 'RequestId',
        'udpSports' => 'UdpSports',
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
        if (null !== $this->udpSports) {
            $res['UdpSports'] = $this->udpSports;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUdpReflectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UdpSports'])) {
            if (!empty($map['UdpSports'])) {
                $model->udpSports = $map['UdpSports'];
            }
        }

        return $model;
    }
}

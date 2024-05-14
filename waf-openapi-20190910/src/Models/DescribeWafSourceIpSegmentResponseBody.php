<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DescribeWafSourceIpSegmentResponseBody extends Model
{
    /**
     * @example 39.XXX.XXX.0/24,……,2408:400a:XXXX:XXXX::/56
     *
     * @var string
     */
    public $ipV6s;

    /**
     * @example 47.XXX.XXX.192/26,……,47.XXX.XXX.0/24
     *
     * @var string
     */
    public $ips;

    /**
     * @example AB2F5E31-EE96-4FD7-9560-45FF5D5377FF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipV6s'     => 'IpV6s',
        'ips'       => 'Ips',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipV6s) {
            $res['IpV6s'] = $this->ipV6s;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWafSourceIpSegmentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpV6s'])) {
            $model->ipV6s = $map['IpV6s'];
        }
        if (isset($map['Ips'])) {
            $model->ips = $map['Ips'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

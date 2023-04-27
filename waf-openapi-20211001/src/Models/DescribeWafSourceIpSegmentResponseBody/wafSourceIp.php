<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeWafSourceIpSegmentResponseBody;

use AlibabaCloud\Tea\Model;

class wafSourceIp extends Model
{
    /**
     * @description An array of back-to-origin IPv4 CIDR blocks.
     *
     * @var string[]
     */
    public $IPv4;

    /**
     * @description An array of back-to-origin IPv6 CIDR blocks.
     *
     * @var string[]
     */
    public $IPv6;
    protected $_name = [
        'IPv4' => 'IPv4',
        'IPv6' => 'IPv6',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPv4) {
            $res['IPv4'] = $this->IPv4;
        }
        if (null !== $this->IPv6) {
            $res['IPv6'] = $this->IPv6;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wafSourceIp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPv4'])) {
            if (!empty($map['IPv4'])) {
                $model->IPv4 = $map['IPv4'];
            }
        }
        if (isset($map['IPv6'])) {
            if (!empty($map['IPv6'])) {
                $model->IPv6 = $map['IPv6'];
            }
        }

        return $model;
    }
}

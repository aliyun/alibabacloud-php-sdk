<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeWafSourceIpSegmentResponseBody\wafSourceIp;
use AlibabaCloud\Tea\Model;

class DescribeWafSourceIpSegmentResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 9087ADDC-9047-4D02-82A7-33021B58083C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The back-to-origin CIDR blocks that are used by the protection cluster.
     *
     * @var wafSourceIp
     */
    public $wafSourceIp;
    protected $_name = [
        'requestId' => 'RequestId',
        'wafSourceIp' => 'WafSourceIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->wafSourceIp) {
            $res['WafSourceIp'] = null !== $this->wafSourceIp ? $this->wafSourceIp->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WafSourceIp'])) {
            $model->wafSourceIp = wafSourceIp::fromMap($map['WafSourceIp']);
        }

        return $model;
    }
}

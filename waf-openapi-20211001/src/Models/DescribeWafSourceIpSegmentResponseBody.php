<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeWafSourceIpSegmentResponseBody\wafSourceIp;

class DescribeWafSourceIpSegmentResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var wafSourceIp
     */
    public $wafSourceIp;
    protected $_name = [
        'requestId'   => 'RequestId',
        'wafSourceIp' => 'WafSourceIp',
    ];

    public function validate()
    {
        if (null !== $this->wafSourceIp) {
            $this->wafSourceIp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->wafSourceIp) {
            $res['WafSourceIp'] = null !== $this->wafSourceIp ? $this->wafSourceIp->toArray($noStream) : $this->wafSourceIp;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

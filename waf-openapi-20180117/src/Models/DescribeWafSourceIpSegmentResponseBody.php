<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models;

use AlibabaCloud\Tea\Model;

class DescribeWafSourceIpSegmentResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ips;
    protected $_name = [
        'requestId' => 'RequestId',
        'ips'       => 'Ips',
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
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
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
        if (isset($map['Ips'])) {
            $model->ips = $map['Ips'];
        }

        return $model;
    }
}

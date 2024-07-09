<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\zoneRequestTops;

use AlibabaCloud\Tea\Model;

class zoneRequestTop extends Model
{
    /**
     * @description The business type. Valid values:
     *
     *   AUTH_ZONE: authoritative zone
     *   RESOLVER_RULE: forwarding rule
     *
     * @example AUTH_ZONE
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The number of DNS requests.
     *
     * @example 2251
     *
     * @var int
     */
    public $requestCount;

    /**
     * @description The name of the zone.
     *
     * @example host.local
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'bizType'      => 'BizType',
        'requestCount' => 'RequestCount',
        'zoneName'     => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->requestCount) {
            $res['RequestCount'] = $this->requestCount;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneRequestTop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['RequestCount'])) {
            $model->requestCount = $map['RequestCount'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\zoneRequestTops;

use AlibabaCloud\Tea\Model;

class zoneRequestTop extends Model
{
    /**
     * @var int
     */
    public $requestCount;

    /**
     * @var string
     */
    public $zoneName;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'requestCount' => 'RequestCount',
        'zoneName'     => 'ZoneName',
        'bizType'      => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestCount) {
            $res['RequestCount'] = $this->requestCount;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
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
        if (isset($map['RequestCount'])) {
            $model->requestCount = $map['RequestCount'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}

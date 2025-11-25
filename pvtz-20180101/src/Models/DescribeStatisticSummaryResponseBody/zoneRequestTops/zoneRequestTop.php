<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\zoneRequestTops;

use AlibabaCloud\Dara\Model;

class zoneRequestTop extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $requestCount;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'bizType' => 'BizType',
        'requestCount' => 'RequestCount',
        'zoneName' => 'ZoneName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

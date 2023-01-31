<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyOutboundCallNumberResponseBody;

use AlibabaCloud\Tea\Model;

class outboundCallNumber extends Model
{
    /**
     * @example 10088
     *
     * @var string
     */
    public $number;

    /**
     * @example fa0e21e9-caab-4629-9121-1e341243d599
     *
     * @var string
     */
    public $outboundCallNumberId;

    /**
     * @example 10
     *
     * @var string
     */
    public $rateLimitCount;

    /**
     * @example 100
     *
     * @var string
     */
    public $rateLimitPeriod;
    protected $_name = [
        'number'               => 'Number',
        'outboundCallNumberId' => 'OutboundCallNumberId',
        'rateLimitCount'       => 'RateLimitCount',
        'rateLimitPeriod'      => 'RateLimitPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->outboundCallNumberId) {
            $res['OutboundCallNumberId'] = $this->outboundCallNumberId;
        }
        if (null !== $this->rateLimitCount) {
            $res['RateLimitCount'] = $this->rateLimitCount;
        }
        if (null !== $this->rateLimitPeriod) {
            $res['RateLimitPeriod'] = $this->rateLimitPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outboundCallNumber
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['OutboundCallNumberId'])) {
            $model->outboundCallNumberId = $map['OutboundCallNumberId'];
        }
        if (isset($map['RateLimitCount'])) {
            $model->rateLimitCount = $map['RateLimitCount'];
        }
        if (isset($map['RateLimitPeriod'])) {
            $model->rateLimitPeriod = $map['RateLimitPeriod'];
        }

        return $model;
    }
}

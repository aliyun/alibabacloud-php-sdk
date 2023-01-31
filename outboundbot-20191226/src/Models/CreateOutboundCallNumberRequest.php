<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateOutboundCallNumberRequest extends Model
{
    /**
     * @example 174952ab-9825-4cc9-a5e2-de82d7fa4cdd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 95187
     *
     * @var string
     */
    public $number;

    /**
     * @example 20
     *
     * @var int
     */
    public $rateLimitCount;

    /**
     * @example 120
     *
     * @var int
     */
    public $rateLimitPeriod;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'number'          => 'Number',
        'rateLimitCount'  => 'RateLimitCount',
        'rateLimitPeriod' => 'RateLimitPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
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
     * @return CreateOutboundCallNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
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

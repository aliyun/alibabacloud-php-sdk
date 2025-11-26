<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ModifyOutboundCallNumberRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $outboundCallNumberId;

    /**
     * @var int
     */
    public $rateLimitCount;

    /**
     * @var int
     */
    public $rateLimitPeriod;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'number' => 'Number',
        'outboundCallNumberId' => 'OutboundCallNumberId',
        'rateLimitCount' => 'RateLimitCount',
        'rateLimitPeriod' => 'RateLimitPeriod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

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

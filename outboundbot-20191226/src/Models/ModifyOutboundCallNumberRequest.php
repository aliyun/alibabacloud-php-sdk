<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyOutboundCallNumberRequest extends Model
{
    /**
     * @example 52e80b02-0126-4556-a1e6-ef5b3747ed53/a9a3ddc7-d7d7-48cd-82b5-b31bb5510e71_2a66f8ad-dfbb-4980-9b84-439171295a11.xlsx
     *
     * @var string
     */
    public $instanceId;

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
     * @var int
     */
    public $rateLimitCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $rateLimitPeriod;
    protected $_name = [
        'instanceId'           => 'InstanceId',
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

    /**
     * @param array $map
     *
     * @return ModifyOutboundCallNumberRequest
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

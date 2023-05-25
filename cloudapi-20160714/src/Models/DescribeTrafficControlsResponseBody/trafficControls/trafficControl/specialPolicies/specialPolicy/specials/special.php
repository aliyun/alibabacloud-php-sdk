<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl\specialPolicies\specialPolicy\specials;

use AlibabaCloud\Tea\Model;

class special extends Model
{
    /**
     * @description Queries custom throttling policies and their details. Conditional queries are supported.
     *
     * @example test_wg@aliyun.com
     *
     * @var string
     */
    public $specialKey;

    /**
     * @description *   This API is intended for API providers.
     *   This API can be used to query all existing throttling policies (including special throttling policies) and their details.
     *   You can specify query conditions. For example, you can query the throttling policies bound to a specified API or in a specified environment.
     *
     * @example 100
     *
     * @var int
     */
    public $trafficValue;
    protected $_name = [
        'specialKey'   => 'SpecialKey',
        'trafficValue' => 'TrafficValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->specialKey) {
            $res['SpecialKey'] = $this->specialKey;
        }
        if (null !== $this->trafficValue) {
            $res['TrafficValue'] = $this->trafficValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return special
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpecialKey'])) {
            $model->specialKey = $map['SpecialKey'];
        }
        if (isset($map['TrafficValue'])) {
            $model->trafficValue = $map['TrafficValue'];
        }

        return $model;
    }
}

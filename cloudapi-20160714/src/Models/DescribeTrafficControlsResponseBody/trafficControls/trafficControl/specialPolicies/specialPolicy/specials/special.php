<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl\specialPolicies\specialPolicy\specials;

use AlibabaCloud\Tea\Model;

class special extends Model
{
    /**
     * @description The AppId or user account corresponding to SpecialType.
     *
     * @example test_wg@aliyun.com
     *
     * @var string
     */
    public $specialKey;

    /**
     * @description The throttling value.
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

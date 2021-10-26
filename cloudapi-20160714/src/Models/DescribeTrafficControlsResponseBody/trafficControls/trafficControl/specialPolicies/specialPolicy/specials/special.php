<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl\specialPolicies\specialPolicy\specials;

use AlibabaCloud\Tea\Model;

class special extends Model
{
    /**
     * @var int
     */
    public $trafficValue;

    /**
     * @var string
     */
    public $specialKey;
    protected $_name = [
        'trafficValue' => 'TrafficValue',
        'specialKey'   => 'SpecialKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficValue) {
            $res['TrafficValue'] = $this->trafficValue;
        }
        if (null !== $this->specialKey) {
            $res['SpecialKey'] = $this->specialKey;
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
        if (isset($map['TrafficValue'])) {
            $model->trafficValue = $map['TrafficValue'];
        }
        if (isset($map['SpecialKey'])) {
            $model->specialKey = $map['SpecialKey'];
        }

        return $model;
    }
}

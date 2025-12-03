<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl\specialPolicies\specialPolicy\specials;

use AlibabaCloud\Dara\Model;

class special extends Model
{
    /**
     * @var string
     */
    public $specialKey;

    /**
     * @var int
     */
    public $trafficValue;
    protected $_name = [
        'specialKey' => 'SpecialKey',
        'trafficValue' => 'TrafficValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

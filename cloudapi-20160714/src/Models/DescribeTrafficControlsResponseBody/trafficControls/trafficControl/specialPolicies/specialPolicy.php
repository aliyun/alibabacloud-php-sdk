<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl\specialPolicies;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl\specialPolicies\specialPolicy\specials;

class specialPolicy extends Model
{
    /**
     * @var string
     */
    public $specialType;

    /**
     * @var specials
     */
    public $specials;
    protected $_name = [
        'specialType' => 'SpecialType',
        'specials' => 'Specials',
    ];

    public function validate()
    {
        if (null !== $this->specials) {
            $this->specials->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->specialType) {
            $res['SpecialType'] = $this->specialType;
        }

        if (null !== $this->specials) {
            $res['Specials'] = null !== $this->specials ? $this->specials->toArray($noStream) : $this->specials;
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
        if (isset($map['SpecialType'])) {
            $model->specialType = $map['SpecialType'];
        }

        if (isset($map['Specials'])) {
            $model->specials = specials::fromMap($map['Specials']);
        }

        return $model;
    }
}

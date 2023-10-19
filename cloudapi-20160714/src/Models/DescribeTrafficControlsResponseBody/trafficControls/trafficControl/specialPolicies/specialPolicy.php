<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl\specialPolicies;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl\specialPolicies\specialPolicy\specials;
use AlibabaCloud\Tea\Model;

class specialPolicy extends Model
{
    /**
     * @description The type of the special throttling policy. Valid values:
     *
     *   **APP**
     *   **USER**
     *
     * @example USER
     *
     * @var string
     */
    public $specialType;

    /**
     * @description The returned information about a special throttling policy. It is an array consisting of Special data.
     *
     * @var specials
     */
    public $specials;
    protected $_name = [
        'specialType' => 'SpecialType',
        'specials'    => 'Specials',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->specialType) {
            $res['SpecialType'] = $this->specialType;
        }
        if (null !== $this->specials) {
            $res['Specials'] = null !== $this->specials ? $this->specials->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specialPolicy
     */
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

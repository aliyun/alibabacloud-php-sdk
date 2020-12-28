<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponseBody;

use AlibabaCloud\Tea\Model;

class bandwidths extends Model
{
    /**
     * @var int
     */
    public $max;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $min;
    protected $_name = [
        'max'                => 'Max',
        'unit'               => 'Unit',
        'internetChargeType' => 'InternetChargeType',
        'min'                => 'Min',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidths
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }

        return $model;
    }
}

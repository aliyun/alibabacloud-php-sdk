<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponseBody\bandwidths;

use AlibabaCloud\Dara\Model;

class bandwidth extends Model
{
    /**
     * @var string
     */
    public $internetChargeType;
    /**
     * @var int
     */
    public $max;
    /**
     * @var int
     */
    public $min;
    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'internetChargeType' => 'InternetChargeType',
        'max'                => 'Max',
        'min'                => 'Min',
        'unit'               => 'Unit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }

        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }

        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}

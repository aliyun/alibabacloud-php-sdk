<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponseBody\bandwidths;

use AlibabaCloud\Tea\Model;

class bandwidth extends Model
{
    /**
     * @description The billing method for network usage. Valid values:
     *
     *   PayByBandwidth: pay-by-bandwidth
     *   PayByTraffic: pay-by-traffic
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum public bandwidth.
     *
     * @example 100
     *
     * @var int
     */
    public $max;

    /**
     * @description The minimum public bandwidth.
     *
     * @example 0
     *
     * @var int
     */
    public $min;

    /**
     * @description The unit of the public bandwidth.
     *
     * @example Mbps
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return bandwidth
     */
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

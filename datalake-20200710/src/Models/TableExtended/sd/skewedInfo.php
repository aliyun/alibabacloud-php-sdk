<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\TableExtended\sd;

use AlibabaCloud\Tea\Model;

class skewedInfo extends Model
{
    /**
     * @var string[]
     */
    public $skewedColNames;

    /**
     * @var string[]
     */
    public $skewedColValueLocationMaps;

    /**
     * @var string[][]
     */
    public $skewedColValues;
    protected $_name = [
        'skewedColNames'             => 'SkewedColNames',
        'skewedColValueLocationMaps' => 'SkewedColValueLocationMaps',
        'skewedColValues'            => 'SkewedColValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skewedColNames) {
            $res['SkewedColNames'] = $this->skewedColNames;
        }
        if (null !== $this->skewedColValueLocationMaps) {
            $res['SkewedColValueLocationMaps'] = $this->skewedColValueLocationMaps;
        }
        if (null !== $this->skewedColValues) {
            $res['SkewedColValues'] = $this->skewedColValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skewedInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkewedColNames'])) {
            if (!empty($map['SkewedColNames'])) {
                $model->skewedColNames = $map['SkewedColNames'];
            }
        }
        if (isset($map['SkewedColValueLocationMaps'])) {
            $model->skewedColValueLocationMaps = $map['SkewedColValueLocationMaps'];
        }
        if (isset($map['SkewedColValues'])) {
            if (!empty($map['SkewedColValues'])) {
                $model->skewedColValues = $map['SkewedColValues'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DLSkewedInfo extends Model
{
    /**
     * @var string[]
     */
    public $skewedColNames;

    /**
     * @var mixed[]
     */
    public $skewedColValueLocationMaps;

    /**
     * @var string[][]
     */
    public $skewedColValues;
    protected $_name = [
        'skewedColNames' => 'SkewedColNames',
        'skewedColValueLocationMaps' => 'SkewedColValueLocationMaps',
        'skewedColValues' => 'SkewedColValues',
    ];

    public function validate()
    {
        if (\is_array($this->skewedColNames)) {
            Model::validateArray($this->skewedColNames);
        }
        if (\is_array($this->skewedColValueLocationMaps)) {
            Model::validateArray($this->skewedColValueLocationMaps);
        }
        if (\is_array($this->skewedColValues)) {
            Model::validateArray($this->skewedColValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skewedColNames) {
            if (\is_array($this->skewedColNames)) {
                $res['SkewedColNames'] = [];
                $n1 = 0;
                foreach ($this->skewedColNames as $item1) {
                    $res['SkewedColNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skewedColValueLocationMaps) {
            if (\is_array($this->skewedColValueLocationMaps)) {
                $res['SkewedColValueLocationMaps'] = [];
                foreach ($this->skewedColValueLocationMaps as $key1 => $value1) {
                    $res['SkewedColValueLocationMaps'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->skewedColValues) {
            if (\is_array($this->skewedColValues)) {
                $res['SkewedColValues'] = [];
                $n1 = 0;
                foreach ($this->skewedColValues as $item1) {
                    if (\is_array($item1)) {
                        $res['SkewedColValues'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['SkewedColValues'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
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
        if (isset($map['SkewedColNames'])) {
            if (!empty($map['SkewedColNames'])) {
                $model->skewedColNames = [];
                $n1 = 0;
                foreach ($map['SkewedColNames'] as $item1) {
                    $model->skewedColNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkewedColValueLocationMaps'])) {
            if (!empty($map['SkewedColValueLocationMaps'])) {
                $model->skewedColValueLocationMaps = [];
                foreach ($map['SkewedColValueLocationMaps'] as $key1 => $value1) {
                    $model->skewedColValueLocationMaps[$key1] = $value1;
                }
            }
        }

        if (isset($map['SkewedColValues'])) {
            if (!empty($map['SkewedColValues'])) {
                $model->skewedColValues = [];
                $n1 = 0;
                foreach ($map['SkewedColValues'] as $item1) {
                    if (!empty($item1)) {
                        $model->skewedColValues[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->skewedColValues[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

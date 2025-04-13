<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\QueryIndustryDeviceStatusDataResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $measurePoint;

    /**
     * @var string
     */
    public $node;

    /**
     * @var string
     */
    public $valueType;

    /**
     * @var mixed[][]
     */
    public $values;
    protected $_name = [
        'measurePoint' => 'MeasurePoint',
        'node' => 'Node',
        'valueType' => 'ValueType',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->measurePoint) {
            $res['MeasurePoint'] = $this->measurePoint;
        }

        if (null !== $this->node) {
            $res['Node'] = $this->node;
        }

        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    if (\is_array($item1)) {
                        $res['Values'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Values'][$n1++][$key2] = $value2;
                        }
                    }
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
        if (isset($map['MeasurePoint'])) {
            $model->measurePoint = $map['MeasurePoint'];
        }

        if (isset($map['Node'])) {
            $model->node = $map['Node'];
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    if (!empty($item1)) {
                        $model->values[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->values[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}

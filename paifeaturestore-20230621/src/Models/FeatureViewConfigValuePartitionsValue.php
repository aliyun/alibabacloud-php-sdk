<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;

class FeatureViewConfigValuePartitionsValue extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string[]
     */
    public $values;

    /**
     * @var string
     */
    public $startValue;

    /**
     * @var string
     */
    public $endValue;
    protected $_name = [
        'value' => 'Value',
        'values' => 'Values',
        'startValue' => 'StartValue',
        'endValue' => 'EndValue',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startValue) {
            $res['StartValue'] = $this->startValue;
        }

        if (null !== $this->endValue) {
            $res['EndValue'] = $this->endValue;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartValue'])) {
            $model->startValue = $map['StartValue'];
        }

        if (isset($map['EndValue'])) {
            $model->endValue = $map['EndValue'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

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
        'value'      => 'Value',
        'values'     => 'Values',
        'startValue' => 'StartValue',
        'endValue'   => 'EndValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }
        if (null !== $this->startValue) {
            $res['StartValue'] = $this->startValue;
        }
        if (null !== $this->endValue) {
            $res['EndValue'] = $this->endValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FeatureViewConfigValuePartitionsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
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

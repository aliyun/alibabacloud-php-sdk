<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\QueryInstanceSpec4ModifyResponseBody\data;

use AlibabaCloud\Tea\Model;

class optionalValues extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var float
     */
    public $max;

    /**
     * @var float
     */
    public $min;

    /**
     * @var float
     */
    public $step;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'label' => 'Label',
        'max' => 'Max',
        'min' => 'Min',
        'step' => 'Step',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return optionalValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\FilterSetting;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $op;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'field' => 'field',
        'op' => 'op',
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->field) {
            $res['field'] = $this->field;
        }
        if (null !== $this->op) {
            $res['op'] = $this->op;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['field'])) {
            $model->field = $map['field'];
        }
        if (isset($map['op'])) {
            $model->op = $map['op'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}

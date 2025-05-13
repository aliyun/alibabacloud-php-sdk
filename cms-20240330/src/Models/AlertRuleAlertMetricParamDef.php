<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleAlertMetricParamDef\values;

class AlertRuleAlertMetricParamDef extends Model
{
    /**
     * @var int
     */
    public $maxWidth;

    /**
     * @var int
     */
    public $minWidth;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $placeholderCn;

    /**
     * @var string
     */
    public $placeholderEn;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;

    /**
     * @var values[]
     */
    public $values;
    protected $_name = [
        'maxWidth' => 'maxWidth',
        'minWidth' => 'minWidth',
        'name' => 'name',
        'placeholderCn' => 'placeholderCn',
        'placeholderEn' => 'placeholderEn',
        'type' => 'type',
        'value' => 'value',
        'values' => 'values',
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
        if (null !== $this->maxWidth) {
            $res['maxWidth'] = $this->maxWidth;
        }

        if (null !== $this->minWidth) {
            $res['minWidth'] = $this->minWidth;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->placeholderCn) {
            $res['placeholderCn'] = $this->placeholderCn;
        }

        if (null !== $this->placeholderEn) {
            $res['placeholderEn'] = $this->placeholderEn;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['values'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['maxWidth'])) {
            $model->maxWidth = $map['maxWidth'];
        }

        if (isset($map['minWidth'])) {
            $model->minWidth = $map['minWidth'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['placeholderCn'])) {
            $model->placeholderCn = $map['placeholderCn'];
        }

        if (isset($map['placeholderEn'])) {
            $model->placeholderEn = $map['placeholderEn'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['values'] as $item1) {
                    $model->values[$n1++] = values::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

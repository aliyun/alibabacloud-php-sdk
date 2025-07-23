<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleAlertMetricParamDef\values;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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
            $res['values'] = [];
            if (null !== $this->values && \is_array($this->values)) {
                $n = 0;
                foreach ($this->values as $item) {
                    $res['values'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertRuleAlertMetricParamDef
     */
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
                $n = 0;
                foreach ($map['values'] as $item) {
                    $model->values[$n++] = null !== $item ? values::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

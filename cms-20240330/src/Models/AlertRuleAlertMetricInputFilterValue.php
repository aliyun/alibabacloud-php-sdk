<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class AlertRuleAlertMetricInputFilterValue extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $dim;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $opt;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'dim' => 'dim',
        'opt' => 'opt',
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dim) {
            $res['dim'] = $this->dim;
        }
        if (null !== $this->opt) {
            $res['opt'] = $this->opt;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertRuleAlertMetricInputFilterValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dim'])) {
            $model->dim = $map['dim'];
        }
        if (isset($map['opt'])) {
            $model->opt = $map['opt'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}

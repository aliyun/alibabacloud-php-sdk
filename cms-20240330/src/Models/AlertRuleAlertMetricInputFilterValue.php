<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class AlertRuleAlertMetricInputFilterValue extends Model
{
    /**
     * @var string
     */
    public $dim;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

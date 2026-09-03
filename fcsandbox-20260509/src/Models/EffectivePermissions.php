<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class EffectivePermissions extends Model
{
    /**
     * @var string[]
     */
    public $actions;

    /**
     * @var string[]
     */
    public $capabilities;
    protected $_name = [
        'actions' => 'actions',
        'capabilities' => 'capabilities',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        if (\is_array($this->capabilities)) {
            Model::validateArray($this->capabilities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['actions'] = [];
                $n1 = 0;
                foreach ($this->actions as $item1) {
                    $res['actions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->capabilities) {
            if (\is_array($this->capabilities)) {
                $res['capabilities'] = [];
                $n1 = 0;
                foreach ($this->capabilities as $item1) {
                    $res['capabilities'][$n1] = $item1;
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
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n1 = 0;
                foreach ($map['actions'] as $item1) {
                    $model->actions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['capabilities'])) {
            if (!empty($map['capabilities'])) {
                $model->capabilities = [];
                $n1 = 0;
                foreach ($map['capabilities'] as $item1) {
                    $model->capabilities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

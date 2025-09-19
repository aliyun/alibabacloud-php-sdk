<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateAlertStrategyRequest\strategy;

class CreateAlertStrategyRequest extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $name;

    /**
     * @var strategy
     */
    public $strategy;
    protected $_name = [
        'enabled' => 'enabled',
        'name' => 'name',
        'strategy' => 'strategy',
    ];

    public function validate()
    {
        if (null !== $this->strategy) {
            $this->strategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->strategy) {
            $res['strategy'] = null !== $this->strategy ? $this->strategy->toArray($noStream) : $this->strategy;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['strategy'])) {
            $model->strategy = strategy::fromMap($map['strategy']);
        }

        return $model;
    }
}

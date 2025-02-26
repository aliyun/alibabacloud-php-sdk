<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class InstanceLifecycleConfig extends Model
{
    /**
     * @var LifecycleHook
     */
    public $initializer;
    /**
     * @var LifecycleHook
     */
    public $preStop;
    protected $_name = [
        'initializer' => 'initializer',
        'preStop'     => 'preStop',
    ];

    public function validate()
    {
        if (null !== $this->initializer) {
            $this->initializer->validate();
        }
        if (null !== $this->preStop) {
            $this->preStop->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->initializer) {
            $res['initializer'] = null !== $this->initializer ? $this->initializer->toArray($noStream) : $this->initializer;
        }

        if (null !== $this->preStop) {
            $res['preStop'] = null !== $this->preStop ? $this->preStop->toArray($noStream) : $this->preStop;
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
        if (isset($map['initializer'])) {
            $model->initializer = LifecycleHook::fromMap($map['initializer']);
        }

        if (isset($map['preStop'])) {
            $model->preStop = LifecycleHook::fromMap($map['preStop']);
        }

        return $model;
    }
}

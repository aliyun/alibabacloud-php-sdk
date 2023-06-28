<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->initializer) {
            $res['initializer'] = null !== $this->initializer ? $this->initializer->toMap() : null;
        }
        if (null !== $this->preStop) {
            $res['preStop'] = null !== $this->preStop ? $this->preStop->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstanceLifecycleConfig
     */
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

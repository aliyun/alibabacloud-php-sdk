<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class InstanceLifecycleConfig extends Model
{
    /**
     * @var LifecycleHook
     */
    public $preFreeze;

    /**
     * @var LifecycleHook
     */
    public $preStop;
    protected $_name = [
        'preFreeze' => 'preFreeze',
        'preStop'   => 'preStop',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preFreeze) {
            $res['preFreeze'] = null !== $this->preFreeze ? $this->preFreeze->toMap() : null;
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
        if (isset($map['preFreeze'])) {
            $model->preFreeze = LifecycleHook::fromMap($map['preFreeze']);
        }
        if (isset($map['preStop'])) {
            $model->preStop = LifecycleHook::fromMap($map['preStop']);
        }

        return $model;
    }
}

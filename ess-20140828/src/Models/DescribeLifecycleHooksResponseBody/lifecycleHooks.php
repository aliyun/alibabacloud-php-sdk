<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLifecycleHooksResponseBody;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLifecycleHooksResponseBody\lifecycleHooks\lifecycleHook;
use AlibabaCloud\Tea\Model;

class lifecycleHooks extends Model
{
    /**
     * @var lifecycleHook[]
     */
    public $lifecycleHook;
    protected $_name = [
        'lifecycleHook' => 'LifecycleHook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lifecycleHook) {
            $res['LifecycleHook'] = [];
            if (null !== $this->lifecycleHook && \is_array($this->lifecycleHook)) {
                $n = 0;
                foreach ($this->lifecycleHook as $item) {
                    $res['LifecycleHook'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycleHooks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LifecycleHook'])) {
            if (!empty($map['LifecycleHook'])) {
                $model->lifecycleHook = [];
                $n                    = 0;
                foreach ($map['LifecycleHook'] as $item) {
                    $model->lifecycleHook[$n++] = null !== $item ? lifecycleHook::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

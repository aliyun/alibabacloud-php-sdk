<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentRequest;

use AlibabaCloud\Tea\Model;

class lifecycleHookContext extends Model
{
    /**
     * @var bool
     */
    public $disableLifecycleHook;

    /**
     * @var string[]
     */
    public $ignoredLifecycleHookIds;
    protected $_name = [
        'disableLifecycleHook'    => 'DisableLifecycleHook',
        'ignoredLifecycleHookIds' => 'IgnoredLifecycleHookIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableLifecycleHook) {
            $res['DisableLifecycleHook'] = $this->disableLifecycleHook;
        }
        if (null !== $this->ignoredLifecycleHookIds) {
            $res['IgnoredLifecycleHookIds'] = $this->ignoredLifecycleHookIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycleHookContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableLifecycleHook'])) {
            $model->disableLifecycleHook = $map['DisableLifecycleHook'];
        }
        if (isset($map['IgnoredLifecycleHookIds'])) {
            if (!empty($map['IgnoredLifecycleHookIds'])) {
                $model->ignoredLifecycleHookIds = $map['IgnoredLifecycleHookIds'];
            }
        }

        return $model;
    }
}

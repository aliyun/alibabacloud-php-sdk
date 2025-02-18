<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentRequest;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->ignoredLifecycleHookIds)) {
            Model::validateArray($this->ignoredLifecycleHookIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disableLifecycleHook) {
            $res['DisableLifecycleHook'] = $this->disableLifecycleHook;
        }

        if (null !== $this->ignoredLifecycleHookIds) {
            if (\is_array($this->ignoredLifecycleHookIds)) {
                $res['IgnoredLifecycleHookIds'] = [];
                $n1                             = 0;
                foreach ($this->ignoredLifecycleHookIds as $item1) {
                    $res['IgnoredLifecycleHookIds'][$n1++] = $item1;
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
        if (isset($map['DisableLifecycleHook'])) {
            $model->disableLifecycleHook = $map['DisableLifecycleHook'];
        }

        if (isset($map['IgnoredLifecycleHookIds'])) {
            if (!empty($map['IgnoredLifecycleHookIds'])) {
                $model->ignoredLifecycleHookIds = [];
                $n1                             = 0;
                foreach ($map['IgnoredLifecycleHookIds'] as $item1) {
                    $model->ignoredLifecycleHookIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

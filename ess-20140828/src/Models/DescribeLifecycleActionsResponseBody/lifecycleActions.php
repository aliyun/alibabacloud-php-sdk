<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLifecycleActionsResponseBody;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLifecycleActionsResponseBody\lifecycleActions\lifecycleAction;
use AlibabaCloud\Tea\Model;

class lifecycleActions extends Model
{
    /**
     * @var lifecycleAction[]
     */
    public $lifecycleAction;
    protected $_name = [
        'lifecycleAction' => 'LifecycleAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lifecycleAction) {
            $res['LifecycleAction'] = [];
            if (null !== $this->lifecycleAction && \is_array($this->lifecycleAction)) {
                $n = 0;
                foreach ($this->lifecycleAction as $item) {
                    $res['LifecycleAction'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycleActions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LifecycleAction'])) {
            if (!empty($map['LifecycleAction'])) {
                $model->lifecycleAction = [];
                $n                      = 0;
                foreach ($map['LifecycleAction'] as $item) {
                    $model->lifecycleAction[$n++] = null !== $item ? lifecycleAction::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

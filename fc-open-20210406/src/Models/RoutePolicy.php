<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class RoutePolicy extends Model
{
    /**
     * @example AND
     *
     * @var int[]
     */
    public $condition;

    /**
     * @var PolicyItem[]
     */
    public $policyItems;
    protected $_name = [
        'condition'   => 'condition',
        'policyItems' => 'policyItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }
        if (null !== $this->policyItems) {
            $res['policyItems'] = [];
            if (null !== $this->policyItems && \is_array($this->policyItems)) {
                $n = 0;
                foreach ($this->policyItems as $item) {
                    $res['policyItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RoutePolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }
        if (isset($map['policyItems'])) {
            if (!empty($map['policyItems'])) {
                $model->policyItems = [];
                $n                  = 0;
                foreach ($map['policyItems'] as $item) {
                    $model->policyItems[$n++] = null !== $item ? PolicyItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

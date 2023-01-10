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
     * @var PolicyItem
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
            $res['policyItems'] = null !== $this->policyItems ? $this->policyItems->toMap() : null;
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
            $model->policyItems = PolicyItem::fromMap($map['policyItems']);
        }

        return $model;
    }
}

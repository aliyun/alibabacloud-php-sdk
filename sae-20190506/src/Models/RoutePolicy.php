<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class RoutePolicy extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var PolicyItem[]
     */
    public $policyItems;
    protected $_name = [
        'condition' => 'condition',
        'policyItems' => 'policyItems',
    ];

    public function validate()
    {
        if (\is_array($this->policyItems)) {
            Model::validateArray($this->policyItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }

        if (null !== $this->policyItems) {
            if (\is_array($this->policyItems)) {
                $res['policyItems'] = [];
                $n1 = 0;
                foreach ($this->policyItems as $item1) {
                    $res['policyItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }

        if (isset($map['policyItems'])) {
            if (!empty($map['policyItems'])) {
                $model->policyItems = [];
                $n1 = 0;
                foreach ($map['policyItems'] as $item1) {
                    $model->policyItems[$n1++] = PolicyItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

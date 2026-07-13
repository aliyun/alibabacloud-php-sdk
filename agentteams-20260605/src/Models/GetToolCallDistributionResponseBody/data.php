<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetToolCallDistributionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetToolCallDistributionResponseBody\data\items;

class data extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $totalCalls;
    protected $_name = [
        'items' => 'Items',
        'totalCalls' => 'TotalCalls',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCalls) {
            $res['TotalCalls'] = $this->totalCalls;
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
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCalls'])) {
            $model->totalCalls = $map['TotalCalls'];
        }

        return $model;
    }
}

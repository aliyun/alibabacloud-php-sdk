<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data\result\albRules\items;

class albRules extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $ingressId;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'condition' => 'condition',
        'ingressId' => 'ingressId',
        'items' => 'items',
        'serviceName' => 'serviceName',
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
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }

        if (null !== $this->ingressId) {
            $res['ingressId'] = $this->ingressId;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
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

        if (isset($map['ingressId'])) {
            $model->ingressId = $map['ingressId'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1++] = items::fromMap($item1);
                }
            }
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}

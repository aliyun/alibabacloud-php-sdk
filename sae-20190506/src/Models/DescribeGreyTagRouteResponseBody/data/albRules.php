<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteResponseBody\data\albRules\items;
use AlibabaCloud\Tea\Model;

class albRules extends Model
{
    /**
     * @example AND
     *
     * @var string
     */
    public $condition;

    /**
     * @example 23
     *
     * @var string
     */
    public $ingressId;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @example 22
     *
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'condition' => 'condition',
        'ingressId' => 'ingressId',
        'items'     => 'items',
        'serviceId' => 'serviceId',
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
        if (null !== $this->ingressId) {
            $res['ingressId'] = $this->ingressId;
        }
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return albRules
     */
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
                $n            = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}

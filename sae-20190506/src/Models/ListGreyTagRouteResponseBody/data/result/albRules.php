<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data\result;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data\result\albRules\items;
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
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'condition'   => 'condition',
        'ingressId'   => 'ingressId',
        'items'       => 'items',
        'serviceName' => 'serviceName',
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
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
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
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}

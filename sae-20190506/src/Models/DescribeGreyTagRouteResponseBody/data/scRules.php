<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeGreyTagRouteResponseBody\data\scRules\items;
use AlibabaCloud\Tea\Model;

class scRules extends Model
{
    /**
     * @description The relationship between the conditions in the canary release rule. Valid values:
     *
     *   **AND**: The conditions are in the logical AND relation. All conditions must be met at the same time.
     *   **OR**: The conditions are in the logical OR relation. At least one of the conditions must be met.
     *
     * @example OR
     *
     * @var string
     */
    public $condition;

    /**
     * @description The conditions.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The path of the canary release rule of the Spring Cloud application.
     *
     * @example /path
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'condition' => 'condition',
        'items'     => 'items',
        'path'      => 'path',
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
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
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
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateInstanceRequest\components;
use AlibabaCloud\Tea\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @description A list of instance-related specifications.
     *
     * @var components[]
     */
    public $components;

    /**
     * @description The description of the instance.
     *
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @description Valid values: UPGRADE and DOWNGRADE. UPGRADE indicates to upgrade the instance specifications. DOWNGRADE indicates to downgrade the instance specifications.
     *
     * @example ""
     *
     * @var string
     */
    public $orderType;
    protected $_name = [
        'components'  => 'components',
        'description' => 'description',
        'orderType'   => 'orderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->components) {
            $res['components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->orderType) {
            $res['orderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['components'])) {
            if (!empty($map['components'])) {
                $model->components = [];
                $n                 = 0;
                foreach ($map['components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['orderType'])) {
            $model->orderType = $map['orderType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody\componentGroups;
use AlibabaCloud\Tea\Model;

class DescribeAddonsResponseBody extends Model
{
    /**
     * @description The details of the returned components.
     *
     * @var componentGroups[]
     */
    public $componentGroups;

    /**
     * @var StandardComponentsValue[]
     */
    public $standardComponents;
    protected $_name = [
        'componentGroups'    => 'ComponentGroups',
        'standardComponents' => 'StandardComponents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentGroups) {
            $res['ComponentGroups'] = [];
            if (null !== $this->componentGroups && \is_array($this->componentGroups)) {
                $n = 0;
                foreach ($this->componentGroups as $item) {
                    $res['ComponentGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->standardComponents) {
            $res['StandardComponents'] = [];
            if (null !== $this->standardComponents && \is_array($this->standardComponents)) {
                foreach ($this->standardComponents as $key => $val) {
                    $res['StandardComponents'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAddonsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentGroups'])) {
            if (!empty($map['ComponentGroups'])) {
                $model->componentGroups = [];
                $n                      = 0;
                foreach ($map['ComponentGroups'] as $item) {
                    $model->componentGroups[$n++] = null !== $item ? componentGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StandardComponents'])) {
            $model->standardComponents = $map['StandardComponents'];
        }

        return $model;
    }
}

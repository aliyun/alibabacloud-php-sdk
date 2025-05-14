<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody\componentGroups;

class DescribeAddonsResponseBody extends Model
{
    /**
     * @var componentGroups[]
     */
    public $componentGroups;

    /**
     * @var StandardComponentsValue[]
     */
    public $standardComponents;
    protected $_name = [
        'componentGroups' => 'ComponentGroups',
        'standardComponents' => 'StandardComponents',
    ];

    public function validate()
    {
        if (\is_array($this->componentGroups)) {
            Model::validateArray($this->componentGroups);
        }
        if (\is_array($this->standardComponents)) {
            Model::validateArray($this->standardComponents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentGroups) {
            if (\is_array($this->componentGroups)) {
                $res['ComponentGroups'] = [];
                $n1 = 0;
                foreach ($this->componentGroups as $item1) {
                    $res['ComponentGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->standardComponents) {
            if (\is_array($this->standardComponents)) {
                $res['StandardComponents'] = [];
                foreach ($this->standardComponents as $key1 => $value1) {
                    $res['StandardComponents'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['ComponentGroups'])) {
            if (!empty($map['ComponentGroups'])) {
                $model->componentGroups = [];
                $n1 = 0;
                foreach ($map['ComponentGroups'] as $item1) {
                    $model->componentGroups[$n1++] = componentGroups::fromMap($item1);
                }
            }
        }

        if (isset($map['StandardComponents'])) {
            if (!empty($map['StandardComponents'])) {
                $model->standardComponents = [];
                foreach ($map['StandardComponents'] as $key1 => $value1) {
                    $model->standardComponents[$key1] = StandardComponentsValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody\components;

use AlibabaCloud\Dara\Model;

class topology extends Model
{
    /**
     * @var string[]
     */
    public $children;

    /**
     * @var string
     */
    public $layer;

    /**
     * @var string[]
     */
    public $parents;
    protected $_name = [
        'children' => 'Children',
        'layer' => 'Layer',
        'parents' => 'Parents',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        if (\is_array($this->parents)) {
            Model::validateArray($this->parents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['Children'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }

        if (null !== $this->parents) {
            if (\is_array($this->parents)) {
                $res['Parents'] = [];
                $n1 = 0;
                foreach ($this->parents as $item1) {
                    $res['Parents'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }

        if (isset($map['Parents'])) {
            if (!empty($map['Parents'])) {
                $model->parents = [];
                $n1 = 0;
                foreach ($map['Parents'] as $item1) {
                    $model->parents[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

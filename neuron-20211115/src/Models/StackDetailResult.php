<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class StackDetailResult extends Model
{
    /**
     * @var StackInfo[]
     */
    public $stacks;
    protected $_name = [
        'stacks' => 'stacks',
    ];

    public function validate()
    {
        if (\is_array($this->stacks)) {
            Model::validateArray($this->stacks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stacks) {
            if (\is_array($this->stacks)) {
                $res['stacks'] = [];
                $n1 = 0;
                foreach ($this->stacks as $item1) {
                    $res['stacks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['stacks'])) {
            if (!empty($map['stacks'])) {
                $model->stacks = [];
                $n1 = 0;
                foreach ($map['stacks'] as $item1) {
                    $model->stacks[$n1] = StackInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

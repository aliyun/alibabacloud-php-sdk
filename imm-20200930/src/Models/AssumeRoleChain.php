<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class AssumeRoleChain extends Model
{
    /**
     * @var AssumeRoleChainNode[]
     */
    public $chain;

    /**
     * @var string
     */
    public $policy;
    protected $_name = [
        'chain' => 'Chain',
        'policy' => 'Policy',
    ];

    public function validate()
    {
        if (\is_array($this->chain)) {
            Model::validateArray($this->chain);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chain) {
            if (\is_array($this->chain)) {
                $res['Chain'] = [];
                $n1 = 0;
                foreach ($this->chain as $item1) {
                    $res['Chain'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
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
        if (isset($map['Chain'])) {
            if (!empty($map['Chain'])) {
                $model->chain = [];
                $n1 = 0;
                foreach ($map['Chain'] as $item1) {
                    $model->chain[$n1++] = AssumeRoleChainNode::fromMap($item1);
                }
            }
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}

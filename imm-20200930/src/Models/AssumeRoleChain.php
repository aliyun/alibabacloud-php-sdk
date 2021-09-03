<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AssumeRoleChain extends Model
{
    /**
     * @description 当前用户 policy
     *
     * @var string
     */
    public $policy;

    /**
     * @description 链式授权节点
     *
     * @var AssumeRoleChainNode[]
     */
    public $chain;
    protected $_name = [
        'policy' => 'Policy',
        'chain'  => 'Chain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->chain) {
            $res['Chain'] = [];
            if (null !== $this->chain && \is_array($this->chain)) {
                $n = 0;
                foreach ($this->chain as $item) {
                    $res['Chain'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssumeRoleChain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Chain'])) {
            if (!empty($map['Chain'])) {
                $model->chain = [];
                $n            = 0;
                foreach ($map['Chain'] as $item) {
                    $model->chain[$n++] = null !== $item ? AssumeRoleChainNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

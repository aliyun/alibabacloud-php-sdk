<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AssumeRoleChain extends Model
{
    /**
     * @description 链式授权节点
     *
     * @var AssumeRoleChainNode[]
     */
    public $chain;

    /**
     * @description 当前用户 policy
     *
     * @var string
     */
    public $policy;
    protected $_name = [
        'chain'  => 'Chain',
        'policy' => 'Policy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chain) {
            $res['Chain'] = [];
            if (null !== $this->chain && \is_array($this->chain)) {
                $n = 0;
                foreach ($this->chain as $item) {
                    $res['Chain'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
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
        if (isset($map['Chain'])) {
            if (!empty($map['Chain'])) {
                $model->chain = [];
                $n            = 0;
                foreach ($map['Chain'] as $item) {
                    $model->chain[$n++] = null !== $item ? AssumeRoleChainNode::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}

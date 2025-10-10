<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\scalingGroup;

use AlibabaCloud\Dara\Model;

class resourcePoolOptions extends Model
{
    /**
     * @var string[]
     */
    public $privatePoolIds;

    /**
     * @var string
     */
    public $strategy;
    protected $_name = [
        'privatePoolIds' => 'private_pool_ids',
        'strategy' => 'strategy',
    ];

    public function validate()
    {
        if (\is_array($this->privatePoolIds)) {
            Model::validateArray($this->privatePoolIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privatePoolIds) {
            if (\is_array($this->privatePoolIds)) {
                $res['private_pool_ids'] = [];
                $n1 = 0;
                foreach ($this->privatePoolIds as $item1) {
                    $res['private_pool_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->strategy) {
            $res['strategy'] = $this->strategy;
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
        if (isset($map['private_pool_ids'])) {
            if (!empty($map['private_pool_ids'])) {
                $model->privatePoolIds = [];
                $n1 = 0;
                foreach ($map['private_pool_ids'] as $item1) {
                    $model->privatePoolIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['strategy'])) {
            $model->strategy = $map['strategy'];
        }

        return $model;
    }
}

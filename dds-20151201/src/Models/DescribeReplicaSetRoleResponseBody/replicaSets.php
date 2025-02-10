<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeReplicaSetRoleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeReplicaSetRoleResponseBody\replicaSets\replicaSet;

class replicaSets extends Model
{
    /**
     * @var replicaSet[]
     */
    public $replicaSet;
    protected $_name = [
        'replicaSet' => 'ReplicaSet',
    ];

    public function validate()
    {
        if (\is_array($this->replicaSet)) {
            Model::validateArray($this->replicaSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->replicaSet) {
            if (\is_array($this->replicaSet)) {
                $res['ReplicaSet'] = [];
                $n1                = 0;
                foreach ($this->replicaSet as $item1) {
                    $res['ReplicaSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ReplicaSet'])) {
            if (!empty($map['ReplicaSet'])) {
                $model->replicaSet = [];
                $n1                = 0;
                foreach ($map['ReplicaSet'] as $item1) {
                    $model->replicaSet[$n1++] = replicaSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

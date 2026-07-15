<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\shardSearchNodes\shardSearchNodes;

class shardSearchNodes extends Model
{
    /**
     * @var shardSearchNodes[]
     */
    public $shardSearchNodes;
    protected $_name = [
        'shardSearchNodes' => 'ShardSearchNodes',
    ];

    public function validate()
    {
        if (\is_array($this->shardSearchNodes)) {
            Model::validateArray($this->shardSearchNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->shardSearchNodes) {
            if (\is_array($this->shardSearchNodes)) {
                $res['ShardSearchNodes'] = [];
                $n1 = 0;
                foreach ($this->shardSearchNodes as $item1) {
                    $res['ShardSearchNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ShardSearchNodes'])) {
            if (!empty($map['ShardSearchNodes'])) {
                $model->shardSearchNodes = [];
                $n1 = 0;
                foreach ($map['ShardSearchNodes'] as $item1) {
                    $model->shardSearchNodes[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

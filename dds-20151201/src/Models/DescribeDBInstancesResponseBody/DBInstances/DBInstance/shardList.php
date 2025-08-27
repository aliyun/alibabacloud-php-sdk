<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances\DBInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances\DBInstance\shardList\shardAttribute;

class shardList extends Model
{
    /**
     * @var shardAttribute[]
     */
    public $shardAttribute;
    protected $_name = [
        'shardAttribute' => 'ShardAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->shardAttribute)) {
            Model::validateArray($this->shardAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->shardAttribute) {
            if (\is_array($this->shardAttribute)) {
                $res['ShardAttribute'] = [];
                $n1 = 0;
                foreach ($this->shardAttribute as $item1) {
                    $res['ShardAttribute'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ShardAttribute'])) {
            if (!empty($map['ShardAttribute'])) {
                $model->shardAttribute = [];
                $n1 = 0;
                foreach ($map['ShardAttribute'] as $item1) {
                    $model->shardAttribute[$n1] = shardAttribute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

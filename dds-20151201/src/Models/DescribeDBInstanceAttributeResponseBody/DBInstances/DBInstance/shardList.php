<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\shardList\shardAttribute;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shardAttribute) {
            $res['ShardAttribute'] = [];
            if (null !== $this->shardAttribute && \is_array($this->shardAttribute)) {
                $n = 0;
                foreach ($this->shardAttribute as $item) {
                    $res['ShardAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shardList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShardAttribute'])) {
            if (!empty($map['ShardAttribute'])) {
                $model->shardAttribute = [];
                $n                     = 0;
                foreach ($map['ShardAttribute'] as $item) {
                    $model->shardAttribute[$n++] = null !== $item ? shardAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

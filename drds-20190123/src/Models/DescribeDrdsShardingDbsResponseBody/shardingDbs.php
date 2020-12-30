<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsShardingDbsResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsShardingDbsResponseBody\shardingDbs\shardingDb;
use AlibabaCloud\Tea\Model;

class shardingDbs extends Model
{
    /**
     * @var shardingDb[]
     */
    public $shardingDb;
    protected $_name = [
        'shardingDb' => 'ShardingDb',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shardingDb) {
            $res['ShardingDb'] = [];
            if (null !== $this->shardingDb && \is_array($this->shardingDb)) {
                $n = 0;
                foreach ($this->shardingDb as $item) {
                    $res['ShardingDb'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shardingDbs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShardingDb'])) {
            if (!empty($map['ShardingDb'])) {
                $model->shardingDb = [];
                $n                 = 0;
                foreach ($map['ShardingDb'] as $item) {
                    $model->shardingDb[$n++] = null !== $item ? shardingDb::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

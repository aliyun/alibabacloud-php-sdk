<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsShardingDbsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsShardingDbsResponseBody\shardingDbs\shardingDb;

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
        if (\is_array($this->shardingDb)) {
            Model::validateArray($this->shardingDb);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->shardingDb) {
            if (\is_array($this->shardingDb)) {
                $res['ShardingDb'] = [];
                $n1 = 0;
                foreach ($this->shardingDb as $item1) {
                    $res['ShardingDb'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ShardingDb'])) {
            if (!empty($map['ShardingDb'])) {
                $model->shardingDb = [];
                $n1 = 0;
                foreach ($map['ShardingDb'] as $item1) {
                    $model->shardingDb[$n1] = shardingDb::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

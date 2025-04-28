<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterShardNumberResponseBody;

use AlibabaCloud\Dara\Model;

class availableShardNumberList extends Model
{
    /**
     * @var int
     */
    public $shardNumber;
    protected $_name = [
        'shardNumber' => 'ShardNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->shardNumber) {
            $res['ShardNumber'] = $this->shardNumber;
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
        if (isset($map['ShardNumber'])) {
            $model->shardNumber = $map['ShardNumber'];
        }

        return $model;
    }
}

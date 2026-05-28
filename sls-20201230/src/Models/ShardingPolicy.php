<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\ShardingPolicy\shardGroup;
use AlibabaCloud\SDK\Sls\V20201230\Models\ShardingPolicy\shardHash;

class ShardingPolicy extends Model
{
    /**
     * @var int
     */
    public $queryActiveTime;

    /**
     * @var shardGroup
     */
    public $shardGroup;

    /**
     * @var shardHash
     */
    public $shardHash;
    protected $_name = [
        'queryActiveTime' => 'queryActiveTime',
        'shardGroup' => 'shardGroup',
        'shardHash' => 'shardHash',
    ];

    public function validate()
    {
        if (null !== $this->shardGroup) {
            $this->shardGroup->validate();
        }
        if (null !== $this->shardHash) {
            $this->shardHash->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryActiveTime) {
            $res['queryActiveTime'] = $this->queryActiveTime;
        }

        if (null !== $this->shardGroup) {
            $res['shardGroup'] = null !== $this->shardGroup ? $this->shardGroup->toArray($noStream) : $this->shardGroup;
        }

        if (null !== $this->shardHash) {
            $res['shardHash'] = null !== $this->shardHash ? $this->shardHash->toArray($noStream) : $this->shardHash;
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
        if (isset($map['queryActiveTime'])) {
            $model->queryActiveTime = $map['queryActiveTime'];
        }

        if (isset($map['shardGroup'])) {
            $model->shardGroup = shardGroup::fromMap($map['shardGroup']);
        }

        if (isset($map['shardHash'])) {
            $model->shardHash = shardHash::fromMap($map['shardHash']);
        }

        return $model;
    }
}

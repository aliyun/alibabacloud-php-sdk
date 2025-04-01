<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyResponseBody\redisProxyList;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyResponseBody\redisShardList;

class DescribeLogicInstanceTopologyResponseBody extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var redisProxyList
     */
    public $redisProxyList;

    /**
     * @var redisShardList
     */
    public $redisShardList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'redisProxyList' => 'RedisProxyList',
        'redisShardList' => 'RedisShardList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->redisProxyList) {
            $this->redisProxyList->validate();
        }
        if (null !== $this->redisShardList) {
            $this->redisShardList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->redisProxyList) {
            $res['RedisProxyList'] = null !== $this->redisProxyList ? $this->redisProxyList->toArray($noStream) : $this->redisProxyList;
        }

        if (null !== $this->redisShardList) {
            $res['RedisShardList'] = null !== $this->redisShardList ? $this->redisShardList->toArray($noStream) : $this->redisShardList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RedisProxyList'])) {
            $model->redisProxyList = redisProxyList::fromMap($map['RedisProxyList']);
        }

        if (isset($map['RedisShardList'])) {
            $model->redisShardList = redisShardList::fromMap($map['RedisShardList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

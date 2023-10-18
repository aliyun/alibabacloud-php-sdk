<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyResponseBody\redisProxyList;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyResponseBody\redisShardList;
use AlibabaCloud\Tea\Model;

class DescribeLogicInstanceTopologyResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The detailed proxy information, including information about proxy nodes.
     *
     * @var redisProxyList
     */
    public $redisProxyList;

    /**
     * @description Details of data shards, including node information such as NodeInfo.
     *
     * @var redisShardList
     */
    public $redisShardList;

    /**
     * @description The ID of the request.
     *
     * @example 794120D1-E0CF-4713-BAE4-EBAEA04506AF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'redisProxyList' => 'RedisProxyList',
        'redisShardList' => 'RedisShardList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->redisProxyList) {
            $res['RedisProxyList'] = null !== $this->redisProxyList ? $this->redisProxyList->toMap() : null;
        }
        if (null !== $this->redisShardList) {
            $res['RedisShardList'] = null !== $this->redisShardList ? $this->redisShardList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogicInstanceTopologyResponseBody
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsShardingDbsResponseBody\shardingDbs;
use AlibabaCloud\Tea\Model;

class DescribeDrdsShardingDbsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var shardingDbs
     */
    public $shardingDbs;
    protected $_name = [
        'success'     => 'Success',
        'requestId'   => 'RequestId',
        'shardingDbs' => 'ShardingDbs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->shardingDbs) {
            $res['ShardingDbs'] = null !== $this->shardingDbs ? $this->shardingDbs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsShardingDbsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShardingDbs'])) {
            $model->shardingDbs = shardingDbs::fromMap($map['ShardingDbs']);
        }

        return $model;
    }
}

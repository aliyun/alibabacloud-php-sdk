<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Shard extends Model
{
    /**
     * @description createTime
     *
     * @var int
     */
    public $createTime;

    /**
     * @description exclusiveEndKey
     *
     * @var string
     */
    public $exclusiveEndKey;

    /**
     * @description inclusiveBeginKey
     *
     * @var string
     */
    public $inclusiveBeginKey;

    /**
     * @description serverIp
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description shard id
     *
     * @var int
     */
    public $shardId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'        => 'createTime',
        'exclusiveEndKey'   => 'exclusiveEndKey',
        'inclusiveBeginKey' => 'inclusiveBeginKey',
        'serverIp'          => 'serverIp',
        'shardId'           => 'shardId',
        'status'            => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->exclusiveEndKey) {
            $res['exclusiveEndKey'] = $this->exclusiveEndKey;
        }
        if (null !== $this->inclusiveBeginKey) {
            $res['inclusiveBeginKey'] = $this->inclusiveBeginKey;
        }
        if (null !== $this->serverIp) {
            $res['serverIp'] = $this->serverIp;
        }
        if (null !== $this->shardId) {
            $res['shardId'] = $this->shardId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Shard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['exclusiveEndKey'])) {
            $model->exclusiveEndKey = $map['exclusiveEndKey'];
        }
        if (isset($map['inclusiveBeginKey'])) {
            $model->inclusiveBeginKey = $map['inclusiveBeginKey'];
        }
        if (isset($map['serverIp'])) {
            $model->serverIp = $map['serverIp'];
        }
        if (isset($map['shardId'])) {
            $model->shardId = $map['shardId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}

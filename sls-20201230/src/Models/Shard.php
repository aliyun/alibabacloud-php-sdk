<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Shard extends Model
{
    /**
     * @description Shard的创建时间。Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 指定Shard范围的结束值，Shard范围中不包含该值。即 shard 包含MD5值在 [inclusiveBeginKey, exclusiveEndKey) 之间的日志。
     *
     * @var string
     */
    public $exclusiveEndKey;

    /**
     * @description 指定Shard范围的起始值，Shard范围中包含该值。即 shard 包含MD5值在 [inclusiveBeginKey, exclusiveEndKey) 之间的日志。
     *
     * @var string
     */
    public $inclusiveBeginKey;

    /**
     * @description shard id
     *
     * @var int
     */
    public $shardID;

    /**
     * @description shard 的读写状态，readwrite 或者 readonly。
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'        => 'createTime',
        'exclusiveEndKey'   => 'exclusiveEndKey',
        'inclusiveBeginKey' => 'inclusiveBeginKey',
        'shardID'           => 'shardID',
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
        if (null !== $this->shardID) {
            $res['shardID'] = $this->shardID;
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
        if (isset($map['shardID'])) {
            $model->shardID = $map['shardID'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}

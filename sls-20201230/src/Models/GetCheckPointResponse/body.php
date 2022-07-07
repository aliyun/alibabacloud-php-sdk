<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetCheckPointResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description shard id。
     *
     * @var int
     */
    public $shard;

    /**
     * @description checkpoint 值。
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @description checkpoint最后的更新时间。Unix时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description 消费者。
     *
     * @var string
     */
    public $consumer;
    protected $_name = [
        'shard'      => 'shard',
        'checkpoint' => 'checkpoint',
        'updateTime' => 'updateTime',
        'consumer'   => 'consumer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shard) {
            $res['shard'] = $this->shard;
        }
        if (null !== $this->checkpoint) {
            $res['checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->consumer) {
            $res['consumer'] = $this->consumer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['shard'])) {
            $model->shard = $map['shard'];
        }
        if (isset($map['checkpoint'])) {
            $model->checkpoint = $map['checkpoint'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['consumer'])) {
            $model->consumer = $map['consumer'];
        }

        return $model;
    }
}

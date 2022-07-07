<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateCheckPointRequest extends Model
{
    /**
     * @description checkpoint值。
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @description shard 的 id。
     *
     * @var int
     */
    public $shard;

    /**
     * @description 消费者。
     *
     * @var string
     */
    public $consumer;

    /**
     * @description 当不指定消费者时，必须指定forceSuccess为true才能更新checkpoint。
     *
     * @var bool
     */
    public $forceSuccess;

    /**
     * @description 固定为 checkpoint。
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'checkpoint'   => 'checkpoint',
        'shard'        => 'shard',
        'consumer'     => 'consumer',
        'forceSuccess' => 'forceSuccess',
        'type'         => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkpoint) {
            $res['checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->shard) {
            $res['shard'] = $this->shard;
        }
        if (null !== $this->consumer) {
            $res['consumer'] = $this->consumer;
        }
        if (null !== $this->forceSuccess) {
            $res['forceSuccess'] = $this->forceSuccess;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCheckPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checkpoint'])) {
            $model->checkpoint = $map['checkpoint'];
        }
        if (isset($map['shard'])) {
            $model->shard = $map['shard'];
        }
        if (isset($map['consumer'])) {
            $model->consumer = $map['consumer'];
        }
        if (isset($map['forceSuccess'])) {
            $model->forceSuccess = $map['forceSuccess'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

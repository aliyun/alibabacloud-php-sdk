<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ConsumerGroupUpdateCheckPointRequest extends Model
{
    /**
     * @description The value of the checkpoint.
     *
     * This parameter is required.
     * @example MTUyNDE1NTM3OTM3MzkwODQ5Ng==
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @description The ID of the shard.
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $shard;

    /**
     * @description The consumer.
     *
     * This parameter is required.
     * @example consumer_1
     *
     * @var string
     */
    public $consumer;

    /**
     * @description Specifies whether to enable forceful updates. Valid values:
     *
     *   true
     *   false
     *
     * @example False
     *
     * @var bool
     */
    public $forceSuccess;
    protected $_name = [
        'checkpoint'   => 'checkpoint',
        'shard'        => 'shard',
        'consumer'     => 'consumer',
        'forceSuccess' => 'forceSuccess',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConsumerGroupUpdateCheckPointRequest
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

        return $model;
    }
}

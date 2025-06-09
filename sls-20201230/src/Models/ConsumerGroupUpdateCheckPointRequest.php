<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ConsumerGroupUpdateCheckPointRequest extends Model
{
    /**
     * @var string
     */
    public $checkpoint;

    /**
     * @var int
     */
    public $shard;

    /**
     * @var string
     */
    public $consumer;

    /**
     * @var bool
     */
    public $forceSuccess;
    protected $_name = [
        'checkpoint' => 'checkpoint',
        'shard' => 'shard',
        'consumer' => 'consumer',
        'forceSuccess' => 'forceSuccess',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

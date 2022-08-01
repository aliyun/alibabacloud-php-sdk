<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateCheckPointRequest extends Model
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

    /**
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

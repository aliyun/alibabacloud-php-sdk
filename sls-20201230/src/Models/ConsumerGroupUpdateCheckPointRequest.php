<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\ConsumerGroupUpdateCheckPointRequest\body;
use AlibabaCloud\Tea\Model;

class ConsumerGroupUpdateCheckPointRequest extends Model
{
    /**
     * @description Shard ID。
     *
     * @var body[]
     */
    public $body;

    /**
     * @description This parameter is required.
     *
     * @example consumer_1
     *
     * @var string
     */
    public $consumer;

    /**
     * @example False
     *
     * @var bool
     */
    public $forceSuccess;
    protected $_name = [
        'body'         => 'body',
        'consumer'     => 'consumer',
        'forceSuccess' => 'forceSuccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = [];
            if (null !== $this->body && \is_array($this->body)) {
                $n = 0;
                foreach ($this->body as $item) {
                    $res['body'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = [];
                $n           = 0;
                foreach ($map['body'] as $item) {
                    $model->body[$n++] = null !== $item ? body::fromMap($item) : $item;
                }
            }
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

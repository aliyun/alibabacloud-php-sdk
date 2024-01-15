<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ConsumerGroupHeartBeatRequest extends Model
{
    /**
     * @description The IDs of shards whose data is being consumed.
     *
     * @var int[]
     */
    public $body;

    /**
     * @description The consumer.
     *
     * @example consumer_1
     *
     * @var string
     */
    public $consumer;
    protected $_name = [
        'body'     => 'body',
        'consumer' => 'consumer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->consumer) {
            $res['consumer'] = $this->consumer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConsumerGroupHeartBeatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = $map['body'];
            }
        }
        if (isset($map['consumer'])) {
            $model->consumer = $map['consumer'];
        }

        return $model;
    }
}

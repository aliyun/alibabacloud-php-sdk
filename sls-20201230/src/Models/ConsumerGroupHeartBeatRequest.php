<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ConsumerGroupHeartBeatRequest extends Model
{
    /**
     * @var int[]
     */
    public $body;

    /**
     * @var string
     */
    public $consumer;
    protected $_name = [
        'body' => 'body',
        'consumer' => 'consumer',
    ];

    public function validate()
    {
        if (\is_array($this->body)) {
            Model::validateArray($this->body);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            if (\is_array($this->body)) {
                $res['body'] = [];
                $n1 = 0;
                foreach ($this->body as $item1) {
                    $res['body'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->consumer) {
            $res['consumer'] = $this->consumer;
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
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = [];
                $n1 = 0;
                foreach ($map['body'] as $item1) {
                    $model->body[$n1++] = $item1;
                }
            }
        }

        if (isset($map['consumer'])) {
            $model->consumer = $map['consumer'];
        }

        return $model;
    }
}

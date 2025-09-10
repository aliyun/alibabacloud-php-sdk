<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class SplitShardResponse extends Model
{
    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var Shard[]
     */
    public $body;
    protected $_name = [
        'headers' => 'headers',
        'statusCode' => 'statusCode',
        'body' => 'body',
    ];

    public function validate()
    {
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        if (\is_array($this->body)) {
            Model::validateArray($this->body);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['headers'] = [];
                foreach ($this->headers as $key1 => $value1) {
                    $res['headers'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->statusCode) {
            $res['statusCode'] = $this->statusCode;
        }

        if (null !== $this->body) {
            if (\is_array($this->body)) {
                $res['body'] = [];
                $n1 = 0;
                foreach ($this->body as $item1) {
                    $res['body'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['headers'])) {
            if (!empty($map['headers'])) {
                $model->headers = [];
                foreach ($map['headers'] as $key1 => $value1) {
                    $model->headers[$key1] = $value1;
                }
            }
        }

        if (isset($map['statusCode'])) {
            $model->statusCode = $map['statusCode'];
        }

        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = [];
                $n1 = 0;
                foreach ($map['body'] as $item1) {
                    $model->body[$n1] = Shard::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

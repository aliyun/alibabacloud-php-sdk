<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\BatchRequest;

use AlibabaCloud\Dara\Model;

class requests extends Model
{
    /**
     * @var mixed[]
     */
    public $body;

    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'body' => 'body',
        'headers' => 'headers',
        'id' => 'id',
        'method' => 'method',
        'url' => 'url',
    ];

    public function validate()
    {
        if (\is_array($this->body)) {
            Model::validateArray($this->body);
        }
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            if (\is_array($this->body)) {
                $res['body'] = [];
                foreach ($this->body as $key1 => $value1) {
                    $res['body'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['headers'] = [];
                foreach ($this->headers as $key1 => $value1) {
                    $res['headers'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
                foreach ($map['body'] as $key1 => $value1) {
                    $model->body[$key1] = $value1;
                }
            }
        }

        if (isset($map['headers'])) {
            if (!empty($map['headers'])) {
                $model->headers = [];
                foreach ($map['headers'] as $key1 => $value1) {
                    $model->headers[$key1] = $value1;
                }
            }
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}

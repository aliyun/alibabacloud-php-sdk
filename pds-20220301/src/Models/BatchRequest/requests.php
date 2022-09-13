<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\BatchRequest;

use AlibabaCloud\Tea\Model;

class requests extends Model
{
    /**
     * @var string[]
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
        'body'    => 'body',
        'headers' => 'headers',
        'id'      => 'id',
        'method'  => 'method',
        'url'     => 'url',
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
        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
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

    /**
     * @param array $map
     *
     * @return requests
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
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

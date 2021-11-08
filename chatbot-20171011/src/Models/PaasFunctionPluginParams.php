<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasFunctionPluginParams extends Model
{
    /**
     * @description Body
     *
     * @var string
     */
    public $body;

    /**
     * @description Header
     *
     * @var string[]
     */
    public $header;

    /**
     * @description Method
     *
     * @var string
     */
    public $method;

    /**
     * @description Query
     *
     * @var string[]
     */
    public $query;

    /**
     * @description Url
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'body'   => 'Body',
        'header' => 'Header',
        'method' => 'Method',
        'query'  => 'Query',
        'url'    => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->header) {
            $res['Header'] = $this->header;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasFunctionPluginParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['Header'])) {
            $model->header = $map['Header'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

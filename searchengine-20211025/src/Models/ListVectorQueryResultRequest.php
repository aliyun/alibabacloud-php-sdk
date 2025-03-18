<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListVectorQueryResultRequest extends Model
{
    /**
     * @description The request body.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $body;

    /**
     * @var string
     */
    public $path;

    /**
     * @description The query type. Valid values: vector, primary_key, and vector_text.
     *
     * @example primary_key
     *
     * @var string
     */
    public $queryType;

    /**
     * @description The vector query type. Valid values: vector, image, and text.
     *
     * @example image
     *
     * @var string
     */
    public $vectorQueryType;
    protected $_name = [
        'body' => 'body',
        'path' => 'path',
        'queryType' => 'queryType',
        'vectorQueryType' => 'vectorQueryType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->queryType) {
            $res['queryType'] = $this->queryType;
        }
        if (null !== $this->vectorQueryType) {
            $res['vectorQueryType'] = $this->vectorQueryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVectorQueryResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['queryType'])) {
            $model->queryType = $map['queryType'];
        }
        if (isset($map['vectorQueryType'])) {
            $model->vectorQueryType = $map['vectorQueryType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ListVectorQueryResultRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $body;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $queryType;

    /**
     * @var string
     */
    public $vectorQueryType;
    protected $_name = [
        'body' => 'body',
        'path' => 'path',
        'queryType' => 'queryType',
        'vectorQueryType' => 'vectorQueryType',
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
                foreach ($this->body as $key1 => $value1) {
                    $res['body'][$key1] = $value1;
                }
            }
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

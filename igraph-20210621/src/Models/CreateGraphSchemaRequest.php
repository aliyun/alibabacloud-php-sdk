<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Igraph\V20210621\Models;

use AlibabaCloud\Tea\Model;

class CreateGraphSchemaRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'body'      => 'body',
        'namespace' => 'namespace',
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
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGraphSchemaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        return $model;
    }
}

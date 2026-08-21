<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssAgent\V20260810\Models;

use AlibabaCloud\Dara\Model;

class A2aRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $jsonrpc;

    /**
     * @var string
     */
    public $method;

    /**
     * @var mixed
     */
    public $params;
    protected $_name = [
        'env' => 'Env',
        'id' => 'id',
        'jsonrpc' => 'jsonrpc',
        'method' => 'method',
        'params' => 'params',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->jsonrpc) {
            $res['jsonrpc'] = $this->jsonrpc;
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->params) {
            $res['params'] = $this->params;
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
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['jsonrpc'])) {
            $model->jsonrpc = $map['jsonrpc'];
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['params'])) {
            $model->params = $map['params'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SearchAgent\V20260515\Models;

use AlibabaCloud\Dara\Model;

class ExecuteAcpCommandRequest extends Model
{
    /**
     * @var string
     */
    public $agentName;

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
     * @var mixed[]
     */
    public $params;
    protected $_name = [
        'agentName' => 'agentName',
        'id' => 'id',
        'jsonrpc' => 'jsonrpc',
        'method' => 'method',
        'params' => 'params',
    ];

    public function validate()
    {
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['agentName'] = $this->agentName;
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
            if (\is_array($this->params)) {
                $res['params'] = [];
                foreach ($this->params as $key1 => $value1) {
                    $res['params'][$key1] = $value1;
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
        if (isset($map['agentName'])) {
            $model->agentName = $map['agentName'];
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
            if (!empty($map['params'])) {
                $model->params = [];
                foreach ($map['params'] as $key1 => $value1) {
                    $model->params[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

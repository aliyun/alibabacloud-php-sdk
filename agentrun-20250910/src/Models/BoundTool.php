<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class BoundTool extends Model
{
    /**
     * @var BoundToolApi[]
     */
    public $apis;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $toolName;
    protected $_name = [
        'apis' => 'apis',
        'method' => 'method',
        'path' => 'path',
        'toolName' => 'toolName',
    ];

    public function validate()
    {
        if (\is_array($this->apis)) {
            Model::validateArray($this->apis);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apis) {
            if (\is_array($this->apis)) {
                $res['apis'] = [];
                $n1 = 0;
                foreach ($this->apis as $item1) {
                    $res['apis'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->toolName) {
            $res['toolName'] = $this->toolName;
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
        if (isset($map['apis'])) {
            if (!empty($map['apis'])) {
                $model->apis = [];
                $n1 = 0;
                foreach ($map['apis'] as $item1) {
                    $model->apis[$n1] = BoundToolApi::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['toolName'])) {
            $model->toolName = $map['toolName'];
        }

        return $model;
    }
}

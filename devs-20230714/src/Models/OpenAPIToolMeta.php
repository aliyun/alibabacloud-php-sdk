<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class OpenAPIToolMeta extends Model
{
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
    public $toolId;

    /**
     * @var string
     */
    public $toolName;
    protected $_name = [
        'method' => 'method',
        'path' => 'path',
        'toolId' => 'toolId',
        'toolName' => 'toolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->toolId) {
            $res['toolId'] = $this->toolId;
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
        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['toolId'])) {
            $model->toolId = $map['toolId'];
        }

        if (isset($map['toolName'])) {
            $model->toolName = $map['toolName'];
        }

        return $model;
    }
}

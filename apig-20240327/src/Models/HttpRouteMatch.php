<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRouteMatch\headers;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRouteMatch\path;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRouteMatch\queryParams;

class HttpRouteMatch extends Model
{
    /**
     * @var headers[]
     */
    public $headers;

    /**
     * @var bool
     */
    public $ignoreUriCase;

    /**
     * @var string[]
     */
    public $methods;

    /**
     * @var path
     */
    public $path;

    /**
     * @var queryParams[]
     */
    public $queryParams;
    protected $_name = [
        'headers' => 'headers',
        'ignoreUriCase' => 'ignoreUriCase',
        'methods' => 'methods',
        'path' => 'path',
        'queryParams' => 'queryParams',
    ];

    public function validate()
    {
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        if (\is_array($this->methods)) {
            Model::validateArray($this->methods);
        }
        if (null !== $this->path) {
            $this->path->validate();
        }
        if (\is_array($this->queryParams)) {
            Model::validateArray($this->queryParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['headers'] = [];
                $n1 = 0;
                foreach ($this->headers as $item1) {
                    $res['headers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ignoreUriCase) {
            $res['ignoreUriCase'] = $this->ignoreUriCase;
        }

        if (null !== $this->methods) {
            if (\is_array($this->methods)) {
                $res['methods'] = [];
                $n1 = 0;
                foreach ($this->methods as $item1) {
                    $res['methods'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->path) {
            $res['path'] = null !== $this->path ? $this->path->toArray($noStream) : $this->path;
        }

        if (null !== $this->queryParams) {
            if (\is_array($this->queryParams)) {
                $res['queryParams'] = [];
                $n1 = 0;
                foreach ($this->queryParams as $item1) {
                    $res['queryParams'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['headers'])) {
            if (!empty($map['headers'])) {
                $model->headers = [];
                $n1 = 0;
                foreach ($map['headers'] as $item1) {
                    $model->headers[$n1++] = headers::fromMap($item1);
                }
            }
        }

        if (isset($map['ignoreUriCase'])) {
            $model->ignoreUriCase = $map['ignoreUriCase'];
        }

        if (isset($map['methods'])) {
            if (!empty($map['methods'])) {
                $model->methods = [];
                $n1 = 0;
                foreach ($map['methods'] as $item1) {
                    $model->methods[$n1++] = $item1;
                }
            }
        }

        if (isset($map['path'])) {
            $model->path = path::fromMap($map['path']);
        }

        if (isset($map['queryParams'])) {
            if (!empty($map['queryParams'])) {
                $model->queryParams = [];
                $n1 = 0;
                foreach ($map['queryParams'] as $item1) {
                    $model->queryParams[$n1++] = queryParams::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

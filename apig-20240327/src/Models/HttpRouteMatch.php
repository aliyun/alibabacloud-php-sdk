<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRouteMatch\headers;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRouteMatch\path;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRouteMatch\queryParams;
use AlibabaCloud\Tea\Model;

class HttpRouteMatch extends Model
{
    /**
     * @var headers[]
     */
    public $headers;

    /**
     * @example true
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['headers'] = [];
            if (null !== $this->headers && \is_array($this->headers)) {
                $n = 0;
                foreach ($this->headers as $item) {
                    $res['headers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ignoreUriCase) {
            $res['ignoreUriCase'] = $this->ignoreUriCase;
        }
        if (null !== $this->methods) {
            $res['methods'] = $this->methods;
        }
        if (null !== $this->path) {
            $res['path'] = null !== $this->path ? $this->path->toMap() : null;
        }
        if (null !== $this->queryParams) {
            $res['queryParams'] = [];
            if (null !== $this->queryParams && \is_array($this->queryParams)) {
                $n = 0;
                foreach ($this->queryParams as $item) {
                    $res['queryParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpRouteMatch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['headers'])) {
            if (!empty($map['headers'])) {
                $model->headers = [];
                $n = 0;
                foreach ($map['headers'] as $item) {
                    $model->headers[$n++] = null !== $item ? headers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ignoreUriCase'])) {
            $model->ignoreUriCase = $map['ignoreUriCase'];
        }
        if (isset($map['methods'])) {
            if (!empty($map['methods'])) {
                $model->methods = $map['methods'];
            }
        }
        if (isset($map['path'])) {
            $model->path = path::fromMap($map['path']);
        }
        if (isset($map['queryParams'])) {
            if (!empty($map['queryParams'])) {
                $model->queryParams = [];
                $n = 0;
                foreach ($map['queryParams'] as $item) {
                    $model->queryParams[$n++] = null !== $item ? queryParams::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

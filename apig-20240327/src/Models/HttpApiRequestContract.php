<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiRequestContract\body;
use AlibabaCloud\Tea\Model;

class HttpApiRequestContract extends Model
{
    /**
     * @var body
     */
    public $body;

    /**
     * @var HttpApiParameter[]
     */
    public $headerParameters;

    /**
     * @var HttpApiParameter[]
     */
    public $pathParameters;

    /**
     * @var HttpApiParameter[]
     */
    public $queryParameters;
    protected $_name = [
        'body'             => 'body',
        'headerParameters' => 'headerParameters',
        'pathParameters'   => 'pathParameters',
        'queryParameters'  => 'queryParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->headerParameters) {
            $res['headerParameters'] = [];
            if (null !== $this->headerParameters && \is_array($this->headerParameters)) {
                $n = 0;
                foreach ($this->headerParameters as $item) {
                    $res['headerParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pathParameters) {
            $res['pathParameters'] = [];
            if (null !== $this->pathParameters && \is_array($this->pathParameters)) {
                $n = 0;
                foreach ($this->pathParameters as $item) {
                    $res['pathParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->queryParameters) {
            $res['queryParameters'] = [];
            if (null !== $this->queryParameters && \is_array($this->queryParameters)) {
                $n = 0;
                foreach ($this->queryParameters as $item) {
                    $res['queryParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiRequestContract
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = body::fromMap($map['body']);
        }
        if (isset($map['headerParameters'])) {
            if (!empty($map['headerParameters'])) {
                $model->headerParameters = [];
                $n                       = 0;
                foreach ($map['headerParameters'] as $item) {
                    $model->headerParameters[$n++] = null !== $item ? HttpApiParameter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pathParameters'])) {
            if (!empty($map['pathParameters'])) {
                $model->pathParameters = [];
                $n                     = 0;
                foreach ($map['pathParameters'] as $item) {
                    $model->pathParameters[$n++] = null !== $item ? HttpApiParameter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['queryParameters'])) {
            if (!empty($map['queryParameters'])) {
                $model->queryParameters = [];
                $n                      = 0;
                foreach ($map['queryParameters'] as $item) {
                    $model->queryParameters[$n++] = null !== $item ? HttpApiParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiRequestContract\body;

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
        'body' => 'body',
        'headerParameters' => 'headerParameters',
        'pathParameters' => 'pathParameters',
        'queryParameters' => 'queryParameters',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        if (\is_array($this->headerParameters)) {
            Model::validateArray($this->headerParameters);
        }
        if (\is_array($this->pathParameters)) {
            Model::validateArray($this->pathParameters);
        }
        if (\is_array($this->queryParameters)) {
            Model::validateArray($this->queryParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->headerParameters) {
            if (\is_array($this->headerParameters)) {
                $res['headerParameters'] = [];
                $n1 = 0;
                foreach ($this->headerParameters as $item1) {
                    $res['headerParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pathParameters) {
            if (\is_array($this->pathParameters)) {
                $res['pathParameters'] = [];
                $n1 = 0;
                foreach ($this->pathParameters as $item1) {
                    $res['pathParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->queryParameters) {
            if (\is_array($this->queryParameters)) {
                $res['queryParameters'] = [];
                $n1 = 0;
                foreach ($this->queryParameters as $item1) {
                    $res['queryParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['body'])) {
            $model->body = body::fromMap($map['body']);
        }

        if (isset($map['headerParameters'])) {
            if (!empty($map['headerParameters'])) {
                $model->headerParameters = [];
                $n1 = 0;
                foreach ($map['headerParameters'] as $item1) {
                    $model->headerParameters[$n1++] = HttpApiParameter::fromMap($item1);
                }
            }
        }

        if (isset($map['pathParameters'])) {
            if (!empty($map['pathParameters'])) {
                $model->pathParameters = [];
                $n1 = 0;
                foreach ($map['pathParameters'] as $item1) {
                    $model->pathParameters[$n1++] = HttpApiParameter::fromMap($item1);
                }
            }
        }

        if (isset($map['queryParameters'])) {
            if (!empty($map['queryParameters'])) {
                $model->queryParameters = [];
                $n1 = 0;
                foreach ($map['queryParameters'] as $item1) {
                    $model->queryParameters[$n1++] = HttpApiParameter::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

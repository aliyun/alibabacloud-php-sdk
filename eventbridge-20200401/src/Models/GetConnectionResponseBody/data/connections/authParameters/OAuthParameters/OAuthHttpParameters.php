<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters\OAuthHttpParameters\bodyParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters\OAuthHttpParameters\headerParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters\OAuthHttpParameters\queryStringParameters;
use AlibabaCloud\Tea\Model;

class OAuthHttpParameters extends Model
{
    /**
     * @description The information about the request body.
     *
     * @var bodyParameters[]
     */
    public $bodyParameters;

    /**
     * @description The information about the request header.
     *
     * @var headerParameters[]
     */
    public $headerParameters;

    /**
     * @description The information about the request path.
     *
     * @var queryStringParameters[]
     */
    public $queryStringParameters;
    protected $_name = [
        'bodyParameters'        => 'BodyParameters',
        'headerParameters'      => 'HeaderParameters',
        'queryStringParameters' => 'QueryStringParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyParameters) {
            $res['BodyParameters'] = [];
            if (null !== $this->bodyParameters && \is_array($this->bodyParameters)) {
                $n = 0;
                foreach ($this->bodyParameters as $item) {
                    $res['BodyParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->headerParameters) {
            $res['HeaderParameters'] = [];
            if (null !== $this->headerParameters && \is_array($this->headerParameters)) {
                $n = 0;
                foreach ($this->headerParameters as $item) {
                    $res['HeaderParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->queryStringParameters) {
            $res['QueryStringParameters'] = [];
            if (null !== $this->queryStringParameters && \is_array($this->queryStringParameters)) {
                $n = 0;
                foreach ($this->queryStringParameters as $item) {
                    $res['QueryStringParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OAuthHttpParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BodyParameters'])) {
            if (!empty($map['BodyParameters'])) {
                $model->bodyParameters = [];
                $n                     = 0;
                foreach ($map['BodyParameters'] as $item) {
                    $model->bodyParameters[$n++] = null !== $item ? bodyParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HeaderParameters'])) {
            if (!empty($map['HeaderParameters'])) {
                $model->headerParameters = [];
                $n                       = 0;
                foreach ($map['HeaderParameters'] as $item) {
                    $model->headerParameters[$n++] = null !== $item ? headerParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QueryStringParameters'])) {
            if (!empty($map['QueryStringParameters'])) {
                $model->queryStringParameters = [];
                $n                            = 0;
                foreach ($map['QueryStringParameters'] as $item) {
                    $model->queryStringParameters[$n++] = null !== $item ? queryStringParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

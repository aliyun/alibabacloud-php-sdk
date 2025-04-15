<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters\OAuthHttpParameters\bodyParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters\OAuthHttpParameters\headerParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections\authParameters\OAuthParameters\OAuthHttpParameters\queryStringParameters;

class OAuthHttpParameters extends Model
{
    /**
     * @var bodyParameters[]
     */
    public $bodyParameters;

    /**
     * @var headerParameters[]
     */
    public $headerParameters;

    /**
     * @var queryStringParameters[]
     */
    public $queryStringParameters;
    protected $_name = [
        'bodyParameters' => 'BodyParameters',
        'headerParameters' => 'HeaderParameters',
        'queryStringParameters' => 'QueryStringParameters',
    ];

    public function validate()
    {
        if (\is_array($this->bodyParameters)) {
            Model::validateArray($this->bodyParameters);
        }
        if (\is_array($this->headerParameters)) {
            Model::validateArray($this->headerParameters);
        }
        if (\is_array($this->queryStringParameters)) {
            Model::validateArray($this->queryStringParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyParameters) {
            if (\is_array($this->bodyParameters)) {
                $res['BodyParameters'] = [];
                $n1 = 0;
                foreach ($this->bodyParameters as $item1) {
                    $res['BodyParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->headerParameters) {
            if (\is_array($this->headerParameters)) {
                $res['HeaderParameters'] = [];
                $n1 = 0;
                foreach ($this->headerParameters as $item1) {
                    $res['HeaderParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->queryStringParameters) {
            if (\is_array($this->queryStringParameters)) {
                $res['QueryStringParameters'] = [];
                $n1 = 0;
                foreach ($this->queryStringParameters as $item1) {
                    $res['QueryStringParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BodyParameters'])) {
            if (!empty($map['BodyParameters'])) {
                $model->bodyParameters = [];
                $n1 = 0;
                foreach ($map['BodyParameters'] as $item1) {
                    $model->bodyParameters[$n1++] = bodyParameters::fromMap($item1);
                }
            }
        }

        if (isset($map['HeaderParameters'])) {
            if (!empty($map['HeaderParameters'])) {
                $model->headerParameters = [];
                $n1 = 0;
                foreach ($map['HeaderParameters'] as $item1) {
                    $model->headerParameters[$n1++] = headerParameters::fromMap($item1);
                }
            }
        }

        if (isset($map['QueryStringParameters'])) {
            if (!empty($map['QueryStringParameters'])) {
                $model->queryStringParameters = [];
                $n1 = 0;
                foreach ($map['QueryStringParameters'] as $item1) {
                    $model->queryStringParameters[$n1++] = queryStringParameters::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

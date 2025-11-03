<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkApiDestinationParameters\bodyParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkApiDestinationParameters\headerParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkApiDestinationParameters\queryStringParameters;

class SinkApiDestinationParameters extends Model
{
    /**
     * @var bodyParameters
     */
    public $bodyParameters;

    /**
     * @var headerParameters
     */
    public $headerParameters;

    /**
     * @var string
     */
    public $name;

    /**
     * @var queryStringParameters
     */
    public $queryStringParameters;
    protected $_name = [
        'bodyParameters' => 'BodyParameters',
        'headerParameters' => 'HeaderParameters',
        'name' => 'Name',
        'queryStringParameters' => 'QueryStringParameters',
    ];

    public function validate()
    {
        if (null !== $this->bodyParameters) {
            $this->bodyParameters->validate();
        }
        if (null !== $this->headerParameters) {
            $this->headerParameters->validate();
        }
        if (null !== $this->queryStringParameters) {
            $this->queryStringParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyParameters) {
            $res['BodyParameters'] = null !== $this->bodyParameters ? $this->bodyParameters->toArray($noStream) : $this->bodyParameters;
        }

        if (null !== $this->headerParameters) {
            $res['HeaderParameters'] = null !== $this->headerParameters ? $this->headerParameters->toArray($noStream) : $this->headerParameters;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->queryStringParameters) {
            $res['QueryStringParameters'] = null !== $this->queryStringParameters ? $this->queryStringParameters->toArray($noStream) : $this->queryStringParameters;
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
            $model->bodyParameters = bodyParameters::fromMap($map['BodyParameters']);
        }

        if (isset($map['HeaderParameters'])) {
            $model->headerParameters = headerParameters::fromMap($map['HeaderParameters']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['QueryStringParameters'])) {
            $model->queryStringParameters = queryStringParameters::fromMap($map['QueryStringParameters']);
        }

        return $model;
    }
}

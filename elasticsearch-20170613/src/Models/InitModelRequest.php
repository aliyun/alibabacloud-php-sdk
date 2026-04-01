<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InitModelRequest\models;

class InitModelRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $httpSchema;

    /**
     * @var models[]
     */
    public $models;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'apiKey' => 'api_key',
        'host' => 'host',
        'httpSchema' => 'http_schema',
        'models' => 'models',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->models)) {
            Model::validateArray($this->models);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['api_key'] = $this->apiKey;
        }

        if (null !== $this->host) {
            $res['host'] = $this->host;
        }

        if (null !== $this->httpSchema) {
            $res['http_schema'] = $this->httpSchema;
        }

        if (null !== $this->models) {
            if (\is_array($this->models)) {
                $res['models'] = [];
                $n1 = 0;
                foreach ($this->models as $item1) {
                    $res['models'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['api_key'])) {
            $model->apiKey = $map['api_key'];
        }

        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        if (isset($map['http_schema'])) {
            $model->httpSchema = $map['http_schema'];
        }

        if (isset($map['models'])) {
            if (!empty($map['models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['models'] as $item1) {
                    $model->models[$n1] = models::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}

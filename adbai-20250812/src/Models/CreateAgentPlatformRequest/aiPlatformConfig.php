<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateAgentPlatformRequest;

use AlibabaCloud\Dara\Model;

class aiPlatformConfig extends Model
{
    /**
     * @var string
     */
    public $serveApiKey;

    /**
     * @var string
     */
    public $serveEmbeddingEndpoint;

    /**
     * @var string
     */
    public $serveEmbeddingModelName;

    /**
     * @var string
     */
    public $serveEndpoint;

    /**
     * @var string
     */
    public $serveModelName;

    /**
     * @var string
     */
    public $specName;
    protected $_name = [
        'serveApiKey' => 'ServeApiKey',
        'serveEmbeddingEndpoint' => 'ServeEmbeddingEndpoint',
        'serveEmbeddingModelName' => 'ServeEmbeddingModelName',
        'serveEndpoint' => 'ServeEndpoint',
        'serveModelName' => 'ServeModelName',
        'specName' => 'SpecName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serveApiKey) {
            $res['ServeApiKey'] = $this->serveApiKey;
        }

        if (null !== $this->serveEmbeddingEndpoint) {
            $res['ServeEmbeddingEndpoint'] = $this->serveEmbeddingEndpoint;
        }

        if (null !== $this->serveEmbeddingModelName) {
            $res['ServeEmbeddingModelName'] = $this->serveEmbeddingModelName;
        }

        if (null !== $this->serveEndpoint) {
            $res['ServeEndpoint'] = $this->serveEndpoint;
        }

        if (null !== $this->serveModelName) {
            $res['ServeModelName'] = $this->serveModelName;
        }

        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
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
        if (isset($map['ServeApiKey'])) {
            $model->serveApiKey = $map['ServeApiKey'];
        }

        if (isset($map['ServeEmbeddingEndpoint'])) {
            $model->serveEmbeddingEndpoint = $map['ServeEmbeddingEndpoint'];
        }

        if (isset($map['ServeEmbeddingModelName'])) {
            $model->serveEmbeddingModelName = $map['ServeEmbeddingModelName'];
        }

        if (isset($map['ServeEndpoint'])) {
            $model->serveEndpoint = $map['ServeEndpoint'];
        }

        if (isset($map['ServeModelName'])) {
            $model->serveModelName = $map['ServeModelName'];
        }

        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }

        return $model;
    }
}

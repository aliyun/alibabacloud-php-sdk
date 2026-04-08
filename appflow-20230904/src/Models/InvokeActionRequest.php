<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appflow\V20230904\Models\InvokeActionRequest\authConfig;

class InvokeActionRequest extends Model
{
    /**
     * @var string
     */
    public $actionId;

    /**
     * @var string
     */
    public $actionVersion;

    /**
     * @var authConfig
     */
    public $authConfig;

    /**
     * @var mixed[]
     */
    public $body;

    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $connectorVersion;

    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var string[]
     */
    public $path;

    /**
     * @var string[]
     */
    public $query;

    /**
     * @var bool
     */
    public $stream;
    protected $_name = [
        'actionId' => 'ActionId',
        'actionVersion' => 'ActionVersion',
        'authConfig' => 'AuthConfig',
        'body' => 'Body',
        'connectorId' => 'ConnectorId',
        'connectorVersion' => 'ConnectorVersion',
        'headers' => 'Headers',
        'path' => 'Path',
        'query' => 'Query',
        'stream' => 'Stream',
    ];

    public function validate()
    {
        if (null !== $this->authConfig) {
            $this->authConfig->validate();
        }
        if (\is_array($this->body)) {
            Model::validateArray($this->body);
        }
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        if (\is_array($this->path)) {
            Model::validateArray($this->path);
        }
        if (\is_array($this->query)) {
            Model::validateArray($this->query);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionId) {
            $res['ActionId'] = $this->actionId;
        }

        if (null !== $this->actionVersion) {
            $res['ActionVersion'] = $this->actionVersion;
        }

        if (null !== $this->authConfig) {
            $res['AuthConfig'] = null !== $this->authConfig ? $this->authConfig->toArray($noStream) : $this->authConfig;
        }

        if (null !== $this->body) {
            if (\is_array($this->body)) {
                $res['Body'] = [];
                foreach ($this->body as $key1 => $value1) {
                    $res['Body'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        if (null !== $this->connectorVersion) {
            $res['ConnectorVersion'] = $this->connectorVersion;
        }

        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['Headers'] = [];
                foreach ($this->headers as $key1 => $value1) {
                    $res['Headers'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->path) {
            if (\is_array($this->path)) {
                $res['Path'] = [];
                foreach ($this->path as $key1 => $value1) {
                    $res['Path'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->query) {
            if (\is_array($this->query)) {
                $res['Query'] = [];
                foreach ($this->query as $key1 => $value1) {
                    $res['Query'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
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
        if (isset($map['ActionId'])) {
            $model->actionId = $map['ActionId'];
        }

        if (isset($map['ActionVersion'])) {
            $model->actionVersion = $map['ActionVersion'];
        }

        if (isset($map['AuthConfig'])) {
            $model->authConfig = authConfig::fromMap($map['AuthConfig']);
        }

        if (isset($map['Body'])) {
            if (!empty($map['Body'])) {
                $model->body = [];
                foreach ($map['Body'] as $key1 => $value1) {
                    $model->body[$key1] = $value1;
                }
            }
        }

        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        if (isset($map['ConnectorVersion'])) {
            $model->connectorVersion = $map['ConnectorVersion'];
        }

        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                foreach ($map['Headers'] as $key1 => $value1) {
                    $model->headers[$key1] = $value1;
                }
            }
        }

        if (isset($map['Path'])) {
            if (!empty($map['Path'])) {
                $model->path = [];
                foreach ($map['Path'] as $key1 => $value1) {
                    $model->path[$key1] = $value1;
                }
            }
        }

        if (isset($map['Query'])) {
            if (!empty($map['Query'])) {
                $model->query = [];
                foreach ($map['Query'] as $key1 => $value1) {
                    $model->query[$key1] = $value1;
                }
            }
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}

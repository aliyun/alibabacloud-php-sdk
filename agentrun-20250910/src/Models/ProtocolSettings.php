<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ProtocolSettings extends Model
{
    /**
     * @var string
     */
    public $a2AAgentCard;

    /**
     * @var string
     */
    public $a2aAgentCard;

    /**
     * @var string
     */
    public $a2aAgentCardUrl;

    /**
     * @var string
     */
    public $headers;

    /**
     * @var string
     */
    public $inputBodyJsonSchema;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputBodyJsonSchema;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $pathPrefix;

    /**
     * @var string
     */
    public $requestContentType;

    /**
     * @var string
     */
    public $responseContentType;
    protected $_name = [
        'a2AAgentCard' => 'A2AAgentCard',
        'a2aAgentCard' => 'a2aAgentCard',
        'a2aAgentCardUrl' => 'a2aAgentCardUrl',
        'headers' => 'headers',
        'inputBodyJsonSchema' => 'inputBodyJsonSchema',
        'method' => 'method',
        'name' => 'name',
        'outputBodyJsonSchema' => 'outputBodyJsonSchema',
        'path' => 'path',
        'pathPrefix' => 'pathPrefix',
        'requestContentType' => 'requestContentType',
        'responseContentType' => 'responseContentType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->a2AAgentCard) {
            $res['A2AAgentCard'] = $this->a2AAgentCard;
        }

        if (null !== $this->a2aAgentCard) {
            $res['a2aAgentCard'] = $this->a2aAgentCard;
        }

        if (null !== $this->a2aAgentCardUrl) {
            $res['a2aAgentCardUrl'] = $this->a2aAgentCardUrl;
        }

        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
        }

        if (null !== $this->inputBodyJsonSchema) {
            $res['inputBodyJsonSchema'] = $this->inputBodyJsonSchema;
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->outputBodyJsonSchema) {
            $res['outputBodyJsonSchema'] = $this->outputBodyJsonSchema;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->pathPrefix) {
            $res['pathPrefix'] = $this->pathPrefix;
        }

        if (null !== $this->requestContentType) {
            $res['requestContentType'] = $this->requestContentType;
        }

        if (null !== $this->responseContentType) {
            $res['responseContentType'] = $this->responseContentType;
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
        if (isset($map['A2AAgentCard'])) {
            $model->a2AAgentCard = $map['A2AAgentCard'];
        }

        if (isset($map['a2aAgentCard'])) {
            $model->a2aAgentCard = $map['a2aAgentCard'];
        }

        if (isset($map['a2aAgentCardUrl'])) {
            $model->a2aAgentCardUrl = $map['a2aAgentCardUrl'];
        }

        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }

        if (isset($map['inputBodyJsonSchema'])) {
            $model->inputBodyJsonSchema = $map['inputBodyJsonSchema'];
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['outputBodyJsonSchema'])) {
            $model->outputBodyJsonSchema = $map['outputBodyJsonSchema'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['pathPrefix'])) {
            $model->pathPrefix = $map['pathPrefix'];
        }

        if (isset($map['requestContentType'])) {
            $model->requestContentType = $map['requestContentType'];
        }

        if (isset($map['responseContentType'])) {
            $model->responseContentType = $map['responseContentType'];
        }

        return $model;
    }
}

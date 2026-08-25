<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateModelRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateModelRequest\body\capabilities;

class body extends Model
{
    /**
     * @var capabilities
     */
    public $capabilities;

    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var int
     */
    public $contextSize;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var string
     */
    public $modelName;
    protected $_name = [
        'capabilities' => 'capabilities',
        'connectionId' => 'connectionId',
        'contextSize' => 'contextSize',
        'description' => 'description',
        'maxTokens' => 'maxTokens',
        'modelName' => 'modelName',
    ];

    public function validate()
    {
        if (null !== $this->capabilities) {
            $this->capabilities->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capabilities) {
            $res['capabilities'] = null !== $this->capabilities ? $this->capabilities->toArray($noStream) : $this->capabilities;
        }

        if (null !== $this->connectionId) {
            $res['connectionId'] = $this->connectionId;
        }

        if (null !== $this->contextSize) {
            $res['contextSize'] = $this->contextSize;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->maxTokens) {
            $res['maxTokens'] = $this->maxTokens;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
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
        if (isset($map['capabilities'])) {
            $model->capabilities = capabilities::fromMap($map['capabilities']);
        }

        if (isset($map['connectionId'])) {
            $model->connectionId = $map['connectionId'];
        }

        if (isset($map['contextSize'])) {
            $model->contextSize = $map['contextSize'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['maxTokens'])) {
            $model->maxTokens = $map['maxTokens'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        return $model;
    }
}

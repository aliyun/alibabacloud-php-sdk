<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateModelRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateModelRequest\body\capabilities;

class body extends Model
{
    /**
     * @var capabilities
     */
    public $capabilities;

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
    protected $_name = [
        'capabilities' => 'capabilities',
        'contextSize' => 'contextSize',
        'description' => 'description',
        'maxTokens' => 'maxTokens',
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

        if (null !== $this->contextSize) {
            $res['contextSize'] = $this->contextSize;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->maxTokens) {
            $res['maxTokens'] = $this->maxTokens;
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

        if (isset($map['contextSize'])) {
            $model->contextSize = $map['contextSize'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['maxTokens'])) {
            $model->maxTokens = $map['maxTokens'];
        }

        return $model;
    }
}

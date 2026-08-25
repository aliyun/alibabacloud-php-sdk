<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListPredefinedModelsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListPredefinedModelsResponseBody\data\capabilities;

class data extends Model
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
     * @var int
     */
    public $maxTokens;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $releaseDate;
    protected $_name = [
        'capabilities' => 'capabilities',
        'contextSize' => 'contextSize',
        'maxTokens' => 'maxTokens',
        'modelName' => 'modelName',
        'releaseDate' => 'releaseDate',
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

        if (null !== $this->maxTokens) {
            $res['maxTokens'] = $this->maxTokens;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->releaseDate) {
            $res['releaseDate'] = $this->releaseDate;
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

        if (isset($map['maxTokens'])) {
            $model->maxTokens = $map['maxTokens'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['releaseDate'])) {
            $model->releaseDate = $map['releaseDate'];
        }

        return $model;
    }
}

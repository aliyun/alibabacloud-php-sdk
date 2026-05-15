<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateConsumerAPIKeyInput extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $modelConnectionId;
    protected $_name = [
        'apiKey' => 'apiKey',
        'description' => 'description',
        'modelConnectionId' => 'modelConnectionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->modelConnectionId) {
            $res['modelConnectionId'] = $this->modelConnectionId;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['modelConnectionId'])) {
            $model->modelConnectionId = $map['modelConnectionId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class TargetServiceConfig extends Model
{
    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelNamePattern;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'modelId' => 'modelId',
        'modelName' => 'modelName',
        'modelNamePattern' => 'modelNamePattern',
        'weight' => 'weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->modelNamePattern) {
            $res['modelNamePattern'] = $this->modelNamePattern;
        }

        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['modelNamePattern'])) {
            $model->modelNamePattern = $map['modelNamePattern'];
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}

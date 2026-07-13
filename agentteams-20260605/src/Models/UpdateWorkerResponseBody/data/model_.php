<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateWorkerResponseBody\data;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelProvider;
    protected $_name = [
        'modelName' => 'ModelName',
        'modelProvider' => 'ModelProvider',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelProvider) {
            $res['ModelProvider'] = $this->modelProvider;
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
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelProvider'])) {
            $model->modelProvider = $map['ModelProvider'];
        }

        return $model;
    }
}

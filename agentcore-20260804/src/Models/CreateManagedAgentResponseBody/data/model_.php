<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentResponseBody\data;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $modelConnectionId;

    /**
     * @var string
     */
    public $modelName;
    protected $_name = [
        'modelConnectionId' => 'modelConnectionId',
        'modelName' => 'modelName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelConnectionId) {
            $res['modelConnectionId'] = $this->modelConnectionId;
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
        if (isset($map['modelConnectionId'])) {
            $model->modelConnectionId = $map['modelConnectionId'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        return $model;
    }
}

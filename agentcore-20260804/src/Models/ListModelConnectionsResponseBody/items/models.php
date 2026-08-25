<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListModelConnectionsResponseBody\items;

use AlibabaCloud\Dara\Model;

class models extends Model
{
    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;
    protected $_name = [
        'modelId' => 'modelId',
        'modelName' => 'modelName',
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

        return $model;
    }
}

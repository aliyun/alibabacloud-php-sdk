<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest\body;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateManagedAgentRequest\body\model\quota;

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

    /**
     * @var quota
     */
    public $quota;
    protected $_name = [
        'modelConnectionId' => 'modelConnectionId',
        'modelName' => 'modelName',
        'quota' => 'quota',
    ];

    public function validate()
    {
        if (null !== $this->quota) {
            $this->quota->validate();
        }
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

        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toArray($noStream) : $this->quota;
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

        if (isset($map['quota'])) {
            $model->quota = quota::fromMap($map['quota']);
        }

        return $model;
    }
}

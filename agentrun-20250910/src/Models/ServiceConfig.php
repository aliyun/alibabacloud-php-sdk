<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ServiceConfig extends Model
{
    /**
     * @var AiServiceConfig
     */
    public $aiServiceConfig;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'aiServiceConfig' => 'aiServiceConfig',
        'name' => 'name',
    ];

    public function validate()
    {
        if (null !== $this->aiServiceConfig) {
            $this->aiServiceConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiServiceConfig) {
            $res['aiServiceConfig'] = null !== $this->aiServiceConfig ? $this->aiServiceConfig->toArray($noStream) : $this->aiServiceConfig;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['aiServiceConfig'])) {
            $model->aiServiceConfig = AiServiceConfig::fromMap($map['aiServiceConfig']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}

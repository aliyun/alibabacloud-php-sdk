<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\LLMConfig\config;

class LLMConfig extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $modelServiceName;
    protected $_name = [
        'config' => 'config',
        'modelServiceName' => 'modelServiceName',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->modelServiceName) {
            $res['modelServiceName'] = $this->modelServiceName;
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
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['modelServiceName'])) {
            $model->modelServiceName = $map['modelServiceName'];
        }

        return $model;
    }
}

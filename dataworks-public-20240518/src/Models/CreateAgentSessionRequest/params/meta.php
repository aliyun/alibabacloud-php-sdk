<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAgentSessionRequest\params;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAgentSessionRequest\params\meta\agent;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAgentSessionRequest\params\meta\config;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAgentSessionRequest\params\meta\initialConfigOptions;

class meta extends Model
{
    /**
     * @var agent
     */
    public $agent;

    /**
     * @var config
     */
    public $config;

    /**
     * @var initialConfigOptions
     */
    public $initialConfigOptions;
    protected $_name = [
        'agent' => 'Agent',
        'config' => 'Config',
        'initialConfigOptions' => 'InitialConfigOptions',
    ];

    public function validate()
    {
        if (null !== $this->agent) {
            $this->agent->validate();
        }
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (null !== $this->initialConfigOptions) {
            $this->initialConfigOptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agent) {
            $res['Agent'] = null !== $this->agent ? $this->agent->toArray($noStream) : $this->agent;
        }

        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->initialConfigOptions) {
            $res['InitialConfigOptions'] = null !== $this->initialConfigOptions ? $this->initialConfigOptions->toArray($noStream) : $this->initialConfigOptions;
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
        if (isset($map['Agent'])) {
            $model->agent = agent::fromMap($map['Agent']);
        }

        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }

        if (isset($map['InitialConfigOptions'])) {
            $model->initialConfigOptions = initialConfigOptions::fromMap($map['InitialConfigOptions']);
        }

        return $model;
    }
}

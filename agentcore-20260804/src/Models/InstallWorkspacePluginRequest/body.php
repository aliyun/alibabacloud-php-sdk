<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallWorkspacePluginRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallWorkspacePluginRequest\body\config;

class body extends Model
{
    /**
     * @var config
     */
    public $config;
    protected $_name = [
        'config' => 'config',
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

        return $model;
    }
}

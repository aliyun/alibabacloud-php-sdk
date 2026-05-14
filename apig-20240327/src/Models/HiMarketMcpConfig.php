<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketMcpConfig\mcpServerConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketMcpConfig\meta;

class HiMarketMcpConfig extends Model
{
    /**
     * @var mcpServerConfig
     */
    public $mcpServerConfig;

    /**
     * @var string
     */
    public $mcpServerName;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @var string
     */
    public $tools;
    protected $_name = [
        'mcpServerConfig' => 'mcpServerConfig',
        'mcpServerName' => 'mcpServerName',
        'meta' => 'meta',
        'tools' => 'tools',
    ];

    public function validate()
    {
        if (null !== $this->mcpServerConfig) {
            $this->mcpServerConfig->validate();
        }
        if (null !== $this->meta) {
            $this->meta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpServerConfig) {
            $res['mcpServerConfig'] = null !== $this->mcpServerConfig ? $this->mcpServerConfig->toArray($noStream) : $this->mcpServerConfig;
        }

        if (null !== $this->mcpServerName) {
            $res['mcpServerName'] = $this->mcpServerName;
        }

        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
        }

        if (null !== $this->tools) {
            $res['tools'] = $this->tools;
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
        if (isset($map['mcpServerConfig'])) {
            $model->mcpServerConfig = mcpServerConfig::fromMap($map['mcpServerConfig']);
        }

        if (isset($map['mcpServerName'])) {
            $model->mcpServerName = $map['mcpServerName'];
        }

        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }

        if (isset($map['tools'])) {
            $model->tools = $map['tools'];
        }

        return $model;
    }
}

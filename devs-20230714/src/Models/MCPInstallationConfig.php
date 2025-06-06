<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class MCPInstallationConfig extends Model
{
    /**
     * @var MCPServerInstallationConfig
     */
    public $mcpServers;
    protected $_name = [
        'mcpServers' => 'mcpServers',
    ];

    public function validate()
    {
        if (null !== $this->mcpServers) {
            $this->mcpServers->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpServers) {
            $res['mcpServers'] = null !== $this->mcpServers ? $this->mcpServers->toArray($noStream) : $this->mcpServers;
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
        if (isset($map['mcpServers'])) {
            $model->mcpServers = MCPServerInstallationConfig::fromMap($map['mcpServers']);
        }

        return $model;
    }
}

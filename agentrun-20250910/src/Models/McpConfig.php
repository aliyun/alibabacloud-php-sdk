<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class McpConfig extends Model
{
    /**
     * @var BoundConfiguration
     */
    public $boundConfiguration;

    /**
     * @var McpProxyConfiguration
     */
    public $mcpProxyConfiguration;

    /**
     * @var bool
     */
    public $proxyEnabled;

    /**
     * @var string
     */
    public $sessionAffinity;

    /**
     * @var string
     */
    public $sessionAffinityConfig;
    protected $_name = [
        'boundConfiguration' => 'boundConfiguration',
        'mcpProxyConfiguration' => 'mcpProxyConfiguration',
        'proxyEnabled' => 'proxyEnabled',
        'sessionAffinity' => 'sessionAffinity',
        'sessionAffinityConfig' => 'sessionAffinityConfig',
    ];

    public function validate()
    {
        if (null !== $this->boundConfiguration) {
            $this->boundConfiguration->validate();
        }
        if (null !== $this->mcpProxyConfiguration) {
            $this->mcpProxyConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundConfiguration) {
            $res['boundConfiguration'] = null !== $this->boundConfiguration ? $this->boundConfiguration->toArray($noStream) : $this->boundConfiguration;
        }

        if (null !== $this->mcpProxyConfiguration) {
            $res['mcpProxyConfiguration'] = null !== $this->mcpProxyConfiguration ? $this->mcpProxyConfiguration->toArray($noStream) : $this->mcpProxyConfiguration;
        }

        if (null !== $this->proxyEnabled) {
            $res['proxyEnabled'] = $this->proxyEnabled;
        }

        if (null !== $this->sessionAffinity) {
            $res['sessionAffinity'] = $this->sessionAffinity;
        }

        if (null !== $this->sessionAffinityConfig) {
            $res['sessionAffinityConfig'] = $this->sessionAffinityConfig;
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
        if (isset($map['boundConfiguration'])) {
            $model->boundConfiguration = BoundConfiguration::fromMap($map['boundConfiguration']);
        }

        if (isset($map['mcpProxyConfiguration'])) {
            $model->mcpProxyConfiguration = McpProxyConfiguration::fromMap($map['mcpProxyConfiguration']);
        }

        if (isset($map['proxyEnabled'])) {
            $model->proxyEnabled = $map['proxyEnabled'];
        }

        if (isset($map['sessionAffinity'])) {
            $model->sessionAffinity = $map['sessionAffinity'];
        }

        if (isset($map['sessionAffinityConfig'])) {
            $model->sessionAffinityConfig = $map['sessionAffinityConfig'];
        }

        return $model;
    }
}

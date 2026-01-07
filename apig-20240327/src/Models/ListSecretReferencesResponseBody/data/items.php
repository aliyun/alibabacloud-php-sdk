<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretReferencesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretReferencesResponseBody\data\items\consumerConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretReferencesResponseBody\data\items\mcpServerConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretReferencesResponseBody\data\items\pluginConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSecretReferencesResponseBody\data\items\serviceConfig;

class items extends Model
{
    /**
     * @var pluginConfig
     */
    public $pluginConfig;

    /**
     * @var serviceConfig
     */
    public $serviceConfig;

    /**
     * @var consumerConfig
     */
    public $consumerConfig;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var mcpServerConfig
     */
    public $mcpServerConfig;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'pluginConfig' => 'PluginConfig',
        'serviceConfig' => 'ServiceConfig',
        'consumerConfig' => 'consumerConfig',
        'gatewayId' => 'gatewayId',
        'mcpServerConfig' => 'mcpServerConfig',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        if (null !== $this->pluginConfig) {
            $this->pluginConfig->validate();
        }
        if (null !== $this->serviceConfig) {
            $this->serviceConfig->validate();
        }
        if (null !== $this->consumerConfig) {
            $this->consumerConfig->validate();
        }
        if (null !== $this->mcpServerConfig) {
            $this->mcpServerConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pluginConfig) {
            $res['PluginConfig'] = null !== $this->pluginConfig ? $this->pluginConfig->toArray($noStream) : $this->pluginConfig;
        }

        if (null !== $this->serviceConfig) {
            $res['ServiceConfig'] = null !== $this->serviceConfig ? $this->serviceConfig->toArray($noStream) : $this->serviceConfig;
        }

        if (null !== $this->consumerConfig) {
            $res['consumerConfig'] = null !== $this->consumerConfig ? $this->consumerConfig->toArray($noStream) : $this->consumerConfig;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->mcpServerConfig) {
            $res['mcpServerConfig'] = null !== $this->mcpServerConfig ? $this->mcpServerConfig->toArray($noStream) : $this->mcpServerConfig;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['PluginConfig'])) {
            $model->pluginConfig = pluginConfig::fromMap($map['PluginConfig']);
        }

        if (isset($map['ServiceConfig'])) {
            $model->serviceConfig = serviceConfig::fromMap($map['ServiceConfig']);
        }

        if (isset($map['consumerConfig'])) {
            $model->consumerConfig = consumerConfig::fromMap($map['consumerConfig']);
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['mcpServerConfig'])) {
            $model->mcpServerConfig = mcpServerConfig::fromMap($map['mcpServerConfig']);
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}

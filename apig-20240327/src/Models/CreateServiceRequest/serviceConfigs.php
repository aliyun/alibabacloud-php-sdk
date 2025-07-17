<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceRequest;

use AlibabaCloud\SDK\APIG\V20240327\Models\AgentServiceConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\AiServiceConfig;
use AlibabaCloud\Tea\Model;

class serviceConfigs extends Model
{
    /**
     * @description The list of domain names or fixed addresses.
     *
     * @var string[]
     */
    public $addresses;

    /**
     * @var AgentServiceConfig
     */
    public $agentServiceConfig;

    /**
     * @description The AI service configurations.
     *
     * @var AiServiceConfig
     */
    public $aiServiceConfig;

    /**
     * @description The list of DNS service addresses.
     *
     * @var string[]
     */
    public $dnsServers;

    /**
     * @description The service group name. This parameter is required if sourceType is set to MSE_NACOS.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The service name.
     *
     * @example user-service
     *
     * @var string
     */
    public $name;

    /**
     * @description The service namespace. This parameter is required when sourceType is set to K8S or MSE_NACOS.
     *
     *   If sourceType is set to K8S, this parameter specifies the namespace where the K8s service resides.
     *   If sourceType is set to MSE_NACOS, this parameter specifies a namespace in Nacos.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The function version or alias.
     *
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'addresses' => 'addresses',
        'agentServiceConfig' => 'agentServiceConfig',
        'aiServiceConfig' => 'aiServiceConfig',
        'dnsServers' => 'dnsServers',
        'groupName' => 'groupName',
        'name' => 'name',
        'namespace' => 'namespace',
        'qualifier' => 'qualifier',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addresses) {
            $res['addresses'] = $this->addresses;
        }
        if (null !== $this->agentServiceConfig) {
            $res['agentServiceConfig'] = null !== $this->agentServiceConfig ? $this->agentServiceConfig->toMap() : null;
        }
        if (null !== $this->aiServiceConfig) {
            $res['aiServiceConfig'] = null !== $this->aiServiceConfig ? $this->aiServiceConfig->toMap() : null;
        }
        if (null !== $this->dnsServers) {
            $res['dnsServers'] = $this->dnsServers;
        }
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addresses'])) {
            if (!empty($map['addresses'])) {
                $model->addresses = $map['addresses'];
            }
        }
        if (isset($map['agentServiceConfig'])) {
            $model->agentServiceConfig = AgentServiceConfig::fromMap($map['agentServiceConfig']);
        }
        if (isset($map['aiServiceConfig'])) {
            $model->aiServiceConfig = AiServiceConfig::fromMap($map['aiServiceConfig']);
        }
        if (isset($map['dnsServers'])) {
            if (!empty($map['dnsServers'])) {
                $model->dnsServers = $map['dnsServers'];
            }
        }
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}

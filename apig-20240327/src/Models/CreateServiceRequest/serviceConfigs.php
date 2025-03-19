<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceRequest;

use AlibabaCloud\SDK\APIG\V20240327\Models\AiServiceConfig;
use AlibabaCloud\Tea\Model;

class serviceConfigs extends Model
{
    /**
     * @description List of domain names or fixed addresses.
     *
     * @var string[]
     */
    public $addresses;

    /**
     * @description AI service configuration.
     *
     * @var AiServiceConfig
     */
    public $aiServiceConfig;

    /**
     * @description List of DNS server addresses.
     *
     * @var string[]
     */
    public $dnsServers;

    /**
     * @description Service group name.
     * Needs to be specified when `sourceType` is MSE_NACOS.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Service name.
     *
     * @example user-service
     *
     * @var string
     */
    public $name;

    /**
     * @description Namespace of the service:
     *
     * - When `sourceType` is K8S, it represents the namespace where the K8S service is located.
     * - When `sourceType` is MSE_NACOS, it represents the namespace in Nacos.
     *
     * It needs to be specified when `sourceType` is K8S or MSE_NACOS.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Function version or alias.
     *
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'addresses' => 'addresses',
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

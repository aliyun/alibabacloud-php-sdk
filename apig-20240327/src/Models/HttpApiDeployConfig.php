<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\customDomainInfos;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\policyConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\serviceConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\subDomains;
use AlibabaCloud\Tea\Model;

class HttpApiDeployConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoDeploy;

    /**
     * @example SingleService
     *
     * @var string
     */
    public $backendScene;

    /**
     * @var string[]
     */
    public $customDomainIds;

    /**
     * @var customDomainInfos[]
     */
    public $customDomainInfos;

    /**
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @example gw-xx
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @var GatewayInfo
     */
    public $gatewayInfo;

    /**
     * @var HttpApiMockContract
     */
    public $mock;

    /**
     * @var policyConfigs[]
     */
    public $policyConfigs;

    /**
     * @var Backend
     */
    public $routeBackend;

    /**
     * @var serviceConfigs[]
     */
    public $serviceConfigs;

    /**
     * @var subDomains[]
     */
    public $subDomains;
    protected $_name = [
        'autoDeploy' => 'autoDeploy',
        'backendScene' => 'backendScene',
        'customDomainIds' => 'customDomainIds',
        'customDomainInfos' => 'customDomainInfos',
        'environmentId' => 'environmentId',
        'gatewayId' => 'gatewayId',
        'gatewayInfo' => 'gatewayInfo',
        'mock' => 'mock',
        'policyConfigs' => 'policyConfigs',
        'routeBackend' => 'routeBackend',
        'serviceConfigs' => 'serviceConfigs',
        'subDomains' => 'subDomains',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoDeploy) {
            $res['autoDeploy'] = $this->autoDeploy;
        }
        if (null !== $this->backendScene) {
            $res['backendScene'] = $this->backendScene;
        }
        if (null !== $this->customDomainIds) {
            $res['customDomainIds'] = $this->customDomainIds;
        }
        if (null !== $this->customDomainInfos) {
            $res['customDomainInfos'] = [];
            if (null !== $this->customDomainInfos && \is_array($this->customDomainInfos)) {
                $n = 0;
                foreach ($this->customDomainInfos as $item) {
                    $res['customDomainInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayInfo) {
            $res['gatewayInfo'] = null !== $this->gatewayInfo ? $this->gatewayInfo->toMap() : null;
        }
        if (null !== $this->mock) {
            $res['mock'] = null !== $this->mock ? $this->mock->toMap() : null;
        }
        if (null !== $this->policyConfigs) {
            $res['policyConfigs'] = [];
            if (null !== $this->policyConfigs && \is_array($this->policyConfigs)) {
                $n = 0;
                foreach ($this->policyConfigs as $item) {
                    $res['policyConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->routeBackend) {
            $res['routeBackend'] = null !== $this->routeBackend ? $this->routeBackend->toMap() : null;
        }
        if (null !== $this->serviceConfigs) {
            $res['serviceConfigs'] = [];
            if (null !== $this->serviceConfigs && \is_array($this->serviceConfigs)) {
                $n = 0;
                foreach ($this->serviceConfigs as $item) {
                    $res['serviceConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subDomains) {
            $res['subDomains'] = [];
            if (null !== $this->subDomains && \is_array($this->subDomains)) {
                $n = 0;
                foreach ($this->subDomains as $item) {
                    $res['subDomains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiDeployConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoDeploy'])) {
            $model->autoDeploy = $map['autoDeploy'];
        }
        if (isset($map['backendScene'])) {
            $model->backendScene = $map['backendScene'];
        }
        if (isset($map['customDomainIds'])) {
            if (!empty($map['customDomainIds'])) {
                $model->customDomainIds = $map['customDomainIds'];
            }
        }
        if (isset($map['customDomainInfos'])) {
            if (!empty($map['customDomainInfos'])) {
                $model->customDomainInfos = [];
                $n = 0;
                foreach ($map['customDomainInfos'] as $item) {
                    $model->customDomainInfos[$n++] = null !== $item ? customDomainInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['gatewayInfo'])) {
            $model->gatewayInfo = GatewayInfo::fromMap($map['gatewayInfo']);
        }
        if (isset($map['mock'])) {
            $model->mock = HttpApiMockContract::fromMap($map['mock']);
        }
        if (isset($map['policyConfigs'])) {
            if (!empty($map['policyConfigs'])) {
                $model->policyConfigs = [];
                $n = 0;
                foreach ($map['policyConfigs'] as $item) {
                    $model->policyConfigs[$n++] = null !== $item ? policyConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['routeBackend'])) {
            $model->routeBackend = Backend::fromMap($map['routeBackend']);
        }
        if (isset($map['serviceConfigs'])) {
            if (!empty($map['serviceConfigs'])) {
                $model->serviceConfigs = [];
                $n = 0;
                foreach ($map['serviceConfigs'] as $item) {
                    $model->serviceConfigs[$n++] = null !== $item ? serviceConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['subDomains'])) {
            if (!empty($map['subDomains'])) {
                $model->subDomains = [];
                $n = 0;
                foreach ($map['subDomains'] as $item) {
                    $model->subDomains[$n++] = null !== $item ? subDomains::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

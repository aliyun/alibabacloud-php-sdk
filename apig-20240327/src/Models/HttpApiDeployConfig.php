<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\customDomainInfos;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\policyConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\serviceConfigs;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\subDomains;

class HttpApiDeployConfig extends Model
{
    /**
     * @var bool
     */
    public $autoDeploy;

    /**
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
     * @var string
     */
    public $environmentId;

    /**
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

    public function validate()
    {
        if (\is_array($this->customDomainIds)) {
            Model::validateArray($this->customDomainIds);
        }
        if (\is_array($this->customDomainInfos)) {
            Model::validateArray($this->customDomainInfos);
        }
        if (null !== $this->gatewayInfo) {
            $this->gatewayInfo->validate();
        }
        if (null !== $this->mock) {
            $this->mock->validate();
        }
        if (\is_array($this->policyConfigs)) {
            Model::validateArray($this->policyConfigs);
        }
        if (null !== $this->routeBackend) {
            $this->routeBackend->validate();
        }
        if (\is_array($this->serviceConfigs)) {
            Model::validateArray($this->serviceConfigs);
        }
        if (\is_array($this->subDomains)) {
            Model::validateArray($this->subDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoDeploy) {
            $res['autoDeploy'] = $this->autoDeploy;
        }

        if (null !== $this->backendScene) {
            $res['backendScene'] = $this->backendScene;
        }

        if (null !== $this->customDomainIds) {
            if (\is_array($this->customDomainIds)) {
                $res['customDomainIds'] = [];
                $n1 = 0;
                foreach ($this->customDomainIds as $item1) {
                    $res['customDomainIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customDomainInfos) {
            if (\is_array($this->customDomainInfos)) {
                $res['customDomainInfos'] = [];
                $n1 = 0;
                foreach ($this->customDomainInfos as $item1) {
                    $res['customDomainInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['gatewayInfo'] = null !== $this->gatewayInfo ? $this->gatewayInfo->toArray($noStream) : $this->gatewayInfo;
        }

        if (null !== $this->mock) {
            $res['mock'] = null !== $this->mock ? $this->mock->toArray($noStream) : $this->mock;
        }

        if (null !== $this->policyConfigs) {
            if (\is_array($this->policyConfigs)) {
                $res['policyConfigs'] = [];
                $n1 = 0;
                foreach ($this->policyConfigs as $item1) {
                    $res['policyConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->routeBackend) {
            $res['routeBackend'] = null !== $this->routeBackend ? $this->routeBackend->toArray($noStream) : $this->routeBackend;
        }

        if (null !== $this->serviceConfigs) {
            if (\is_array($this->serviceConfigs)) {
                $res['serviceConfigs'] = [];
                $n1 = 0;
                foreach ($this->serviceConfigs as $item1) {
                    $res['serviceConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subDomains) {
            if (\is_array($this->subDomains)) {
                $res['subDomains'] = [];
                $n1 = 0;
                foreach ($this->subDomains as $item1) {
                    $res['subDomains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['autoDeploy'])) {
            $model->autoDeploy = $map['autoDeploy'];
        }

        if (isset($map['backendScene'])) {
            $model->backendScene = $map['backendScene'];
        }

        if (isset($map['customDomainIds'])) {
            if (!empty($map['customDomainIds'])) {
                $model->customDomainIds = [];
                $n1 = 0;
                foreach ($map['customDomainIds'] as $item1) {
                    $model->customDomainIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['customDomainInfos'])) {
            if (!empty($map['customDomainInfos'])) {
                $model->customDomainInfos = [];
                $n1 = 0;
                foreach ($map['customDomainInfos'] as $item1) {
                    $model->customDomainInfos[$n1] = customDomainInfos::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['policyConfigs'] as $item1) {
                    $model->policyConfigs[$n1] = policyConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['routeBackend'])) {
            $model->routeBackend = Backend::fromMap($map['routeBackend']);
        }

        if (isset($map['serviceConfigs'])) {
            if (!empty($map['serviceConfigs'])) {
                $model->serviceConfigs = [];
                $n1 = 0;
                foreach ($map['serviceConfigs'] as $item1) {
                    $model->serviceConfigs[$n1] = serviceConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['subDomains'])) {
            if (!empty($map['subDomains'])) {
                $model->subDomains = [];
                $n1 = 0;
                foreach ($map['subDomains'] as $item1) {
                    $model->subDomains[$n1] = subDomains::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

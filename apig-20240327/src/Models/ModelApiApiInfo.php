<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ModelApiApiInfo\ingressInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ModelApiApiInfo\modelApiInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ModelApiApiInfo\modelCardRuntimeDiagnostics;
use AlibabaCloud\SDK\APIG\V20240327\Models\ModelApiApiInfo\publishedEndpoints;

class ModelApiApiInfo extends Model
{
    /**
     * @var string[]
     */
    public $agentProtocols;

    /**
     * @var string
     */
    public $basePath;

    /**
     * @var string
     */
    public $creationClientToken;

    /**
     * @var string
     */
    public $deleteStatus;

    /**
     * @var ModelApiApiInfoDeployCntMapValue[]
     */
    public $deployCntMap;

    /**
     * @var string
     */
    public $deployErrorMessage;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $domainIds;

    /**
     * @var ModelApiDomainInfo[]
     */
    public $domainInfos;

    /**
     * @var bool
     */
    public $enableAuth;

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
     * @var string
     */
    public $httpApiId;

    /**
     * @var ingressInfo
     */
    public $ingressInfo;

    /**
     * @var modelApiInfo
     */
    public $modelApiInfo;

    /**
     * @var modelCardRuntimeDiagnostics[]
     */
    public $modelCardRuntimeDiagnostics;

    /**
     * @var string
     */
    public $modelCategory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var ModelApiPolicyConfig[]
     */
    public $policyConfigs;

    /**
     * @var string[]
     */
    public $protocols;

    /**
     * @var publishedEndpoints[]
     */
    public $publishedEndpoints;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var HttpApiVersionInfo
     */
    public $versionInfo;
    protected $_name = [
        'agentProtocols' => 'agentProtocols',
        'basePath' => 'basePath',
        'creationClientToken' => 'creationClientToken',
        'deleteStatus' => 'deleteStatus',
        'deployCntMap' => 'deployCntMap',
        'deployErrorMessage' => 'deployErrorMessage',
        'description' => 'description',
        'domainIds' => 'domainIds',
        'domainInfos' => 'domainInfos',
        'enableAuth' => 'enableAuth',
        'environmentId' => 'environmentId',
        'gatewayId' => 'gatewayId',
        'gatewayInfo' => 'gatewayInfo',
        'httpApiId' => 'httpApiId',
        'ingressInfo' => 'ingressInfo',
        'modelApiInfo' => 'modelApiInfo',
        'modelCardRuntimeDiagnostics' => 'modelCardRuntimeDiagnostics',
        'modelCategory' => 'modelCategory',
        'name' => 'name',
        'policyConfigs' => 'policyConfigs',
        'protocols' => 'protocols',
        'publishedEndpoints' => 'publishedEndpoints',
        'resourceGroupId' => 'resourceGroupId',
        'status' => 'status',
        'type' => 'type',
        'versionInfo' => 'versionInfo',
    ];

    public function validate()
    {
        if (\is_array($this->agentProtocols)) {
            Model::validateArray($this->agentProtocols);
        }
        if (\is_array($this->deployCntMap)) {
            Model::validateArray($this->deployCntMap);
        }
        if (\is_array($this->domainIds)) {
            Model::validateArray($this->domainIds);
        }
        if (\is_array($this->domainInfos)) {
            Model::validateArray($this->domainInfos);
        }
        if (null !== $this->gatewayInfo) {
            $this->gatewayInfo->validate();
        }
        if (null !== $this->ingressInfo) {
            $this->ingressInfo->validate();
        }
        if (null !== $this->modelApiInfo) {
            $this->modelApiInfo->validate();
        }
        if (\is_array($this->modelCardRuntimeDiagnostics)) {
            Model::validateArray($this->modelCardRuntimeDiagnostics);
        }
        if (\is_array($this->policyConfigs)) {
            Model::validateArray($this->policyConfigs);
        }
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        if (\is_array($this->publishedEndpoints)) {
            Model::validateArray($this->publishedEndpoints);
        }
        if (null !== $this->versionInfo) {
            $this->versionInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentProtocols) {
            if (\is_array($this->agentProtocols)) {
                $res['agentProtocols'] = [];
                $n1 = 0;
                foreach ($this->agentProtocols as $item1) {
                    $res['agentProtocols'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->basePath) {
            $res['basePath'] = $this->basePath;
        }

        if (null !== $this->creationClientToken) {
            $res['creationClientToken'] = $this->creationClientToken;
        }

        if (null !== $this->deleteStatus) {
            $res['deleteStatus'] = $this->deleteStatus;
        }

        if (null !== $this->deployCntMap) {
            if (\is_array($this->deployCntMap)) {
                $res['deployCntMap'] = [];
                foreach ($this->deployCntMap as $key1 => $value1) {
                    $res['deployCntMap'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->deployErrorMessage) {
            $res['deployErrorMessage'] = $this->deployErrorMessage;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->domainIds) {
            if (\is_array($this->domainIds)) {
                $res['domainIds'] = [];
                $n1 = 0;
                foreach ($this->domainIds as $item1) {
                    $res['domainIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainInfos) {
            if (\is_array($this->domainInfos)) {
                $res['domainInfos'] = [];
                $n1 = 0;
                foreach ($this->domainInfos as $item1) {
                    $res['domainInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableAuth) {
            $res['enableAuth'] = $this->enableAuth;
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

        if (null !== $this->httpApiId) {
            $res['httpApiId'] = $this->httpApiId;
        }

        if (null !== $this->ingressInfo) {
            $res['ingressInfo'] = null !== $this->ingressInfo ? $this->ingressInfo->toArray($noStream) : $this->ingressInfo;
        }

        if (null !== $this->modelApiInfo) {
            $res['modelApiInfo'] = null !== $this->modelApiInfo ? $this->modelApiInfo->toArray($noStream) : $this->modelApiInfo;
        }

        if (null !== $this->modelCardRuntimeDiagnostics) {
            if (\is_array($this->modelCardRuntimeDiagnostics)) {
                $res['modelCardRuntimeDiagnostics'] = [];
                $n1 = 0;
                foreach ($this->modelCardRuntimeDiagnostics as $item1) {
                    $res['modelCardRuntimeDiagnostics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelCategory) {
            $res['modelCategory'] = $this->modelCategory;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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

        if (null !== $this->protocols) {
            if (\is_array($this->protocols)) {
                $res['protocols'] = [];
                $n1 = 0;
                foreach ($this->protocols as $item1) {
                    $res['protocols'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publishedEndpoints) {
            if (\is_array($this->publishedEndpoints)) {
                $res['publishedEndpoints'] = [];
                $n1 = 0;
                foreach ($this->publishedEndpoints as $item1) {
                    $res['publishedEndpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->versionInfo) {
            $res['versionInfo'] = null !== $this->versionInfo ? $this->versionInfo->toArray($noStream) : $this->versionInfo;
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
        if (isset($map['agentProtocols'])) {
            if (!empty($map['agentProtocols'])) {
                $model->agentProtocols = [];
                $n1 = 0;
                foreach ($map['agentProtocols'] as $item1) {
                    $model->agentProtocols[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['basePath'])) {
            $model->basePath = $map['basePath'];
        }

        if (isset($map['creationClientToken'])) {
            $model->creationClientToken = $map['creationClientToken'];
        }

        if (isset($map['deleteStatus'])) {
            $model->deleteStatus = $map['deleteStatus'];
        }

        if (isset($map['deployCntMap'])) {
            if (!empty($map['deployCntMap'])) {
                $model->deployCntMap = [];
                foreach ($map['deployCntMap'] as $key1 => $value1) {
                    $model->deployCntMap[$key1] = ModelApiApiInfoDeployCntMapValue::fromMap($value1);
                }
            }
        }

        if (isset($map['deployErrorMessage'])) {
            $model->deployErrorMessage = $map['deployErrorMessage'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['domainIds'])) {
            if (!empty($map['domainIds'])) {
                $model->domainIds = [];
                $n1 = 0;
                foreach ($map['domainIds'] as $item1) {
                    $model->domainIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['domainInfos'])) {
            if (!empty($map['domainInfos'])) {
                $model->domainInfos = [];
                $n1 = 0;
                foreach ($map['domainInfos'] as $item1) {
                    $model->domainInfos[$n1] = ModelApiDomainInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['enableAuth'])) {
            $model->enableAuth = $map['enableAuth'];
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

        if (isset($map['httpApiId'])) {
            $model->httpApiId = $map['httpApiId'];
        }

        if (isset($map['ingressInfo'])) {
            $model->ingressInfo = ingressInfo::fromMap($map['ingressInfo']);
        }

        if (isset($map['modelApiInfo'])) {
            $model->modelApiInfo = modelApiInfo::fromMap($map['modelApiInfo']);
        }

        if (isset($map['modelCardRuntimeDiagnostics'])) {
            if (!empty($map['modelCardRuntimeDiagnostics'])) {
                $model->modelCardRuntimeDiagnostics = [];
                $n1 = 0;
                foreach ($map['modelCardRuntimeDiagnostics'] as $item1) {
                    $model->modelCardRuntimeDiagnostics[$n1] = modelCardRuntimeDiagnostics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['modelCategory'])) {
            $model->modelCategory = $map['modelCategory'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['policyConfigs'])) {
            if (!empty($map['policyConfigs'])) {
                $model->policyConfigs = [];
                $n1 = 0;
                foreach ($map['policyConfigs'] as $item1) {
                    $model->policyConfigs[$n1] = ModelApiPolicyConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['protocols'])) {
            if (!empty($map['protocols'])) {
                $model->protocols = [];
                $n1 = 0;
                foreach ($map['protocols'] as $item1) {
                    $model->protocols[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['publishedEndpoints'])) {
            if (!empty($map['publishedEndpoints'])) {
                $model->publishedEndpoints = [];
                $n1 = 0;
                foreach ($map['publishedEndpoints'] as $item1) {
                    $model->publishedEndpoints[$n1] = publishedEndpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['versionInfo'])) {
            $model->versionInfo = HttpApiVersionInfo::fromMap($map['versionInfo']);
        }

        return $model;
    }
}

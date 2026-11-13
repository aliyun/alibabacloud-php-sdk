<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ModelApiListApiInfo\environments;
use AlibabaCloud\SDK\APIG\V20240327\Models\ModelApiListApiInfo\ingressInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ModelApiListApiInfo\modelApiInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ModelApiListApiInfo\modelCardRuntimeDiagnostics;

class ModelApiListApiInfo extends Model
{
    /**
     * @var string[]
     */
    public $agentProtocols;

    /**
     * @var string[]
     */
    public $aiProtocols;

    /**
     * @var AuthConfig
     */
    public $authConfig;

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
     * @var ModelApiListApiInfoDeployCntMapValue[]
     */
    public $deployCntMap;

    /**
     * @var HttpApiDeployConfig[]
     */
    public $deployConfigs;

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
     * @var environments[]
     */
    public $environments;

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
        'aiProtocols' => 'aiProtocols',
        'authConfig' => 'authConfig',
        'basePath' => 'basePath',
        'creationClientToken' => 'creationClientToken',
        'deleteStatus' => 'deleteStatus',
        'deployCntMap' => 'deployCntMap',
        'deployConfigs' => 'deployConfigs',
        'deployErrorMessage' => 'deployErrorMessage',
        'description' => 'description',
        'domainIds' => 'domainIds',
        'domainInfos' => 'domainInfos',
        'enableAuth' => 'enableAuth',
        'environmentId' => 'environmentId',
        'environments' => 'environments',
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
        if (\is_array($this->aiProtocols)) {
            Model::validateArray($this->aiProtocols);
        }
        if (null !== $this->authConfig) {
            $this->authConfig->validate();
        }
        if (\is_array($this->deployCntMap)) {
            Model::validateArray($this->deployCntMap);
        }
        if (\is_array($this->deployConfigs)) {
            Model::validateArray($this->deployConfigs);
        }
        if (\is_array($this->domainIds)) {
            Model::validateArray($this->domainIds);
        }
        if (\is_array($this->domainInfos)) {
            Model::validateArray($this->domainInfos);
        }
        if (\is_array($this->environments)) {
            Model::validateArray($this->environments);
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

        if (null !== $this->aiProtocols) {
            if (\is_array($this->aiProtocols)) {
                $res['aiProtocols'] = [];
                $n1 = 0;
                foreach ($this->aiProtocols as $item1) {
                    $res['aiProtocols'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authConfig) {
            $res['authConfig'] = null !== $this->authConfig ? $this->authConfig->toArray($noStream) : $this->authConfig;
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

        if (null !== $this->deployConfigs) {
            if (\is_array($this->deployConfigs)) {
                $res['deployConfigs'] = [];
                $n1 = 0;
                foreach ($this->deployConfigs as $item1) {
                    $res['deployConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->environments) {
            if (\is_array($this->environments)) {
                $res['environments'] = [];
                $n1 = 0;
                foreach ($this->environments as $item1) {
                    $res['environments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['aiProtocols'])) {
            if (!empty($map['aiProtocols'])) {
                $model->aiProtocols = [];
                $n1 = 0;
                foreach ($map['aiProtocols'] as $item1) {
                    $model->aiProtocols[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['authConfig'])) {
            $model->authConfig = AuthConfig::fromMap($map['authConfig']);
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
                    $model->deployCntMap[$key1] = ModelApiListApiInfoDeployCntMapValue::fromMap($value1);
                }
            }
        }

        if (isset($map['deployConfigs'])) {
            if (!empty($map['deployConfigs'])) {
                $model->deployConfigs = [];
                $n1 = 0;
                foreach ($map['deployConfigs'] as $item1) {
                    $model->deployConfigs[$n1] = HttpApiDeployConfig::fromMap($item1);
                    ++$n1;
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

        if (isset($map['environments'])) {
            if (!empty($map['environments'])) {
                $model->environments = [];
                $n1 = 0;
                foreach ($map['environments'] as $item1) {
                    $model->environments[$n1] = environments::fromMap($item1);
                    ++$n1;
                }
            }
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

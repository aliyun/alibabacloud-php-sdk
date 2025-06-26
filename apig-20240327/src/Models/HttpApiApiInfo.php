<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\ingressInfo;

class HttpApiApiInfo extends Model
{
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
     * @var HttpApiApiInfoDeployCntMapValue[]
     */
    public $deployCntMap;

    /**
     * @var HttpApiDeployConfig[]
     */
    public $deployConfigs;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabelAuth;

    /**
     * @var environments[]
     */
    public $environments;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $httpApiId;

    /**
     * @var ingressInfo
     */
    public $ingressInfo;

    /**
     * @var string
     */
    public $name;

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
    public $type;

    /**
     * @var HttpApiVersionInfo
     */
    public $versionInfo;
    protected $_name = [
        'aiProtocols' => 'aiProtocols',
        'authConfig' => 'authConfig',
        'basePath' => 'basePath',
        'deployCntMap' => 'deployCntMap',
        'deployConfigs' => 'deployConfigs',
        'description' => 'description',
        'enabelAuth' => 'enabelAuth',
        'environments' => 'environments',
        'gatewayId' => 'gatewayId',
        'httpApiId' => 'httpApiId',
        'ingressInfo' => 'ingressInfo',
        'name' => 'name',
        'protocols' => 'protocols',
        'resourceGroupId' => 'resourceGroupId',
        'type' => 'type',
        'versionInfo' => 'versionInfo',
    ];

    public function validate()
    {
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
        if (\is_array($this->environments)) {
            Model::validateArray($this->environments);
        }
        if (null !== $this->ingressInfo) {
            $this->ingressInfo->validate();
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

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enabelAuth) {
            $res['enabelAuth'] = $this->enabelAuth;
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

        if (null !== $this->httpApiId) {
            $res['httpApiId'] = $this->httpApiId;
        }

        if (null !== $this->ingressInfo) {
            $res['ingressInfo'] = null !== $this->ingressInfo ? $this->ingressInfo->toArray($noStream) : $this->ingressInfo;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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

        if (isset($map['deployCntMap'])) {
            if (!empty($map['deployCntMap'])) {
                $model->deployCntMap = [];
                foreach ($map['deployCntMap'] as $key1 => $value1) {
                    $model->deployCntMap[$key1] = HttpApiApiInfoDeployCntMapValue::fromMap($value1);
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

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enabelAuth'])) {
            $model->enabelAuth = $map['enabelAuth'];
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

        if (isset($map['httpApiId'])) {
            $model->httpApiId = $map['httpApiId'];
        }

        if (isset($map['ingressInfo'])) {
            $model->ingressInfo = ingressInfo::fromMap($map['ingressInfo']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
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

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['versionInfo'])) {
            $model->versionInfo = HttpApiVersionInfo::fromMap($map['versionInfo']);
        }

        return $model;
    }
}

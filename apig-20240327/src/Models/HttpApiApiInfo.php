<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\ingressInfo;
use AlibabaCloud\Tea\Model;

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
     * @example /v1
     *
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
     * @example api-xxx
     *
     * @var string
     */
    public $httpApiId;

    /**
     * @var ingressInfo
     */
    public $ingressInfo;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $protocols;

    /**
     * @example rg-xxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example Rest
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiProtocols) {
            $res['aiProtocols'] = $this->aiProtocols;
        }
        if (null !== $this->authConfig) {
            $res['authConfig'] = null !== $this->authConfig ? $this->authConfig->toMap() : null;
        }
        if (null !== $this->basePath) {
            $res['basePath'] = $this->basePath;
        }
        if (null !== $this->deployCntMap) {
            $res['deployCntMap'] = [];
            if (null !== $this->deployCntMap && \is_array($this->deployCntMap)) {
                foreach ($this->deployCntMap as $key => $val) {
                    $res['deployCntMap'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->deployConfigs) {
            $res['deployConfigs'] = [];
            if (null !== $this->deployConfigs && \is_array($this->deployConfigs)) {
                $n = 0;
                foreach ($this->deployConfigs as $item) {
                    $res['deployConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['environments'] = [];
            if (null !== $this->environments && \is_array($this->environments)) {
                $n = 0;
                foreach ($this->environments as $item) {
                    $res['environments'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['ingressInfo'] = null !== $this->ingressInfo ? $this->ingressInfo->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->protocols) {
            $res['protocols'] = $this->protocols;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->versionInfo) {
            $res['versionInfo'] = null !== $this->versionInfo ? $this->versionInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiApiInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aiProtocols'])) {
            if (!empty($map['aiProtocols'])) {
                $model->aiProtocols = $map['aiProtocols'];
            }
        }
        if (isset($map['authConfig'])) {
            $model->authConfig = AuthConfig::fromMap($map['authConfig']);
        }
        if (isset($map['basePath'])) {
            $model->basePath = $map['basePath'];
        }
        if (isset($map['deployCntMap'])) {
            $model->deployCntMap = $map['deployCntMap'];
        }
        if (isset($map['deployConfigs'])) {
            if (!empty($map['deployConfigs'])) {
                $model->deployConfigs = [];
                $n = 0;
                foreach ($map['deployConfigs'] as $item) {
                    $model->deployConfigs[$n++] = null !== $item ? HttpApiDeployConfig::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['environments'] as $item) {
                    $model->environments[$n++] = null !== $item ? environments::fromMap($item) : $item;
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
                $model->protocols = $map['protocols'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRequest\ingressConfig;
use AlibabaCloud\Tea\Model;

class UpdateHttpApiRequest extends Model
{
    /**
     * @var string[]
     */
    public $agentProtocols;

    /**
     * @description The AI protocols.
     *
     * @var string[]
     */
    public $aiProtocols;

    /**
     * @description The authentication configuration.
     *
     * @var AuthConfig
     */
    public $authConfig;

    /**
     * @description The API base path, which must start with a forward slash (/).
     *
     * This parameter is required.
     *
     * @example /v1
     *
     * @var string
     */
    public $basePath;

    /**
     * @description The deployment configurations.
     *
     * @var HttpApiDeployConfig[]
     */
    public $deployConfigs;

    /**
     * @description The API description.
     *
     * @example API for testing
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable authentication.
     *
     * @var bool
     */
    public $enableAuth;

    /**
     * @description The HTTP Ingress API configurations.
     *
     * @var ingressConfig
     */
    public $ingressConfig;

    /**
     * @var bool
     */
    public $onlyChangeConfig;

    /**
     * @description The protocols that are used to access the API.
     *
     * @var string[]
     */
    public $protocols;

    /**
     * @var bool
     */
    public $removeBasePathOnForward;

    /**
     * @description The versioning configurations.
     *
     * @var HttpApiVersionConfig
     */
    public $versionConfig;
    protected $_name = [
        'agentProtocols' => 'agentProtocols',
        'aiProtocols' => 'aiProtocols',
        'authConfig' => 'authConfig',
        'basePath' => 'basePath',
        'deployConfigs' => 'deployConfigs',
        'description' => 'description',
        'enableAuth' => 'enableAuth',
        'ingressConfig' => 'ingressConfig',
        'onlyChangeConfig' => 'onlyChangeConfig',
        'protocols' => 'protocols',
        'removeBasePathOnForward' => 'removeBasePathOnForward',
        'versionConfig' => 'versionConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentProtocols) {
            $res['agentProtocols'] = $this->agentProtocols;
        }
        if (null !== $this->aiProtocols) {
            $res['aiProtocols'] = $this->aiProtocols;
        }
        if (null !== $this->authConfig) {
            $res['authConfig'] = null !== $this->authConfig ? $this->authConfig->toMap() : null;
        }
        if (null !== $this->basePath) {
            $res['basePath'] = $this->basePath;
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
        if (null !== $this->enableAuth) {
            $res['enableAuth'] = $this->enableAuth;
        }
        if (null !== $this->ingressConfig) {
            $res['ingressConfig'] = null !== $this->ingressConfig ? $this->ingressConfig->toMap() : null;
        }
        if (null !== $this->onlyChangeConfig) {
            $res['onlyChangeConfig'] = $this->onlyChangeConfig;
        }
        if (null !== $this->protocols) {
            $res['protocols'] = $this->protocols;
        }
        if (null !== $this->removeBasePathOnForward) {
            $res['removeBasePathOnForward'] = $this->removeBasePathOnForward;
        }
        if (null !== $this->versionConfig) {
            $res['versionConfig'] = null !== $this->versionConfig ? $this->versionConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHttpApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentProtocols'])) {
            if (!empty($map['agentProtocols'])) {
                $model->agentProtocols = $map['agentProtocols'];
            }
        }
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
        if (isset($map['enableAuth'])) {
            $model->enableAuth = $map['enableAuth'];
        }
        if (isset($map['ingressConfig'])) {
            $model->ingressConfig = ingressConfig::fromMap($map['ingressConfig']);
        }
        if (isset($map['onlyChangeConfig'])) {
            $model->onlyChangeConfig = $map['onlyChangeConfig'];
        }
        if (isset($map['protocols'])) {
            if (!empty($map['protocols'])) {
                $model->protocols = $map['protocols'];
            }
        }
        if (isset($map['removeBasePathOnForward'])) {
            $model->removeBasePathOnForward = $map['removeBasePathOnForward'];
        }
        if (isset($map['versionConfig'])) {
            $model->versionConfig = HttpApiVersionConfig::fromMap($map['versionConfig']);
        }

        return $model;
    }
}

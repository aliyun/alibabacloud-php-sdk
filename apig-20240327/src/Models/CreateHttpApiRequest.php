<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRequest\ingressConfig;

class CreateHttpApiRequest extends Model
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
    public $enableAuth;

    /**
     * @var ingressConfig
     */
    public $ingressConfig;

    /**
     * @var string
     */
    public $modelCategory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $protocols;

    /**
     * @var bool
     */
    public $removeBasePathOnForward;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $type;

    /**
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
        'modelCategory' => 'modelCategory',
        'name' => 'name',
        'protocols' => 'protocols',
        'removeBasePathOnForward' => 'removeBasePathOnForward',
        'resourceGroupId' => 'resourceGroupId',
        'type' => 'type',
        'versionConfig' => 'versionConfig',
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
        if (\is_array($this->deployConfigs)) {
            Model::validateArray($this->deployConfigs);
        }
        if (null !== $this->ingressConfig) {
            $this->ingressConfig->validate();
        }
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        if (null !== $this->versionConfig) {
            $this->versionConfig->validate();
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

        if (null !== $this->enableAuth) {
            $res['enableAuth'] = $this->enableAuth;
        }

        if (null !== $this->ingressConfig) {
            $res['ingressConfig'] = null !== $this->ingressConfig ? $this->ingressConfig->toArray($noStream) : $this->ingressConfig;
        }

        if (null !== $this->modelCategory) {
            $res['modelCategory'] = $this->modelCategory;
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

        if (null !== $this->removeBasePathOnForward) {
            $res['removeBasePathOnForward'] = $this->removeBasePathOnForward;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->versionConfig) {
            $res['versionConfig'] = null !== $this->versionConfig ? $this->versionConfig->toArray($noStream) : $this->versionConfig;
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

        if (isset($map['enableAuth'])) {
            $model->enableAuth = $map['enableAuth'];
        }

        if (isset($map['ingressConfig'])) {
            $model->ingressConfig = ingressConfig::fromMap($map['ingressConfig']);
        }

        if (isset($map['modelCategory'])) {
            $model->modelCategory = $map['modelCategory'];
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

        if (isset($map['removeBasePathOnForward'])) {
            $model->removeBasePathOnForward = $map['removeBasePathOnForward'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['versionConfig'])) {
            $model->versionConfig = HttpApiVersionConfig::fromMap($map['versionConfig']);
        }

        return $model;
    }
}

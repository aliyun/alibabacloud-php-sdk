<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ModelConnection extends Model
{
    /**
     * @var ModelConnectionConsumerAPIKey[]
     */
    public $consumerApiKeys;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $lastUpdatedAt;

    /**
     * @var string
     */
    public $modelConnectionId;

    /**
     * @var string
     */
    public $modelConnectionName;

    /**
     * @var ModelInfoConfig[]
     */
    public $modelInfoConfigs;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var ModelConnectionProviderSettings
     */
    public $providerSettings;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'consumerApiKeys' => 'consumerApiKeys',
        'createdAt' => 'createdAt',
        'description' => 'description',
        'lastUpdatedAt' => 'lastUpdatedAt',
        'modelConnectionId' => 'modelConnectionId',
        'modelConnectionName' => 'modelConnectionName',
        'modelInfoConfigs' => 'modelInfoConfigs',
        'provider' => 'provider',
        'providerSettings' => 'providerSettings',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->consumerApiKeys)) {
            Model::validateArray($this->consumerApiKeys);
        }
        if (\is_array($this->modelInfoConfigs)) {
            Model::validateArray($this->modelInfoConfigs);
        }
        if (null !== $this->providerSettings) {
            $this->providerSettings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerApiKeys) {
            if (\is_array($this->consumerApiKeys)) {
                $res['consumerApiKeys'] = [];
                $n1 = 0;
                foreach ($this->consumerApiKeys as $item1) {
                    $res['consumerApiKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->lastUpdatedAt) {
            $res['lastUpdatedAt'] = $this->lastUpdatedAt;
        }

        if (null !== $this->modelConnectionId) {
            $res['modelConnectionId'] = $this->modelConnectionId;
        }

        if (null !== $this->modelConnectionName) {
            $res['modelConnectionName'] = $this->modelConnectionName;
        }

        if (null !== $this->modelInfoConfigs) {
            if (\is_array($this->modelInfoConfigs)) {
                $res['modelInfoConfigs'] = [];
                $n1 = 0;
                foreach ($this->modelInfoConfigs as $item1) {
                    $res['modelInfoConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->providerSettings) {
            $res['providerSettings'] = null !== $this->providerSettings ? $this->providerSettings->toArray($noStream) : $this->providerSettings;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['consumerApiKeys'])) {
            if (!empty($map['consumerApiKeys'])) {
                $model->consumerApiKeys = [];
                $n1 = 0;
                foreach ($map['consumerApiKeys'] as $item1) {
                    $model->consumerApiKeys[$n1] = ModelConnectionConsumerAPIKey::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['lastUpdatedAt'])) {
            $model->lastUpdatedAt = $map['lastUpdatedAt'];
        }

        if (isset($map['modelConnectionId'])) {
            $model->modelConnectionId = $map['modelConnectionId'];
        }

        if (isset($map['modelConnectionName'])) {
            $model->modelConnectionName = $map['modelConnectionName'];
        }

        if (isset($map['modelInfoConfigs'])) {
            if (!empty($map['modelInfoConfigs'])) {
                $model->modelInfoConfigs = [];
                $n1 = 0;
                foreach ($map['modelInfoConfigs'] as $item1) {
                    $model->modelInfoConfigs[$n1] = ModelInfoConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['providerSettings'])) {
            $model->providerSettings = ModelConnectionProviderSettings::fromMap($map['providerSettings']);
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}

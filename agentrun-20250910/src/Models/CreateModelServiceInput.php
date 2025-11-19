<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateModelServiceInput extends Model
{
    /**
     * @var string
     */
    public $credentialName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var ModelInfoConfig[]
     */
    public $modelInfoConfigs;

    /**
     * @var string
     */
    public $modelServiceName;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var NetworkConfiguration
     */
    public $networkConfiguration;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var ProviderSettings
     */
    public $providerSettings;
    protected $_name = [
        'credentialName' => 'credentialName',
        'description' => 'description',
        'modelInfoConfigs' => 'modelInfoConfigs',
        'modelServiceName' => 'modelServiceName',
        'modelType' => 'modelType',
        'networkConfiguration' => 'networkConfiguration',
        'provider' => 'provider',
        'providerSettings' => 'providerSettings',
    ];

    public function validate()
    {
        if (\is_array($this->modelInfoConfigs)) {
            Model::validateArray($this->modelInfoConfigs);
        }
        if (null !== $this->networkConfiguration) {
            $this->networkConfiguration->validate();
        }
        if (null !== $this->providerSettings) {
            $this->providerSettings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialName) {
            $res['credentialName'] = $this->credentialName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (null !== $this->modelServiceName) {
            $res['modelServiceName'] = $this->modelServiceName;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->networkConfiguration) {
            $res['networkConfiguration'] = null !== $this->networkConfiguration ? $this->networkConfiguration->toArray($noStream) : $this->networkConfiguration;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->providerSettings) {
            $res['providerSettings'] = null !== $this->providerSettings ? $this->providerSettings->toArray($noStream) : $this->providerSettings;
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
        if (isset($map['credentialName'])) {
            $model->credentialName = $map['credentialName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        if (isset($map['modelServiceName'])) {
            $model->modelServiceName = $map['modelServiceName'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['networkConfiguration'])) {
            $model->networkConfiguration = NetworkConfiguration::fromMap($map['networkConfiguration']);
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['providerSettings'])) {
            $model->providerSettings = ProviderSettings::fromMap($map['providerSettings']);
        }

        return $model;
    }
}

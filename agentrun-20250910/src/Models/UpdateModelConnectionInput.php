<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateModelConnectionInput\consumerApiKeys;

class UpdateModelConnectionInput extends Model
{
    /**
     * @var consumerApiKeys[]
     */
    public $consumerApiKeys;

    /**
     * @var string
     */
    public $description;

    /**
     * @var ModelInfoConfig[]
     */
    public $modelInfoConfigs;

    /**
     * @var ModelConnectionProviderSettings
     */
    public $providerSettings;
    protected $_name = [
        'consumerApiKeys' => 'consumerApiKeys',
        'description' => 'description',
        'modelInfoConfigs' => 'modelInfoConfigs',
        'providerSettings' => 'providerSettings',
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
        if (isset($map['consumerApiKeys'])) {
            if (!empty($map['consumerApiKeys'])) {
                $model->consumerApiKeys = [];
                $n1 = 0;
                foreach ($map['consumerApiKeys'] as $item1) {
                    $model->consumerApiKeys[$n1] = consumerApiKeys::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['providerSettings'])) {
            $model->providerSettings = ModelConnectionProviderSettings::fromMap($map['providerSettings']);
        }

        return $model;
    }
}

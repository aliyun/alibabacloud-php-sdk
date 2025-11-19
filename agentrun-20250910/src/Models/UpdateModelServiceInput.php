<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class UpdateModelServiceInput extends Model
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
     * @var NetworkConfiguration
     */
    public $networkConfiguration;

    /**
     * @var ProviderSettings
     */
    public $providerSettings;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'credentialName' => 'credentialName',
        'description' => 'description',
        'modelInfoConfigs' => 'modelInfoConfigs',
        'networkConfiguration' => 'networkConfiguration',
        'providerSettings' => 'providerSettings',
        'status' => 'status',
        'statusReason' => 'statusReason',
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

        if (null !== $this->networkConfiguration) {
            $res['networkConfiguration'] = null !== $this->networkConfiguration ? $this->networkConfiguration->toArray($noStream) : $this->networkConfiguration;
        }

        if (null !== $this->providerSettings) {
            $res['providerSettings'] = null !== $this->providerSettings ? $this->providerSettings->toArray($noStream) : $this->providerSettings;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
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

        if (isset($map['networkConfiguration'])) {
            $model->networkConfiguration = NetworkConfiguration::fromMap($map['networkConfiguration']);
        }

        if (isset($map['providerSettings'])) {
            $model->providerSettings = ProviderSettings::fromMap($map['providerSettings']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
        }

        return $model;
    }
}

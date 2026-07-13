<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;

class TestModelProviderRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $providerId;

    /**
     * @var string
     */
    public $providerName;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'modelName' => 'ModelName',
        'prompt' => 'Prompt',
        'providerId' => 'ProviderId',
        'providerName' => 'ProviderName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->providerId) {
            $res['ProviderId'] = $this->providerId;
        }

        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['ProviderId'])) {
            $model->providerId = $map['ProviderId'];
        }

        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        return $model;
    }
}

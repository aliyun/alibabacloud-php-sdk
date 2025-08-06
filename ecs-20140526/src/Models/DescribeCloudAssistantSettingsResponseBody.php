<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\agentUpgradeConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\ossDeliveryConfigs;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\sessionManagerConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\slsDeliveryConfigs;

class DescribeCloudAssistantSettingsResponseBody extends Model
{
    /**
     * @var agentUpgradeConfig
     */
    public $agentUpgradeConfig;

    /**
     * @var ossDeliveryConfigs
     */
    public $ossDeliveryConfigs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sessionManagerConfig
     */
    public $sessionManagerConfig;

    /**
     * @var slsDeliveryConfigs
     */
    public $slsDeliveryConfigs;
    protected $_name = [
        'agentUpgradeConfig' => 'AgentUpgradeConfig',
        'ossDeliveryConfigs' => 'OssDeliveryConfigs',
        'requestId' => 'RequestId',
        'sessionManagerConfig' => 'SessionManagerConfig',
        'slsDeliveryConfigs' => 'SlsDeliveryConfigs',
    ];

    public function validate()
    {
        if (null !== $this->agentUpgradeConfig) {
            $this->agentUpgradeConfig->validate();
        }
        if (null !== $this->ossDeliveryConfigs) {
            $this->ossDeliveryConfigs->validate();
        }
        if (null !== $this->sessionManagerConfig) {
            $this->sessionManagerConfig->validate();
        }
        if (null !== $this->slsDeliveryConfigs) {
            $this->slsDeliveryConfigs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentUpgradeConfig) {
            $res['AgentUpgradeConfig'] = null !== $this->agentUpgradeConfig ? $this->agentUpgradeConfig->toArray($noStream) : $this->agentUpgradeConfig;
        }

        if (null !== $this->ossDeliveryConfigs) {
            $res['OssDeliveryConfigs'] = null !== $this->ossDeliveryConfigs ? $this->ossDeliveryConfigs->toArray($noStream) : $this->ossDeliveryConfigs;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sessionManagerConfig) {
            $res['SessionManagerConfig'] = null !== $this->sessionManagerConfig ? $this->sessionManagerConfig->toArray($noStream) : $this->sessionManagerConfig;
        }

        if (null !== $this->slsDeliveryConfigs) {
            $res['SlsDeliveryConfigs'] = null !== $this->slsDeliveryConfigs ? $this->slsDeliveryConfigs->toArray($noStream) : $this->slsDeliveryConfigs;
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
        if (isset($map['AgentUpgradeConfig'])) {
            $model->agentUpgradeConfig = agentUpgradeConfig::fromMap($map['AgentUpgradeConfig']);
        }

        if (isset($map['OssDeliveryConfigs'])) {
            $model->ossDeliveryConfigs = ossDeliveryConfigs::fromMap($map['OssDeliveryConfigs']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SessionManagerConfig'])) {
            $model->sessionManagerConfig = sessionManagerConfig::fromMap($map['SessionManagerConfig']);
        }

        if (isset($map['SlsDeliveryConfigs'])) {
            $model->slsDeliveryConfigs = slsDeliveryConfigs::fromMap($map['SlsDeliveryConfigs']);
        }

        return $model;
    }
}

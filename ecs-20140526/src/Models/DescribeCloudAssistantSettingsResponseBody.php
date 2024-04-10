<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\agentUpgradeConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\ossDeliveryConfigs;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\slsDeliveryConfigs;
use AlibabaCloud\Tea\Model;

class DescribeCloudAssistantSettingsResponseBody extends Model
{
    /**
     * @description 云助手Agent升级配置。
     *
     * @var agentUpgradeConfig
     */
    public $agentUpgradeConfig;

    /**
     * @description The configurations for delivering items to Object Storage Service (OSS).
     *
     * @var ossDeliveryConfigs
     */
    public $ossDeliveryConfigs;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The configurations for delivering items to Simple Log Service.
     *
     * @var slsDeliveryConfigs
     */
    public $slsDeliveryConfigs;
    protected $_name = [
        'agentUpgradeConfig' => 'AgentUpgradeConfig',
        'ossDeliveryConfigs' => 'OssDeliveryConfigs',
        'requestId'          => 'RequestId',
        'slsDeliveryConfigs' => 'SlsDeliveryConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentUpgradeConfig) {
            $res['AgentUpgradeConfig'] = null !== $this->agentUpgradeConfig ? $this->agentUpgradeConfig->toMap() : null;
        }
        if (null !== $this->ossDeliveryConfigs) {
            $res['OssDeliveryConfigs'] = null !== $this->ossDeliveryConfigs ? $this->ossDeliveryConfigs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsDeliveryConfigs) {
            $res['SlsDeliveryConfigs'] = null !== $this->slsDeliveryConfigs ? $this->slsDeliveryConfigs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudAssistantSettingsResponseBody
     */
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
        if (isset($map['SlsDeliveryConfigs'])) {
            $model->slsDeliveryConfigs = slsDeliveryConfigs::fromMap($map['SlsDeliveryConfigs']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\agentUpgradeConfig\allowedUpgradeWindows;
use AlibabaCloud\Tea\Model;

class agentUpgradeConfig extends Model
{
    /**
     * @description 允许升级的时间段列表。
     *
     * @var allowedUpgradeWindows
     */
    public $allowedUpgradeWindows;

    /**
     * @description 是否开启自定义Agent升级配置。如查询结果为false或空，默认保持每30分钟尝试升级一次。
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description 允许升级时间段的时区。
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'allowedUpgradeWindows' => 'AllowedUpgradeWindows',
        'enabled'               => 'Enabled',
        'timeZone'              => 'TimeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedUpgradeWindows) {
            $res['AllowedUpgradeWindows'] = null !== $this->allowedUpgradeWindows ? $this->allowedUpgradeWindows->toMap() : null;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentUpgradeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedUpgradeWindows'])) {
            $model->allowedUpgradeWindows = allowedUpgradeWindows::fromMap($map['AllowedUpgradeWindows']);
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}

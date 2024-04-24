<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\agentUpgradeConfig\allowedUpgradeWindows;
use AlibabaCloud\Tea\Model;

class agentUpgradeConfig extends Model
{
    /**
     * @description The time windows during which Cloud Assistant Agent can be upgraded.
     *
     * @var allowedUpgradeWindows
     */
    public $allowedUpgradeWindows;

    /**
     * @description Indicates whether custom upgrade is enabled for Cloud Assistant Agent. If the value is false or empty, an upgrade attempt is performed for Cloud Assistant Agent every 30 minutes.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The time zone of the time window.
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

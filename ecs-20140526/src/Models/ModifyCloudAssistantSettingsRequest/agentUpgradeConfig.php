<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest;

use AlibabaCloud\Tea\Model;

class agentUpgradeConfig extends Model
{
    /**
     * @description The time windows during which Cloud Assistant Agent can be upgraded. The time windows can be accurate to minutes. The Coordinated Universal Time (UTC) time zone is used by default.
     *
     * For example, [ "02:00-03:00", "05:00-06:00" ] specifies that Cloud Assistant Agent can be upgraded from 2:00:00 to 3:00:00 and from 5:00:00 to 6:00:00 every day in the UTC time zone.
     * @var string[]
     */
    public $allowedUpgradeWindow;

    /**
     * @description Specifies whether to enable custom upgrade for Cloud Assistant Agent. If you set this parameter to false, an upgrade attempt is performed for Cloud Assistant Agent every 30 minutes.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The time zone of the time windows. Default value: UTC. You can specify a time zone in the following forms:
     *
     *   The time zone name. Examples: Asia/Shanghai and America/Los_Angeles.
     *   The time offset from GMT. Examples: GMT+8:00 (UTC+8) and GMT-7:00 (UTC-7). You cannot add leading zeros to the hour value.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'allowedUpgradeWindow' => 'AllowedUpgradeWindow',
        'enabled'              => 'Enabled',
        'timeZone'             => 'TimeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedUpgradeWindow) {
            $res['AllowedUpgradeWindow'] = $this->allowedUpgradeWindow;
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
        if (isset($map['AllowedUpgradeWindow'])) {
            if (!empty($map['AllowedUpgradeWindow'])) {
                $model->allowedUpgradeWindow = $map['AllowedUpgradeWindow'];
            }
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

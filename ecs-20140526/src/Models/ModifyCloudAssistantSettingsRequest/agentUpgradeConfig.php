<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest;

use AlibabaCloud\Tea\Model;

class agentUpgradeConfig extends Model
{
    /**
     * @description 允许升级的时间段列表，可精确到分，默认为 UTC 时区。
     *
     * 代表在 UTC 时区的每天2点-3点、5点-6点允许升级。
     * @var string[]
     */
    public $allowedUpgradeWindow;

    /**
     * @description 是否开启自定义Agent升级配置。如设置为false，默认保持每30分钟尝试升级一次。
     *
     * 默认值：false。
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description 允许升级时间段的时区。默认为 UTC 时区。
     * - 时区相对于格林威治时间的偏移量： 如GMT+8:00（东八区）、GMT-7:00（西七区）等。小时位不支持添加前导零。
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

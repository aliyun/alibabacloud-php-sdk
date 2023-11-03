<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileProtectDashboardResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The total number of enabled rules.
     *
     * @example 12
     *
     * @var int
     */
    public $enableRuleCount;

    /**
     * @description The total number of servers on which the Security Center agent is installed.
     *
     * @example 12
     *
     * @var int
     */
    public $pluginCount;

    /**
     * @description The total number of servers on which the Security Center agent is offline.
     *
     * @example 1
     *
     * @var int
     */
    public $pluginOfflineCount;

    /**
     * @description The total number of servers on which the Security Center agent is online.
     *
     * @example 11
     *
     * @var int
     */
    public $pluginOnlineCount;
    protected $_name = [
        'enableRuleCount'    => 'EnableRuleCount',
        'pluginCount'        => 'PluginCount',
        'pluginOfflineCount' => 'PluginOfflineCount',
        'pluginOnlineCount'  => 'PluginOnlineCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableRuleCount) {
            $res['EnableRuleCount'] = $this->enableRuleCount;
        }
        if (null !== $this->pluginCount) {
            $res['PluginCount'] = $this->pluginCount;
        }
        if (null !== $this->pluginOfflineCount) {
            $res['PluginOfflineCount'] = $this->pluginOfflineCount;
        }
        if (null !== $this->pluginOnlineCount) {
            $res['PluginOnlineCount'] = $this->pluginOnlineCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableRuleCount'])) {
            $model->enableRuleCount = $map['EnableRuleCount'];
        }
        if (isset($map['PluginCount'])) {
            $model->pluginCount = $map['PluginCount'];
        }
        if (isset($map['PluginOfflineCount'])) {
            $model->pluginOfflineCount = $map['PluginOfflineCount'];
        }
        if (isset($map['PluginOnlineCount'])) {
            $model->pluginOnlineCount = $map['PluginOnlineCount'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileProtectDashboardResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $enableRuleCount;

    /**
     * @var int
     */
    public $pluginCount;

    /**
     * @var int
     */
    public $pluginOfflineCount;

    /**
     * @var int
     */
    public $pluginOnlineCount;
    protected $_name = [
        'enableRuleCount' => 'EnableRuleCount',
        'pluginCount' => 'PluginCount',
        'pluginOfflineCount' => 'PluginOfflineCount',
        'pluginOnlineCount' => 'PluginOnlineCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

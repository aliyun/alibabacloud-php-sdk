<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidResponseBody\aegisUuidTargetPluginConfigList\aegisSuspiciousConfigList;
use AlibabaCloud\Tea\Model;

class aegisUuidTargetPluginConfigList extends Model
{
    /**
     * @description An array that consists of the configurations of plug-ins.
     *
     * @var aegisSuspiciousConfigList[]
     */
    public $aegisSuspiciousConfigList;

    /**
     * @description The installation code of the plug-in.
     *
     * @example k5O5nd
     *
     * @var string
     */
    public $pluginInstallCode;

    /**
     * @description The name of the plug-in. Valid values:
     *
     *   **alihips**: trojan-specific prevention
     *   **alisecguard**: attack-specific prevention
     *   **alinet**: defense against attacks on servers
     *
     * @example alisecguard
     *
     * @var string
     */
    public $pluginName;

    /**
     * @description Indicates whether the plug-in is installed. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $pluginOnlineInstalled;

    /**
     * @description Indicates whether the plug-in is online. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $pluginOnlineStatus;

    /**
     * @description The version of the plug-in.
     *
     * @example 00_10
     *
     * @var string
     */
    public $pluginVersion;
    protected $_name = [
        'aegisSuspiciousConfigList' => 'AegisSuspiciousConfigList',
        'pluginInstallCode'         => 'PluginInstallCode',
        'pluginName'                => 'PluginName',
        'pluginOnlineInstalled'     => 'PluginOnlineInstalled',
        'pluginOnlineStatus'        => 'PluginOnlineStatus',
        'pluginVersion'             => 'PluginVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aegisSuspiciousConfigList) {
            $res['AegisSuspiciousConfigList'] = [];
            if (null !== $this->aegisSuspiciousConfigList && \is_array($this->aegisSuspiciousConfigList)) {
                $n = 0;
                foreach ($this->aegisSuspiciousConfigList as $item) {
                    $res['AegisSuspiciousConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pluginInstallCode) {
            $res['PluginInstallCode'] = $this->pluginInstallCode;
        }
        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
        }
        if (null !== $this->pluginOnlineInstalled) {
            $res['PluginOnlineInstalled'] = $this->pluginOnlineInstalled;
        }
        if (null !== $this->pluginOnlineStatus) {
            $res['PluginOnlineStatus'] = $this->pluginOnlineStatus;
        }
        if (null !== $this->pluginVersion) {
            $res['PluginVersion'] = $this->pluginVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aegisUuidTargetPluginConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AegisSuspiciousConfigList'])) {
            if (!empty($map['AegisSuspiciousConfigList'])) {
                $model->aegisSuspiciousConfigList = [];
                $n                                = 0;
                foreach ($map['AegisSuspiciousConfigList'] as $item) {
                    $model->aegisSuspiciousConfigList[$n++] = null !== $item ? aegisSuspiciousConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PluginInstallCode'])) {
            $model->pluginInstallCode = $map['PluginInstallCode'];
        }
        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }
        if (isset($map['PluginOnlineInstalled'])) {
            $model->pluginOnlineInstalled = $map['PluginOnlineInstalled'];
        }
        if (isset($map['PluginOnlineStatus'])) {
            $model->pluginOnlineStatus = $map['PluginOnlineStatus'];
        }
        if (isset($map['PluginVersion'])) {
            $model->pluginVersion = $map['PluginVersion'];
        }

        return $model;
    }
}

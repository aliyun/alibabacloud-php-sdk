<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidResponseBody\aegisUuidTargetPluginConfigList\aegisSuspiciousConfigList;
use AlibabaCloud\Tea\Model;

class aegisUuidTargetPluginConfigList extends Model
{
    /**
     * @var aegisSuspiciousConfigList[]
     */
    public $aegisSuspiciousConfigList;

    /**
     * @var string
     */
    public $pluginInstallCode;

    /**
     * @var string
     */
    public $pluginName;

    /**
     * @var bool
     */
    public $pluginOnlineInstalled;

    /**
     * @var bool
     */
    public $pluginOnlineStatus;

    /**
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

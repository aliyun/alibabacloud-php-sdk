<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidResponseBody\aegisUuidTargetPluginConfigList\aegisSuspiciousConfigList;

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
        'pluginInstallCode' => 'PluginInstallCode',
        'pluginName' => 'PluginName',
        'pluginOnlineInstalled' => 'PluginOnlineInstalled',
        'pluginOnlineStatus' => 'PluginOnlineStatus',
        'pluginVersion' => 'PluginVersion',
    ];

    public function validate()
    {
        if (\is_array($this->aegisSuspiciousConfigList)) {
            Model::validateArray($this->aegisSuspiciousConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aegisSuspiciousConfigList) {
            if (\is_array($this->aegisSuspiciousConfigList)) {
                $res['AegisSuspiciousConfigList'] = [];
                $n1 = 0;
                foreach ($this->aegisSuspiciousConfigList as $item1) {
                    $res['AegisSuspiciousConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AegisSuspiciousConfigList'])) {
            if (!empty($map['AegisSuspiciousConfigList'])) {
                $model->aegisSuspiciousConfigList = [];
                $n1 = 0;
                foreach ($map['AegisSuspiciousConfigList'] as $item1) {
                    $model->aegisSuspiciousConfigList[$n1] = aegisSuspiciousConfigList::fromMap($item1);
                    ++$n1;
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

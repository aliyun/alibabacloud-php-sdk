<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidResponseBody\aegisUuidTargetPluginConfigList;

use AlibabaCloud\Tea\Model;

class aegisSuspiciousConfigList extends Model
{
    /**
     * @description Indicates whether the plug-in is enabled. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $config;

    /**
     * @description The message that indicates whether you are authorized to install the plug-in on your server or whether the plug-in is installed on your server. Valid values:
     *
     *   **authorized**: authorized
     *   **unauthorized**: unauthorized
     *   **unbind**: not installed
     *   **nonsupport**: not supported
     *
     * @example authorized
     *
     * @var string
     */
    public $msg;

    /**
     * @description Indicates whether the plug-in is globally configured. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $overallConfig;

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
    public $type;
    protected $_name = [
        'config'        => 'Config',
        'msg'           => 'Msg',
        'overallConfig' => 'OverallConfig',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->overallConfig) {
            $res['OverallConfig'] = $this->overallConfig;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aegisSuspiciousConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['OverallConfig'])) {
            $model->overallConfig = $map['OverallConfig'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

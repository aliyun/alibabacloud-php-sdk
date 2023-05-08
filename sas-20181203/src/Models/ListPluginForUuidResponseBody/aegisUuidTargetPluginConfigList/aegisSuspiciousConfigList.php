<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidResponseBody\aegisUuidTargetPluginConfigList;

use AlibabaCloud\Tea\Model;

class aegisSuspiciousConfigList extends Model
{
    /**
     * @description The name of the plug-in. Valid values:
     *
     *   **alihips**: trojan-specific prevention
     *   **alisecguard**: attack-specific prevention
     *   **alinet**: defense against attacks on servers
     *
     * @example true
     *
     * @var bool
     */
    public $config;

    /**
     * @description Queries the information about plug-ins on a server.
     *
     * @example authorized
     *
     * @var string
     */
    public $msg;

    /**
     * @description ListPluginForUuid
     *
     * @example true
     *
     * @var bool
     */
    public $overallConfig;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
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

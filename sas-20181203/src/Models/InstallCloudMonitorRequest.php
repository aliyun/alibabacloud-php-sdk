<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class InstallCloudMonitorRequest extends Model
{
    /**
     * @description The AccessKey ID that is required to install the CloudMonitor agent. You can call the [DescribeMonitoringAgentAccessKey](~~114948~~) operation to query the AccessKey ID.
     *
     * >  This parameter is required only when you install the CloudMonitor agent on servers that are not deployed on Alibaba Cloud.
     * @example usY*****R_U
     *
     * @var string
     */
    public $agentAccessKey;

    /**
     * @description The AccessKey secret that is required to install the CloudMonitor agent. You can call the [DescribeMonitoringAgentAccessKey](~~114948~~) operation to query the AccessKey secret.
     *
     * >  This parameter is required only when you install the CloudMonitor agent on servers that are not deployed on Alibaba Cloud.
     * @example UCxF2R1sIO90XlU9****
     *
     * @var string
     */
    public $agentSecretKey;

    /**
     * @description The version of the CloudMonitor agent that you want to install on the servers. For more information about the latest version of the CloudMonitor agent, see [Overview](~~183431~~).
     *
     * @example 3.5.6
     *
     * @var string
     */
    public $argusVersion;

    /**
     * @description The IDs of the servers on which you want to install the CloudMonitor agent. Separate multiple IDs with commas (,).
     *
     * @var string[]
     */
    public $instanceIdList;

    /**
     * @description The UUIDs of the servers on which you want to install the CloudMonitor agent. Separate multiple UUIDs with commas (,).
     *
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'agentAccessKey' => 'AgentAccessKey',
        'agentSecretKey' => 'AgentSecretKey',
        'argusVersion'   => 'ArgusVersion',
        'instanceIdList' => 'InstanceIdList',
        'uuidList'       => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentAccessKey) {
            $res['AgentAccessKey'] = $this->agentAccessKey;
        }
        if (null !== $this->agentSecretKey) {
            $res['AgentSecretKey'] = $this->agentSecretKey;
        }
        if (null !== $this->argusVersion) {
            $res['ArgusVersion'] = $this->argusVersion;
        }
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallCloudMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentAccessKey'])) {
            $model->agentAccessKey = $map['AgentAccessKey'];
        }
        if (isset($map['AgentSecretKey'])) {
            $model->agentSecretKey = $map['AgentSecretKey'];
        }
        if (isset($map['ArgusVersion'])) {
            $model->argusVersion = $map['ArgusVersion'];
        }
        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = $map['InstanceIdList'];
            }
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}

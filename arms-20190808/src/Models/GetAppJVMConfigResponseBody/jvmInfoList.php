<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAppJVMConfigResponseBody;

use AlibabaCloud\Tea\Model;

class jvmInfoList extends Model
{
    /**
     * @description Agent version.
     *
     * @example 1.7.0-SNAPSHOT_3.0.3_3756244
     *
     * @var string
     */
    public $agentVersion;

    /**
     * @description The name of the elastic container instance.
     *
     * @example host_name
     *
     * @var string
     */
    public $hostName;

    /**
     * @description Ip address.
     *
     * @example 47.91.59.244
     *
     * @var string
     */
    public $ip;

    /**
     * @description The PID.
     *
     * @example dsv9zcel92@1455182510c5369
     *
     * @var string
     */
    public $pid;

    /**
     * @description Process Id.
     *
     * @example 1
     *
     * @var string
     */
    public $procId;

    /**
     * @description Java VM config.
     *
     * @example [-javaagent:/home/admin/.opt/ArmsAgent/arms-bootstrap-1.7.0-SNAPSHOT.jar, -Doneagent.plugin.arms-agent.enabled=true, -Darms.licenseKey=[******], -Darms.agent.env=K8s, -Darms.agent.podinfo.path=/etc/podinfo, -Darms.appName=productservice, -Doneagent.region=cn-hangzhou, -Dproject.name=Product]
     *
     * @var string
     */
    public $vmArgs;
    protected $_name = [
        'agentVersion' => 'AgentVersion',
        'hostName'     => 'HostName',
        'ip'           => 'Ip',
        'pid'          => 'Pid',
        'procId'       => 'ProcId',
        'vmArgs'       => 'VmArgs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->procId) {
            $res['ProcId'] = $this->procId;
        }
        if (null !== $this->vmArgs) {
            $res['VmArgs'] = $this->vmArgs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jvmInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['ProcId'])) {
            $model->procId = $map['ProcId'];
        }
        if (isset($map['VmArgs'])) {
            $model->vmArgs = $map['VmArgs'];
        }

        return $model;
    }
}

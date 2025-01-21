<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAppJVMConfigResponseBody;

use AlibabaCloud\Dara\Model;

class jvmInfoList extends Model
{
    /**
     * @var string
     */
    public $agentVersion;
    /**
     * @var string
     */
    public $hostName;
    /**
     * @var string
     */
    public $ip;
    /**
     * @var string
     */
    public $pid;
    /**
     * @var string
     */
    public $procId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

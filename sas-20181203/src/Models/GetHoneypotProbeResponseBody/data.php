<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeResponseBody\data\controlNode;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeResponseBody\data\honeypotProbeBindList;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeResponseBody\data\honeyPotProbeScanPort;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $arp;

    /**
     * @var string[]
     */
    public $canListenIpList;

    /**
     * @var string[]
     */
    public $cidrList;

    /**
     * @var controlNode
     */
    public $controlNode;

    /**
     * @var float
     */
    public $cpuLoad;

    /**
     * @var int
     */
    public $deployTime;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var honeyPotProbeScanPort
     */
    public $honeyPotProbeScanPort;

    /**
     * @var honeypotProbeBindList[]
     */
    public $honeypotProbeBindList;

    /**
     * @var string
     */
    public $hostIp;

    /**
     * @var string[]
     */
    public $listenIpList;

    /**
     * @var float
     */
    public $memoryLoad;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var bool
     */
    public $ping;

    /**
     * @var string
     */
    public $probeId;

    /**
     * @var string
     */
    public $probeType;

    /**
     * @var string
     */
    public $probeVersion;

    /**
     * @var string
     */
    public $proxyIp;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'arp'                   => 'Arp',
        'canListenIpList'       => 'CanListenIpList',
        'cidrList'              => 'CidrList',
        'controlNode'           => 'ControlNode',
        'cpuLoad'               => 'CpuLoad',
        'deployTime'            => 'DeployTime',
        'displayName'           => 'DisplayName',
        'honeyPotProbeScanPort' => 'HoneyPotProbeScanPort',
        'honeypotProbeBindList' => 'HoneypotProbeBindList',
        'hostIp'                => 'HostIp',
        'listenIpList'          => 'ListenIpList',
        'memoryLoad'            => 'MemoryLoad',
        'osType'                => 'OsType',
        'ping'                  => 'Ping',
        'probeId'               => 'ProbeId',
        'probeType'             => 'ProbeType',
        'probeVersion'          => 'ProbeVersion',
        'proxyIp'               => 'ProxyIp',
        'status'                => 'Status',
        'uuid'                  => 'Uuid',
        'vpcId'                 => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arp) {
            $res['Arp'] = $this->arp;
        }
        if (null !== $this->canListenIpList) {
            $res['CanListenIpList'] = $this->canListenIpList;
        }
        if (null !== $this->cidrList) {
            $res['CidrList'] = $this->cidrList;
        }
        if (null !== $this->controlNode) {
            $res['ControlNode'] = null !== $this->controlNode ? $this->controlNode->toMap() : null;
        }
        if (null !== $this->cpuLoad) {
            $res['CpuLoad'] = $this->cpuLoad;
        }
        if (null !== $this->deployTime) {
            $res['DeployTime'] = $this->deployTime;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->honeyPotProbeScanPort) {
            $res['HoneyPotProbeScanPort'] = null !== $this->honeyPotProbeScanPort ? $this->honeyPotProbeScanPort->toMap() : null;
        }
        if (null !== $this->honeypotProbeBindList) {
            $res['HoneypotProbeBindList'] = [];
            if (null !== $this->honeypotProbeBindList && \is_array($this->honeypotProbeBindList)) {
                $n = 0;
                foreach ($this->honeypotProbeBindList as $item) {
                    $res['HoneypotProbeBindList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostIp) {
            $res['HostIp'] = $this->hostIp;
        }
        if (null !== $this->listenIpList) {
            $res['ListenIpList'] = $this->listenIpList;
        }
        if (null !== $this->memoryLoad) {
            $res['MemoryLoad'] = $this->memoryLoad;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->ping) {
            $res['Ping'] = $this->ping;
        }
        if (null !== $this->probeId) {
            $res['ProbeId'] = $this->probeId;
        }
        if (null !== $this->probeType) {
            $res['ProbeType'] = $this->probeType;
        }
        if (null !== $this->probeVersion) {
            $res['ProbeVersion'] = $this->probeVersion;
        }
        if (null !== $this->proxyIp) {
            $res['ProxyIp'] = $this->proxyIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['Arp'])) {
            $model->arp = $map['Arp'];
        }
        if (isset($map['CanListenIpList'])) {
            if (!empty($map['CanListenIpList'])) {
                $model->canListenIpList = $map['CanListenIpList'];
            }
        }
        if (isset($map['CidrList'])) {
            if (!empty($map['CidrList'])) {
                $model->cidrList = $map['CidrList'];
            }
        }
        if (isset($map['ControlNode'])) {
            $model->controlNode = controlNode::fromMap($map['ControlNode']);
        }
        if (isset($map['CpuLoad'])) {
            $model->cpuLoad = $map['CpuLoad'];
        }
        if (isset($map['DeployTime'])) {
            $model->deployTime = $map['DeployTime'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['HoneyPotProbeScanPort'])) {
            $model->honeyPotProbeScanPort = honeyPotProbeScanPort::fromMap($map['HoneyPotProbeScanPort']);
        }
        if (isset($map['HoneypotProbeBindList'])) {
            if (!empty($map['HoneypotProbeBindList'])) {
                $model->honeypotProbeBindList = [];
                $n                            = 0;
                foreach ($map['HoneypotProbeBindList'] as $item) {
                    $model->honeypotProbeBindList[$n++] = null !== $item ? honeypotProbeBindList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HostIp'])) {
            $model->hostIp = $map['HostIp'];
        }
        if (isset($map['ListenIpList'])) {
            if (!empty($map['ListenIpList'])) {
                $model->listenIpList = $map['ListenIpList'];
            }
        }
        if (isset($map['MemoryLoad'])) {
            $model->memoryLoad = $map['MemoryLoad'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['Ping'])) {
            $model->ping = $map['Ping'];
        }
        if (isset($map['ProbeId'])) {
            $model->probeId = $map['ProbeId'];
        }
        if (isset($map['ProbeType'])) {
            $model->probeType = $map['ProbeType'];
        }
        if (isset($map['ProbeVersion'])) {
            $model->probeVersion = $map['ProbeVersion'];
        }
        if (isset($map['ProxyIp'])) {
            $model->proxyIp = $map['ProxyIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

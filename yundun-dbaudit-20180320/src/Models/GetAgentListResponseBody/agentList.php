<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAgentListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAgentListResponseBody\agentList\tags;

class agentList extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentOs;

    /**
     * @var string
     */
    public $agentPort;

    /**
     * @var int
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $ecsId;

    /**
     * @var string
     */
    public $firstLoginTime;

    /**
     * @var string
     */
    public $lastActiveTime;

    /**
     * @var int
     */
    public $osCpu;

    /**
     * @var int
     */
    public $osMem;

    /**
     * @var int
     */
    public $pktLoss;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var int
     */
    public $rmagentCpu;

    /**
     * @var int
     */
    public $rmagentMem;

    /**
     * @var int
     */
    public $sendByteCount;

    /**
     * @var int
     */
    public $sendBytes;

    /**
     * @var int
     */
    public $sendPacketCount;

    /**
     * @var int
     */
    public $sendPackets;

    /**
     * @var string
     */
    public $sysConfig;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentOs' => 'AgentOs',
        'agentPort' => 'AgentPort',
        'agentStatus' => 'AgentStatus',
        'agentVersion' => 'AgentVersion',
        'ecsId' => 'EcsId',
        'firstLoginTime' => 'FirstLoginTime',
        'lastActiveTime' => 'LastActiveTime',
        'osCpu' => 'OsCpu',
        'osMem' => 'OsMem',
        'pktLoss' => 'PktLoss',
        'privateIp' => 'PrivateIp',
        'publicIp' => 'PublicIp',
        'rmagentCpu' => 'RmagentCpu',
        'rmagentMem' => 'RmagentMem',
        'sendByteCount' => 'SendByteCount',
        'sendBytes' => 'SendBytes',
        'sendPacketCount' => 'SendPacketCount',
        'sendPackets' => 'SendPackets',
        'sysConfig' => 'SysConfig',
        'tags' => 'Tags',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentOs) {
            $res['AgentOs'] = $this->agentOs;
        }

        if (null !== $this->agentPort) {
            $res['AgentPort'] = $this->agentPort;
        }

        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }

        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }

        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
        }

        if (null !== $this->firstLoginTime) {
            $res['FirstLoginTime'] = $this->firstLoginTime;
        }

        if (null !== $this->lastActiveTime) {
            $res['LastActiveTime'] = $this->lastActiveTime;
        }

        if (null !== $this->osCpu) {
            $res['OsCpu'] = $this->osCpu;
        }

        if (null !== $this->osMem) {
            $res['OsMem'] = $this->osMem;
        }

        if (null !== $this->pktLoss) {
            $res['PktLoss'] = $this->pktLoss;
        }

        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }

        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }

        if (null !== $this->rmagentCpu) {
            $res['RmagentCpu'] = $this->rmagentCpu;
        }

        if (null !== $this->rmagentMem) {
            $res['RmagentMem'] = $this->rmagentMem;
        }

        if (null !== $this->sendByteCount) {
            $res['SendByteCount'] = $this->sendByteCount;
        }

        if (null !== $this->sendBytes) {
            $res['SendBytes'] = $this->sendBytes;
        }

        if (null !== $this->sendPacketCount) {
            $res['SendPacketCount'] = $this->sendPacketCount;
        }

        if (null !== $this->sendPackets) {
            $res['SendPackets'] = $this->sendPackets;
        }

        if (null !== $this->sysConfig) {
            $res['SysConfig'] = $this->sysConfig;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentOs'])) {
            $model->agentOs = $map['AgentOs'];
        }

        if (isset($map['AgentPort'])) {
            $model->agentPort = $map['AgentPort'];
        }

        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }

        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }

        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
        }

        if (isset($map['FirstLoginTime'])) {
            $model->firstLoginTime = $map['FirstLoginTime'];
        }

        if (isset($map['LastActiveTime'])) {
            $model->lastActiveTime = $map['LastActiveTime'];
        }

        if (isset($map['OsCpu'])) {
            $model->osCpu = $map['OsCpu'];
        }

        if (isset($map['OsMem'])) {
            $model->osMem = $map['OsMem'];
        }

        if (isset($map['PktLoss'])) {
            $model->pktLoss = $map['PktLoss'];
        }

        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }

        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }

        if (isset($map['RmagentCpu'])) {
            $model->rmagentCpu = $map['RmagentCpu'];
        }

        if (isset($map['RmagentMem'])) {
            $model->rmagentMem = $map['RmagentMem'];
        }

        if (isset($map['SendByteCount'])) {
            $model->sendByteCount = $map['SendByteCount'];
        }

        if (isset($map['SendBytes'])) {
            $model->sendBytes = $map['SendBytes'];
        }

        if (isset($map['SendPacketCount'])) {
            $model->sendPacketCount = $map['SendPacketCount'];
        }

        if (isset($map['SendPackets'])) {
            $model->sendPackets = $map['SendPackets'];
        }

        if (isset($map['SysConfig'])) {
            $model->sysConfig = $map['SysConfig'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

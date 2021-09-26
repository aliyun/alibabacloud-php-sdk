<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAgentListResponseBody;

use AlibabaCloud\Tea\Model;

class agentList extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var int
     */
    public $rmagentMem;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var int
     */
    public $rmagentCpu;

    /**
     * @var string
     */
    public $firstLoginTime;

    /**
     * @var string
     */
    public $agentOs;

    /**
     * @var int
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $agentPort;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var int
     */
    public $sendPackets;

    /**
     * @var int
     */
    public $sendBytes;

    /**
     * @var string
     */
    public $lastActiveTime;

    /**
     * @var int
     */
    public $sendPacketCount;

    /**
     * @var string
     */
    public $ecsId;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var int
     */
    public $sendByteCount;
    protected $_name = [
        'vpcId'           => 'VpcId',
        'privateIp'       => 'PrivateIp',
        'rmagentMem'      => 'RmagentMem',
        'agentId'         => 'AgentId',
        'rmagentCpu'      => 'RmagentCpu',
        'firstLoginTime'  => 'FirstLoginTime',
        'agentOs'         => 'AgentOs',
        'agentStatus'     => 'AgentStatus',
        'agentPort'       => 'AgentPort',
        'agentVersion'    => 'AgentVersion',
        'sendPackets'     => 'SendPackets',
        'sendBytes'       => 'SendBytes',
        'lastActiveTime'  => 'LastActiveTime',
        'sendPacketCount' => 'SendPacketCount',
        'ecsId'           => 'EcsId',
        'publicIp'        => 'PublicIp',
        'sendByteCount'   => 'SendByteCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->rmagentMem) {
            $res['RmagentMem'] = $this->rmagentMem;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->rmagentCpu) {
            $res['RmagentCpu'] = $this->rmagentCpu;
        }
        if (null !== $this->firstLoginTime) {
            $res['FirstLoginTime'] = $this->firstLoginTime;
        }
        if (null !== $this->agentOs) {
            $res['AgentOs'] = $this->agentOs;
        }
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }
        if (null !== $this->agentPort) {
            $res['AgentPort'] = $this->agentPort;
        }
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }
        if (null !== $this->sendPackets) {
            $res['SendPackets'] = $this->sendPackets;
        }
        if (null !== $this->sendBytes) {
            $res['SendBytes'] = $this->sendBytes;
        }
        if (null !== $this->lastActiveTime) {
            $res['LastActiveTime'] = $this->lastActiveTime;
        }
        if (null !== $this->sendPacketCount) {
            $res['SendPacketCount'] = $this->sendPacketCount;
        }
        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }
        if (null !== $this->sendByteCount) {
            $res['SendByteCount'] = $this->sendByteCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['RmagentMem'])) {
            $model->rmagentMem = $map['RmagentMem'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['RmagentCpu'])) {
            $model->rmagentCpu = $map['RmagentCpu'];
        }
        if (isset($map['FirstLoginTime'])) {
            $model->firstLoginTime = $map['FirstLoginTime'];
        }
        if (isset($map['AgentOs'])) {
            $model->agentOs = $map['AgentOs'];
        }
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }
        if (isset($map['AgentPort'])) {
            $model->agentPort = $map['AgentPort'];
        }
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }
        if (isset($map['SendPackets'])) {
            $model->sendPackets = $map['SendPackets'];
        }
        if (isset($map['SendBytes'])) {
            $model->sendBytes = $map['SendBytes'];
        }
        if (isset($map['LastActiveTime'])) {
            $model->lastActiveTime = $map['LastActiveTime'];
        }
        if (isset($map['SendPacketCount'])) {
            $model->sendPacketCount = $map['SendPacketCount'];
        }
        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }
        if (isset($map['SendByteCount'])) {
            $model->sendByteCount = $map['SendByteCount'];
        }

        return $model;
    }
}

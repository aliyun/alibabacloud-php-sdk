<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventFlowsResponseBody;

use AlibabaCloud\Dara\Model;

class honeypotEventFlows extends Model
{
    /**
     * @var string
     */
    public $agentId;
    /**
     * @var string
     */
    public $agentName;
    /**
     * @var string
     */
    public $dockerId;
    /**
     * @var string
     */
    public $dstIp;
    /**
     * @var int
     */
    public $dstPort;
    /**
     * @var string
     */
    public $eventConnection;
    /**
     * @var string
     */
    public $extra;
    /**
     * @var string
     */
    public $extra1;
    /**
     * @var string
     */
    public $fileOssUrl;
    /**
     * @var int
     */
    public $firstTime;
    /**
     * @var string
     */
    public $honeypotEventId;
    /**
     * @var string
     */
    public $honeypotId;
    /**
     * @var string
     */
    public $honeypotName;
    /**
     * @var int
     */
    public $lastTime;
    /**
     * @var string
     */
    public $riskLevel;
    /**
     * @var int
     */
    public $securityEventId;
    /**
     * @var string
     */
    public $srcIp;
    /**
     * @var string
     */
    public $srcMac;
    /**
     * @var int
     */
    public $srcPort;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $typeId;
    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'agentId'         => 'AgentId',
        'agentName'       => 'AgentName',
        'dockerId'        => 'DockerId',
        'dstIp'           => 'DstIp',
        'dstPort'         => 'DstPort',
        'eventConnection' => 'EventConnection',
        'extra'           => 'Extra',
        'extra1'          => 'Extra1',
        'fileOssUrl'      => 'FileOssUrl',
        'firstTime'       => 'FirstTime',
        'honeypotEventId' => 'HoneypotEventId',
        'honeypotId'      => 'HoneypotId',
        'honeypotName'    => 'HoneypotName',
        'lastTime'        => 'LastTime',
        'riskLevel'       => 'RiskLevel',
        'securityEventId' => 'SecurityEventId',
        'srcIp'           => 'SrcIp',
        'srcMac'          => 'SrcMac',
        'srcPort'         => 'SrcPort',
        'status'          => 'Status',
        'typeId'          => 'TypeId',
        'uid'             => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->dockerId) {
            $res['DockerId'] = $this->dockerId;
        }

        if (null !== $this->dstIp) {
            $res['DstIp'] = $this->dstIp;
        }

        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }

        if (null !== $this->eventConnection) {
            $res['EventConnection'] = $this->eventConnection;
        }

        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        if (null !== $this->extra1) {
            $res['Extra1'] = $this->extra1;
        }

        if (null !== $this->fileOssUrl) {
            $res['FileOssUrl'] = $this->fileOssUrl;
        }

        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->honeypotEventId) {
            $res['HoneypotEventId'] = $this->honeypotEventId;
        }

        if (null !== $this->honeypotId) {
            $res['HoneypotId'] = $this->honeypotId;
        }

        if (null !== $this->honeypotName) {
            $res['HoneypotName'] = $this->honeypotName;
        }

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }

        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        if (null !== $this->srcMac) {
            $res['SrcMac'] = $this->srcMac;
        }

        if (null !== $this->srcPort) {
            $res['SrcPort'] = $this->srcPort;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->typeId) {
            $res['TypeId'] = $this->typeId;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['DockerId'])) {
            $model->dockerId = $map['DockerId'];
        }

        if (isset($map['DstIp'])) {
            $model->dstIp = $map['DstIp'];
        }

        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }

        if (isset($map['EventConnection'])) {
            $model->eventConnection = $map['EventConnection'];
        }

        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        if (isset($map['Extra1'])) {
            $model->extra1 = $map['Extra1'];
        }

        if (isset($map['FileOssUrl'])) {
            $model->fileOssUrl = $map['FileOssUrl'];
        }

        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['HoneypotEventId'])) {
            $model->honeypotEventId = $map['HoneypotEventId'];
        }

        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
        }

        if (isset($map['HoneypotName'])) {
            $model->honeypotName = $map['HoneypotName'];
        }

        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }

        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        if (isset($map['SrcMac'])) {
            $model->srcMac = $map['SrcMac'];
        }

        if (isset($map['SrcPort'])) {
            $model->srcPort = $map['SrcPort'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TypeId'])) {
            $model->typeId = $map['TypeId'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}

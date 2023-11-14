<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventFlowsResponseBody;

use AlibabaCloud\Tea\Model;

class honeypotEventFlows extends Model
{
    /**
     * @example d3c0dafa-5059-4eb0-8c28-7d40f58*****
     *
     * @var string
     */
    public $agentId;

    /**
     * @example hw-d***
     *
     * @var string
     */
    public $agentName;

    /**
     * @example eca09895****
     *
     * @var string
     */
    public $dockerId;

    /**
     * @example 112.126.205.***
     *
     * @var string
     */
    public $dstIp;

    /**
     * @example 80
     *
     * @var int
     */
    public $dstPort;

    /**
     * @example fd7f1ff4-0c4b-41cb-99ad-0724349d****
     *
     * @var string
     */
    public $eventConnection;

    /**
     * @var string
     */
    public $extra;

    /**
     * @example {\"vpc_id\":\"\",\"vpc_dest_port\":\"\",\"vpc_dest_ip\":\"\"}
     *
     * @var string
     */
    public $extra1;

    /**
     * @example https://pop-test-file-upload.oss-cn-beijing.aliyuncs.com/5626_26331*****
     *
     * @var string
     */
    public $fileOssUrl;

    /**
     * @example 1686621122000
     *
     * @var int
     */
    public $firstTime;

    /**
     * @example 19bec028-d98b-45c4-a4d9-cc3d593f****
     *
     * @var string
     */
    public $honeypotEventId;

    /**
     * @example 911df9d6fe20451c059edbcffa1d1c33452f6a71e59d4826da067af224*****
     *
     * @var string
     */
    public $honeypotId;

    /**
     * @example hw-zhi*****
     *
     * @var string
     */
    public $honeypotName;

    /**
     * @example 1686622222000
     *
     * @var int
     */
    public $lastTime;

    /**
     * @example 4
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @example 306527555
     *
     * @var int
     */
    public $securityEventId;

    /**
     * @example 121.41.48.***
     *
     * @var string
     */
    public $srcIp;

    /**
     * @example 00:0C:29:CA:**:**
     *
     * @var string
     */
    public $srcMac;

    /**
     * @example 80
     *
     * @var int
     */
    public $srcPort;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example web_access
     *
     * @var string
     */
    public $typeId;

    /**
     * @example 5fa2ece9-aa08-4bbd-a272-5d27d1c6*****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return honeypotEventFlows
     */
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

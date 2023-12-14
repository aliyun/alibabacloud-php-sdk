<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventFlowsResponseBody;

use AlibabaCloud\Tea\Model;

class honeypotEventFlows extends Model
{
    /**
     * @description The ID of the probe.
     *
     * @example d3c0dafa-5059-4eb0-8c28-7d40f58*****
     *
     * @var string
     */
    public $agentId;

    /**
     * @description The name of the probe.
     *
     * @example hw-d***
     *
     * @var string
     */
    public $agentName;

    /**
     * @description The ID of the container.
     *
     * @example eca09895****
     *
     * @var string
     */
    public $dockerId;

    /**
     * @description The destination IP address.
     *
     * @example 112.126.205.***
     *
     * @var string
     */
    public $dstIp;

    /**
     * @description The destination port.
     *
     * @example 80
     *
     * @var int
     */
    public $dstPort;

    /**
     * @description The UUID of the connection in the attack.
     *
     * @example fd7f1ff4-0c4b-41cb-99ad-0724349d****
     *
     * @var string
     */
    public $eventConnection;

    /**
     * @description The extended information about the attack payload.
     *
     * @example {\"payload\":{\"format\":\"line\",\"name\":{\"cn\":\"payload\",\"en\":\"payload\"},\"value\":\"\"},\"uid\":{\"format\":\"line\",\"name\":{\"cn\":\"\",\"en\":\"\"},\"uid\":\"5fa2ece9-aa08-4bbd-a272-5d27*********\",\"value\":\"\"}}
     *
     * @var string
     */
    public $extra;

    /**
     * @description The extension information about the virtual private cloud (VPC).
     *
     * @example {\"vpc_id\":\"\",\"vpc_dest_port\":\"\",\"vpc_dest_ip\":\"\"}
     *
     * @var string
     */
    public $extra1;

    /**
     * @description The Object Storage Service (OSS) URL of the file.
     *
     * @example https://pop-test-file-upload.oss-cn-beijing.aliyuncs.com/5626_26331*****
     *
     * @var string
     */
    public $fileOssUrl;

    /**
     * @description The timestamp when the intrusion event was first occurred.
     *
     * @example 1686621122000
     *
     * @var int
     */
    public $firstTime;

    /**
     * @description The ID of the intrusion event. The value is a string.
     *
     * @example 19bec028-d98b-45c4-a4d9-cc3d593f****
     *
     * @var string
     */
    public $honeypotEventId;

    /**
     * @description The ID of the honeypot.
     *
     * @example 911df9d6fe20451c059edbcffa1d1c33452f6a71e59d4826da067af224*****
     *
     * @var string
     */
    public $honeypotId;

    /**
     * @description The name of the honeypot.
     *
     * @example hw-zhi*****
     *
     * @var string
     */
    public $honeypotName;

    /**
     * @description The timestamp when the intrusion event was last occurred.
     *
     * @example 1686622222000
     *
     * @var int
     */
    public $lastTime;

    /**
     * @description The risk level. Valid values:
     *
     *   **2**: low
     *   **3**: medium
     *   **4**: high
     *
     * @example 4
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The ID of the intrusion event.
     *
     * @example 306527555
     *
     * @var int
     */
    public $securityEventId;

    /**
     * @description The source IP address.
     *
     * @example 121.41.48.***
     *
     * @var string
     */
    public $srcIp;

    /**
     * @description The source media access control (MAC) address.
     *
     * @example 00:0C:29:CA:**:**
     *
     * @var string
     */
    public $srcMac;

    /**
     * @description The source port number.
     *
     * @example 80
     *
     * @var int
     */
    public $srcPort;

    /**
     * @description The handling status of the intrusion event. Valid values:
     *
     *   **1**: pending handling
     *   **2**: ignored
     *   **4**: confirmed
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the attack type.
     *
     * @example web_access
     *
     * @var string
     */
    public $typeId;

    /**
     * @description The UUID of an attack in the intrusion event.
     *
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListLegacyAgentStatusLogsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example false
     *
     * @var string
     */
    public $agentDropCall;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $agentNo;

    /**
     * @var string
     */
    public $aliHangupCause;

    /**
     * @var string
     */
    public $callDir;

    /**
     * @example 454326****
     *
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $callType;

    /**
     * @example 1312121****
     *
     * @var string
     */
    public $calleeId;

    /**
     * @example 08337676****
     *
     * @var string
     */
    public $callerId;

    /**
     * @example 487326****
     *
     * @var string
     */
    public $connId;

    /**
     * @var string
     */
    public $extend1;

    /**
     * @var string
     */
    public $extend2;

    /**
     * @var string
     */
    public $extend3;

    /**
     * @var string
     */
    public $extend4;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $groupNo;

    /**
     * @example 8032****
     *
     * @var string
     */
    public $monitedAgentNo;

    /**
     * @example 8012****
     *
     * @var string
     */
    public $monitedAgentPhoneNo;

    /**
     * @example false
     *
     * @var bool
     */
    public $outboundScenario;

    /**
     * @example 8012****
     *
     * @var string
     */
    public $phoneNo;

    /**
     * @example 2021-12-03T10:15:30
     *
     * @var string
     */
    public $statisticDate;

    /**
     * @example 3
     *
     * @var int
     */
    public $statisticTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $targetRequest;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $targetSelect;

    /**
     * @example acc6736
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example 07551231****
     *
     * @var string
     */
    public $transferNo;

    /**
     * @example 05711231****
     *
     * @var string
     */
    public $transferNumber;
    protected $_name = [
        'agentDropCall'       => 'AgentDropCall',
        'agentNo'             => 'AgentNo',
        'aliHangupCause'      => 'AliHangupCause',
        'callDir'             => 'CallDir',
        'callId'              => 'CallId',
        'callType'            => 'CallType',
        'calleeId'            => 'CalleeId',
        'callerId'            => 'CallerId',
        'connId'              => 'ConnId',
        'extend1'             => 'Extend1',
        'extend2'             => 'Extend2',
        'extend3'             => 'Extend3',
        'extend4'             => 'Extend4',
        'groupNo'             => 'GroupNo',
        'monitedAgentNo'      => 'MonitedAgentNo',
        'monitedAgentPhoneNo' => 'MonitedAgentPhoneNo',
        'outboundScenario'    => 'OutboundScenario',
        'phoneNo'             => 'PhoneNo',
        'statisticDate'       => 'StatisticDate',
        'statisticTime'       => 'StatisticTime',
        'status'              => 'Status',
        'targetRequest'       => 'TargetRequest',
        'targetSelect'        => 'TargetSelect',
        'tenantId'            => 'TenantId',
        'transferNo'          => 'TransferNo',
        'transferNumber'      => 'TransferNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentDropCall) {
            $res['AgentDropCall'] = $this->agentDropCall;
        }
        if (null !== $this->agentNo) {
            $res['AgentNo'] = $this->agentNo;
        }
        if (null !== $this->aliHangupCause) {
            $res['AliHangupCause'] = $this->aliHangupCause;
        }
        if (null !== $this->callDir) {
            $res['CallDir'] = $this->callDir;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->calleeId) {
            $res['CalleeId'] = $this->calleeId;
        }
        if (null !== $this->callerId) {
            $res['CallerId'] = $this->callerId;
        }
        if (null !== $this->connId) {
            $res['ConnId'] = $this->connId;
        }
        if (null !== $this->extend1) {
            $res['Extend1'] = $this->extend1;
        }
        if (null !== $this->extend2) {
            $res['Extend2'] = $this->extend2;
        }
        if (null !== $this->extend3) {
            $res['Extend3'] = $this->extend3;
        }
        if (null !== $this->extend4) {
            $res['Extend4'] = $this->extend4;
        }
        if (null !== $this->groupNo) {
            $res['GroupNo'] = $this->groupNo;
        }
        if (null !== $this->monitedAgentNo) {
            $res['MonitedAgentNo'] = $this->monitedAgentNo;
        }
        if (null !== $this->monitedAgentPhoneNo) {
            $res['MonitedAgentPhoneNo'] = $this->monitedAgentPhoneNo;
        }
        if (null !== $this->outboundScenario) {
            $res['OutboundScenario'] = $this->outboundScenario;
        }
        if (null !== $this->phoneNo) {
            $res['PhoneNo'] = $this->phoneNo;
        }
        if (null !== $this->statisticDate) {
            $res['StatisticDate'] = $this->statisticDate;
        }
        if (null !== $this->statisticTime) {
            $res['StatisticTime'] = $this->statisticTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetRequest) {
            $res['TargetRequest'] = $this->targetRequest;
        }
        if (null !== $this->targetSelect) {
            $res['TargetSelect'] = $this->targetSelect;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->transferNo) {
            $res['TransferNo'] = $this->transferNo;
        }
        if (null !== $this->transferNumber) {
            $res['TransferNumber'] = $this->transferNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentDropCall'])) {
            $model->agentDropCall = $map['AgentDropCall'];
        }
        if (isset($map['AgentNo'])) {
            $model->agentNo = $map['AgentNo'];
        }
        if (isset($map['AliHangupCause'])) {
            $model->aliHangupCause = $map['AliHangupCause'];
        }
        if (isset($map['CallDir'])) {
            $model->callDir = $map['CallDir'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['CalleeId'])) {
            $model->calleeId = $map['CalleeId'];
        }
        if (isset($map['CallerId'])) {
            $model->callerId = $map['CallerId'];
        }
        if (isset($map['ConnId'])) {
            $model->connId = $map['ConnId'];
        }
        if (isset($map['Extend1'])) {
            $model->extend1 = $map['Extend1'];
        }
        if (isset($map['Extend2'])) {
            $model->extend2 = $map['Extend2'];
        }
        if (isset($map['Extend3'])) {
            $model->extend3 = $map['Extend3'];
        }
        if (isset($map['Extend4'])) {
            $model->extend4 = $map['Extend4'];
        }
        if (isset($map['GroupNo'])) {
            $model->groupNo = $map['GroupNo'];
        }
        if (isset($map['MonitedAgentNo'])) {
            $model->monitedAgentNo = $map['MonitedAgentNo'];
        }
        if (isset($map['MonitedAgentPhoneNo'])) {
            $model->monitedAgentPhoneNo = $map['MonitedAgentPhoneNo'];
        }
        if (isset($map['OutboundScenario'])) {
            $model->outboundScenario = $map['OutboundScenario'];
        }
        if (isset($map['PhoneNo'])) {
            $model->phoneNo = $map['PhoneNo'];
        }
        if (isset($map['StatisticDate'])) {
            $model->statisticDate = $map['StatisticDate'];
        }
        if (isset($map['StatisticTime'])) {
            $model->statisticTime = $map['StatisticTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetRequest'])) {
            $model->targetRequest = $map['TargetRequest'];
        }
        if (isset($map['TargetSelect'])) {
            $model->targetSelect = $map['TargetSelect'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TransferNo'])) {
            $model->transferNo = $map['TransferNo'];
        }
        if (isset($map['TransferNumber'])) {
            $model->transferNumber = $map['TransferNumber'];
        }

        return $model;
    }
}

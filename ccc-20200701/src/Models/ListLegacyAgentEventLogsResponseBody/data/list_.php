<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListLegacyAgentEventLogsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $agentDropCall;

    /**
     * @var string
     */
    public $agentNo;

    /**
     * @var string
     */
    public $callDir;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $callMode;

    /**
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $calleeId;

    /**
     * @var string
     */
    public $callerId;

    /**
     * @var string
     */
    public $connId;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $groupNo;

    /**
     * @var bool
     */
    public $outboundScenario;

    /**
     * @var string
     */
    public $phoneNo;

    /**
     * @var string
     */
    public $statisticDate;

    /**
     * @var string
     */
    public $targetRequest;

    /**
     * @var string
     */
    public $targetSelect;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $transferNumber;
    protected $_name = [
        'agentDropCall'    => 'AgentDropCall',
        'agentNo'          => 'AgentNo',
        'callDir'          => 'CallDir',
        'callId'           => 'CallId',
        'callMode'         => 'CallMode',
        'callType'         => 'CallType',
        'calleeId'         => 'CalleeId',
        'callerId'         => 'CallerId',
        'connId'           => 'ConnId',
        'event'            => 'Event',
        'groupNo'          => 'GroupNo',
        'outboundScenario' => 'OutboundScenario',
        'phoneNo'          => 'PhoneNo',
        'statisticDate'    => 'StatisticDate',
        'targetRequest'    => 'TargetRequest',
        'targetSelect'     => 'TargetSelect',
        'tenantId'         => 'TenantId',
        'transferNumber'   => 'TransferNumber',
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
        if (null !== $this->callDir) {
            $res['CallDir'] = $this->callDir;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->callMode) {
            $res['CallMode'] = $this->callMode;
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
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->groupNo) {
            $res['GroupNo'] = $this->groupNo;
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
        if (null !== $this->targetRequest) {
            $res['TargetRequest'] = $this->targetRequest;
        }
        if (null !== $this->targetSelect) {
            $res['TargetSelect'] = $this->targetSelect;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['CallDir'])) {
            $model->callDir = $map['CallDir'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['CallMode'])) {
            $model->callMode = $map['CallMode'];
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
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['GroupNo'])) {
            $model->groupNo = $map['GroupNo'];
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
        if (isset($map['TargetRequest'])) {
            $model->targetRequest = $map['TargetRequest'];
        }
        if (isset($map['TargetSelect'])) {
            $model->targetSelect = $map['TargetSelect'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TransferNumber'])) {
            $model->transferNumber = $map['TransferNumber'];
        }

        return $model;
    }
}

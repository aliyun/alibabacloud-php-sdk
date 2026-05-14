<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkAgentStatusResponseBody\data;

use AlibabaCloud\Dara\Model;

class agentStatus extends Model
{
    /**
     * @var string
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $agentStatusDetail;

    /**
     * @var string
     */
    public $bindTel;

    /**
     * @var int
     */
    public $bindType;

    /**
     * @var int
     */
    public $bridgeCallCount;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $customerNumber;

    /**
     * @var string
     */
    public $customerNumberEncrypt;

    /**
     * @var string
     */
    public $customerStatus;

    /**
     * @var int
     */
    public $ibAnsweredRingingDuration;

    /**
     * @var int
     */
    public $ibClientAnsweredCount;

    /**
     * @var float
     */
    public $ibClientAnsweredRate;

    /**
     * @var int
     */
    public $ibClientTotalCount;

    /**
     * @var int
     */
    public $ibClientUnansweredCount;

    /**
     * @var int
     */
    public $idleTimeOut;

    /**
     * @var int
     */
    public $incomingCallCount;

    /**
     * @var int
     */
    public $loginDuration;

    /**
     * @var int
     */
    public $obAvgBridgeDuration;

    /**
     * @var int
     */
    public $obBridgeDuration;

    /**
     * @var float
     */
    public $obBridgeRate;

    /**
     * @var int
     */
    public $obCallCount;

    /**
     * @var int
     */
    public $obClientUnbridgeCount;

    /**
     * @var int
     */
    public $obCustomerBridgeCount;

    /**
     * @var int
     */
    public $obCustomerUnbridgeCount;

    /**
     * @var string
     */
    public $pauseDescription;

    /**
     * @var int
     */
    public $pauseType;

    /**
     * @var int
     */
    public $predictToCall;

    /**
     * @var int
     */
    public $queueIncomingCallCount;

    /**
     * @var string
     */
    public $queueInfo;

    /**
     * @var string
     */
    public $queues;

    /**
     * @var int
     */
    public $quickUnlinkCount;

    /**
     * @var int
     */
    public $stateDuration;

    /**
     * @var string[]
     */
    public $tagNames;
    protected $_name = [
        'agentStatus' => 'AgentStatus',
        'agentStatusDetail' => 'AgentStatusDetail',
        'bindTel' => 'BindTel',
        'bindType' => 'BindType',
        'bridgeCallCount' => 'BridgeCallCount',
        'clientName' => 'ClientName',
        'cno' => 'Cno',
        'code' => 'Code',
        'customerNumber' => 'CustomerNumber',
        'customerNumberEncrypt' => 'CustomerNumberEncrypt',
        'customerStatus' => 'CustomerStatus',
        'ibAnsweredRingingDuration' => 'IbAnsweredRingingDuration',
        'ibClientAnsweredCount' => 'IbClientAnsweredCount',
        'ibClientAnsweredRate' => 'IbClientAnsweredRate',
        'ibClientTotalCount' => 'IbClientTotalCount',
        'ibClientUnansweredCount' => 'IbClientUnansweredCount',
        'idleTimeOut' => 'IdleTimeOut',
        'incomingCallCount' => 'IncomingCallCount',
        'loginDuration' => 'LoginDuration',
        'obAvgBridgeDuration' => 'ObAvgBridgeDuration',
        'obBridgeDuration' => 'ObBridgeDuration',
        'obBridgeRate' => 'ObBridgeRate',
        'obCallCount' => 'ObCallCount',
        'obClientUnbridgeCount' => 'ObClientUnbridgeCount',
        'obCustomerBridgeCount' => 'ObCustomerBridgeCount',
        'obCustomerUnbridgeCount' => 'ObCustomerUnbridgeCount',
        'pauseDescription' => 'PauseDescription',
        'pauseType' => 'PauseType',
        'predictToCall' => 'PredictToCall',
        'queueIncomingCallCount' => 'QueueIncomingCallCount',
        'queueInfo' => 'QueueInfo',
        'queues' => 'Queues',
        'quickUnlinkCount' => 'QuickUnlinkCount',
        'stateDuration' => 'StateDuration',
        'tagNames' => 'TagNames',
    ];

    public function validate()
    {
        if (\is_array($this->tagNames)) {
            Model::validateArray($this->tagNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }

        if (null !== $this->agentStatusDetail) {
            $res['AgentStatusDetail'] = $this->agentStatusDetail;
        }

        if (null !== $this->bindTel) {
            $res['BindTel'] = $this->bindTel;
        }

        if (null !== $this->bindType) {
            $res['BindType'] = $this->bindType;
        }

        if (null !== $this->bridgeCallCount) {
            $res['BridgeCallCount'] = $this->bridgeCallCount;
        }

        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->customerNumber) {
            $res['CustomerNumber'] = $this->customerNumber;
        }

        if (null !== $this->customerNumberEncrypt) {
            $res['CustomerNumberEncrypt'] = $this->customerNumberEncrypt;
        }

        if (null !== $this->customerStatus) {
            $res['CustomerStatus'] = $this->customerStatus;
        }

        if (null !== $this->ibAnsweredRingingDuration) {
            $res['IbAnsweredRingingDuration'] = $this->ibAnsweredRingingDuration;
        }

        if (null !== $this->ibClientAnsweredCount) {
            $res['IbClientAnsweredCount'] = $this->ibClientAnsweredCount;
        }

        if (null !== $this->ibClientAnsweredRate) {
            $res['IbClientAnsweredRate'] = $this->ibClientAnsweredRate;
        }

        if (null !== $this->ibClientTotalCount) {
            $res['IbClientTotalCount'] = $this->ibClientTotalCount;
        }

        if (null !== $this->ibClientUnansweredCount) {
            $res['IbClientUnansweredCount'] = $this->ibClientUnansweredCount;
        }

        if (null !== $this->idleTimeOut) {
            $res['IdleTimeOut'] = $this->idleTimeOut;
        }

        if (null !== $this->incomingCallCount) {
            $res['IncomingCallCount'] = $this->incomingCallCount;
        }

        if (null !== $this->loginDuration) {
            $res['LoginDuration'] = $this->loginDuration;
        }

        if (null !== $this->obAvgBridgeDuration) {
            $res['ObAvgBridgeDuration'] = $this->obAvgBridgeDuration;
        }

        if (null !== $this->obBridgeDuration) {
            $res['ObBridgeDuration'] = $this->obBridgeDuration;
        }

        if (null !== $this->obBridgeRate) {
            $res['ObBridgeRate'] = $this->obBridgeRate;
        }

        if (null !== $this->obCallCount) {
            $res['ObCallCount'] = $this->obCallCount;
        }

        if (null !== $this->obClientUnbridgeCount) {
            $res['ObClientUnbridgeCount'] = $this->obClientUnbridgeCount;
        }

        if (null !== $this->obCustomerBridgeCount) {
            $res['ObCustomerBridgeCount'] = $this->obCustomerBridgeCount;
        }

        if (null !== $this->obCustomerUnbridgeCount) {
            $res['ObCustomerUnbridgeCount'] = $this->obCustomerUnbridgeCount;
        }

        if (null !== $this->pauseDescription) {
            $res['PauseDescription'] = $this->pauseDescription;
        }

        if (null !== $this->pauseType) {
            $res['PauseType'] = $this->pauseType;
        }

        if (null !== $this->predictToCall) {
            $res['PredictToCall'] = $this->predictToCall;
        }

        if (null !== $this->queueIncomingCallCount) {
            $res['QueueIncomingCallCount'] = $this->queueIncomingCallCount;
        }

        if (null !== $this->queueInfo) {
            $res['QueueInfo'] = $this->queueInfo;
        }

        if (null !== $this->queues) {
            $res['Queues'] = $this->queues;
        }

        if (null !== $this->quickUnlinkCount) {
            $res['QuickUnlinkCount'] = $this->quickUnlinkCount;
        }

        if (null !== $this->stateDuration) {
            $res['StateDuration'] = $this->stateDuration;
        }

        if (null !== $this->tagNames) {
            if (\is_array($this->tagNames)) {
                $res['TagNames'] = [];
                $n1 = 0;
                foreach ($this->tagNames as $item1) {
                    $res['TagNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }

        if (isset($map['AgentStatusDetail'])) {
            $model->agentStatusDetail = $map['AgentStatusDetail'];
        }

        if (isset($map['BindTel'])) {
            $model->bindTel = $map['BindTel'];
        }

        if (isset($map['BindType'])) {
            $model->bindType = $map['BindType'];
        }

        if (isset($map['BridgeCallCount'])) {
            $model->bridgeCallCount = $map['BridgeCallCount'];
        }

        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CustomerNumber'])) {
            $model->customerNumber = $map['CustomerNumber'];
        }

        if (isset($map['CustomerNumberEncrypt'])) {
            $model->customerNumberEncrypt = $map['CustomerNumberEncrypt'];
        }

        if (isset($map['CustomerStatus'])) {
            $model->customerStatus = $map['CustomerStatus'];
        }

        if (isset($map['IbAnsweredRingingDuration'])) {
            $model->ibAnsweredRingingDuration = $map['IbAnsweredRingingDuration'];
        }

        if (isset($map['IbClientAnsweredCount'])) {
            $model->ibClientAnsweredCount = $map['IbClientAnsweredCount'];
        }

        if (isset($map['IbClientAnsweredRate'])) {
            $model->ibClientAnsweredRate = $map['IbClientAnsweredRate'];
        }

        if (isset($map['IbClientTotalCount'])) {
            $model->ibClientTotalCount = $map['IbClientTotalCount'];
        }

        if (isset($map['IbClientUnansweredCount'])) {
            $model->ibClientUnansweredCount = $map['IbClientUnansweredCount'];
        }

        if (isset($map['IdleTimeOut'])) {
            $model->idleTimeOut = $map['IdleTimeOut'];
        }

        if (isset($map['IncomingCallCount'])) {
            $model->incomingCallCount = $map['IncomingCallCount'];
        }

        if (isset($map['LoginDuration'])) {
            $model->loginDuration = $map['LoginDuration'];
        }

        if (isset($map['ObAvgBridgeDuration'])) {
            $model->obAvgBridgeDuration = $map['ObAvgBridgeDuration'];
        }

        if (isset($map['ObBridgeDuration'])) {
            $model->obBridgeDuration = $map['ObBridgeDuration'];
        }

        if (isset($map['ObBridgeRate'])) {
            $model->obBridgeRate = $map['ObBridgeRate'];
        }

        if (isset($map['ObCallCount'])) {
            $model->obCallCount = $map['ObCallCount'];
        }

        if (isset($map['ObClientUnbridgeCount'])) {
            $model->obClientUnbridgeCount = $map['ObClientUnbridgeCount'];
        }

        if (isset($map['ObCustomerBridgeCount'])) {
            $model->obCustomerBridgeCount = $map['ObCustomerBridgeCount'];
        }

        if (isset($map['ObCustomerUnbridgeCount'])) {
            $model->obCustomerUnbridgeCount = $map['ObCustomerUnbridgeCount'];
        }

        if (isset($map['PauseDescription'])) {
            $model->pauseDescription = $map['PauseDescription'];
        }

        if (isset($map['PauseType'])) {
            $model->pauseType = $map['PauseType'];
        }

        if (isset($map['PredictToCall'])) {
            $model->predictToCall = $map['PredictToCall'];
        }

        if (isset($map['QueueIncomingCallCount'])) {
            $model->queueIncomingCallCount = $map['QueueIncomingCallCount'];
        }

        if (isset($map['QueueInfo'])) {
            $model->queueInfo = $map['QueueInfo'];
        }

        if (isset($map['Queues'])) {
            $model->queues = $map['Queues'];
        }

        if (isset($map['QuickUnlinkCount'])) {
            $model->quickUnlinkCount = $map['QuickUnlinkCount'];
        }

        if (isset($map['StateDuration'])) {
            $model->stateDuration = $map['StateDuration'];
        }

        if (isset($map['TagNames'])) {
            if (!empty($map['TagNames'])) {
                $model->tagNames = [];
                $n1 = 0;
                foreach ($map['TagNames'] as $item1) {
                    $model->tagNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

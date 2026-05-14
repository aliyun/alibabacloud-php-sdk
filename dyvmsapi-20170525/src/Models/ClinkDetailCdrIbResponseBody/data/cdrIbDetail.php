<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDetailCdrIbResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDetailCdrIbResponseBody\data\cdrIbDetail\investigation;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDetailCdrIbResponseBody\data\cdrIbDetail\ivrFlows;

class cdrIbDetail extends Model
{
    /**
     * @var string
     */
    public $agentAnswerInTime;

    /**
     * @var int
     */
    public $bindType;

    /**
     * @var int
     */
    public $bridgeDuration;

    /**
     * @var int
     */
    public $bridgeTime;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $customerCity;

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
    public $customerProvince;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $evaluation;

    /**
     * @var string
     */
    public $firstCallCname;

    /**
     * @var string
     */
    public $firstCallCno;

    /**
     * @var string
     */
    public $firstCallNumber;

    /**
     * @var string
     */
    public $firstCallQname;

    /**
     * @var string
     */
    public $firstCallQno;

    /**
     * @var int
     */
    public $firstJoinQueueTime;

    /**
     * @var int
     */
    public $firstLeaveQueueTime;

    /**
     * @var int
     */
    public $firstQueueDuration;

    /**
     * @var string
     */
    public $hotline;

    /**
     * @var string
     */
    public $hotlineName;

    /**
     * @var investigation
     */
    public $investigation;

    /**
     * @var int
     */
    public $investigationKeys;

    /**
     * @var ivrFlows[]
     */
    public $ivrFlows;

    /**
     * @var string
     */
    public $ivrName;

    /**
     * @var string
     */
    public $mainUniqueId;

    /**
     * @var string
     */
    public $markData;

    /**
     * @var string
     */
    public $onHookSource;

    /**
     * @var string
     */
    public $recordFile;

    /**
     * @var string
     */
    public $rtcUid;

    /**
     * @var int
     */
    public $sayVoiceDuration;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusResult;

    /**
     * @var string
     */
    public $statusRobot;

    /**
     * @var string[]
     */
    public $tagNames;

    /**
     * @var int
     */
    public $totalDuration;

    /**
     * @var string
     */
    public $userField;

    /**
     * @var string
     */
    public $webrtcCallId;

    /**
     * @var string
     */
    public $xnumber;
    protected $_name = [
        'agentAnswerInTime' => 'AgentAnswerInTime',
        'bindType' => 'BindType',
        'bridgeDuration' => 'BridgeDuration',
        'bridgeTime' => 'BridgeTime',
        'callId' => 'CallId',
        'customerCity' => 'CustomerCity',
        'customerNumber' => 'CustomerNumber',
        'customerNumberEncrypt' => 'CustomerNumberEncrypt',
        'customerProvince' => 'CustomerProvince',
        'endTime' => 'EndTime',
        'evaluation' => 'Evaluation',
        'firstCallCname' => 'FirstCallCname',
        'firstCallCno' => 'FirstCallCno',
        'firstCallNumber' => 'FirstCallNumber',
        'firstCallQname' => 'FirstCallQname',
        'firstCallQno' => 'FirstCallQno',
        'firstJoinQueueTime' => 'FirstJoinQueueTime',
        'firstLeaveQueueTime' => 'FirstLeaveQueueTime',
        'firstQueueDuration' => 'FirstQueueDuration',
        'hotline' => 'Hotline',
        'hotlineName' => 'HotlineName',
        'investigation' => 'Investigation',
        'investigationKeys' => 'InvestigationKeys',
        'ivrFlows' => 'IvrFlows',
        'ivrName' => 'IvrName',
        'mainUniqueId' => 'MainUniqueId',
        'markData' => 'MarkData',
        'onHookSource' => 'OnHookSource',
        'recordFile' => 'RecordFile',
        'rtcUid' => 'RtcUid',
        'sayVoiceDuration' => 'SayVoiceDuration',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusResult' => 'StatusResult',
        'statusRobot' => 'StatusRobot',
        'tagNames' => 'TagNames',
        'totalDuration' => 'TotalDuration',
        'userField' => 'UserField',
        'webrtcCallId' => 'WebrtcCallId',
        'xnumber' => 'Xnumber',
    ];

    public function validate()
    {
        if (null !== $this->investigation) {
            $this->investigation->validate();
        }
        if (\is_array($this->ivrFlows)) {
            Model::validateArray($this->ivrFlows);
        }
        if (\is_array($this->tagNames)) {
            Model::validateArray($this->tagNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentAnswerInTime) {
            $res['AgentAnswerInTime'] = $this->agentAnswerInTime;
        }

        if (null !== $this->bindType) {
            $res['BindType'] = $this->bindType;
        }

        if (null !== $this->bridgeDuration) {
            $res['BridgeDuration'] = $this->bridgeDuration;
        }

        if (null !== $this->bridgeTime) {
            $res['BridgeTime'] = $this->bridgeTime;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->customerCity) {
            $res['CustomerCity'] = $this->customerCity;
        }

        if (null !== $this->customerNumber) {
            $res['CustomerNumber'] = $this->customerNumber;
        }

        if (null !== $this->customerNumberEncrypt) {
            $res['CustomerNumberEncrypt'] = $this->customerNumberEncrypt;
        }

        if (null !== $this->customerProvince) {
            $res['CustomerProvince'] = $this->customerProvince;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->evaluation) {
            $res['Evaluation'] = $this->evaluation;
        }

        if (null !== $this->firstCallCname) {
            $res['FirstCallCname'] = $this->firstCallCname;
        }

        if (null !== $this->firstCallCno) {
            $res['FirstCallCno'] = $this->firstCallCno;
        }

        if (null !== $this->firstCallNumber) {
            $res['FirstCallNumber'] = $this->firstCallNumber;
        }

        if (null !== $this->firstCallQname) {
            $res['FirstCallQname'] = $this->firstCallQname;
        }

        if (null !== $this->firstCallQno) {
            $res['FirstCallQno'] = $this->firstCallQno;
        }

        if (null !== $this->firstJoinQueueTime) {
            $res['FirstJoinQueueTime'] = $this->firstJoinQueueTime;
        }

        if (null !== $this->firstLeaveQueueTime) {
            $res['FirstLeaveQueueTime'] = $this->firstLeaveQueueTime;
        }

        if (null !== $this->firstQueueDuration) {
            $res['FirstQueueDuration'] = $this->firstQueueDuration;
        }

        if (null !== $this->hotline) {
            $res['Hotline'] = $this->hotline;
        }

        if (null !== $this->hotlineName) {
            $res['HotlineName'] = $this->hotlineName;
        }

        if (null !== $this->investigation) {
            $res['Investigation'] = null !== $this->investigation ? $this->investigation->toArray($noStream) : $this->investigation;
        }

        if (null !== $this->investigationKeys) {
            $res['InvestigationKeys'] = $this->investigationKeys;
        }

        if (null !== $this->ivrFlows) {
            if (\is_array($this->ivrFlows)) {
                $res['IvrFlows'] = [];
                $n1 = 0;
                foreach ($this->ivrFlows as $item1) {
                    $res['IvrFlows'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ivrName) {
            $res['IvrName'] = $this->ivrName;
        }

        if (null !== $this->mainUniqueId) {
            $res['MainUniqueId'] = $this->mainUniqueId;
        }

        if (null !== $this->markData) {
            $res['MarkData'] = $this->markData;
        }

        if (null !== $this->onHookSource) {
            $res['OnHookSource'] = $this->onHookSource;
        }

        if (null !== $this->recordFile) {
            $res['RecordFile'] = $this->recordFile;
        }

        if (null !== $this->rtcUid) {
            $res['RtcUid'] = $this->rtcUid;
        }

        if (null !== $this->sayVoiceDuration) {
            $res['SayVoiceDuration'] = $this->sayVoiceDuration;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusResult) {
            $res['StatusResult'] = $this->statusResult;
        }

        if (null !== $this->statusRobot) {
            $res['StatusRobot'] = $this->statusRobot;
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

        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }

        if (null !== $this->userField) {
            $res['UserField'] = $this->userField;
        }

        if (null !== $this->webrtcCallId) {
            $res['WebrtcCallId'] = $this->webrtcCallId;
        }

        if (null !== $this->xnumber) {
            $res['Xnumber'] = $this->xnumber;
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
        if (isset($map['AgentAnswerInTime'])) {
            $model->agentAnswerInTime = $map['AgentAnswerInTime'];
        }

        if (isset($map['BindType'])) {
            $model->bindType = $map['BindType'];
        }

        if (isset($map['BridgeDuration'])) {
            $model->bridgeDuration = $map['BridgeDuration'];
        }

        if (isset($map['BridgeTime'])) {
            $model->bridgeTime = $map['BridgeTime'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CustomerCity'])) {
            $model->customerCity = $map['CustomerCity'];
        }

        if (isset($map['CustomerNumber'])) {
            $model->customerNumber = $map['CustomerNumber'];
        }

        if (isset($map['CustomerNumberEncrypt'])) {
            $model->customerNumberEncrypt = $map['CustomerNumberEncrypt'];
        }

        if (isset($map['CustomerProvince'])) {
            $model->customerProvince = $map['CustomerProvince'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Evaluation'])) {
            $model->evaluation = $map['Evaluation'];
        }

        if (isset($map['FirstCallCname'])) {
            $model->firstCallCname = $map['FirstCallCname'];
        }

        if (isset($map['FirstCallCno'])) {
            $model->firstCallCno = $map['FirstCallCno'];
        }

        if (isset($map['FirstCallNumber'])) {
            $model->firstCallNumber = $map['FirstCallNumber'];
        }

        if (isset($map['FirstCallQname'])) {
            $model->firstCallQname = $map['FirstCallQname'];
        }

        if (isset($map['FirstCallQno'])) {
            $model->firstCallQno = $map['FirstCallQno'];
        }

        if (isset($map['FirstJoinQueueTime'])) {
            $model->firstJoinQueueTime = $map['FirstJoinQueueTime'];
        }

        if (isset($map['FirstLeaveQueueTime'])) {
            $model->firstLeaveQueueTime = $map['FirstLeaveQueueTime'];
        }

        if (isset($map['FirstQueueDuration'])) {
            $model->firstQueueDuration = $map['FirstQueueDuration'];
        }

        if (isset($map['Hotline'])) {
            $model->hotline = $map['Hotline'];
        }

        if (isset($map['HotlineName'])) {
            $model->hotlineName = $map['HotlineName'];
        }

        if (isset($map['Investigation'])) {
            $model->investigation = investigation::fromMap($map['Investigation']);
        }

        if (isset($map['InvestigationKeys'])) {
            $model->investigationKeys = $map['InvestigationKeys'];
        }

        if (isset($map['IvrFlows'])) {
            if (!empty($map['IvrFlows'])) {
                $model->ivrFlows = [];
                $n1 = 0;
                foreach ($map['IvrFlows'] as $item1) {
                    $model->ivrFlows[$n1] = ivrFlows::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IvrName'])) {
            $model->ivrName = $map['IvrName'];
        }

        if (isset($map['MainUniqueId'])) {
            $model->mainUniqueId = $map['MainUniqueId'];
        }

        if (isset($map['MarkData'])) {
            $model->markData = $map['MarkData'];
        }

        if (isset($map['OnHookSource'])) {
            $model->onHookSource = $map['OnHookSource'];
        }

        if (isset($map['RecordFile'])) {
            $model->recordFile = $map['RecordFile'];
        }

        if (isset($map['RtcUid'])) {
            $model->rtcUid = $map['RtcUid'];
        }

        if (isset($map['SayVoiceDuration'])) {
            $model->sayVoiceDuration = $map['SayVoiceDuration'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusResult'])) {
            $model->statusResult = $map['StatusResult'];
        }

        if (isset($map['StatusRobot'])) {
            $model->statusRobot = $map['StatusRobot'];
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

        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }

        if (isset($map['UserField'])) {
            $model->userField = $map['UserField'];
        }

        if (isset($map['WebrtcCallId'])) {
            $model->webrtcCallId = $map['WebrtcCallId'];
        }

        if (isset($map['Xnumber'])) {
            $model->xnumber = $map['Xnumber'];
        }

        return $model;
    }
}

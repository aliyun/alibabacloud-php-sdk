<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrObResponseBody\data;

use AlibabaCloud\Dara\Model;

class cdrOb extends Model
{
    /**
     * @var int
     */
    public $asrRecord;

    /**
     * @var int
     */
    public $bridgeDuration;

    /**
     * @var int
     */
    public $bridgeTime;

    /**
     * @var int[]
     */
    public $businessIds;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $callType;

    /**
     * @var int
     */
    public $callTypeKey;

    /**
     * @var int
     */
    public $calleeRingingDuration;

    /**
     * @var int
     */
    public $calleeRingingTime;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var string
     */
    public $clientNumber;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $customerArea;

    /**
     * @var string
     */
    public $customerAreaCode;

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
    public $customerPostCode;

    /**
     * @var string
     */
    public $customerProvince;

    /**
     * @var int
     */
    public $customerVip;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $evaluation;

    /**
     * @var int
     */
    public $existBusiness;

    /**
     * @var bool
     */
    public $existCustomer;

    /**
     * @var int
     */
    public $existTicket;

    /**
     * @var int
     */
    public $investigationKeys;

    /**
     * @var string
     */
    public $leftClid;

    /**
     * @var string
     */
    public $leftClidArea;

    /**
     * @var string
     */
    public $leftClidCity;

    /**
     * @var string
     */
    public $leftClidProvince;

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
    public $obSipCause;

    /**
     * @var string
     */
    public $obSipCauseRaw;

    /**
     * @var int
     */
    public $obWaitDuration;

    /**
     * @var string
     */
    public $onHookSource;

    /**
     * @var int
     */
    public $preRingWaitDuration;

    /**
     * @var string
     */
    public $recordFile;

    /**
     * @var string
     */
    public $requestUniqueId;

    /**
     * @var string
     */
    public $rtcUid;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var string[]
     */
    public $tagNames;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $taskInventoryId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int[]
     */
    public $ticketIds;

    /**
     * @var int
     */
    public $totalDuration;

    /**
     * @var string
     */
    public $trunkGroupKey;

    /**
     * @var int
     */
    public $upTime;

    /**
     * @var string
     */
    public $webrtcCallId;

    /**
     * @var string
     */
    public $xnumber;

    /**
     * @var string
     */
    public $xnumberArea;

    /**
     * @var string
     */
    public $xnumberCity;

    /**
     * @var string
     */
    public $xnumberProvince;
    protected $_name = [
        'asrRecord' => 'AsrRecord',
        'bridgeDuration' => 'BridgeDuration',
        'bridgeTime' => 'BridgeTime',
        'businessIds' => 'BusinessIds',
        'callId' => 'CallId',
        'callType' => 'CallType',
        'callTypeKey' => 'CallTypeKey',
        'calleeRingingDuration' => 'CalleeRingingDuration',
        'calleeRingingTime' => 'CalleeRingingTime',
        'clientName' => 'ClientName',
        'clientNumber' => 'ClientNumber',
        'cno' => 'Cno',
        'customerArea' => 'CustomerArea',
        'customerAreaCode' => 'CustomerAreaCode',
        'customerCity' => 'CustomerCity',
        'customerNumber' => 'CustomerNumber',
        'customerNumberEncrypt' => 'CustomerNumberEncrypt',
        'customerPostCode' => 'CustomerPostCode',
        'customerProvince' => 'CustomerProvince',
        'customerVip' => 'CustomerVip',
        'endTime' => 'EndTime',
        'enterpriseId' => 'EnterpriseId',
        'evaluation' => 'Evaluation',
        'existBusiness' => 'ExistBusiness',
        'existCustomer' => 'ExistCustomer',
        'existTicket' => 'ExistTicket',
        'investigationKeys' => 'InvestigationKeys',
        'leftClid' => 'LeftClid',
        'leftClidArea' => 'LeftClidArea',
        'leftClidCity' => 'LeftClidCity',
        'leftClidProvince' => 'LeftClidProvince',
        'mainUniqueId' => 'MainUniqueId',
        'markData' => 'MarkData',
        'obSipCause' => 'ObSipCause',
        'obSipCauseRaw' => 'ObSipCauseRaw',
        'obWaitDuration' => 'ObWaitDuration',
        'onHookSource' => 'OnHookSource',
        'preRingWaitDuration' => 'PreRingWaitDuration',
        'recordFile' => 'RecordFile',
        'requestUniqueId' => 'RequestUniqueId',
        'rtcUid' => 'RtcUid',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusDesc' => 'StatusDesc',
        'tagNames' => 'TagNames',
        'taskId' => 'TaskId',
        'taskInventoryId' => 'TaskInventoryId',
        'taskName' => 'TaskName',
        'ticketIds' => 'TicketIds',
        'totalDuration' => 'TotalDuration',
        'trunkGroupKey' => 'TrunkGroupKey',
        'upTime' => 'UpTime',
        'webrtcCallId' => 'WebrtcCallId',
        'xnumber' => 'Xnumber',
        'xnumberArea' => 'XnumberArea',
        'xnumberCity' => 'XnumberCity',
        'xnumberProvince' => 'XnumberProvince',
    ];

    public function validate()
    {
        if (\is_array($this->businessIds)) {
            Model::validateArray($this->businessIds);
        }
        if (\is_array($this->tagNames)) {
            Model::validateArray($this->tagNames);
        }
        if (\is_array($this->ticketIds)) {
            Model::validateArray($this->ticketIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrRecord) {
            $res['AsrRecord'] = $this->asrRecord;
        }

        if (null !== $this->bridgeDuration) {
            $res['BridgeDuration'] = $this->bridgeDuration;
        }

        if (null !== $this->bridgeTime) {
            $res['BridgeTime'] = $this->bridgeTime;
        }

        if (null !== $this->businessIds) {
            if (\is_array($this->businessIds)) {
                $res['BusinessIds'] = [];
                $n1 = 0;
                foreach ($this->businessIds as $item1) {
                    $res['BusinessIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->callTypeKey) {
            $res['CallTypeKey'] = $this->callTypeKey;
        }

        if (null !== $this->calleeRingingDuration) {
            $res['CalleeRingingDuration'] = $this->calleeRingingDuration;
        }

        if (null !== $this->calleeRingingTime) {
            $res['CalleeRingingTime'] = $this->calleeRingingTime;
        }

        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
        }

        if (null !== $this->clientNumber) {
            $res['ClientNumber'] = $this->clientNumber;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->customerArea) {
            $res['CustomerArea'] = $this->customerArea;
        }

        if (null !== $this->customerAreaCode) {
            $res['CustomerAreaCode'] = $this->customerAreaCode;
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

        if (null !== $this->customerPostCode) {
            $res['CustomerPostCode'] = $this->customerPostCode;
        }

        if (null !== $this->customerProvince) {
            $res['CustomerProvince'] = $this->customerProvince;
        }

        if (null !== $this->customerVip) {
            $res['CustomerVip'] = $this->customerVip;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->evaluation) {
            $res['Evaluation'] = $this->evaluation;
        }

        if (null !== $this->existBusiness) {
            $res['ExistBusiness'] = $this->existBusiness;
        }

        if (null !== $this->existCustomer) {
            $res['ExistCustomer'] = $this->existCustomer;
        }

        if (null !== $this->existTicket) {
            $res['ExistTicket'] = $this->existTicket;
        }

        if (null !== $this->investigationKeys) {
            $res['InvestigationKeys'] = $this->investigationKeys;
        }

        if (null !== $this->leftClid) {
            $res['LeftClid'] = $this->leftClid;
        }

        if (null !== $this->leftClidArea) {
            $res['LeftClidArea'] = $this->leftClidArea;
        }

        if (null !== $this->leftClidCity) {
            $res['LeftClidCity'] = $this->leftClidCity;
        }

        if (null !== $this->leftClidProvince) {
            $res['LeftClidProvince'] = $this->leftClidProvince;
        }

        if (null !== $this->mainUniqueId) {
            $res['MainUniqueId'] = $this->mainUniqueId;
        }

        if (null !== $this->markData) {
            $res['MarkData'] = $this->markData;
        }

        if (null !== $this->obSipCause) {
            $res['ObSipCause'] = $this->obSipCause;
        }

        if (null !== $this->obSipCauseRaw) {
            $res['ObSipCauseRaw'] = $this->obSipCauseRaw;
        }

        if (null !== $this->obWaitDuration) {
            $res['ObWaitDuration'] = $this->obWaitDuration;
        }

        if (null !== $this->onHookSource) {
            $res['OnHookSource'] = $this->onHookSource;
        }

        if (null !== $this->preRingWaitDuration) {
            $res['PreRingWaitDuration'] = $this->preRingWaitDuration;
        }

        if (null !== $this->recordFile) {
            $res['RecordFile'] = $this->recordFile;
        }

        if (null !== $this->requestUniqueId) {
            $res['RequestUniqueId'] = $this->requestUniqueId;
        }

        if (null !== $this->rtcUid) {
            $res['RtcUid'] = $this->rtcUid;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
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

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskInventoryId) {
            $res['TaskInventoryId'] = $this->taskInventoryId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->ticketIds) {
            if (\is_array($this->ticketIds)) {
                $res['TicketIds'] = [];
                $n1 = 0;
                foreach ($this->ticketIds as $item1) {
                    $res['TicketIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }

        if (null !== $this->trunkGroupKey) {
            $res['TrunkGroupKey'] = $this->trunkGroupKey;
        }

        if (null !== $this->upTime) {
            $res['UpTime'] = $this->upTime;
        }

        if (null !== $this->webrtcCallId) {
            $res['WebrtcCallId'] = $this->webrtcCallId;
        }

        if (null !== $this->xnumber) {
            $res['Xnumber'] = $this->xnumber;
        }

        if (null !== $this->xnumberArea) {
            $res['XnumberArea'] = $this->xnumberArea;
        }

        if (null !== $this->xnumberCity) {
            $res['XnumberCity'] = $this->xnumberCity;
        }

        if (null !== $this->xnumberProvince) {
            $res['XnumberProvince'] = $this->xnumberProvince;
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
        if (isset($map['AsrRecord'])) {
            $model->asrRecord = $map['AsrRecord'];
        }

        if (isset($map['BridgeDuration'])) {
            $model->bridgeDuration = $map['BridgeDuration'];
        }

        if (isset($map['BridgeTime'])) {
            $model->bridgeTime = $map['BridgeTime'];
        }

        if (isset($map['BusinessIds'])) {
            if (!empty($map['BusinessIds'])) {
                $model->businessIds = [];
                $n1 = 0;
                foreach ($map['BusinessIds'] as $item1) {
                    $model->businessIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['CallTypeKey'])) {
            $model->callTypeKey = $map['CallTypeKey'];
        }

        if (isset($map['CalleeRingingDuration'])) {
            $model->calleeRingingDuration = $map['CalleeRingingDuration'];
        }

        if (isset($map['CalleeRingingTime'])) {
            $model->calleeRingingTime = $map['CalleeRingingTime'];
        }

        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }

        if (isset($map['ClientNumber'])) {
            $model->clientNumber = $map['ClientNumber'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CustomerArea'])) {
            $model->customerArea = $map['CustomerArea'];
        }

        if (isset($map['CustomerAreaCode'])) {
            $model->customerAreaCode = $map['CustomerAreaCode'];
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

        if (isset($map['CustomerPostCode'])) {
            $model->customerPostCode = $map['CustomerPostCode'];
        }

        if (isset($map['CustomerProvince'])) {
            $model->customerProvince = $map['CustomerProvince'];
        }

        if (isset($map['CustomerVip'])) {
            $model->customerVip = $map['CustomerVip'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Evaluation'])) {
            $model->evaluation = $map['Evaluation'];
        }

        if (isset($map['ExistBusiness'])) {
            $model->existBusiness = $map['ExistBusiness'];
        }

        if (isset($map['ExistCustomer'])) {
            $model->existCustomer = $map['ExistCustomer'];
        }

        if (isset($map['ExistTicket'])) {
            $model->existTicket = $map['ExistTicket'];
        }

        if (isset($map['InvestigationKeys'])) {
            $model->investigationKeys = $map['InvestigationKeys'];
        }

        if (isset($map['LeftClid'])) {
            $model->leftClid = $map['LeftClid'];
        }

        if (isset($map['LeftClidArea'])) {
            $model->leftClidArea = $map['LeftClidArea'];
        }

        if (isset($map['LeftClidCity'])) {
            $model->leftClidCity = $map['LeftClidCity'];
        }

        if (isset($map['LeftClidProvince'])) {
            $model->leftClidProvince = $map['LeftClidProvince'];
        }

        if (isset($map['MainUniqueId'])) {
            $model->mainUniqueId = $map['MainUniqueId'];
        }

        if (isset($map['MarkData'])) {
            $model->markData = $map['MarkData'];
        }

        if (isset($map['ObSipCause'])) {
            $model->obSipCause = $map['ObSipCause'];
        }

        if (isset($map['ObSipCauseRaw'])) {
            $model->obSipCauseRaw = $map['ObSipCauseRaw'];
        }

        if (isset($map['ObWaitDuration'])) {
            $model->obWaitDuration = $map['ObWaitDuration'];
        }

        if (isset($map['OnHookSource'])) {
            $model->onHookSource = $map['OnHookSource'];
        }

        if (isset($map['PreRingWaitDuration'])) {
            $model->preRingWaitDuration = $map['PreRingWaitDuration'];
        }

        if (isset($map['RecordFile'])) {
            $model->recordFile = $map['RecordFile'];
        }

        if (isset($map['RequestUniqueId'])) {
            $model->requestUniqueId = $map['RequestUniqueId'];
        }

        if (isset($map['RtcUid'])) {
            $model->rtcUid = $map['RtcUid'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
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

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskInventoryId'])) {
            $model->taskInventoryId = $map['TaskInventoryId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TicketIds'])) {
            if (!empty($map['TicketIds'])) {
                $model->ticketIds = [];
                $n1 = 0;
                foreach ($map['TicketIds'] as $item1) {
                    $model->ticketIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }

        if (isset($map['TrunkGroupKey'])) {
            $model->trunkGroupKey = $map['TrunkGroupKey'];
        }

        if (isset($map['UpTime'])) {
            $model->upTime = $map['UpTime'];
        }

        if (isset($map['WebrtcCallId'])) {
            $model->webrtcCallId = $map['WebrtcCallId'];
        }

        if (isset($map['Xnumber'])) {
            $model->xnumber = $map['Xnumber'];
        }

        if (isset($map['XnumberArea'])) {
            $model->xnumberArea = $map['XnumberArea'];
        }

        if (isset($map['XnumberCity'])) {
            $model->xnumberCity = $map['XnumberCity'];
        }

        if (isset($map['XnumberProvince'])) {
            $model->xnumberProvince = $map['XnumberProvince'];
        }

        return $model;
    }
}

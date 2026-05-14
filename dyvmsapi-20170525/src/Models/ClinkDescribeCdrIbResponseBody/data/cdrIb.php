<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrIbResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrIbResponseBody\data\cdrIb\investigation;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrIbResponseBody\data\cdrIb\ivrFlows;

class cdrIb extends Model
{
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
    public $callType;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var string
     */
    public $clientNumber;

    /**
     * @var int
     */
    public $clientOffhookTime;

    /**
     * @var int
     */
    public $clientRingingTime;

    /**
     * @var string
     */
    public $cno;

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
     * @var string
     */
    public $endReason;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $evaluation;

    /**
     * @var bool
     */
    public $fastHangUp;

    /**
     * @var int
     */
    public $firstJoinQueueTime;

    /**
     * @var string
     */
    public $hotline;

    /**
     * @var string
     */
    public $hotlineName;

    /**
     * @var int
     */
    public $ibRingingDuration;

    /**
     * @var int
     */
    public $ibWaitDuration;

    /**
     * @var investigation
     */
    public $investigation;

    /**
     * @var ivrFlows[]
     */
    public $ivrFlows;

    /**
     * @var string
     */
    public $ivrName;

    /**
     * @var int
     */
    public $joinQueueTime;

    /**
     * @var int
     */
    public $leaveQueueTime;

    /**
     * @var int
     */
    public $mark;

    /**
     * @var string
     */
    public $markData;

    /**
     * @var string
     */
    public $qno;

    /**
     * @var int
     */
    public $queueAnswerInTime;

    /**
     * @var string
     */
    public $recordFile;

    /**
     * @var int
     */
    public $sayVoiceDuration;

    /**
     * @var string
     */
    public $sipCause;

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
    public $statusCode;

    /**
     * @var string[]
     */
    public $tagNames;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var int
     */
    public $totalDuration;

    /**
     * @var string
     */
    public $uniqueId;
    protected $_name = [
        'bridgeDuration' => 'BridgeDuration',
        'bridgeTime' => 'BridgeTime',
        'callId' => 'CallId',
        'callType' => 'CallType',
        'clientName' => 'ClientName',
        'clientNumber' => 'ClientNumber',
        'clientOffhookTime' => 'ClientOffhookTime',
        'clientRingingTime' => 'ClientRingingTime',
        'cno' => 'Cno',
        'customerCity' => 'CustomerCity',
        'customerNumber' => 'CustomerNumber',
        'customerNumberEncrypt' => 'CustomerNumberEncrypt',
        'customerProvince' => 'CustomerProvince',
        'endReason' => 'EndReason',
        'endTime' => 'EndTime',
        'evaluation' => 'Evaluation',
        'fastHangUp' => 'FastHangUp',
        'firstJoinQueueTime' => 'FirstJoinQueueTime',
        'hotline' => 'Hotline',
        'hotlineName' => 'HotlineName',
        'ibRingingDuration' => 'IbRingingDuration',
        'ibWaitDuration' => 'IbWaitDuration',
        'investigation' => 'Investigation',
        'ivrFlows' => 'IvrFlows',
        'ivrName' => 'IvrName',
        'joinQueueTime' => 'JoinQueueTime',
        'leaveQueueTime' => 'LeaveQueueTime',
        'mark' => 'Mark',
        'markData' => 'MarkData',
        'qno' => 'Qno',
        'queueAnswerInTime' => 'QueueAnswerInTime',
        'recordFile' => 'RecordFile',
        'sayVoiceDuration' => 'SayVoiceDuration',
        'sipCause' => 'SipCause',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusCode' => 'StatusCode',
        'tagNames' => 'TagNames',
        'tags' => 'Tags',
        'totalDuration' => 'TotalDuration',
        'uniqueId' => 'UniqueId',
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
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bridgeDuration) {
            $res['BridgeDuration'] = $this->bridgeDuration;
        }

        if (null !== $this->bridgeTime) {
            $res['BridgeTime'] = $this->bridgeTime;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
        }

        if (null !== $this->clientNumber) {
            $res['ClientNumber'] = $this->clientNumber;
        }

        if (null !== $this->clientOffhookTime) {
            $res['ClientOffhookTime'] = $this->clientOffhookTime;
        }

        if (null !== $this->clientRingingTime) {
            $res['ClientRingingTime'] = $this->clientRingingTime;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
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

        if (null !== $this->endReason) {
            $res['EndReason'] = $this->endReason;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->evaluation) {
            $res['Evaluation'] = $this->evaluation;
        }

        if (null !== $this->fastHangUp) {
            $res['FastHangUp'] = $this->fastHangUp;
        }

        if (null !== $this->firstJoinQueueTime) {
            $res['FirstJoinQueueTime'] = $this->firstJoinQueueTime;
        }

        if (null !== $this->hotline) {
            $res['Hotline'] = $this->hotline;
        }

        if (null !== $this->hotlineName) {
            $res['HotlineName'] = $this->hotlineName;
        }

        if (null !== $this->ibRingingDuration) {
            $res['IbRingingDuration'] = $this->ibRingingDuration;
        }

        if (null !== $this->ibWaitDuration) {
            $res['IbWaitDuration'] = $this->ibWaitDuration;
        }

        if (null !== $this->investigation) {
            $res['Investigation'] = null !== $this->investigation ? $this->investigation->toArray($noStream) : $this->investigation;
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

        if (null !== $this->joinQueueTime) {
            $res['JoinQueueTime'] = $this->joinQueueTime;
        }

        if (null !== $this->leaveQueueTime) {
            $res['LeaveQueueTime'] = $this->leaveQueueTime;
        }

        if (null !== $this->mark) {
            $res['Mark'] = $this->mark;
        }

        if (null !== $this->markData) {
            $res['MarkData'] = $this->markData;
        }

        if (null !== $this->qno) {
            $res['Qno'] = $this->qno;
        }

        if (null !== $this->queueAnswerInTime) {
            $res['QueueAnswerInTime'] = $this->queueAnswerInTime;
        }

        if (null !== $this->recordFile) {
            $res['RecordFile'] = $this->recordFile;
        }

        if (null !== $this->sayVoiceDuration) {
            $res['SayVoiceDuration'] = $this->sayVoiceDuration;
        }

        if (null !== $this->sipCause) {
            $res['SipCause'] = $this->sipCause;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
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
        if (isset($map['BridgeDuration'])) {
            $model->bridgeDuration = $map['BridgeDuration'];
        }

        if (isset($map['BridgeTime'])) {
            $model->bridgeTime = $map['BridgeTime'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }

        if (isset($map['ClientNumber'])) {
            $model->clientNumber = $map['ClientNumber'];
        }

        if (isset($map['ClientOffhookTime'])) {
            $model->clientOffhookTime = $map['ClientOffhookTime'];
        }

        if (isset($map['ClientRingingTime'])) {
            $model->clientRingingTime = $map['ClientRingingTime'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
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

        if (isset($map['EndReason'])) {
            $model->endReason = $map['EndReason'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Evaluation'])) {
            $model->evaluation = $map['Evaluation'];
        }

        if (isset($map['FastHangUp'])) {
            $model->fastHangUp = $map['FastHangUp'];
        }

        if (isset($map['FirstJoinQueueTime'])) {
            $model->firstJoinQueueTime = $map['FirstJoinQueueTime'];
        }

        if (isset($map['Hotline'])) {
            $model->hotline = $map['Hotline'];
        }

        if (isset($map['HotlineName'])) {
            $model->hotlineName = $map['HotlineName'];
        }

        if (isset($map['IbRingingDuration'])) {
            $model->ibRingingDuration = $map['IbRingingDuration'];
        }

        if (isset($map['IbWaitDuration'])) {
            $model->ibWaitDuration = $map['IbWaitDuration'];
        }

        if (isset($map['Investigation'])) {
            $model->investigation = investigation::fromMap($map['Investigation']);
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

        if (isset($map['JoinQueueTime'])) {
            $model->joinQueueTime = $map['JoinQueueTime'];
        }

        if (isset($map['LeaveQueueTime'])) {
            $model->leaveQueueTime = $map['LeaveQueueTime'];
        }

        if (isset($map['Mark'])) {
            $model->mark = $map['Mark'];
        }

        if (isset($map['MarkData'])) {
            $model->markData = $map['MarkData'];
        }

        if (isset($map['Qno'])) {
            $model->qno = $map['Qno'];
        }

        if (isset($map['QueueAnswerInTime'])) {
            $model->queueAnswerInTime = $map['QueueAnswerInTime'];
        }

        if (isset($map['RecordFile'])) {
            $model->recordFile = $map['RecordFile'];
        }

        if (isset($map['SayVoiceDuration'])) {
            $model->sayVoiceDuration = $map['SayVoiceDuration'];
        }

        if (isset($map['SipCause'])) {
            $model->sipCause = $map['SipCause'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
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

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        return $model;
    }
}

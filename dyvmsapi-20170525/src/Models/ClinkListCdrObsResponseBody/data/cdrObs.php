<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrObsResponseBody\data;

use AlibabaCloud\Dara\Model;

class cdrObs extends Model
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
     * @var int
     */
    public $customerRingingTime;

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
     * @var string
     */
    public $hotline;

    /**
     * @var string
     */
    public $ivrName;

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
    public $qname;

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

    /**
     * @var string
     */
    public $xnumber;
    protected $_name = [
        'bridgeDuration' => 'BridgeDuration',
        'bridgeTime' => 'BridgeTime',
        'callId' => 'CallId',
        'callType' => 'CallType',
        'clientName' => 'ClientName',
        'clientNumber' => 'ClientNumber',
        'clientRingingTime' => 'ClientRingingTime',
        'cno' => 'Cno',
        'customerCity' => 'CustomerCity',
        'customerNumber' => 'CustomerNumber',
        'customerNumberEncrypt' => 'CustomerNumberEncrypt',
        'customerProvince' => 'CustomerProvince',
        'customerRingingTime' => 'CustomerRingingTime',
        'endReason' => 'EndReason',
        'endTime' => 'EndTime',
        'evaluation' => 'Evaluation',
        'hotline' => 'Hotline',
        'ivrName' => 'IvrName',
        'mark' => 'Mark',
        'markData' => 'MarkData',
        'qname' => 'Qname',
        'qno' => 'Qno',
        'queueAnswerInTime' => 'QueueAnswerInTime',
        'recordFile' => 'RecordFile',
        'sipCause' => 'SipCause',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusCode' => 'StatusCode',
        'tagNames' => 'TagNames',
        'tags' => 'Tags',
        'totalDuration' => 'TotalDuration',
        'uniqueId' => 'UniqueId',
        'xnumber' => 'Xnumber',
    ];

    public function validate()
    {
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

        if (null !== $this->customerRingingTime) {
            $res['CustomerRingingTime'] = $this->customerRingingTime;
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

        if (null !== $this->hotline) {
            $res['Hotline'] = $this->hotline;
        }

        if (null !== $this->ivrName) {
            $res['IvrName'] = $this->ivrName;
        }

        if (null !== $this->mark) {
            $res['Mark'] = $this->mark;
        }

        if (null !== $this->markData) {
            $res['MarkData'] = $this->markData;
        }

        if (null !== $this->qname) {
            $res['Qname'] = $this->qname;
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

        if (isset($map['CustomerRingingTime'])) {
            $model->customerRingingTime = $map['CustomerRingingTime'];
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

        if (isset($map['Hotline'])) {
            $model->hotline = $map['Hotline'];
        }

        if (isset($map['IvrName'])) {
            $model->ivrName = $map['IvrName'];
        }

        if (isset($map['Mark'])) {
            $model->mark = $map['Mark'];
        }

        if (isset($map['MarkData'])) {
            $model->markData = $map['MarkData'];
        }

        if (isset($map['Qname'])) {
            $model->qname = $map['Qname'];
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

        if (isset($map['Xnumber'])) {
            $model->xnumber = $map['Xnumber'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrObDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;

class cdrObDetails extends Model
{
    /**
     * @var int
     */
    public $answerTime;

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
     * @var string
     */
    public $cno;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $mainUniqueId;

    /**
     * @var string
     */
    public $recordFile;

    /**
     * @var string
     */
    public $remember;

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
     * @var int
     */
    public $totalDuration;

    /**
     * @var string
     */
    public $uniqueId;
    protected $_name = [
        'answerTime' => 'AnswerTime',
        'callType' => 'CallType',
        'clientName' => 'ClientName',
        'clientNumber' => 'ClientNumber',
        'cno' => 'Cno',
        'endTime' => 'EndTime',
        'mainUniqueId' => 'MainUniqueId',
        'recordFile' => 'RecordFile',
        'remember' => 'Remember',
        'sipCause' => 'SipCause',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'totalDuration' => 'TotalDuration',
        'uniqueId' => 'UniqueId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerTime) {
            $res['AnswerTime'] = $this->answerTime;
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

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->mainUniqueId) {
            $res['MainUniqueId'] = $this->mainUniqueId;
        }

        if (null !== $this->recordFile) {
            $res['RecordFile'] = $this->recordFile;
        }

        if (null !== $this->remember) {
            $res['Remember'] = $this->remember;
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
        if (isset($map['AnswerTime'])) {
            $model->answerTime = $map['AnswerTime'];
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

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MainUniqueId'])) {
            $model->mainUniqueId = $map['MainUniqueId'];
        }

        if (isset($map['RecordFile'])) {
            $model->recordFile = $map['RecordFile'];
        }

        if (isset($map['Remember'])) {
            $model->remember = $map['Remember'];
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

        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        return $model;
    }
}

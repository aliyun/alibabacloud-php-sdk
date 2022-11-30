<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SipTrunkDetailResponseBody\model;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $answerTime;

    /**
     * @var int
     */
    public $answered;

    /**
     * @var string
     */
    public $busiType;

    /**
     * @var string
     */
    public $callEndTime;

    /**
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $calledIp;

    /**
     * @var string
     */
    public $calledNum;

    /**
     * @var string
     */
    public $calledNumRegion;

    /**
     * @var string
     */
    public $calledNumType;

    /**
     * @var string
     */
    public $callerDisplay;

    /**
     * @var string
     */
    public $callerIp;

    /**
     * @var string
     */
    public $callerNum;

    /**
     * @var string
     */
    public $callerNumRegion;

    /**
     * @var string
     */
    public $callerNumType;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $hangup;

    /**
     * @var int
     */
    public $hangupType;

    /**
     * @var string
     */
    public $lvnCliType;

    /**
     * @var string
     */
    public $recordUrl;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $userUuid;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'answerTime'      => 'AnswerTime',
        'answered'        => 'Answered',
        'busiType'        => 'BusiType',
        'callEndTime'     => 'CallEndTime',
        'callType'        => 'CallType',
        'calledIp'        => 'CalledIp',
        'calledNum'       => 'CalledNum',
        'calledNumRegion' => 'CalledNumRegion',
        'calledNumType'   => 'CalledNumType',
        'callerDisplay'   => 'CallerDisplay',
        'callerIp'        => 'CallerIp',
        'callerNum'       => 'CallerNum',
        'callerNumRegion' => 'CallerNumRegion',
        'callerNumType'   => 'CallerNumType',
        'duration'        => 'Duration',
        'hangup'          => 'Hangup',
        'hangupType'      => 'HangupType',
        'lvnCliType'      => 'LvnCliType',
        'recordUrl'       => 'RecordUrl',
        'startTime'       => 'StartTime',
        'userUuid'        => 'UserUuid',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerTime) {
            $res['AnswerTime'] = $this->answerTime;
        }
        if (null !== $this->answered) {
            $res['Answered'] = $this->answered;
        }
        if (null !== $this->busiType) {
            $res['BusiType'] = $this->busiType;
        }
        if (null !== $this->callEndTime) {
            $res['CallEndTime'] = $this->callEndTime;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->calledIp) {
            $res['CalledIp'] = $this->calledIp;
        }
        if (null !== $this->calledNum) {
            $res['CalledNum'] = $this->calledNum;
        }
        if (null !== $this->calledNumRegion) {
            $res['CalledNumRegion'] = $this->calledNumRegion;
        }
        if (null !== $this->calledNumType) {
            $res['CalledNumType'] = $this->calledNumType;
        }
        if (null !== $this->callerDisplay) {
            $res['CallerDisplay'] = $this->callerDisplay;
        }
        if (null !== $this->callerIp) {
            $res['CallerIp'] = $this->callerIp;
        }
        if (null !== $this->callerNum) {
            $res['CallerNum'] = $this->callerNum;
        }
        if (null !== $this->callerNumRegion) {
            $res['CallerNumRegion'] = $this->callerNumRegion;
        }
        if (null !== $this->callerNumType) {
            $res['CallerNumType'] = $this->callerNumType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->hangup) {
            $res['Hangup'] = $this->hangup;
        }
        if (null !== $this->hangupType) {
            $res['HangupType'] = $this->hangupType;
        }
        if (null !== $this->lvnCliType) {
            $res['LvnCliType'] = $this->lvnCliType;
        }
        if (null !== $this->recordUrl) {
            $res['RecordUrl'] = $this->recordUrl;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->userUuid) {
            $res['UserUuid'] = $this->userUuid;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AnswerTime'])) {
            $model->answerTime = $map['AnswerTime'];
        }
        if (isset($map['Answered'])) {
            $model->answered = $map['Answered'];
        }
        if (isset($map['BusiType'])) {
            $model->busiType = $map['BusiType'];
        }
        if (isset($map['CallEndTime'])) {
            $model->callEndTime = $map['CallEndTime'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['CalledIp'])) {
            $model->calledIp = $map['CalledIp'];
        }
        if (isset($map['CalledNum'])) {
            $model->calledNum = $map['CalledNum'];
        }
        if (isset($map['CalledNumRegion'])) {
            $model->calledNumRegion = $map['CalledNumRegion'];
        }
        if (isset($map['CalledNumType'])) {
            $model->calledNumType = $map['CalledNumType'];
        }
        if (isset($map['CallerDisplay'])) {
            $model->callerDisplay = $map['CallerDisplay'];
        }
        if (isset($map['CallerIp'])) {
            $model->callerIp = $map['CallerIp'];
        }
        if (isset($map['CallerNum'])) {
            $model->callerNum = $map['CallerNum'];
        }
        if (isset($map['CallerNumRegion'])) {
            $model->callerNumRegion = $map['CallerNumRegion'];
        }
        if (isset($map['CallerNumType'])) {
            $model->callerNumType = $map['CallerNumType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Hangup'])) {
            $model->hangup = $map['Hangup'];
        }
        if (isset($map['HangupType'])) {
            $model->hangupType = $map['HangupType'];
        }
        if (isset($map['LvnCliType'])) {
            $model->lvnCliType = $map['LvnCliType'];
        }
        if (isset($map['RecordUrl'])) {
            $model->recordUrl = $map['RecordUrl'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UserUuid'])) {
            $model->userUuid = $map['UserUuid'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceCallDetailResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $billing;

    /**
     * @var int
     */
    public $businessType;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $commitTs;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $endTs;

    /**
     * @var int
     */
    public $hangupType;

    /**
     * @var int
     */
    public $sendType;

    /**
     * @var string
     */
    public $startTs;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'billing'       => 'Billing',
        'businessType'  => 'BusinessType',
        'calledNumber'  => 'CalledNumber',
        'callingNumber' => 'CallingNumber',
        'commitTs'      => 'CommitTs',
        'countryId'     => 'CountryId',
        'duration'      => 'Duration',
        'endTs'         => 'EndTs',
        'hangupType'    => 'HangupType',
        'sendType'      => 'SendType',
        'startTs'       => 'StartTs',
        'status'        => 'Status',
        'taskId'        => 'TaskId',
        'taskName'      => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billing) {
            $res['Billing'] = $this->billing;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->commitTs) {
            $res['CommitTs'] = $this->commitTs;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->hangupType) {
            $res['HangupType'] = $this->hangupType;
        }
        if (null !== $this->sendType) {
            $res['SendType'] = $this->sendType;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['Billing'])) {
            $model->billing = $map['Billing'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['CommitTs'])) {
            $model->commitTs = $map['CommitTs'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['HangupType'])) {
            $model->hangupType = $map['HangupType'];
        }
        if (isset($map['SendType'])) {
            $model->sendType = $map['SendType'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}

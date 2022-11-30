<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceCallResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $answeredCalls;

    /**
     * @var int
     */
    public $businessType;

    /**
     * @var int
     */
    public $calledCalls;

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
    public $failedCalls;

    /**
     * @var int
     */
    public $groupCallType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sendType;

    /**
     * @var string
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

    /**
     * @var string
     */
    public $templateContent;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $tickerTs;

    /**
     * @var int
     */
    public $totalCalls;

    /**
     * @var int
     */
    public $totalDuration;

    /**
     * @var string
     */
    public $userUuid;
    protected $_name = [
        'answeredCalls'   => 'AnsweredCalls',
        'businessType'    => 'BusinessType',
        'calledCalls'     => 'CalledCalls',
        'callingNumber'   => 'CallingNumber',
        'commitTs'        => 'CommitTs',
        'countryId'       => 'CountryId',
        'failedCalls'     => 'FailedCalls',
        'groupCallType'   => 'GroupCallType',
        'requestId'       => 'RequestId',
        'sendType'        => 'SendType',
        'status'          => 'Status',
        'taskId'          => 'TaskId',
        'taskName'        => 'TaskName',
        'templateContent' => 'TemplateContent',
        'templateId'      => 'TemplateId',
        'tickerTs'        => 'TickerTs',
        'totalCalls'      => 'TotalCalls',
        'totalDuration'   => 'TotalDuration',
        'userUuid'        => 'UserUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answeredCalls) {
            $res['AnsweredCalls'] = $this->answeredCalls;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->calledCalls) {
            $res['CalledCalls'] = $this->calledCalls;
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
        if (null !== $this->failedCalls) {
            $res['FailedCalls'] = $this->failedCalls;
        }
        if (null !== $this->groupCallType) {
            $res['GroupCallType'] = $this->groupCallType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sendType) {
            $res['SendType'] = $this->sendType;
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
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->tickerTs) {
            $res['TickerTs'] = $this->tickerTs;
        }
        if (null !== $this->totalCalls) {
            $res['TotalCalls'] = $this->totalCalls;
        }
        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }
        if (null !== $this->userUuid) {
            $res['UserUuid'] = $this->userUuid;
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
        if (isset($map['AnsweredCalls'])) {
            $model->answeredCalls = $map['AnsweredCalls'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['CalledCalls'])) {
            $model->calledCalls = $map['CalledCalls'];
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
        if (isset($map['FailedCalls'])) {
            $model->failedCalls = $map['FailedCalls'];
        }
        if (isset($map['GroupCallType'])) {
            $model->groupCallType = $map['GroupCallType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SendType'])) {
            $model->sendType = $map['SendType'];
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
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TickerTs'])) {
            $model->tickerTs = $map['TickerTs'];
        }
        if (isset($map['TotalCalls'])) {
            $model->totalCalls = $map['TotalCalls'];
        }
        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }
        if (isset($map['UserUuid'])) {
            $model->userUuid = $map['UserUuid'];
        }

        return $model;
    }
}

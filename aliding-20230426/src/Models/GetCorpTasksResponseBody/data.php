<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetCorpTasksResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $activeTimeGMT;

    /**
     * @var string
     */
    public $actualActionerId;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $createTimeGMT;

    /**
     * @var string
     */
    public $finishTimeGMT;

    /**
     * @var string
     */
    public $originatorEmail;

    /**
     * @var string
     */
    public $originatorId;

    /**
     * @var string
     */
    public $originatorName;

    /**
     * @var string
     */
    public $originatorNameInEnglish;

    /**
     * @var string
     */
    public $originatorNickName;

    /**
     * @var string
     */
    public $originatorNickNameEn;

    /**
     * @var string
     */
    public $originatorNickNameInEnglish;

    /**
     * @var string
     */
    public $originatorPhoto;

    /**
     * @var string
     */
    public $outResult;

    /**
     * @var string
     */
    public $outResultName;

    /**
     * @var string
     */
    public $processInstanceId;

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
    public $taskType;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $titleInEnglish;
    protected $_name = [
        'activeTimeGMT' => 'ActiveTimeGMT',
        'actualActionerId' => 'ActualActionerId',
        'appType' => 'AppType',
        'createTimeGMT' => 'CreateTimeGMT',
        'finishTimeGMT' => 'FinishTimeGMT',
        'originatorEmail' => 'OriginatorEmail',
        'originatorId' => 'OriginatorId',
        'originatorName' => 'OriginatorName',
        'originatorNameInEnglish' => 'OriginatorNameInEnglish',
        'originatorNickName' => 'OriginatorNickName',
        'originatorNickNameEn' => 'OriginatorNickNameEn',
        'originatorNickNameInEnglish' => 'OriginatorNickNameInEnglish',
        'originatorPhoto' => 'OriginatorPhoto',
        'outResult' => 'OutResult',
        'outResultName' => 'OutResultName',
        'processInstanceId' => 'ProcessInstanceId',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
        'title' => 'Title',
        'titleInEnglish' => 'TitleInEnglish',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeTimeGMT) {
            $res['ActiveTimeGMT'] = $this->activeTimeGMT;
        }

        if (null !== $this->actualActionerId) {
            $res['ActualActionerId'] = $this->actualActionerId;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->createTimeGMT) {
            $res['CreateTimeGMT'] = $this->createTimeGMT;
        }

        if (null !== $this->finishTimeGMT) {
            $res['FinishTimeGMT'] = $this->finishTimeGMT;
        }

        if (null !== $this->originatorEmail) {
            $res['OriginatorEmail'] = $this->originatorEmail;
        }

        if (null !== $this->originatorId) {
            $res['OriginatorId'] = $this->originatorId;
        }

        if (null !== $this->originatorName) {
            $res['OriginatorName'] = $this->originatorName;
        }

        if (null !== $this->originatorNameInEnglish) {
            $res['OriginatorNameInEnglish'] = $this->originatorNameInEnglish;
        }

        if (null !== $this->originatorNickName) {
            $res['OriginatorNickName'] = $this->originatorNickName;
        }

        if (null !== $this->originatorNickNameEn) {
            $res['OriginatorNickNameEn'] = $this->originatorNickNameEn;
        }

        if (null !== $this->originatorNickNameInEnglish) {
            $res['OriginatorNickNameInEnglish'] = $this->originatorNickNameInEnglish;
        }

        if (null !== $this->originatorPhoto) {
            $res['OriginatorPhoto'] = $this->originatorPhoto;
        }

        if (null !== $this->outResult) {
            $res['OutResult'] = $this->outResult;
        }

        if (null !== $this->outResultName) {
            $res['OutResultName'] = $this->outResultName;
        }

        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->titleInEnglish) {
            $res['TitleInEnglish'] = $this->titleInEnglish;
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
        if (isset($map['ActiveTimeGMT'])) {
            $model->activeTimeGMT = $map['ActiveTimeGMT'];
        }

        if (isset($map['ActualActionerId'])) {
            $model->actualActionerId = $map['ActualActionerId'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['CreateTimeGMT'])) {
            $model->createTimeGMT = $map['CreateTimeGMT'];
        }

        if (isset($map['FinishTimeGMT'])) {
            $model->finishTimeGMT = $map['FinishTimeGMT'];
        }

        if (isset($map['OriginatorEmail'])) {
            $model->originatorEmail = $map['OriginatorEmail'];
        }

        if (isset($map['OriginatorId'])) {
            $model->originatorId = $map['OriginatorId'];
        }

        if (isset($map['OriginatorName'])) {
            $model->originatorName = $map['OriginatorName'];
        }

        if (isset($map['OriginatorNameInEnglish'])) {
            $model->originatorNameInEnglish = $map['OriginatorNameInEnglish'];
        }

        if (isset($map['OriginatorNickName'])) {
            $model->originatorNickName = $map['OriginatorNickName'];
        }

        if (isset($map['OriginatorNickNameEn'])) {
            $model->originatorNickNameEn = $map['OriginatorNickNameEn'];
        }

        if (isset($map['OriginatorNickNameInEnglish'])) {
            $model->originatorNickNameInEnglish = $map['OriginatorNickNameInEnglish'];
        }

        if (isset($map['OriginatorPhoto'])) {
            $model->originatorPhoto = $map['OriginatorPhoto'];
        }

        if (isset($map['OutResult'])) {
            $model->outResult = $map['OutResult'];
        }

        if (isset($map['OutResultName'])) {
            $model->outResultName = $map['OutResultName'];
        }

        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['TitleInEnglish'])) {
            $model->titleInEnglish = $map['TitleInEnglish'];
        }

        return $model;
    }
}

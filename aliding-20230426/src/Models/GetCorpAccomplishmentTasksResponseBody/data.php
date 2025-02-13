<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetCorpAccomplishmentTasksResponseBody;

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
    public $title;
    protected $_name = [
        'activeTimeGMT'               => 'ActiveTimeGMT',
        'actualActionerId'            => 'ActualActionerId',
        'appType'                     => 'AppType',
        'createTimeGMT'               => 'CreateTimeGMT',
        'finishTimeGMT'               => 'FinishTimeGMT',
        'originatorEmail'             => 'OriginatorEmail',
        'originatorId'                => 'OriginatorId',
        'originatorName'              => 'OriginatorName',
        'originatorNameInEnglish'     => 'OriginatorNameInEnglish',
        'originatorNickName'          => 'OriginatorNickName',
        'originatorNickNameInEnglish' => 'OriginatorNickNameInEnglish',
        'originatorPhoto'             => 'OriginatorPhoto',
        'outResult'                   => 'OutResult',
        'outResultName'               => 'OutResultName',
        'processInstanceId'           => 'ProcessInstanceId',
        'title'                       => 'Title',
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

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}

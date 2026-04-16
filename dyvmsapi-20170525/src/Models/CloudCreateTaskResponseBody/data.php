<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $agentTimeout;

    /**
     * @var string
     */
    public $answerRate;

    /**
     * @var int
     */
    public $autoComplete;

    /**
     * @var string
     */
    public $autoStart;

    /**
     * @var string
     */
    public $autoStartDay;

    /**
     * @var string
     */
    public $autoStartTime;

    /**
     * @var string
     */
    public $autoStop;

    /**
     * @var string
     */
    public $autoStopDay;

    /**
     * @var string
     */
    public $autoStopTime;

    /**
     * @var string
     */
    public $cnos;

    /**
     * @var string
     */
    public $concurrency;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $customerClids;

    /**
     * @var string
     */
    public $customerMoh;

    /**
     * @var string
     */
    public $customerTimeout;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $isRandom;

    /**
     * @var string
     */
    public $ivrId;

    /**
     * @var string
     */
    public $maxWaitTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $overTime;

    /**
     * @var string
     */
    public $predictAdjust;

    /**
     * @var string
     */
    public $quotiety;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userFields;

    /**
     * @var string
     */
    public $wrapup;
    protected $_name = [
        'agentTimeout' => 'AgentTimeout',
        'answerRate' => 'AnswerRate',
        'autoComplete' => 'AutoComplete',
        'autoStart' => 'AutoStart',
        'autoStartDay' => 'AutoStartDay',
        'autoStartTime' => 'AutoStartTime',
        'autoStop' => 'AutoStop',
        'autoStopDay' => 'AutoStopDay',
        'autoStopTime' => 'AutoStopTime',
        'cnos' => 'Cnos',
        'concurrency' => 'Concurrency',
        'createTime' => 'CreateTime',
        'customerClids' => 'CustomerClids',
        'customerMoh' => 'CustomerMoh',
        'customerTimeout' => 'CustomerTimeout',
        'description' => 'Description',
        'enterpriseId' => 'EnterpriseId',
        'id' => 'Id',
        'isRandom' => 'IsRandom',
        'ivrId' => 'IvrId',
        'maxWaitTime' => 'MaxWaitTime',
        'name' => 'Name',
        'overTime' => 'OverTime',
        'predictAdjust' => 'PredictAdjust',
        'quotiety' => 'Quotiety',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'type' => 'Type',
        'userFields' => 'UserFields',
        'wrapup' => 'Wrapup',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentTimeout) {
            $res['AgentTimeout'] = $this->agentTimeout;
        }

        if (null !== $this->answerRate) {
            $res['AnswerRate'] = $this->answerRate;
        }

        if (null !== $this->autoComplete) {
            $res['AutoComplete'] = $this->autoComplete;
        }

        if (null !== $this->autoStart) {
            $res['AutoStart'] = $this->autoStart;
        }

        if (null !== $this->autoStartDay) {
            $res['AutoStartDay'] = $this->autoStartDay;
        }

        if (null !== $this->autoStartTime) {
            $res['AutoStartTime'] = $this->autoStartTime;
        }

        if (null !== $this->autoStop) {
            $res['AutoStop'] = $this->autoStop;
        }

        if (null !== $this->autoStopDay) {
            $res['AutoStopDay'] = $this->autoStopDay;
        }

        if (null !== $this->autoStopTime) {
            $res['AutoStopTime'] = $this->autoStopTime;
        }

        if (null !== $this->cnos) {
            $res['Cnos'] = $this->cnos;
        }

        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customerClids) {
            $res['CustomerClids'] = $this->customerClids;
        }

        if (null !== $this->customerMoh) {
            $res['CustomerMoh'] = $this->customerMoh;
        }

        if (null !== $this->customerTimeout) {
            $res['CustomerTimeout'] = $this->customerTimeout;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isRandom) {
            $res['IsRandom'] = $this->isRandom;
        }

        if (null !== $this->ivrId) {
            $res['IvrId'] = $this->ivrId;
        }

        if (null !== $this->maxWaitTime) {
            $res['MaxWaitTime'] = $this->maxWaitTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->overTime) {
            $res['OverTime'] = $this->overTime;
        }

        if (null !== $this->predictAdjust) {
            $res['PredictAdjust'] = $this->predictAdjust;
        }

        if (null !== $this->quotiety) {
            $res['Quotiety'] = $this->quotiety;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userFields) {
            $res['UserFields'] = $this->userFields;
        }

        if (null !== $this->wrapup) {
            $res['Wrapup'] = $this->wrapup;
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
        if (isset($map['AgentTimeout'])) {
            $model->agentTimeout = $map['AgentTimeout'];
        }

        if (isset($map['AnswerRate'])) {
            $model->answerRate = $map['AnswerRate'];
        }

        if (isset($map['AutoComplete'])) {
            $model->autoComplete = $map['AutoComplete'];
        }

        if (isset($map['AutoStart'])) {
            $model->autoStart = $map['AutoStart'];
        }

        if (isset($map['AutoStartDay'])) {
            $model->autoStartDay = $map['AutoStartDay'];
        }

        if (isset($map['AutoStartTime'])) {
            $model->autoStartTime = $map['AutoStartTime'];
        }

        if (isset($map['AutoStop'])) {
            $model->autoStop = $map['AutoStop'];
        }

        if (isset($map['AutoStopDay'])) {
            $model->autoStopDay = $map['AutoStopDay'];
        }

        if (isset($map['AutoStopTime'])) {
            $model->autoStopTime = $map['AutoStopTime'];
        }

        if (isset($map['Cnos'])) {
            $model->cnos = $map['Cnos'];
        }

        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CustomerClids'])) {
            $model->customerClids = $map['CustomerClids'];
        }

        if (isset($map['CustomerMoh'])) {
            $model->customerMoh = $map['CustomerMoh'];
        }

        if (isset($map['CustomerTimeout'])) {
            $model->customerTimeout = $map['CustomerTimeout'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsRandom'])) {
            $model->isRandom = $map['IsRandom'];
        }

        if (isset($map['IvrId'])) {
            $model->ivrId = $map['IvrId'];
        }

        if (isset($map['MaxWaitTime'])) {
            $model->maxWaitTime = $map['MaxWaitTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OverTime'])) {
            $model->overTime = $map['OverTime'];
        }

        if (isset($map['PredictAdjust'])) {
            $model->predictAdjust = $map['PredictAdjust'];
        }

        if (isset($map['Quotiety'])) {
            $model->quotiety = $map['Quotiety'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserFields'])) {
            $model->userFields = $map['UserFields'];
        }

        if (isset($map['Wrapup'])) {
            $model->wrapup = $map['Wrapup'];
        }

        return $model;
    }
}

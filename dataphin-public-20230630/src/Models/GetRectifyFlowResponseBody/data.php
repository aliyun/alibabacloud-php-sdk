<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetRectifyFlowResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetRectifyFlowResponseBody\data\issues;

class data extends Model
{
    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var issues
     */
    public $issues;

    /**
     * @var int
     */
    public $problemCount;

    /**
     * @var int
     */
    public $rectifyId;

    /**
     * @var string
     */
    public $rectifyName;

    /**
     * @var string
     */
    public $rectifyPriority;

    /**
     * @var string
     */
    public $rectifyUser;

    /**
     * @var string
     */
    public $rectifyUserName;

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
    public $submitUser;

    /**
     * @var string
     */
    public $submitUserName;

    /**
     * @var string
     */
    public $verifyUser;

    /**
     * @var string
     */
    public $verifyUserName;
    protected $_name = [
        'finishTime' => 'FinishTime',
        'issues' => 'Issues',
        'problemCount' => 'ProblemCount',
        'rectifyId' => 'RectifyId',
        'rectifyName' => 'RectifyName',
        'rectifyPriority' => 'RectifyPriority',
        'rectifyUser' => 'RectifyUser',
        'rectifyUserName' => 'RectifyUserName',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'submitUser' => 'SubmitUser',
        'submitUserName' => 'SubmitUserName',
        'verifyUser' => 'VerifyUser',
        'verifyUserName' => 'VerifyUserName',
    ];

    public function validate()
    {
        if (null !== $this->issues) {
            $this->issues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->issues) {
            $res['Issues'] = null !== $this->issues ? $this->issues->toArray($noStream) : $this->issues;
        }

        if (null !== $this->problemCount) {
            $res['ProblemCount'] = $this->problemCount;
        }

        if (null !== $this->rectifyId) {
            $res['RectifyId'] = $this->rectifyId;
        }

        if (null !== $this->rectifyName) {
            $res['RectifyName'] = $this->rectifyName;
        }

        if (null !== $this->rectifyPriority) {
            $res['RectifyPriority'] = $this->rectifyPriority;
        }

        if (null !== $this->rectifyUser) {
            $res['RectifyUser'] = $this->rectifyUser;
        }

        if (null !== $this->rectifyUserName) {
            $res['RectifyUserName'] = $this->rectifyUserName;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->submitUser) {
            $res['SubmitUser'] = $this->submitUser;
        }

        if (null !== $this->submitUserName) {
            $res['SubmitUserName'] = $this->submitUserName;
        }

        if (null !== $this->verifyUser) {
            $res['VerifyUser'] = $this->verifyUser;
        }

        if (null !== $this->verifyUserName) {
            $res['VerifyUserName'] = $this->verifyUserName;
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
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['Issues'])) {
            $model->issues = issues::fromMap($map['Issues']);
        }

        if (isset($map['ProblemCount'])) {
            $model->problemCount = $map['ProblemCount'];
        }

        if (isset($map['RectifyId'])) {
            $model->rectifyId = $map['RectifyId'];
        }

        if (isset($map['RectifyName'])) {
            $model->rectifyName = $map['RectifyName'];
        }

        if (isset($map['RectifyPriority'])) {
            $model->rectifyPriority = $map['RectifyPriority'];
        }

        if (isset($map['RectifyUser'])) {
            $model->rectifyUser = $map['RectifyUser'];
        }

        if (isset($map['RectifyUserName'])) {
            $model->rectifyUserName = $map['RectifyUserName'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubmitUser'])) {
            $model->submitUser = $map['SubmitUser'];
        }

        if (isset($map['SubmitUserName'])) {
            $model->submitUserName = $map['SubmitUserName'];
        }

        if (isset($map['VerifyUser'])) {
            $model->verifyUser = $map['VerifyUser'];
        }

        if (isset($map['VerifyUserName'])) {
            $model->verifyUserName = $map['VerifyUserName'];
        }

        return $model;
    }
}

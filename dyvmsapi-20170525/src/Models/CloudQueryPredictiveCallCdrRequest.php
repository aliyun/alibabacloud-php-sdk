<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudQueryPredictiveCallCdrRequest extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $clid;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $customerNumber;

    /**
     * @var string
     */
    public $displayNumber;

    /**
     * @var int
     */
    public $downGrade;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $gno;

    /**
     * @var int
     */
    public $isRealAnswer;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $requestUniqueId;

    /**
     * @var int
     */
    public $start;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $taskFileId;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $timeRangeType;

    /**
     * @var string
     */
    public $uniqueId;

    /**
     * @var string
     */
    public $userFieldValue;

    /**
     * @var string
     */
    public $userFieldkey;
    protected $_name = [
        'agentName' => 'AgentName',
        'city' => 'City',
        'clid' => 'Clid',
        'cno' => 'Cno',
        'customerNumber' => 'CustomerNumber',
        'displayNumber' => 'DisplayNumber',
        'downGrade' => 'DownGrade',
        'endTime' => 'EndTime',
        'enterpriseId' => 'EnterpriseId',
        'gno' => 'Gno',
        'isRealAnswer' => 'IsRealAnswer',
        'limit' => 'Limit',
        'province' => 'Province',
        'requestUniqueId' => 'RequestUniqueId',
        'start' => 'Start',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'taskFileId' => 'TaskFileId',
        'taskId' => 'TaskId',
        'timeRangeType' => 'TimeRangeType',
        'uniqueId' => 'UniqueId',
        'userFieldValue' => 'UserFieldValue',
        'userFieldkey' => 'UserFieldkey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->clid) {
            $res['Clid'] = $this->clid;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->customerNumber) {
            $res['CustomerNumber'] = $this->customerNumber;
        }

        if (null !== $this->displayNumber) {
            $res['DisplayNumber'] = $this->displayNumber;
        }

        if (null !== $this->downGrade) {
            $res['DownGrade'] = $this->downGrade;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->gno) {
            $res['Gno'] = $this->gno;
        }

        if (null !== $this->isRealAnswer) {
            $res['IsRealAnswer'] = $this->isRealAnswer;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        if (null !== $this->requestUniqueId) {
            $res['RequestUniqueId'] = $this->requestUniqueId;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskFileId) {
            $res['TaskFileId'] = $this->taskFileId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->timeRangeType) {
            $res['TimeRangeType'] = $this->timeRangeType;
        }

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }

        if (null !== $this->userFieldValue) {
            $res['UserFieldValue'] = $this->userFieldValue;
        }

        if (null !== $this->userFieldkey) {
            $res['UserFieldkey'] = $this->userFieldkey;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['Clid'])) {
            $model->clid = $map['Clid'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CustomerNumber'])) {
            $model->customerNumber = $map['CustomerNumber'];
        }

        if (isset($map['DisplayNumber'])) {
            $model->displayNumber = $map['DisplayNumber'];
        }

        if (isset($map['DownGrade'])) {
            $model->downGrade = $map['DownGrade'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Gno'])) {
            $model->gno = $map['Gno'];
        }

        if (isset($map['IsRealAnswer'])) {
            $model->isRealAnswer = $map['IsRealAnswer'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        if (isset($map['RequestUniqueId'])) {
            $model->requestUniqueId = $map['RequestUniqueId'];
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskFileId'])) {
            $model->taskFileId = $map['TaskFileId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TimeRangeType'])) {
            $model->timeRangeType = $map['TimeRangeType'];
        }

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        if (isset($map['UserFieldValue'])) {
            $model->userFieldValue = $map['UserFieldValue'];
        }

        if (isset($map['UserFieldkey'])) {
            $model->userFieldkey = $map['UserFieldkey'];
        }

        return $model;
    }
}

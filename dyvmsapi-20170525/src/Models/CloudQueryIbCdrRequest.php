<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudQueryIbCdrRequest extends Model
{
    /**
     * @var string
     */
    public $calleeNumber;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $customerNumber;

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
    public $hotline;

    /**
     * @var int
     */
    public $joinQueueCode;

    /**
     * @var int
     */
    public $leaveQueueCode;

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
    public $qno;

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
        'calleeNumber' => 'CalleeNumber',
        'city' => 'City',
        'cno' => 'Cno',
        'customerNumber' => 'CustomerNumber',
        'endTime' => 'EndTime',
        'enterpriseId' => 'EnterpriseId',
        'hotline' => 'Hotline',
        'joinQueueCode' => 'JoinQueueCode',
        'leaveQueueCode' => 'LeaveQueueCode',
        'limit' => 'Limit',
        'province' => 'Province',
        'qno' => 'Qno',
        'start' => 'Start',
        'startTime' => 'StartTime',
        'status' => 'Status',
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
        if (null !== $this->calleeNumber) {
            $res['CalleeNumber'] = $this->calleeNumber;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->customerNumber) {
            $res['CustomerNumber'] = $this->customerNumber;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->hotline) {
            $res['Hotline'] = $this->hotline;
        }

        if (null !== $this->joinQueueCode) {
            $res['JoinQueueCode'] = $this->joinQueueCode;
        }

        if (null !== $this->leaveQueueCode) {
            $res['LeaveQueueCode'] = $this->leaveQueueCode;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        if (null !== $this->qno) {
            $res['Qno'] = $this->qno;
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
        if (isset($map['CalleeNumber'])) {
            $model->calleeNumber = $map['CalleeNumber'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CustomerNumber'])) {
            $model->customerNumber = $map['CustomerNumber'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Hotline'])) {
            $model->hotline = $map['Hotline'];
        }

        if (isset($map['JoinQueueCode'])) {
            $model->joinQueueCode = $map['JoinQueueCode'];
        }

        if (isset($map['LeaveQueueCode'])) {
            $model->leaveQueueCode = $map['LeaveQueueCode'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        if (isset($map['Qno'])) {
            $model->qno = $map['Qno'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudQueryWebcallCdrRequest extends Model
{
    /**
     * @var string
     */
    public $calleeClid;

    /**
     * @var string
     */
    public $calleeDisplayNumber;

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
    public $returnCount;

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
        'calleeClid' => 'CalleeClid',
        'calleeDisplayNumber' => 'CalleeDisplayNumber',
        'calleeNumber' => 'CalleeNumber',
        'city' => 'City',
        'clid' => 'Clid',
        'cno' => 'Cno',
        'customerNumber' => 'CustomerNumber',
        'displayNumber' => 'DisplayNumber',
        'endTime' => 'EndTime',
        'enterpriseId' => 'EnterpriseId',
        'gno' => 'Gno',
        'isRealAnswer' => 'IsRealAnswer',
        'limit' => 'Limit',
        'province' => 'Province',
        'requestUniqueId' => 'RequestUniqueId',
        'returnCount' => 'ReturnCount',
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
        if (null !== $this->calleeClid) {
            $res['CalleeClid'] = $this->calleeClid;
        }

        if (null !== $this->calleeDisplayNumber) {
            $res['CalleeDisplayNumber'] = $this->calleeDisplayNumber;
        }

        if (null !== $this->calleeNumber) {
            $res['CalleeNumber'] = $this->calleeNumber;
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

        if (null !== $this->returnCount) {
            $res['ReturnCount'] = $this->returnCount;
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
        if (isset($map['CalleeClid'])) {
            $model->calleeClid = $map['CalleeClid'];
        }

        if (isset($map['CalleeDisplayNumber'])) {
            $model->calleeDisplayNumber = $map['CalleeDisplayNumber'];
        }

        if (isset($map['CalleeNumber'])) {
            $model->calleeNumber = $map['CalleeNumber'];
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

        if (isset($map['ReturnCount'])) {
            $model->returnCount = $map['ReturnCount'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetUserLatestPlanResponseBody extends Model
{
    /**
     * @var int
     */
    public $accountHandleStatus;

    /**
     * @var string
     */
    public $accountHandleTime;

    /**
     * @var int
     */
    public $accountType;

    /**
     * @var string
     */
    public $agreementFirstSignTime;

    /**
     * @var string
     */
    public $agreementLastSignTime;

    /**
     * @var int
     */
    public $agreementStatus;

    /**
     * @var string
     */
    public $dataHandleEndTime;

    /**
     * @var string
     */
    public $dataHandleStartTime;

    /**
     * @var int
     */
    public $dataHandleStatus;

    /**
     * @var int
     */
    public $exclusivePlan;

    /**
     * @var int
     */
    public $newAccountUid;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'accountHandleStatus' => 'accountHandleStatus',
        'accountHandleTime' => 'accountHandleTime',
        'accountType' => 'accountType',
        'agreementFirstSignTime' => 'agreementFirstSignTime',
        'agreementLastSignTime' => 'agreementLastSignTime',
        'agreementStatus' => 'agreementStatus',
        'dataHandleEndTime' => 'dataHandleEndTime',
        'dataHandleStartTime' => 'dataHandleStartTime',
        'dataHandleStatus' => 'dataHandleStatus',
        'exclusivePlan' => 'exclusivePlan',
        'newAccountUid' => 'newAccountUid',
        'requestId' => 'requestId',
        'status' => 'status',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountHandleStatus) {
            $res['accountHandleStatus'] = $this->accountHandleStatus;
        }

        if (null !== $this->accountHandleTime) {
            $res['accountHandleTime'] = $this->accountHandleTime;
        }

        if (null !== $this->accountType) {
            $res['accountType'] = $this->accountType;
        }

        if (null !== $this->agreementFirstSignTime) {
            $res['agreementFirstSignTime'] = $this->agreementFirstSignTime;
        }

        if (null !== $this->agreementLastSignTime) {
            $res['agreementLastSignTime'] = $this->agreementLastSignTime;
        }

        if (null !== $this->agreementStatus) {
            $res['agreementStatus'] = $this->agreementStatus;
        }

        if (null !== $this->dataHandleEndTime) {
            $res['dataHandleEndTime'] = $this->dataHandleEndTime;
        }

        if (null !== $this->dataHandleStartTime) {
            $res['dataHandleStartTime'] = $this->dataHandleStartTime;
        }

        if (null !== $this->dataHandleStatus) {
            $res['dataHandleStatus'] = $this->dataHandleStatus;
        }

        if (null !== $this->exclusivePlan) {
            $res['exclusivePlan'] = $this->exclusivePlan;
        }

        if (null !== $this->newAccountUid) {
            $res['newAccountUid'] = $this->newAccountUid;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['accountHandleStatus'])) {
            $model->accountHandleStatus = $map['accountHandleStatus'];
        }

        if (isset($map['accountHandleTime'])) {
            $model->accountHandleTime = $map['accountHandleTime'];
        }

        if (isset($map['accountType'])) {
            $model->accountType = $map['accountType'];
        }

        if (isset($map['agreementFirstSignTime'])) {
            $model->agreementFirstSignTime = $map['agreementFirstSignTime'];
        }

        if (isset($map['agreementLastSignTime'])) {
            $model->agreementLastSignTime = $map['agreementLastSignTime'];
        }

        if (isset($map['agreementStatus'])) {
            $model->agreementStatus = $map['agreementStatus'];
        }

        if (isset($map['dataHandleEndTime'])) {
            $model->dataHandleEndTime = $map['dataHandleEndTime'];
        }

        if (isset($map['dataHandleStartTime'])) {
            $model->dataHandleStartTime = $map['dataHandleStartTime'];
        }

        if (isset($map['dataHandleStatus'])) {
            $model->dataHandleStatus = $map['dataHandleStatus'];
        }

        if (isset($map['exclusivePlan'])) {
            $model->exclusivePlan = $map['exclusivePlan'];
        }

        if (isset($map['newAccountUid'])) {
            $model->newAccountUid = $map['newAccountUid'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}

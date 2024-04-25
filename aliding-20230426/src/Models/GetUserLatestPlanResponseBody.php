<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetUserLatestPlanResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $accountHandleStatus;

    /**
     * @example 2022-02-02
     *
     * @var string
     */
    public $accountHandleTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $accountType;

    /**
     * @example 2022-02-05
     *
     * @var string
     */
    public $agreementFirstSignTime;

    /**
     * @example 2022-02-06
     *
     * @var string
     */
    public $agreementLastSignTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $agreementStatus;

    /**
     * @example 2022-02-04
     *
     * @var string
     */
    public $dataHandleEndTime;

    /**
     * @example 2022-02-03
     *
     * @var string
     */
    public $dataHandleStartTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $dataHandleStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $exclusivePlan;

    /**
     * @example 1
     *
     * @var int
     */
    public $newAccountUid;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $vendorRequestId;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'accountHandleStatus'    => 'accountHandleStatus',
        'accountHandleTime'      => 'accountHandleTime',
        'accountType'            => 'accountType',
        'agreementFirstSignTime' => 'agreementFirstSignTime',
        'agreementLastSignTime'  => 'agreementLastSignTime',
        'agreementStatus'        => 'agreementStatus',
        'dataHandleEndTime'      => 'dataHandleEndTime',
        'dataHandleStartTime'    => 'dataHandleStartTime',
        'dataHandleStatus'       => 'dataHandleStatus',
        'exclusivePlan'          => 'exclusivePlan',
        'newAccountUid'          => 'newAccountUid',
        'requestId'              => 'requestId',
        'status'                 => 'status',
        'vendorRequestId'        => 'vendorRequestId',
        'vendorType'             => 'vendorType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetUserLatestPlanResponseBody
     */
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

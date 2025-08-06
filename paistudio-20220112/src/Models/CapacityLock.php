<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class CapacityLock extends Model
{
    /**
     * @var int
     */
    public $availableCount;

    /**
     * @var string
     */
    public $crsReservationId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $lastReconcileAttemptTime;

    /**
     * @var string
     */
    public $lastSyncTime;

    /**
     * @var string
     */
    public $lockProvider;

    /**
     * @var int
     */
    public $lockedCount;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $privatePoolId;

    /**
     * @var int
     */
    public $requestedCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $usedCount;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableCount' => 'availableCount',
        'crsReservationId' => 'crsReservationId',
        'description' => 'description',
        'expireTime' => 'expireTime',
        'gmtCreated' => 'gmtCreated',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'instanceType' => 'instanceType',
        'lastReconcileAttemptTime' => 'lastReconcileAttemptTime',
        'lastSyncTime' => 'lastSyncTime',
        'lockProvider' => 'lockProvider',
        'lockedCount' => 'lockedCount',
        'operator' => 'operator',
        'paymentType' => 'paymentType',
        'privatePoolId' => 'privatePoolId',
        'requestedCount' => 'requestedCount',
        'status' => 'status',
        'tenantId' => 'tenantId',
        'usedCount' => 'usedCount',
        'zoneId' => 'zoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableCount) {
            $res['availableCount'] = $this->availableCount;
        }

        if (null !== $this->crsReservationId) {
            $res['crsReservationId'] = $this->crsReservationId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->gmtCreated) {
            $res['gmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->lastReconcileAttemptTime) {
            $res['lastReconcileAttemptTime'] = $this->lastReconcileAttemptTime;
        }

        if (null !== $this->lastSyncTime) {
            $res['lastSyncTime'] = $this->lastSyncTime;
        }

        if (null !== $this->lockProvider) {
            $res['lockProvider'] = $this->lockProvider;
        }

        if (null !== $this->lockedCount) {
            $res['lockedCount'] = $this->lockedCount;
        }

        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->privatePoolId) {
            $res['privatePoolId'] = $this->privatePoolId;
        }

        if (null !== $this->requestedCount) {
            $res['requestedCount'] = $this->requestedCount;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->usedCount) {
            $res['usedCount'] = $this->usedCount;
        }

        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['availableCount'])) {
            $model->availableCount = $map['availableCount'];
        }

        if (isset($map['crsReservationId'])) {
            $model->crsReservationId = $map['crsReservationId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['gmtCreated'])) {
            $model->gmtCreated = $map['gmtCreated'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['lastReconcileAttemptTime'])) {
            $model->lastReconcileAttemptTime = $map['lastReconcileAttemptTime'];
        }

        if (isset($map['lastSyncTime'])) {
            $model->lastSyncTime = $map['lastSyncTime'];
        }

        if (isset($map['lockProvider'])) {
            $model->lockProvider = $map['lockProvider'];
        }

        if (isset($map['lockedCount'])) {
            $model->lockedCount = $map['lockedCount'];
        }

        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }

        if (isset($map['privatePoolId'])) {
            $model->privatePoolId = $map['privatePoolId'];
        }

        if (isset($map['requestedCount'])) {
            $model->requestedCount = $map['requestedCount'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['usedCount'])) {
            $model->usedCount = $map['usedCount'];
        }

        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}

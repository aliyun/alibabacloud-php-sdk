<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupQuotaResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupQuotaResponseBody\result\quota;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The billing method of the application. Valid values:
     *
     *   POSTPAY: pay-as-you-go
     *   PREPAY: subscription
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The billing model. Valid values:
     *
     *   1: computing resources
     *   2: queries per second (QPS)
     *
     * @example 1
     *
     * @var int
     */
    public $chargingWay;

    /**
     * @description The code of the commodity.
     *
     * @example opensearch
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The timestamp when the application was created.
     *
     * @example 1590139542
     *
     * @var int
     */
    public $created;

    /**
     * @description The ID of the current online version.
     *
     * @example 100302903
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description The description of the application.
     *
     * @example 1
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @description The expiration time.
     *
     * @example 1
     *
     * @var string
     */
    public $expireOn;

    /**
     * @description The approval status of the quotas. Valid values:
     *
     *   0: The quotas are approved.
     *   1: The quotas are being approved.
     *
     * @example 0
     *
     * @var int
     */
    public $hasPendingQuotaReviewTask;

    /**
     * @description The ID of the application.
     *
     * @example 100302881
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the instance.
     *
     * @example 1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The lock mode of the instance. Valid values:
     *
     *   Unlock: The instance is not locked.
     *   LockByExpiration: The instance is automatically locked after it expires.
     *   ManualLock: The instance is manually locked.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The name of the application.
     *
     * @example lsh_test_1
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the order is complete. Valid values:
     *
     *   0: The order is in progress.
     *   1: The order is complete.
     *
     * @example 1
     *
     * @var int
     */
    public $produced;

    /**
     * @description The name of the A/B test group.
     *
     * @example 1000
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The information about the quotas of the application.
     *
     * @var quota
     */
    public $quota;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the application. Valid values:
     *
     *   producing
     *   review_pending
     *   config_pending
     *   normal
     *   frozen
     *
     * @example normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The timestamp when the current online version was published.
     *
     * @example 1590486386
     *
     * @var int
     */
    public $switchedTime;

    /**
     * @description The type of the application. Valid values:
     *
     *   standard: a standard application.
     *   advance: an advanced application which is of an old application type. New applications cannot be of this type.
     *   enhanced: an advanced application which is of a new application type.
     *
     * @example enhanced
     *
     * @var string
     */
    public $type;

    /**
     * @description The timestamp when the application was last updated.
     *
     * @example 1590978265
     *
     * @var int
     */
    public $updated;
    protected $_name = [
        'chargeType'                => 'chargeType',
        'chargingWay'               => 'chargingWay',
        'commodityCode'             => 'commodityCode',
        'created'                   => 'created',
        'currentVersion'            => 'currentVersion',
        'description'               => 'description',
        'engineType'                => 'engineType',
        'expireOn'                  => 'expireOn',
        'hasPendingQuotaReviewTask' => 'hasPendingQuotaReviewTask',
        'id'                        => 'id',
        'instanceId'                => 'instanceId',
        'lockMode'                  => 'lockMode',
        'name'                      => 'name',
        'produced'                  => 'produced',
        'projectId'                 => 'projectId',
        'quota'                     => 'quota',
        'resourceGroupId'           => 'resourceGroupId',
        'status'                    => 'status',
        'switchedTime'              => 'switchedTime',
        'type'                      => 'type',
        'updated'                   => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }
        if (null !== $this->chargingWay) {
            $res['chargingWay'] = $this->chargingWay;
        }
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->currentVersion) {
            $res['currentVersion'] = $this->currentVersion;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->engineType) {
            $res['engineType'] = $this->engineType;
        }
        if (null !== $this->expireOn) {
            $res['expireOn'] = $this->expireOn;
        }
        if (null !== $this->hasPendingQuotaReviewTask) {
            $res['hasPendingQuotaReviewTask'] = $this->hasPendingQuotaReviewTask;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->lockMode) {
            $res['lockMode'] = $this->lockMode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->produced) {
            $res['produced'] = $this->produced;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->switchedTime) {
            $res['switchedTime'] = $this->switchedTime;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }
        if (isset($map['chargingWay'])) {
            $model->chargingWay = $map['chargingWay'];
        }
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['currentVersion'])) {
            $model->currentVersion = $map['currentVersion'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['engineType'])) {
            $model->engineType = $map['engineType'];
        }
        if (isset($map['expireOn'])) {
            $model->expireOn = $map['expireOn'];
        }
        if (isset($map['hasPendingQuotaReviewTask'])) {
            $model->hasPendingQuotaReviewTask = $map['hasPendingQuotaReviewTask'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['lockMode'])) {
            $model->lockMode = $map['lockMode'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['produced'])) {
            $model->produced = $map['produced'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['quota'])) {
            $model->quota = quota::fromMap($map['quota']);
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['switchedTime'])) {
            $model->switchedTime = $map['switchedTime'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}

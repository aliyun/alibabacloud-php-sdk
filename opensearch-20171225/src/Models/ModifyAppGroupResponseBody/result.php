<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupResponseBody\result\quota;
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
     * @example 1590139524
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
     * @description The type of the industry. Valid values:
     *
     *   GENERAL
     *   ECOMMERCE
     *   IT_CONTENT
     *
     * @example GENERAL
     *
     * @var string
     */
    public $domain;

    /**
     * @description The expiration time.
     *
     * @example 1
     *
     * @var string
     */
    public $expireOn;

    /**
     * @description The ID of the created rough sort expression.
     *
     * @example 0
     *
     * @var int
     */
    public $firstRankAlgoDeploymentId;

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
     * @example 10030288
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
     * @description Indicates whether the instance is automatically locked after it expires.
     *
     * @example 0
     *
     * @var int
     */
    public $lockedByExpiration;

    /**
     * @description The name of the application.
     *
     * @example lsh_test_1
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the fine sort expression that is being created.
     *
     * @example 0
     *
     * @var int
     */
    public $pendingSecondRankAlgoDeploymentId;

    /**
     * @description The ID of the order that is not complete for the instance. For example, an order is one that is initiated to create the instance or change the quotas or billing method.
     *
     * @example 1000345
     *
     * @var string
     */
    public $processingOrderId;

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
     * @example 1
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The information about the quotas of the application.
     *
     * @example {}
     *
     * @var quota
     */
    public $quota;

    /**
     * @description The ID of the created fine sort expression.
     *
     * @example 0
     *
     * @var int
     */
    public $secondRankAlgoDeploymentId;

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
        'chargeType'                        => 'chargeType',
        'chargingWay'                       => 'chargingWay',
        'commodityCode'                     => 'commodityCode',
        'created'                           => 'created',
        'currentVersion'                    => 'currentVersion',
        'description'                       => 'description',
        'domain'                            => 'domain',
        'expireOn'                          => 'expireOn',
        'firstRankAlgoDeploymentId'         => 'firstRankAlgoDeploymentId',
        'hasPendingQuotaReviewTask'         => 'hasPendingQuotaReviewTask',
        'id'                                => 'id',
        'instanceId'                        => 'instanceId',
        'lockMode'                          => 'lockMode',
        'lockedByExpiration'                => 'lockedByExpiration',
        'name'                              => 'name',
        'pendingSecondRankAlgoDeploymentId' => 'pendingSecondRankAlgoDeploymentId',
        'processingOrderId'                 => 'processingOrderId',
        'produced'                          => 'produced',
        'projectId'                         => 'projectId',
        'quota'                             => 'quota',
        'secondRankAlgoDeploymentId'        => 'secondRankAlgoDeploymentId',
        'status'                            => 'status',
        'switchedTime'                      => 'switchedTime',
        'type'                              => 'type',
        'updated'                           => 'updated',
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
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->expireOn) {
            $res['expireOn'] = $this->expireOn;
        }
        if (null !== $this->firstRankAlgoDeploymentId) {
            $res['firstRankAlgoDeploymentId'] = $this->firstRankAlgoDeploymentId;
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
        if (null !== $this->lockedByExpiration) {
            $res['lockedByExpiration'] = $this->lockedByExpiration;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pendingSecondRankAlgoDeploymentId) {
            $res['pendingSecondRankAlgoDeploymentId'] = $this->pendingSecondRankAlgoDeploymentId;
        }
        if (null !== $this->processingOrderId) {
            $res['processingOrderId'] = $this->processingOrderId;
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
        if (null !== $this->secondRankAlgoDeploymentId) {
            $res['secondRankAlgoDeploymentId'] = $this->secondRankAlgoDeploymentId;
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
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['expireOn'])) {
            $model->expireOn = $map['expireOn'];
        }
        if (isset($map['firstRankAlgoDeploymentId'])) {
            $model->firstRankAlgoDeploymentId = $map['firstRankAlgoDeploymentId'];
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
        if (isset($map['lockedByExpiration'])) {
            $model->lockedByExpiration = $map['lockedByExpiration'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pendingSecondRankAlgoDeploymentId'])) {
            $model->pendingSecondRankAlgoDeploymentId = $map['pendingSecondRankAlgoDeploymentId'];
        }
        if (isset($map['processingOrderId'])) {
            $model->processingOrderId = $map['processingOrderId'];
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
        if (isset($map['secondRankAlgoDeploymentId'])) {
            $model->secondRankAlgoDeploymentId = $map['secondRankAlgoDeploymentId'];
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

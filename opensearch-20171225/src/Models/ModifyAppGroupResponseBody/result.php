<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupResponseBody\result\quota;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The billing method. Valid values:
     *
     *   POSTPAY: pay-as-you-go.
     *   PREPAY: subscription.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The billable item. Valid values:
     *
     *   1: computing resources.
     *   2: QPS.
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
     *   GENERAL: general.
     *   ECOMMERCE: e-commerce.
     *   IT_CONTENT: IT content.
     *
     * @example GENERAL
     *
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @description The time when the application expired.
     *
     * @example 1
     *
     * @var string
     */
    public $expireOn;

    /**
     * @description The approval status of the quotas. Valid values:
     *
     *   0: normal.
     *   1: being approved.
     *
     * @example 0
     *
     * @var int
     */
    public $hasPendingQuotaReviewTask;

    /**
     * @description The application ID.
     *
     * @example 100302881
     *
     * @var string
     */
    public $id;

    /**
     * @description The instance ID.
     *
     * @example 10030288
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The lock status. Valid values:
     *
     *   Unlock: The instance is unlocked.
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
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The state of the application. Valid values:
     *
     *   producing: being produced.
     *   review_pending: being approved.
     *   config_pending: to be configured.
     *   normal: normal.
     *   frozen: frozen.
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
     *   standard: a standard edition application.
     *   advance: an advanced edition application of an old version. New versions are not supported for this edition.
     *   enhanced: an advanced edition application of a new version.
     *
     * @example enhanced
     *
     * @var string
     */
    public $type;

    /**
     * @description The timestamp when the application was last modified.
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
        'domain'                    => 'domain',
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
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
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
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
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

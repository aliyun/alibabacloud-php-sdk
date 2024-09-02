<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupsResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupsResponseBody\result\quota;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupsResponseBody\result\tags;
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
     *   2: queries per second (QPS).
     *
     * @example 1
     *
     * @var int
     */
    public $chargingWay;

    /**
     * @description The commodity code.
     *
     * @example opensearch
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The timestamp when the application was created.
     *
     * @example 1575442875
     *
     * @var int
     */
    public $created;

    /**
     * @description The ID of the current online version.
     *
     * @example 110116134
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description The description of the application.
     *
     * @example "xxx"
     *
     * @var string
     */
    public $description;

    /**
     * @description The industry of the application.
     *
     * @example ""
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
     * @example "xxx"
     *
     * @var string
     */
    public $expireOn;

    /**
     * @description The approval state of the quotas. Valid values:
     *
     *   0: The application is in service.
     *   1: The quotas are being reviewed.
     *
     * @example 0
     *
     * @var int
     */
    public $hasPendingQuotaReviewTask;

    /**
     * @description The application ID.
     *
     * @example 110116134
     *
     * @var string
     */
    public $id;

    /**
     * @description The instance ID.
     *
     * @example "xxx"
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The lock state. Valid values:
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
     * @description Indicates whether the instance is automatically locked after it expires.
     *
     * @example 0
     *
     * @var int
     */
    public $lockedByExpiration;

    /**
     * @description The application name.
     *
     * @example os_function_test_v1
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the application is created. Valid values:
     *
     *   0: The application is being created.
     *   1: The application is created.
     *
     * @example 1
     *
     * @var int
     */
    public $produced;

    /**
     * @description The name of the A/B test group.
     *
     * @example "xxx"
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The information about the quotas of the application. For more information, see [Quota](https://help.aliyun.com/document_detail/170001.html).
     *
     * @example {}
     *
     * @var quota
     */
    public $quota;

    /**
     * @description The state of the application. Valid values:
     *
     *   producing: The application is being created.
     *   review_pending: The application is being reviewed.
     *   config_pending: The application is to be configured.
     *   normal: The application is in service.
     *   frozen: The application is frozen.
     *
     * @example normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The timestamp when the current online version was published.
     *
     * @example 0
     *
     * @var int
     */
    public $switchedTime;

    /**
     * @description The application tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The type of the application. Valid values:
     *
     *   standard: a High-performance Search Edition application.
     *
     *   enhanced: an Industry Algorithm Edition application.
     *
     * @example enhanced
     *
     * @var string
     */
    public $type;

    /**
     * @description The timestamp when the application was last updated.
     *
     * @example 1578916076
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
        'lockedByExpiration'        => 'lockedByExpiration',
        'name'                      => 'name',
        'produced'                  => 'produced',
        'projectId'                 => 'projectId',
        'quota'                     => 'quota',
        'status'                    => 'status',
        'switchedTime'              => 'switchedTime',
        'tags'                      => 'tags',
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
        if (null !== $this->lockedByExpiration) {
            $res['lockedByExpiration'] = $this->lockedByExpiration;
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
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->switchedTime) {
            $res['switchedTime'] = $this->switchedTime;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['lockedByExpiration'])) {
            $model->lockedByExpiration = $map['lockedByExpiration'];
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['switchedTime'])) {
            $model->switchedTime = $map['switchedTime'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
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

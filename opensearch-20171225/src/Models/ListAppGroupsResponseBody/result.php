<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupsResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupsResponseBody\result\quota;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $created;

    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var int
     */
    public $pendingSecondRankAlgoDeploymentId;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var int
     */
    public $updated;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $hasPendingQuotaReviewTask;

    /**
     * @var int
     */
    public $secondRankAlgoDeploymentId;

    /**
     * @var quota
     */
    public $quota;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $processingOrderId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $chargingWay;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $switchedTime;

    /**
     * @var string
     */
    public $expireOn;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $firstRankAlgoDeploymentId;

    /**
     * @var int
     */
    public $lockedByExpiration;

    /**
     * @var int
     */
    public $produced;
    protected $_name = [
        'created'                           => 'created',
        'currentVersion'                    => 'currentVersion',
        'pendingSecondRankAlgoDeploymentId' => 'pendingSecondRankAlgoDeploymentId',
        'lockMode'                          => 'lockMode',
        'updated'                           => 'updated',
        'id'                                => 'id',
        'chargeType'                        => 'chargeType',
        'hasPendingQuotaReviewTask'         => 'hasPendingQuotaReviewTask',
        'secondRankAlgoDeploymentId'        => 'secondRankAlgoDeploymentId',
        'quota'                             => 'quota',
        'name'                              => 'name',
        'processingOrderId'                 => 'processingOrderId',
        'instanceId'                        => 'instanceId',
        'type'                              => 'type',
        'chargingWay'                       => 'chargingWay',
        'status'                            => 'status',
        'projectId'                         => 'projectId',
        'commodityCode'                     => 'commodityCode',
        'switchedTime'                      => 'switchedTime',
        'expireOn'                          => 'expireOn',
        'description'                       => 'description',
        'firstRankAlgoDeploymentId'         => 'firstRankAlgoDeploymentId',
        'lockedByExpiration'                => 'lockedByExpiration',
        'produced'                          => 'produced',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->currentVersion) {
            $res['currentVersion'] = $this->currentVersion;
        }
        if (null !== $this->pendingSecondRankAlgoDeploymentId) {
            $res['pendingSecondRankAlgoDeploymentId'] = $this->pendingSecondRankAlgoDeploymentId;
        }
        if (null !== $this->lockMode) {
            $res['lockMode'] = $this->lockMode;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }
        if (null !== $this->hasPendingQuotaReviewTask) {
            $res['hasPendingQuotaReviewTask'] = $this->hasPendingQuotaReviewTask;
        }
        if (null !== $this->secondRankAlgoDeploymentId) {
            $res['secondRankAlgoDeploymentId'] = $this->secondRankAlgoDeploymentId;
        }
        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->processingOrderId) {
            $res['processingOrderId'] = $this->processingOrderId;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->chargingWay) {
            $res['chargingWay'] = $this->chargingWay;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->switchedTime) {
            $res['switchedTime'] = $this->switchedTime;
        }
        if (null !== $this->expireOn) {
            $res['expireOn'] = $this->expireOn;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->firstRankAlgoDeploymentId) {
            $res['firstRankAlgoDeploymentId'] = $this->firstRankAlgoDeploymentId;
        }
        if (null !== $this->lockedByExpiration) {
            $res['lockedByExpiration'] = $this->lockedByExpiration;
        }
        if (null !== $this->produced) {
            $res['produced'] = $this->produced;
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
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['currentVersion'])) {
            $model->currentVersion = $map['currentVersion'];
        }
        if (isset($map['pendingSecondRankAlgoDeploymentId'])) {
            $model->pendingSecondRankAlgoDeploymentId = $map['pendingSecondRankAlgoDeploymentId'];
        }
        if (isset($map['lockMode'])) {
            $model->lockMode = $map['lockMode'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }
        if (isset($map['hasPendingQuotaReviewTask'])) {
            $model->hasPendingQuotaReviewTask = $map['hasPendingQuotaReviewTask'];
        }
        if (isset($map['secondRankAlgoDeploymentId'])) {
            $model->secondRankAlgoDeploymentId = $map['secondRankAlgoDeploymentId'];
        }
        if (isset($map['quota'])) {
            $model->quota = quota::fromMap($map['quota']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['processingOrderId'])) {
            $model->processingOrderId = $map['processingOrderId'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['chargingWay'])) {
            $model->chargingWay = $map['chargingWay'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['switchedTime'])) {
            $model->switchedTime = $map['switchedTime'];
        }
        if (isset($map['expireOn'])) {
            $model->expireOn = $map['expireOn'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['firstRankAlgoDeploymentId'])) {
            $model->firstRankAlgoDeploymentId = $map['firstRankAlgoDeploymentId'];
        }
        if (isset($map['lockedByExpiration'])) {
            $model->lockedByExpiration = $map['lockedByExpiration'];
        }
        if (isset($map['produced'])) {
            $model->produced = $map['produced'];
        }

        return $model;
    }
}

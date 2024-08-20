<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesResponseBody;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesResponseBody\workspaces\stateChangeReason;
use AlibabaCloud\Tea\Model;

class workspaces extends Model
{
    /**
     * @description Indicates whether auto-renewal is enabled. This parameter is required only if the paymentType parameter is set to Subscription.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal duration. This parameter is required only if the paymentType parameter is set to Subscription.
     *
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The unit of the auto-renewal duration. This parameter is required only if the paymentType parameter is set to Subscription.
     *
     * @example YEAR, MONTH, WEEK, DAY, HOUR, MINUTE
     *
     * @var string
     */
    public $autoRenewPeriodUnit;

    /**
     * @description The time when the workspace was created.
     *
     * @example 1684115879955
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The information of the Data Lake Formation (DLF) catalog.
     *
     * @example default
     *
     * @var string
     */
    public $dlfCatalogId;

    /**
     * @var string
     */
    public $dlfType;

    /**
     * @description The subscription period. This parameter is required only if the paymentType parameter is set to Subscription.
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The time when the workspace was released.
     *
     * @example 1687103999999
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The reason for the failure.
     *
     * @example out of stock
     *
     * @var string
     */
    public $failReason;

    /**
     * @description The unit of the subscription duration. This parameter is required only if the paymentType parameter is set to Subscription.
     *
     * @example YEAR, MONTH, WEEK, DAY, HOUR, MINUTE
     *
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @description The status of the payment.
     *
     * @example PAID/UNPAID
     *
     * @var string
     */
    public $paymentStatus;

    /**
     * @description The payment type.
     *
     * @example PayAsYouGo or Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The region ID.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The reason why the workspace is released.
     *
     * @example SERVICE_RELEASE
     *
     * @var string
     */
    public $releaseType;

    /**
     * @description The resource specifications.
     *
     * @example 100cu
     *
     * @var string
     */
    public $resourceSpec;

    /**
     * @description The information about the workspace status change.
     *
     * @var stateChangeReason
     */
    public $stateChangeReason;

    /**
     * @description The Object Storage Service (OSS) path.
     *
     * @example spark-result
     *
     * @var string
     */
    public $storage;

    /**
     * @description The workspace ID.
     *
     * @example w-******
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description The name of the workspace.
     *
     * @example spark批作业空间-1
     *
     * @var string
     */
    public $workspaceName;

    /**
     * @description The workspace status.
     *
     * @example STARTING,RUNNING,TERMINATED
     *
     * @var string
     */
    public $workspaceStatus;
    protected $_name = [
        'autoRenew'           => 'autoRenew',
        'autoRenewPeriod'     => 'autoRenewPeriod',
        'autoRenewPeriodUnit' => 'autoRenewPeriodUnit',
        'createTime'          => 'createTime',
        'dlfCatalogId'        => 'dlfCatalogId',
        'dlfType'             => 'dlfType',
        'duration'            => 'duration',
        'endTime'             => 'endTime',
        'failReason'          => 'failReason',
        'paymentDurationUnit' => 'paymentDurationUnit',
        'paymentStatus'       => 'paymentStatus',
        'paymentType'         => 'paymentType',
        'regionId'            => 'regionId',
        'releaseType'         => 'releaseType',
        'resourceSpec'        => 'resourceSpec',
        'stateChangeReason'   => 'stateChangeReason',
        'storage'             => 'storage',
        'workspaceId'         => 'workspaceId',
        'workspaceName'       => 'workspaceName',
        'workspaceStatus'     => 'workspaceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['autoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['autoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->autoRenewPeriodUnit) {
            $res['autoRenewPeriodUnit'] = $this->autoRenewPeriodUnit;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->dlfCatalogId) {
            $res['dlfCatalogId'] = $this->dlfCatalogId;
        }
        if (null !== $this->dlfType) {
            $res['dlfType'] = $this->dlfType;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->failReason) {
            $res['failReason'] = $this->failReason;
        }
        if (null !== $this->paymentDurationUnit) {
            $res['paymentDurationUnit'] = $this->paymentDurationUnit;
        }
        if (null !== $this->paymentStatus) {
            $res['paymentStatus'] = $this->paymentStatus;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->releaseType) {
            $res['releaseType'] = $this->releaseType;
        }
        if (null !== $this->resourceSpec) {
            $res['resourceSpec'] = $this->resourceSpec;
        }
        if (null !== $this->stateChangeReason) {
            $res['stateChangeReason'] = null !== $this->stateChangeReason ? $this->stateChangeReason->toMap() : null;
        }
        if (null !== $this->storage) {
            $res['storage'] = $this->storage;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }
        if (null !== $this->workspaceName) {
            $res['workspaceName'] = $this->workspaceName;
        }
        if (null !== $this->workspaceStatus) {
            $res['workspaceStatus'] = $this->workspaceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workspaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoRenew'])) {
            $model->autoRenew = $map['autoRenew'];
        }
        if (isset($map['autoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['autoRenewPeriod'];
        }
        if (isset($map['autoRenewPeriodUnit'])) {
            $model->autoRenewPeriodUnit = $map['autoRenewPeriodUnit'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['dlfCatalogId'])) {
            $model->dlfCatalogId = $map['dlfCatalogId'];
        }
        if (isset($map['dlfType'])) {
            $model->dlfType = $map['dlfType'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['failReason'])) {
            $model->failReason = $map['failReason'];
        }
        if (isset($map['paymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['paymentDurationUnit'];
        }
        if (isset($map['paymentStatus'])) {
            $model->paymentStatus = $map['paymentStatus'];
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['releaseType'])) {
            $model->releaseType = $map['releaseType'];
        }
        if (isset($map['resourceSpec'])) {
            $model->resourceSpec = $map['resourceSpec'];
        }
        if (isset($map['stateChangeReason'])) {
            $model->stateChangeReason = stateChangeReason::fromMap($map['stateChangeReason']);
        }
        if (isset($map['storage'])) {
            $model->storage = $map['storage'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }
        if (isset($map['workspaceName'])) {
            $model->workspaceName = $map['workspaceName'];
        }
        if (isset($map['workspaceStatus'])) {
            $model->workspaceStatus = $map['workspaceStatus'];
        }

        return $model;
    }
}

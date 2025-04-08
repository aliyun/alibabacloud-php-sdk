<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesResponseBody\workspaces\prePaidQuota;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesResponseBody\workspaces\stateChangeReason;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesResponseBody\workspaces\tags;

class workspaces extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $autoRenewPeriodUnit;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dlfCatalogId;

    /**
     * @var string
     */
    public $dlfType;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @var string
     */
    public $paymentStatus;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var prePaidQuota
     */
    public $prePaidQuota;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $releaseType;

    /**
     * @var string
     */
    public $resourceSpec;

    /**
     * @var stateChangeReason
     */
    public $stateChangeReason;

    /**
     * @var string
     */
    public $storage;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;

    /**
     * @var string
     */
    public $workspaceStatus;
    protected $_name = [
        'autoRenew' => 'autoRenew',
        'autoRenewPeriod' => 'autoRenewPeriod',
        'autoRenewPeriodUnit' => 'autoRenewPeriodUnit',
        'createTime' => 'createTime',
        'dlfCatalogId' => 'dlfCatalogId',
        'dlfType' => 'dlfType',
        'duration' => 'duration',
        'endTime' => 'endTime',
        'failReason' => 'failReason',
        'paymentDurationUnit' => 'paymentDurationUnit',
        'paymentStatus' => 'paymentStatus',
        'paymentType' => 'paymentType',
        'prePaidQuota' => 'prePaidQuota',
        'regionId' => 'regionId',
        'releaseType' => 'releaseType',
        'resourceSpec' => 'resourceSpec',
        'stateChangeReason' => 'stateChangeReason',
        'storage' => 'storage',
        'tags' => 'tags',
        'workspaceId' => 'workspaceId',
        'workspaceName' => 'workspaceName',
        'workspaceStatus' => 'workspaceStatus',
    ];

    public function validate()
    {
        if (null !== $this->prePaidQuota) {
            $this->prePaidQuota->validate();
        }
        if (null !== $this->stateChangeReason) {
            $this->stateChangeReason->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->prePaidQuota) {
            $res['prePaidQuota'] = null !== $this->prePaidQuota ? $this->prePaidQuota->toArray($noStream) : $this->prePaidQuota;
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
            $res['stateChangeReason'] = null !== $this->stateChangeReason ? $this->stateChangeReason->toArray($noStream) : $this->stateChangeReason;
        }

        if (null !== $this->storage) {
            $res['storage'] = $this->storage;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['prePaidQuota'])) {
            $model->prePaidQuota = prePaidQuota::fromMap($map['prePaidQuota']);
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

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
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

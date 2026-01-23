<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesResponseBody\policies\bindResource;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesResponseBody\policies\entityGroup;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesResponseBody\policies\managedInfo;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesResponseBody\policies\subAddonRelease;

class policies extends Model
{
    /**
     * @var bindResource
     */
    public $bindResource;

    /**
     * @var bool
     */
    public $csUmodelStatus;

    /**
     * @var entityGroup
     */
    public $entityGroup;

    /**
     * @var string
     */
    public $feePackage;

    /**
     * @var managedInfo
     */
    public $managedInfo;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var subAddonRelease
     */
    public $subAddonRelease;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'bindResource' => 'bindResource',
        'csUmodelStatus' => 'csUmodelStatus',
        'entityGroup' => 'entityGroup',
        'feePackage' => 'feePackage',
        'managedInfo' => 'managedInfo',
        'policyId' => 'policyId',
        'policyName' => 'policyName',
        'policyType' => 'policyType',
        'regionId' => 'regionId',
        'resourceGroupId' => 'resourceGroupId',
        'subAddonRelease' => 'subAddonRelease',
        'userId' => 'userId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->bindResource) {
            $this->bindResource->validate();
        }
        if (null !== $this->entityGroup) {
            $this->entityGroup->validate();
        }
        if (null !== $this->managedInfo) {
            $this->managedInfo->validate();
        }
        if (null !== $this->subAddonRelease) {
            $this->subAddonRelease->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindResource) {
            $res['bindResource'] = null !== $this->bindResource ? $this->bindResource->toArray($noStream) : $this->bindResource;
        }

        if (null !== $this->csUmodelStatus) {
            $res['csUmodelStatus'] = $this->csUmodelStatus;
        }

        if (null !== $this->entityGroup) {
            $res['entityGroup'] = null !== $this->entityGroup ? $this->entityGroup->toArray($noStream) : $this->entityGroup;
        }

        if (null !== $this->feePackage) {
            $res['feePackage'] = $this->feePackage;
        }

        if (null !== $this->managedInfo) {
            $res['managedInfo'] = null !== $this->managedInfo ? $this->managedInfo->toArray($noStream) : $this->managedInfo;
        }

        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
        }

        if (null !== $this->policyName) {
            $res['policyName'] = $this->policyName;
        }

        if (null !== $this->policyType) {
            $res['policyType'] = $this->policyType;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->subAddonRelease) {
            $res['subAddonRelease'] = null !== $this->subAddonRelease ? $this->subAddonRelease->toArray($noStream) : $this->subAddonRelease;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['bindResource'])) {
            $model->bindResource = bindResource::fromMap($map['bindResource']);
        }

        if (isset($map['csUmodelStatus'])) {
            $model->csUmodelStatus = $map['csUmodelStatus'];
        }

        if (isset($map['entityGroup'])) {
            $model->entityGroup = entityGroup::fromMap($map['entityGroup']);
        }

        if (isset($map['feePackage'])) {
            $model->feePackage = $map['feePackage'];
        }

        if (isset($map['managedInfo'])) {
            $model->managedInfo = managedInfo::fromMap($map['managedInfo']);
        }

        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }

        if (isset($map['policyName'])) {
            $model->policyName = $map['policyName'];
        }

        if (isset($map['policyType'])) {
            $model->policyType = $map['policyType'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['subAddonRelease'])) {
            $model->subAddonRelease = subAddonRelease::fromMap($map['subAddonRelease']);
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}

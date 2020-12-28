<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAttributeRequest\networkAttributes;
use AlibabaCloud\Tea\Model;

class ModifyDedicatedHostAttributeRequest extends Model
{
    /**
     * @var networkAttributes
     */
    public $networkAttributes;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $actionOnMaintenance;

    /**
     * @var string
     */
    public $autoPlacement;

    /**
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @var float
     */
    public $cpuOverCommitRatio;
    protected $_name = [
        'networkAttributes'      => 'NetworkAttributes',
        'ownerId'                => 'OwnerId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'ownerAccount'           => 'OwnerAccount',
        'regionId'               => 'RegionId',
        'dedicatedHostId'        => 'DedicatedHostId',
        'dedicatedHostName'      => 'DedicatedHostName',
        'description'            => 'Description',
        'actionOnMaintenance'    => 'ActionOnMaintenance',
        'autoPlacement'          => 'AutoPlacement',
        'dedicatedHostClusterId' => 'DedicatedHostClusterId',
        'cpuOverCommitRatio'     => 'CpuOverCommitRatio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAttributes) {
            $res['NetworkAttributes'] = null !== $this->networkAttributes ? $this->networkAttributes->toMap() : null;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->actionOnMaintenance) {
            $res['ActionOnMaintenance'] = $this->actionOnMaintenance;
        }
        if (null !== $this->autoPlacement) {
            $res['AutoPlacement'] = $this->autoPlacement;
        }
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }
        if (null !== $this->cpuOverCommitRatio) {
            $res['CpuOverCommitRatio'] = $this->cpuOverCommitRatio;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDedicatedHostAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAttributes'])) {
            $model->networkAttributes = networkAttributes::fromMap($map['NetworkAttributes']);
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ActionOnMaintenance'])) {
            $model->actionOnMaintenance = $map['ActionOnMaintenance'];
        }
        if (isset($map['AutoPlacement'])) {
            $model->autoPlacement = $map['AutoPlacement'];
        }
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }
        if (isset($map['CpuOverCommitRatio'])) {
            $model->cpuOverCommitRatio = $map['CpuOverCommitRatio'];
        }

        return $model;
    }
}

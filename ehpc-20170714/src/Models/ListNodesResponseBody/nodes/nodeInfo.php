<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714\Models\ListNodesResponseBody\nodes;

use AlibabaCloud\SDK\EHPC\V20170714\Models\ListNodesResponseBody\nodes\nodeInfo\totalResources;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListNodesResponseBody\nodes\nodeInfo\usedResources;
use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @var string
     */
    public $addTime;

    /**
     * @var bool
     */
    public $createdByEhpc;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $status;

    /**
     * @var totalResources
     */
    public $totalResources;

    /**
     * @var usedResources
     */
    public $usedResources;
    protected $_name = [
        'addTime'         => 'AddTime',
        'createdByEhpc'   => 'CreatedByEhpc',
        'expired'         => 'Expired',
        'expiredTime'     => 'ExpiredTime',
        'id'              => 'Id',
        'imageId'         => 'ImageId',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'lockReason'      => 'LockReason',
        'regionId'        => 'RegionId',
        'role'            => 'Role',
        'spotStrategy'    => 'SpotStrategy',
        'status'          => 'Status',
        'totalResources'  => 'TotalResources',
        'usedResources'   => 'UsedResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }
        if (null !== $this->createdByEhpc) {
            $res['CreatedByEhpc'] = $this->createdByEhpc;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalResources) {
            $res['TotalResources'] = null !== $this->totalResources ? $this->totalResources->toMap() : null;
        }
        if (null !== $this->usedResources) {
            $res['UsedResources'] = null !== $this->usedResources ? $this->usedResources->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['CreatedByEhpc'])) {
            $model->createdByEhpc = $map['CreatedByEhpc'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalResources'])) {
            $model->totalResources = totalResources::fromMap($map['TotalResources']);
        }
        if (isset($map['UsedResources'])) {
            $model->usedResources = usedResources::fromMap($map['UsedResources']);
        }

        return $model;
    }
}

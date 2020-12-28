<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesNoPagingResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesNoPagingResponseBody\nodes\totalResources;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesNoPagingResponseBody\nodes\usedResources;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $htEnabled;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string[]
     */
    public $roles;

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
    public $hostName;

    /**
     * @var usedResources
     */
    public $usedResources;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var bool
     */
    public $createdByEhpc;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var totalResources
     */
    public $totalResources;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $addTime;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'status'          => 'Status',
        'htEnabled'       => 'HtEnabled',
        'expired'         => 'Expired',
        'roles'           => 'Roles',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'lockReason'      => 'LockReason',
        'hostName'        => 'HostName',
        'usedResources'   => 'UsedResources',
        'spotStrategy'    => 'SpotStrategy',
        'createdByEhpc'   => 'CreatedByEhpc',
        'regionId'        => 'RegionId',
        'totalResources'  => 'TotalResources',
        'version'         => 'Version',
        'expiredTime'     => 'ExpiredTime',
        'addTime'         => 'AddTime',
        'imageId'         => 'ImageId',
        'id'              => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->htEnabled) {
            $res['HtEnabled'] = $this->htEnabled;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->usedResources) {
            $res['UsedResources'] = null !== $this->usedResources ? $this->usedResources->toMap() : null;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->createdByEhpc) {
            $res['CreatedByEhpc'] = $this->createdByEhpc;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->totalResources) {
            $res['TotalResources'] = null !== $this->totalResources ? $this->totalResources->toMap() : null;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['HtEnabled'])) {
            $model->htEnabled = $map['HtEnabled'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = $map['Roles'];
            }
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['UsedResources'])) {
            $model->usedResources = usedResources::fromMap($map['UsedResources']);
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['CreatedByEhpc'])) {
            $model->createdByEhpc = $map['CreatedByEhpc'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TotalResources'])) {
            $model->totalResources = totalResources::fromMap($map['TotalResources']);
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

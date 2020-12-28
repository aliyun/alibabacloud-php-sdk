<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesResponseBody\nodes\totalResources;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesResponseBody\nodes\usedResources;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var usedResources
     */
    public $usedResources;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $publicIpAddress;

    /**
     * @var bool
     */
    public $createdByEhpc;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $version;

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
    public $createMode;

    /**
     * @var bool
     */
    public $htEnabled;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string[]
     */
    public $roles;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $hostName;

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
    public $vSwitchId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'status'          => 'Status',
        'vpcId'           => 'VpcId',
        'expired'         => 'Expired',
        'usedResources'   => 'UsedResources',
        'spotStrategy'    => 'SpotStrategy',
        'publicIpAddress' => 'PublicIpAddress',
        'createdByEhpc'   => 'CreatedByEhpc',
        'ipAddress'       => 'IpAddress',
        'version'         => 'Version',
        'addTime'         => 'AddTime',
        'imageId'         => 'ImageId',
        'createMode'      => 'CreateMode',
        'htEnabled'       => 'HtEnabled',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'roles'           => 'Roles',
        'lockReason'      => 'LockReason',
        'hostName'        => 'HostName',
        'regionId'        => 'RegionId',
        'totalResources'  => 'TotalResources',
        'vSwitchId'       => 'VSwitchId',
        'expiredTime'     => 'ExpiredTime',
        'zoneId'          => 'ZoneId',
        'location'        => 'Location',
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->usedResources) {
            $res['UsedResources'] = null !== $this->usedResources ? $this->usedResources->toMap() : null;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }
        if (null !== $this->createdByEhpc) {
            $res['CreatedByEhpc'] = $this->createdByEhpc;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->createMode) {
            $res['CreateMode'] = $this->createMode;
        }
        if (null !== $this->htEnabled) {
            $res['HtEnabled'] = $this->htEnabled;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->totalResources) {
            $res['TotalResources'] = null !== $this->totalResources ? $this->totalResources->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['UsedResources'])) {
            $model->usedResources = usedResources::fromMap($map['UsedResources']);
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }
        if (isset($map['CreatedByEhpc'])) {
            $model->createdByEhpc = $map['CreatedByEhpc'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['CreateMode'])) {
            $model->createMode = $map['CreateMode'];
        }
        if (isset($map['HtEnabled'])) {
            $model->htEnabled = $map['HtEnabled'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = $map['Roles'];
            }
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TotalResources'])) {
            $model->totalResources = totalResources::fromMap($map['TotalResources']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

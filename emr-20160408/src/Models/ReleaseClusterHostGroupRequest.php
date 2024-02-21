<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ReleaseClusterHostGroupRequest extends Model
{
    /**
     * @example C-D7958B72E59B****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 3600
     *
     * @var int
     */
    public $decommissionTimeout;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableGracefulDecommission;

    /**
     * @example G-EF460256A55F****
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @example ["i-bp1bm7y86rscdx1a****"]
     *
     * @var string
     */
    public $instanceIdList;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2
     *
     * @var int
     */
    public $releaseNumber;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clusterId'                  => 'ClusterId',
        'decommissionTimeout'        => 'DecommissionTimeout',
        'enableGracefulDecommission' => 'EnableGracefulDecommission',
        'hostGroupId'                => 'HostGroupId',
        'instanceIdList'             => 'InstanceIdList',
        'regionId'                   => 'RegionId',
        'releaseNumber'              => 'ReleaseNumber',
        'resourceOwnerId'            => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->decommissionTimeout) {
            $res['DecommissionTimeout'] = $this->decommissionTimeout;
        }
        if (null !== $this->enableGracefulDecommission) {
            $res['EnableGracefulDecommission'] = $this->enableGracefulDecommission;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->releaseNumber) {
            $res['ReleaseNumber'] = $this->releaseNumber;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseClusterHostGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DecommissionTimeout'])) {
            $model->decommissionTimeout = $map['DecommissionTimeout'];
        }
        if (isset($map['EnableGracefulDecommission'])) {
            $model->enableGracefulDecommission = $map['EnableGracefulDecommission'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['InstanceIdList'])) {
            $model->instanceIdList = $map['InstanceIdList'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReleaseNumber'])) {
            $model->releaseNumber = $map['ReleaseNumber'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}

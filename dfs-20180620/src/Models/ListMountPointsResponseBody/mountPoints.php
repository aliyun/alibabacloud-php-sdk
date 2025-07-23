<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\ListMountPointsResponseBody;

use AlibabaCloud\Tea\Model;

class mountPoints extends Model
{
    /**
     * @example acg-e3755fb0-358d-4286-9942-8d461048****
     *
     * @var string
     */
    public $accessGroupId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $mountPointAlias;

    /**
     * @var string
     */
    public $mountPointDomain;

    /**
     * @var string
     */
    public $mountPointId;

    /**
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Inactive
     *
     * @var string
     */
    public $status;

    /**
     * @example vsw-iq8fymi327krd14mt****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-iq8hhsk3ymzv9m4wn****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessGroupId' => 'AccessGroupId',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'fileSystemId' => 'FileSystemId',
        'mountPointAlias' => 'MountPointAlias',
        'mountPointDomain' => 'MountPointDomain',
        'mountPointId' => 'MountPointId',
        'networkType' => 'NetworkType',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupId) {
            $res['AccessGroupId'] = $this->accessGroupId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->mountPointAlias) {
            $res['MountPointAlias'] = $this->mountPointAlias;
        }
        if (null !== $this->mountPointDomain) {
            $res['MountPointDomain'] = $this->mountPointDomain;
        }
        if (null !== $this->mountPointId) {
            $res['MountPointId'] = $this->mountPointId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupId'])) {
            $model->accessGroupId = $map['AccessGroupId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MountPointAlias'])) {
            $model->mountPointAlias = $map['MountPointAlias'];
        }
        if (isset($map['MountPointDomain'])) {
            $model->mountPointDomain = $map['MountPointDomain'];
        }
        if (isset($map['MountPointId'])) {
            $model->mountPointId = $map['MountPointId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

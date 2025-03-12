<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNodeGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @description Cluster ID
     *
     * @example i113952461729854708648
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Cluster name
     *
     * @example wzq-exclusivelite-71
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Creation time
     *
     * @example 2024-02-27T13:16:31.599
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Description
     *
     * @example created by ga2_prepare
     *
     * @var string
     */
    public $description;

    /**
     * @description Group ID.
     *
     * @example 238276221
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Group name.
     *
     * @example backend-group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Image ID
     *
     * @example i194015071707321240258
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Image name
     *
     * @example CentOS_7.9_x86_64_FULL_20221110
     *
     * @var string
     */
    public $imageName;

    /**
     * @description Machine type
     *
     * @example efg1.nvga1n
     *
     * @var string
     */
    public $machineType;

    /**
     * @description Number of nodes
     *
     * @example 2
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @description Update time
     *
     * @example 2023-09-22T00:03:05.114
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description 可用区id
     *
     * @example cn-shenzhen-c
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'clusterName' => 'ClusterName',
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
        'imageId'     => 'ImageId',
        'imageName'   => 'ImageName',
        'machineType' => 'MachineType',
        'nodeCount'   => 'NodeCount',
        'updateTime'  => 'UpdateTime',
        'zoneId'      => 'ZoneId',
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
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

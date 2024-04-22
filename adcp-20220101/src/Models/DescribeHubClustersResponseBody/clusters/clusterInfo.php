<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example c2d3e0121ea214b438010502a8019****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The specification of the cluster.
     *
     *   Only ack.pro.small is returned.
     *
     * @example ack.pro.small
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description The time when the cluster was created.
     *
     * @example 2021-11-05T10:25:48Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The error message that is returned if the cluster failed to be created.
     *
     * @example Success
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The name of the cluster.
     *
     * @example ackone-heyuan
     *
     * @var string
     */
    public $name;

    /**
     * @description The configurations of the cluster.
     *
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of Resource Group.
     *
     * @example rg-qh2zgjsdv52***
     *
     * @var string
     */
    public $resourceGroupID;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   initial: The cluster is being initialized.
     *   failed: The cluster failed to be created.
     *   running: The cluster is running
     *   inactive: The cluster is pending.
     *   deleting: The cluster is being deleted.
     *   delete_failed: The cluster failed to be deleted.
     *   deleted: The cluster is deleted.
     *
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @description The time when the cluster was last updated.
     *
     * @example 2021-09-02T13:39:50Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The Kubernetes version of the cluster.
     *
     * @example 1.22.3-aliyun.1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'clusterSpec'     => 'ClusterSpec',
        'creationTime'    => 'CreationTime',
        'errorMessage'    => 'ErrorMessage',
        'name'            => 'Name',
        'profile'         => 'Profile',
        'regionId'        => 'RegionId',
        'resourceGroupID' => 'ResourceGroupID',
        'state'           => 'State',
        'updateTime'      => 'UpdateTime',
        'version'         => 'Version',
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
        if (null !== $this->clusterSpec) {
            $res['ClusterSpec'] = $this->clusterSpec;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupID) {
            $res['ResourceGroupID'] = $this->resourceGroupID;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterSpec'])) {
            $model->clusterSpec = $map['ClusterSpec'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupID'])) {
            $model->resourceGroupID = $map['ResourceGroupID'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @description The ID of the master instance.
     *
     * @example c2d3e0121ea214b438010502a8019****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The specification of the master instance.
     *
     *   ack.pro.small: ACK Pro cluster
     *
     * @example ack.pro.small
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description The time when the master instance was created.
     *
     * @example 2021-11-05T10:25:48Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The error message returned when the master instance failed to be created.
     *
     * @example Success
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The name of the master instance.
     *
     * @example ackone-heyuan
     *
     * @var string
     */
    public $name;

    /**
     * @description The configurations of the master instance.
     *
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The ID of the region in which the master instance resides.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the master instance. Valid values:
     *
     *   initial: The master instance is being initialized.
     *   failed: The master instance failed to be created.
     *   running: The master instance is running
     *   inactive: The master instance is pending.
     *   deleting: The master instance is being deleted.
     *   delete_failed: The master instance failed to be deleted.
     *   deleted: The master instance is deleted.
     *
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @description The last time when the master instance was updated.
     *
     * @example 2021-09-02T13:39:50Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The Kubernetes version of the master instance.
     *
     * @example 1.22.3-aliyun.1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'clusterSpec'  => 'ClusterSpec',
        'creationTime' => 'CreationTime',
        'errorMessage' => 'ErrorMessage',
        'name'         => 'Name',
        'profile'      => 'Profile',
        'regionId'     => 'RegionId',
        'state'        => 'State',
        'updateTime'   => 'UpdateTime',
        'version'      => 'Version',
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

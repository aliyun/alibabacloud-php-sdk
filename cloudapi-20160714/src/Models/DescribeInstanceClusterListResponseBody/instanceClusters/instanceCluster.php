<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterListResponseBody\instanceClusters;

use AlibabaCloud\Tea\Model;

class instanceCluster extends Model
{
    /**
     * @example 2023-08-14T17:46:59+08:00
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example Test TrafficControl
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceClusterId;

    /**
     * @var string
     */
    public $instanceClusterName;

    /**
     * @var string
     */
    public $instanceClusterStatus;

    /**
     * @var string
     */
    public $instanceClusterType;

    /**
     * @example 2024-01-12T10:11:08+08:00
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'createdTime'           => 'CreatedTime',
        'description'           => 'Description',
        'instanceClusterId'     => 'InstanceClusterId',
        'instanceClusterName'   => 'InstanceClusterName',
        'instanceClusterStatus' => 'InstanceClusterStatus',
        'instanceClusterType'   => 'InstanceClusterType',
        'modifiedTime'          => 'ModifiedTime',
        'regionId'              => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceClusterId) {
            $res['InstanceClusterId'] = $this->instanceClusterId;
        }
        if (null !== $this->instanceClusterName) {
            $res['InstanceClusterName'] = $this->instanceClusterName;
        }
        if (null !== $this->instanceClusterStatus) {
            $res['InstanceClusterStatus'] = $this->instanceClusterStatus;
        }
        if (null !== $this->instanceClusterType) {
            $res['InstanceClusterType'] = $this->instanceClusterType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceClusterId'])) {
            $model->instanceClusterId = $map['InstanceClusterId'];
        }
        if (isset($map['InstanceClusterName'])) {
            $model->instanceClusterName = $map['InstanceClusterName'];
        }
        if (isset($map['InstanceClusterStatus'])) {
            $model->instanceClusterStatus = $map['InstanceClusterStatus'];
        }
        if (isset($map['InstanceClusterType'])) {
            $model->instanceClusterType = $map['InstanceClusterType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterListResponseBody\instanceClusters;

use AlibabaCloud\Dara\Model;

class instanceCluster extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
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
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'instanceClusterId' => 'InstanceClusterId',
        'instanceClusterName' => 'InstanceClusterName',
        'instanceClusterStatus' => 'InstanceClusterStatus',
        'instanceClusterType' => 'InstanceClusterType',
        'modifiedTime' => 'ModifiedTime',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

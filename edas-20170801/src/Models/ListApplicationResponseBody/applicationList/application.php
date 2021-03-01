<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListApplicationResponseBody\applicationList;

use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $runningInstanceCount;

    /**
     * @var int
     */
    public $buildPackageId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterType'          => 'ClusterType',
        'appId'                => 'AppId',
        'resourceGroupId'      => 'ResourceGroupId',
        'applicationType'      => 'ApplicationType',
        'name'                 => 'Name',
        'runningInstanceCount' => 'RunningInstanceCount',
        'buildPackageId'       => 'BuildPackageId',
        'clusterId'            => 'ClusterId',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->runningInstanceCount) {
            $res['RunningInstanceCount'] = $this->runningInstanceCount;
        }
        if (null !== $this->buildPackageId) {
            $res['BuildPackageId'] = $this->buildPackageId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RunningInstanceCount'])) {
            $model->runningInstanceCount = $map['RunningInstanceCount'];
        }
        if (isset($map['BuildPackageId'])) {
            $model->buildPackageId = $map['BuildPackageId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

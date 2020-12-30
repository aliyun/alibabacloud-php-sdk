<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeDeletedInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $deleteTime;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $moduleStackVersion;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @var string
     */
    public $createdTime;
    protected $_name = [
        'status'             => 'Status',
        'instanceId'         => 'InstanceId',
        'regionId'           => 'RegionId',
        'parentId'           => 'ParentId',
        'clusterType'        => 'ClusterType',
        'instanceName'       => 'InstanceName',
        'deleteTime'         => 'DeleteTime',
        'zoneId'             => 'ZoneId',
        'moduleStackVersion' => 'ModuleStackVersion',
        'engine'             => 'Engine',
        'majorVersion'       => 'MajorVersion',
        'createdTime'        => 'CreatedTime',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->deleteTime) {
            $res['DeleteTime'] = $this->deleteTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->moduleStackVersion) {
            $res['ModuleStackVersion'] = $this->moduleStackVersion;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['DeleteTime'])) {
            $model->deleteTime = $map['DeleteTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ModuleStackVersion'])) {
            $model->moduleStackVersion = $map['ModuleStackVersion'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeGadInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example 2024-05-29 23:55:58
     *
     * @var int
     */
    public $createTime;

    /**
     * @example MySQL
     *
     * @var string
     */
    public $dbEngineType;

    /**
     * @example 2
     *
     * @var int
     */
    public $dbInstanceCount;

    /**
     * @example rg-a76s8afa****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegion;

    /**
     * @example DR
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example rm-sadfasfa****
     *
     * @var string
     */
    public $masterDbInstanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $masterDbInstanceName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $masterDbInstanceRegion;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $masterDbInstanceZoneId;

    /**
     * @var int
     */
    public $masterEngineArchType;

    /**
     * @example rg-aekzq276dmnaxqa
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dbEngineType' => 'DbEngineType',
        'dbInstanceCount' => 'DbInstanceCount',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceRegion' => 'InstanceRegion',
        'instanceType' => 'InstanceType',
        'masterDbInstanceId' => 'MasterDbInstanceId',
        'masterDbInstanceName' => 'MasterDbInstanceName',
        'masterDbInstanceRegion' => 'MasterDbInstanceRegion',
        'masterDbInstanceZoneId' => 'MasterDbInstanceZoneId',
        'masterEngineArchType' => 'MasterEngineArchType',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dbEngineType) {
            $res['DbEngineType'] = $this->dbEngineType;
        }
        if (null !== $this->dbInstanceCount) {
            $res['DbInstanceCount'] = $this->dbInstanceCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceRegion) {
            $res['InstanceRegion'] = $this->instanceRegion;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->masterDbInstanceId) {
            $res['MasterDbInstanceId'] = $this->masterDbInstanceId;
        }
        if (null !== $this->masterDbInstanceName) {
            $res['MasterDbInstanceName'] = $this->masterDbInstanceName;
        }
        if (null !== $this->masterDbInstanceRegion) {
            $res['MasterDbInstanceRegion'] = $this->masterDbInstanceRegion;
        }
        if (null !== $this->masterDbInstanceZoneId) {
            $res['MasterDbInstanceZoneId'] = $this->masterDbInstanceZoneId;
        }
        if (null !== $this->masterEngineArchType) {
            $res['MasterEngineArchType'] = $this->masterEngineArchType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DbEngineType'])) {
            $model->dbEngineType = $map['DbEngineType'];
        }
        if (isset($map['DbInstanceCount'])) {
            $model->dbInstanceCount = $map['DbInstanceCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceRegion'])) {
            $model->instanceRegion = $map['InstanceRegion'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MasterDbInstanceId'])) {
            $model->masterDbInstanceId = $map['MasterDbInstanceId'];
        }
        if (isset($map['MasterDbInstanceName'])) {
            $model->masterDbInstanceName = $map['MasterDbInstanceName'];
        }
        if (isset($map['MasterDbInstanceRegion'])) {
            $model->masterDbInstanceRegion = $map['MasterDbInstanceRegion'];
        }
        if (isset($map['MasterDbInstanceZoneId'])) {
            $model->masterDbInstanceZoneId = $map['MasterDbInstanceZoneId'];
        }
        if (isset($map['MasterEngineArchType'])) {
            $model->masterEngineArchType = $map['MasterEngineArchType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

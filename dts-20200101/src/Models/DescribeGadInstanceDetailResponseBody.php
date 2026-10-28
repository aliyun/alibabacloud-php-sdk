<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeGadInstanceDetailResponseBody\slaveDbInstances;

class DescribeGadInstanceDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dbEngineType;

    /**
     * @var int
     */
    public $dbListMode;

    /**
     * @var string
     */
    public $dynamicCode;

    /**
     * @var string
     */
    public $dynamicMessage;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $masterDbInstanceId;

    /**
     * @var string
     */
    public $masterDbInstanceRegion;

    /**
     * @var string
     */
    public $masterDblnstanceZoneld;

    /**
     * @var int
     */
    public $masterEngineArchType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var slaveDbInstances
     */
    public $slaveDbInstances;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dbEngineType' => 'DbEngineType',
        'dbListMode' => 'DbListMode',
        'dynamicCode' => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'masterDbInstanceId' => 'MasterDbInstanceId',
        'masterDbInstanceRegion' => 'MasterDbInstanceRegion',
        'masterDblnstanceZoneld' => 'MasterDblnstanceZoneld',
        'masterEngineArchType' => 'MasterEngineArchType',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'slaveDbInstances' => 'SlaveDbInstances',
        'status' => 'Status',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->slaveDbInstances) {
            $this->slaveDbInstances->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dbEngineType) {
            $res['DbEngineType'] = $this->dbEngineType;
        }

        if (null !== $this->dbListMode) {
            $res['DbListMode'] = $this->dbListMode;
        }

        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }

        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }

        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->masterDbInstanceId) {
            $res['MasterDbInstanceId'] = $this->masterDbInstanceId;
        }

        if (null !== $this->masterDbInstanceRegion) {
            $res['MasterDbInstanceRegion'] = $this->masterDbInstanceRegion;
        }

        if (null !== $this->masterDblnstanceZoneld) {
            $res['MasterDblnstanceZoneld'] = $this->masterDblnstanceZoneld;
        }

        if (null !== $this->masterEngineArchType) {
            $res['MasterEngineArchType'] = $this->masterEngineArchType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->slaveDbInstances) {
            $res['SlaveDbInstances'] = null !== $this->slaveDbInstances ? $this->slaveDbInstances->toArray($noStream) : $this->slaveDbInstances;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DbEngineType'])) {
            $model->dbEngineType = $map['DbEngineType'];
        }

        if (isset($map['DbListMode'])) {
            $model->dbListMode = $map['DbListMode'];
        }

        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }

        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }

        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['MasterDbInstanceId'])) {
            $model->masterDbInstanceId = $map['MasterDbInstanceId'];
        }

        if (isset($map['MasterDbInstanceRegion'])) {
            $model->masterDbInstanceRegion = $map['MasterDbInstanceRegion'];
        }

        if (isset($map['MasterDblnstanceZoneld'])) {
            $model->masterDblnstanceZoneld = $map['MasterDblnstanceZoneld'];
        }

        if (isset($map['MasterEngineArchType'])) {
            $model->masterEngineArchType = $map['MasterEngineArchType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SlaveDbInstances'])) {
            $model->slaveDbInstances = slaveDbInstances::fromMap($map['SlaveDbInstances']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

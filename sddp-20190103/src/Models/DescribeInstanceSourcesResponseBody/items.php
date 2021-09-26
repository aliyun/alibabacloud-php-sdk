<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstanceSourcesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $lastModifyUserId;

    /**
     * @var int
     */
    public $passwordStatus;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var int
     */
    public $dataLimitId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var bool
     */
    public $canModifyUserName;

    /**
     * @var int
     */
    public $logStoreDay;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $autoScan;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var int
     */
    public $instanceSize;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $enable;
    protected $_name = [
        'lastModifyUserId'    => 'LastModifyUserId',
        'passwordStatus'      => 'PasswordStatus',
        'engineType'          => 'EngineType',
        'tenantName'          => 'TenantName',
        'instanceId'          => 'InstanceId',
        'instanceDescription' => 'InstanceDescription',
        'dataLimitId'         => 'DataLimitId',
        'regionId'            => 'RegionId',
        'dbName'              => 'DbName',
        'lastModifyTime'      => 'LastModifyTime',
        'regionName'          => 'RegionName',
        'canModifyUserName'   => 'CanModifyUserName',
        'logStoreDay'         => 'LogStoreDay',
        'gmtCreate'           => 'GmtCreate',
        'autoScan'            => 'AutoScan',
        'productId'           => 'ProductId',
        'instanceSize'        => 'InstanceSize',
        'userName'            => 'UserName',
        'auditStatus'         => 'AuditStatus',
        'id'                  => 'Id',
        'tenantId'            => 'TenantId',
        'enable'              => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastModifyUserId) {
            $res['LastModifyUserId'] = $this->lastModifyUserId;
        }
        if (null !== $this->passwordStatus) {
            $res['PasswordStatus'] = $this->passwordStatus;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->dataLimitId) {
            $res['DataLimitId'] = $this->dataLimitId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->canModifyUserName) {
            $res['CanModifyUserName'] = $this->canModifyUserName;
        }
        if (null !== $this->logStoreDay) {
            $res['LogStoreDay'] = $this->logStoreDay;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->autoScan) {
            $res['AutoScan'] = $this->autoScan;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->instanceSize) {
            $res['InstanceSize'] = $this->instanceSize;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastModifyUserId'])) {
            $model->lastModifyUserId = $map['LastModifyUserId'];
        }
        if (isset($map['PasswordStatus'])) {
            $model->passwordStatus = $map['PasswordStatus'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['DataLimitId'])) {
            $model->dataLimitId = $map['DataLimitId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['CanModifyUserName'])) {
            $model->canModifyUserName = $map['CanModifyUserName'];
        }
        if (isset($map['LogStoreDay'])) {
            $model->logStoreDay = $map['LogStoreDay'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['AutoScan'])) {
            $model->autoScan = $map['AutoScan'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['InstanceSize'])) {
            $model->instanceSize = $map['InstanceSize'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}

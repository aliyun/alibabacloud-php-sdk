<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstanceSourcesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description Indicates whether the security audit feature is enabled. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $auditStatus;

    /**
     * @description Indicates whether the automatic scan feature is enabled to detect sensitive data. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $autoScan;

    /**
     * @description Indicates whether the username and password can be changed. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $canModifyUserName;

    /**
     * @description The data detection status. Valid values:
     *
     *   **0**: The data detection is ready.
     *   **1**: The data detection is running.
     *   **2**: The connectivity test is in progress.
     *   **3**: The connectivity test passed.
     *   **4**: The connectivity test failed.
     *
     * @example 3
     *
     * @var int
     */
    public $checkStatus;

    /**
     * @description Indicates whether DSC has the data de-identification permissions on the data asset. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $datamaskStatus;

    /**
     * @description The name of the database to which the data asset belongs.
     *
     * @example demo
     *
     * @var string
     */
    public $dbName;

    /**
     * @description Indicates whether sensitive data detection is enabled for the data asset. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @description The type of the database engine. Valid values: **MySQL, MariaDB, Oracle, PostgreSQL, and SQLServer**.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engineType;

    /**
     * @description The reason for the failure.
     *
     * @example The password is invalid.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The time when the data asset was created. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1625587423000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The unique ID of the data asset.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The description of the instance.
     *
     * @example Test
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description The ID of the instance
     *
     * @example rm-****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The storage space size of the instance. This parameter is valid only if the value of the ProductId parameter is 2. Unit: bytes.
     *
     * @example 409600
     *
     * @var int
     */
    public $instanceSize;

    /**
     * @description The time when the data asset was last modified. Unit: milliseconds.
     *
     * @example 1625587423000
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @description The ID of the account that is last used to modify the data asset.
     *
     * @example demo
     *
     * @var string
     */
    public $lastModifyUserId;

    /**
     * @description The retention period of raw logs. Unit: days.
     *
     * @example 30
     *
     * @var int
     */
    public $logStoreDay;

    /**
     * @description Indicates whether the password is used. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $passwordStatus;

    /**
     * @description The ID of the service to which the data asset belongs. Valid values include **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates OSS. The value 3 indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
     *
     * @example 2
     *
     * @var int
     */
    public $productId;

    /**
     * @description The ID of the region where the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The number of sensitive data samples. Valid values: **0**, **5**, and **10**. Unit: data entries.
     *
     * @example 10
     *
     * @var int
     */
    public $samplingSize;

    /**
     * @description The ID of the tenant.
     *
     * @example 11
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The name of the tenant.
     *
     * @example user1
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The username of the account.
     *
     * @example User01
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'auditStatus'         => 'AuditStatus',
        'autoScan'            => 'AutoScan',
        'canModifyUserName'   => 'CanModifyUserName',
        'checkStatus'         => 'CheckStatus',
        'datamaskStatus'      => 'DatamaskStatus',
        'dbName'              => 'DbName',
        'enable'              => 'Enable',
        'engineType'          => 'EngineType',
        'errorMessage'        => 'ErrorMessage',
        'gmtCreate'           => 'GmtCreate',
        'id'                  => 'Id',
        'instanceDescription' => 'InstanceDescription',
        'instanceId'          => 'InstanceId',
        'instanceSize'        => 'InstanceSize',
        'lastModifyTime'      => 'LastModifyTime',
        'lastModifyUserId'    => 'LastModifyUserId',
        'logStoreDay'         => 'LogStoreDay',
        'passwordStatus'      => 'PasswordStatus',
        'productId'           => 'ProductId',
        'regionId'            => 'RegionId',
        'regionName'          => 'RegionName',
        'samplingSize'        => 'SamplingSize',
        'tenantId'            => 'TenantId',
        'tenantName'          => 'TenantName',
        'userName'            => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->autoScan) {
            $res['AutoScan'] = $this->autoScan;
        }
        if (null !== $this->canModifyUserName) {
            $res['CanModifyUserName'] = $this->canModifyUserName;
        }
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->datamaskStatus) {
            $res['DatamaskStatus'] = $this->datamaskStatus;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceSize) {
            $res['InstanceSize'] = $this->instanceSize;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->lastModifyUserId) {
            $res['LastModifyUserId'] = $this->lastModifyUserId;
        }
        if (null !== $this->logStoreDay) {
            $res['LogStoreDay'] = $this->logStoreDay;
        }
        if (null !== $this->passwordStatus) {
            $res['PasswordStatus'] = $this->passwordStatus;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->samplingSize) {
            $res['SamplingSize'] = $this->samplingSize;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['AutoScan'])) {
            $model->autoScan = $map['AutoScan'];
        }
        if (isset($map['CanModifyUserName'])) {
            $model->canModifyUserName = $map['CanModifyUserName'];
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['DatamaskStatus'])) {
            $model->datamaskStatus = $map['DatamaskStatus'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceSize'])) {
            $model->instanceSize = $map['InstanceSize'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['LastModifyUserId'])) {
            $model->lastModifyUserId = $map['LastModifyUserId'];
        }
        if (isset($map['LogStoreDay'])) {
            $model->logStoreDay = $map['LogStoreDay'];
        }
        if (isset($map['PasswordStatus'])) {
            $model->passwordStatus = $map['PasswordStatus'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['SamplingSize'])) {
            $model->samplingSize = $map['SamplingSize'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

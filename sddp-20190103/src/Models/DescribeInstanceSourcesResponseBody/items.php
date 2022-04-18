<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstanceSourcesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @var int
     */
    public $autoScan;

    /**
     * @var bool
     */
    public $canModifyUserName;

    /**
     * @var int
     */
    public $checkStatus;

    /**
     * @var int
     */
    public $datamaskStatus;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $enable;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceSize;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $lastModifyUserId;

    /**
     * @var int
     */
    public $logStoreDay;

    /**
     * @var int
     */
    public $passwordStatus;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var int
     */
    public $samplingSize;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;

    /**
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

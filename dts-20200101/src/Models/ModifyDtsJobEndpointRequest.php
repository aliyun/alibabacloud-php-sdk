<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ModifyDtsJobEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $database;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $endpointInstanceId;

    /**
     * @var string
     */
    public $endpointInstanceType;

    /**
     * @var string
     */
    public $endpointIp;

    /**
     * @var string
     */
    public $endpointPort;

    /**
     * @var string
     */
    public $endpointRegionId;

    /**
     * @var bool
     */
    public $modifyAccount;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $shardPassword;

    /**
     * @var string
     */
    public $shardUsername;

    /**
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @var string
     */
    public $username;

    /**
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'database' => 'Database',
        'dryRun' => 'DryRun',
        'dtsInstanceId' => 'DtsInstanceId',
        'dtsJobId' => 'DtsJobId',
        'endpoint' => 'Endpoint',
        'endpointInstanceId' => 'EndpointInstanceId',
        'endpointInstanceType' => 'EndpointInstanceType',
        'endpointIp' => 'EndpointIp',
        'endpointPort' => 'EndpointPort',
        'endpointRegionId' => 'EndpointRegionId',
        'modifyAccount' => 'ModifyAccount',
        'password' => 'Password',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'roleName' => 'RoleName',
        'shardPassword' => 'ShardPassword',
        'shardUsername' => 'ShardUsername',
        'synchronizationDirection' => 'SynchronizationDirection',
        'username' => 'Username',
        'zeroEtlJob' => 'ZeroEtlJob',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }

        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->endpointInstanceId) {
            $res['EndpointInstanceId'] = $this->endpointInstanceId;
        }

        if (null !== $this->endpointInstanceType) {
            $res['EndpointInstanceType'] = $this->endpointInstanceType;
        }

        if (null !== $this->endpointIp) {
            $res['EndpointIp'] = $this->endpointIp;
        }

        if (null !== $this->endpointPort) {
            $res['EndpointPort'] = $this->endpointPort;
        }

        if (null !== $this->endpointRegionId) {
            $res['EndpointRegionId'] = $this->endpointRegionId;
        }

        if (null !== $this->modifyAccount) {
            $res['ModifyAccount'] = $this->modifyAccount;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        if (null !== $this->shardPassword) {
            $res['ShardPassword'] = $this->shardPassword;
        }

        if (null !== $this->shardUsername) {
            $res['ShardUsername'] = $this->shardUsername;
        }

        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->zeroEtlJob) {
            $res['ZeroEtlJob'] = $this->zeroEtlJob;
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
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }

        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['EndpointInstanceId'])) {
            $model->endpointInstanceId = $map['EndpointInstanceId'];
        }

        if (isset($map['EndpointInstanceType'])) {
            $model->endpointInstanceType = $map['EndpointInstanceType'];
        }

        if (isset($map['EndpointIp'])) {
            $model->endpointIp = $map['EndpointIp'];
        }

        if (isset($map['EndpointPort'])) {
            $model->endpointPort = $map['EndpointPort'];
        }

        if (isset($map['EndpointRegionId'])) {
            $model->endpointRegionId = $map['EndpointRegionId'];
        }

        if (isset($map['ModifyAccount'])) {
            $model->modifyAccount = $map['ModifyAccount'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        if (isset($map['ShardPassword'])) {
            $model->shardPassword = $map['ShardPassword'];
        }

        if (isset($map['ShardUsername'])) {
            $model->shardUsername = $map['ShardUsername'];
        }

        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['ZeroEtlJob'])) {
            $model->zeroEtlJob = $map['ZeroEtlJob'];
        }

        return $model;
    }
}

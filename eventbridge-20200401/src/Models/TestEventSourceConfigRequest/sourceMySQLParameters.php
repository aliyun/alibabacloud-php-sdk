<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\TestEventSourceConfigRequest;

use AlibabaCloud\Tea\Model;

class sourceMySQLParameters extends Model
{
    /**
     * @description The database name.
     *
     * @example database1
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The endpoint of the database.
     *
     * @example rm-bp1vxxx.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The network type.
     *
     * Valid values:
     *
     *   PrivateNetwork
     *   PublicNetwork
     *
     * @example PrivateNetwork
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The password that is used for authentication.
     *
     * @example 1234xxx
     *
     * @var string
     */
    public $password;

    /**
     * @description The port that is used to connect to the database.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the security group.
     *
     * @example sg-xxx
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The table name. The name must be prefixed with the database name. ${DatabaseName}.${TableName}
     *
     * @example database1.table1
     *
     * @var string
     */
    public $tableNames;

    /**
     * @description The username that is used to log on to the database.
     *
     * @example user***
     *
     * @var string
     */
    public $user;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp1gb7xxx
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-xxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'hostName' => 'HostName',
        'networkType' => 'NetworkType',
        'password' => 'Password',
        'port' => 'Port',
        'regionId' => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
        'tableNames' => 'TableNames',
        'user' => 'User',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceMySQLParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['TableNames'])) {
            $model->tableNames = $map['TableNames'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

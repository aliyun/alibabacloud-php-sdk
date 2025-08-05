<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceRequest;

use AlibabaCloud\Tea\Model;

class sourceMySQLParameters extends Model
{
    /**
     * @example database1
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example rm-xxx.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 20
     *
     * @var string
     */
    public $limit;

    /**
     * @example PrivateNetwork
     *
     * @var string
     */
    public $networkType;

    /**
     * @example 30
     *
     * @var string
     */
    public $offset;

    /**
     * @example 1234xxx
     *
     * @var string
     */
    public $password;

    /**
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example sg-bp1ic0vsbwyv176e9inx
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example database1.table1
     *
     * @var string
     */
    public $tableName;

    /**
     * @example user1
     *
     * @var string
     */
    public $user;

    /**
     * @example vsw-gw824tpaptxtlo256lqub
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @example vpc-uf6hwiei8u5uil3bfahc1
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'hostName' => 'HostName',
        'limit' => 'Limit',
        'networkType' => 'NetworkType',
        'offset' => 'Offset',
        'password' => 'Password',
        'port' => 'Port',
        'regionId' => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
        'tableName' => 'TableName',
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
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
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
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
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

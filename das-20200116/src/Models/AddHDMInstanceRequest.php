<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class AddHDMInstanceRequest extends Model
{
    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**
     *   **PostgreSQL**
     *   **SQLServer**
     *   **PolarDBMySQL**
     *   **PolarDBPostgreSQL**
     *   **Redis**
     *   **MongoDB**
     *   **PolarDBOracle**
     *   **PolarDBX**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $flushAccount;

    /**
     * @description The name of the instance.
     *
     * @example yuecq--test****
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @description The type of the instance on which the database is deployed. Valid values:
     *
     *   **RDS**: an Alibaba Cloud database instance.
     *   **ECS**: an Elastic Compute Service (ECS) instance on which a self-managed database is deployed.
     *   **IDC**: a self-managed database instance that is not deployed on Alibaba Cloud.
     *
     * This parameter is required.
     * @example ECS
     *
     * @var string
     */
    public $instanceArea;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The endpoint that is used to access the instance over internal networks.
     *
     * @example rm-2ze1jdv45i7l6****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $ip;

    /**
     * @description The network type of the instance.
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The password for the username.
     *
     * @example 122****
     *
     * @var string
     */
    public $password;

    /**
     * @description The port that is used to access the instance over internal networks.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The username that is used to log on to the database.
     *
     * @example test****
     *
     * @var string
     */
    public $username;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-m5e666n89m2bx8jar****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $context;
    protected $_name = [
        'engine'        => 'Engine',
        'flushAccount'  => 'FlushAccount',
        'instanceAlias' => 'InstanceAlias',
        'instanceArea'  => 'InstanceArea',
        'instanceId'    => 'InstanceId',
        'ip'            => 'Ip',
        'networkType'   => 'NetworkType',
        'password'      => 'Password',
        'port'          => 'Port',
        'region'        => 'Region',
        'username'      => 'Username',
        'vpcId'         => 'VpcId',
        'context'       => '__context',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->flushAccount) {
            $res['FlushAccount'] = $this->flushAccount;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->instanceArea) {
            $res['InstanceArea'] = $this->instanceArea;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->context) {
            $res['__context'] = $this->context;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddHDMInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['FlushAccount'])) {
            $model->flushAccount = $map['FlushAccount'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['InstanceArea'])) {
            $model->instanceArea = $map['InstanceArea'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['__context'])) {
            $model->context = $map['__context'];
        }

        return $model;
    }
}

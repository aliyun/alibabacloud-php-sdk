<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateOmsMysqlDataSourceRequest extends Model
{
    /**
     * @example oms测试mysql数据源
     *
     * @var string
     */
    public $description;

    /**
     * @example dg-yhss6sdlaff****
     *
     * @var string
     */
    public $dgDatabaseId;

    /**
     * @example pc-12ab34cd56******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 10.0.****
     *
     * @var string
     */
    public $ip;

    /**
     * @description ```
     * &Type=INTERNET
     * &VpcId=vpc-12345abcde*******
     * &InstanceId=pc-12ab34cd56******
     * &DgDatabaseId=dg-yhss6sdlaff****
     * &Ip=10.0.****
     * ```
     * @example oms-mysql
     *
     * @var string
     */
    public $name;

    /**
     * @example YWJjZDEyM0Ah
     *
     * @var string
     */
    public $password;

    /**
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @example test
     *
     * @var string
     */
    public $schema;

    /**
     * @example INTERNET
     *
     * @var string
     */
    public $type;

    /**
     * @example omsTestUser
     *
     * @var string
     */
    public $username;

    /**
     * @example vpc-12345abcde*******
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'description'  => 'Description',
        'dgDatabaseId' => 'DgDatabaseId',
        'instanceId'   => 'InstanceId',
        'ip'           => 'Ip',
        'name'         => 'Name',
        'password'     => 'Password',
        'port'         => 'Port',
        'schema'       => 'Schema',
        'type'         => 'Type',
        'username'     => 'Username',
        'vpcId'        => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dgDatabaseId) {
            $res['DgDatabaseId'] = $this->dgDatabaseId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOmsMysqlDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DgDatabaseId'])) {
            $model->dgDatabaseId = $map['DgDatabaseId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

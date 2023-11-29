<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateOmsMysqlDataSourceRequest extends Model
{
    /**
     * @description The description of the data source.
     *
     * It must be 2 to 256 characters in length. The default value is null.
     * @example MySQL data source for OMS testing
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the database gateway instance.
     *
     * > <br>If Type is set to DG, this parameter is required.
     * @example dg-yhss6sdlaff****
     *
     * @var string
     */
    public $dgDatabaseId;

    /**
     * @description The ID of the ECS instance of the data source.
     *
     * > <br>If Type is set to RDS, PolarDB, or DG, this parameter is required.
     * @example pc-12ab34cd56******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the data source.
     *
     * > <br>If Type is set to INTERNET or VPC, this parameter is required.
     * @example 10.0.****
     *
     * @var string
     */
    public $ip;

    /**
     * @description The name of the data source.
     * > <br>Invalid characters, such as slashes (/), are not allowed.
     * @example oms-mysql
     *
     * @var string
     */
    public $name;

    /**
     * @description The password of the username that is used to access the database. It must be Base64 encoded.
     * For example, for the password abcd123@!, the Base64-encoded value is YWJjZDEyM0Ah.
     * @example YWJjZDEyM0Ah
     *
     * @var string
     */
    public $password;

    /**
     * @description The port number of the data source.
     *
     * > <br>If Type is set to INTERNET or VPC, this parameter is required.
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The name of the database.
     *
     * > <br>If you specify this parameter, subsequent migration or synchronization operations will take effect on this database only.
     * @example test
     *
     * @var string
     */
    public $schema;

    /**
     * @description The type of the MySQL data source.
     * Valid values: INTERNET, VPC, RDS, PolarDB, and DG.
     * @example INTERNET
     *
     * @var string
     */
    public $type;

    /**
     * @description The username that is used to access the database.
     *
     * @example omsTestUser
     *
     * @var string
     */
    public $username;

    /**
     * @description The ID of the VPC to which the data source belongs.
     *
     * > <br>If Type is set to VPC, this parameter is required.
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

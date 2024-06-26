<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateMySqlDataSourceRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example dg-x****
     *
     * @var string
     */
    public $dgInstanceId;

    /**
     * @example rm-t4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example xxx.xxx.xxx.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description This parameter is required.
     *
     * @example source_name
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example pass_word
     *
     * @var string
     */
    public $password;

    /**
     * @example 2883
     *
     * @var int
     */
    public $port;

    /**
     * @example test
     *
     * @var string
     */
    public $schema;

    /**
     * @description This parameter is required.
     *
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $useSsl;

    /**
     * @description This parameter is required.
     *
     * @example user_name
     *
     * @var string
     */
    public $userName;

    /**
     * @example vpc-bp1d2q3mhg9i23ofi****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'description'  => 'Description',
        'dgInstanceId' => 'DgInstanceId',
        'instanceId'   => 'InstanceId',
        'ip'           => 'Ip',
        'name'         => 'Name',
        'password'     => 'Password',
        'port'         => 'Port',
        'schema'       => 'Schema',
        'type'         => 'Type',
        'useSsl'       => 'UseSsl',
        'userName'     => 'UserName',
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
        if (null !== $this->dgInstanceId) {
            $res['DgInstanceId'] = $this->dgInstanceId;
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
        if (null !== $this->useSsl) {
            $res['UseSsl'] = $this->useSsl;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMySqlDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DgInstanceId'])) {
            $model->dgInstanceId = $map['DgInstanceId'];
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
        if (isset($map['UseSsl'])) {
            $model->useSsl = $map['UseSsl'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

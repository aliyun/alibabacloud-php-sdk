<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\CreateRdsExternalStoreRequest;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description The name of the database in the ApsaraDB RDS for MySQL instance.
     *
     * This parameter is required.
     * @example meta
     *
     * @var string
     */
    public $db;

    /**
     * @description The internal or public endpoint of the ApsaraDB RDS for MySQL instance.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $host;

    /**
     * @description The ID of the ApsaraDB RDS for MySQL instance.
     *
     * @example i-bp1b6c719dfa08exf****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The password that is used to log on to the ApsaraDB RDS for MySQL instance.
     *
     * This parameter is required.
     * @example sfdsfldsfksfls****
     *
     * @var string
     */
    public $password;

    /**
     * @description The internal or public port of the ApsaraDB RDS for MySQL instance.
     *
     * This parameter is required.
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The region where the ApsaraDB RDS for MySQL instance resides. Valid values: cn-qingdao, cn-beijing, and cn-hangzhou.
     *
     * This parameter is required.
     * @example cn-qingdao
     *
     * @var string
     */
    public $region;

    /**
     * @description The name of the database table in the ApsaraDB RDS for MySQL instance.
     *
     * This parameter is required.
     * @example join_meta
     *
     * @var string
     */
    public $table;

    /**
     * @description The username that is used to log on to the ApsaraDB RDS for MySQL instance.
     *
     * This parameter is required.
     * @example root
     *
     * @var string
     */
    public $username;

    /**
     * @description The ID of the VPC to which the ApsaraDB RDS for MySQL instance belongs.
     *
     * @example vpc-bp1aevy8sofi8mh1q****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'db'         => 'db',
        'host'       => 'host',
        'instanceId' => 'instance-id',
        'password'   => 'password',
        'port'       => 'port',
        'region'     => 'region',
        'table'      => 'table',
        'username'   => 'username',
        'vpcId'      => 'vpc-id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->db) {
            $res['db'] = $this->db;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->instanceId) {
            $res['instance-id'] = $this->instanceId;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->table) {
            $res['table'] = $this->table;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->vpcId) {
            $res['vpc-id'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['db'])) {
            $model->db = $map['db'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['instance-id'])) {
            $model->instanceId = $map['instance-id'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['table'])) {
            $model->table = $map['table'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['vpc-id'])) {
            $model->vpcId = $map['vpc-id'];
        }

        return $model;
    }
}

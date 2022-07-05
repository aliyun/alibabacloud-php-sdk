<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ExternalStore;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description meta
     *
     * @var string
     */
    public $db;

    /**
     * @description 192.168.XX.XX
     *
     * @var string
     */
    public $host;

    /**
     * @description RDS MySQL实例ID。
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description sfdsfldsfksfls****
     *
     * @var string
     */
    public $password;

    /**
     * @description 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description cn-qingdao
     *
     * @var string
     */
    public $region;

    /**
     * @description join_meta
     *
     * @var string
     */
    public $table;

    /**
     * @description root
     *
     * @var string
     */
    public $username;

    /**
     * @description RDS MySQL实例所属的VPC ID。
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

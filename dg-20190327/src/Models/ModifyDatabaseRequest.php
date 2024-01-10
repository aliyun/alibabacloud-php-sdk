<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dg\V20190327\Models;

use AlibabaCloud\Tea\Model;

class ModifyDatabaseRequest extends Model
{
    /**
     * @var string
     */
    public $dbDescription;

    /**
     * @example db_test
     *
     * @var string
     */
    public $dbName;

    /**
     * @example password
     *
     * @var string
     */
    public $dbPassword;

    /**
     * @example MySQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @example dg_test
     *
     * @var string
     */
    public $dbUserName;

    /**
     * @example 11.*.*.109
     *
     * @var string
     */
    public $host;

    /**
     * @example db
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 3440
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'dbDescription' => 'DbDescription',
        'dbName'        => 'DbName',
        'dbPassword'    => 'DbPassword',
        'dbType'        => 'DbType',
        'dbUserName'    => 'DbUserName',
        'host'          => 'Host',
        'instanceId'    => 'InstanceId',
        'port'          => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbDescription) {
            $res['DbDescription'] = $this->dbDescription;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbPassword) {
            $res['DbPassword'] = $this->dbPassword;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->dbUserName) {
            $res['DbUserName'] = $this->dbUserName;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbDescription'])) {
            $model->dbDescription = $map['DbDescription'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbPassword'])) {
            $model->dbPassword = $map['DbPassword'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DbUserName'])) {
            $model->dbUserName = $map['DbUserName'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}

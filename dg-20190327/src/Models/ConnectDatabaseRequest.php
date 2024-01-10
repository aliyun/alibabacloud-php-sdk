<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dg\V20190327\Models;

use AlibabaCloud\Tea\Model;

class ConnectDatabaseRequest extends Model
{
    /**
     * @example db_name
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
     * @example dg-yhss6sdlaff****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example 11.163.23.109
     *
     * @var string
     */
    public $host;

    /**
     * @example 3440
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'dbName'     => 'DbName',
        'dbPassword' => 'DbPassword',
        'dbType'     => 'DbType',
        'dbUserName' => 'DbUserName',
        'gatewayId'  => 'GatewayId',
        'host'       => 'Host',
        'port'       => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConnectDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}

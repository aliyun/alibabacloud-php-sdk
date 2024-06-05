<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models;

use AlibabaCloud\Tea\Model;

class AddDatabaseRequest extends Model
{
    /**
     * @example ETnLKlblzczshOTUbOCzxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dbDescription;

    /**
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @example 1234!2#%A***
     *
     * @var string
     */
    public $dbPassword;

    /**
     * @example MYSQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @example test_usr
     *
     * @var string
     */
    public $dbUserName;

    /**
     * @description This parameter is required.
     *
     * @example dg-8d9bqu1030m****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description This parameter is required.
     *
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $host;

    /**
     * @description This parameter is required.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'dbDescription' => 'DbDescription',
        'dbName'        => 'DbName',
        'dbPassword'    => 'DbPassword',
        'dbType'        => 'DbType',
        'dbUserName'    => 'DbUserName',
        'gatewayId'     => 'GatewayId',
        'host'          => 'Host',
        'port'          => 'Port',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
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
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
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
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

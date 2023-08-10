<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class sourceEndpoint extends Model
{
    /**
     * @description The name of the database to which the migration object in the source instance belongs.
     *
     * @example dtstestdatabase
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The database type of the source instance.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engineName;

    /**
     * @description The endpoint of the source instance.
     *
     * @example 172.16.88.***
     *
     * @var string
     */
    public $IP;

    /**
     * @description The ID of the source instance.
     *
     * @example rm-bp1i99e8l7913****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the source instance.
     *
     *   **RDS**: ApsaraDB RDS instance
     *   **ECS**: self-managed database that is hosted on Elastic Compute Service (ECS)
     *   **LocalInstance**: self-managed database with a public IP address
     *   **Express**: self-managed database that is connected over Express Connect, VPN Gateway, or Smart Access Gateway
     *   **MongoDB**: ApsaraDB for MongoDB instance
     *   **POLARDB**: PolarDB for MySQL cluster (available only for the China site)
     *
     * @example RDS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The database service port of the source instance.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The database account of the source instance.
     *
     * @example dtstest
     *
     * @var string
     */
    public $userName;

    /**
     * @description The SID of the Oracle database.
     *
     * >  This parameter is returned only if the database type of the source instance is **Oracle**.
     * @example dtstestdatabase
     *
     * @var string
     */
    public $oracleSID;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'engineName'   => 'EngineName',
        'IP'           => 'IP',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'port'         => 'Port',
        'userName'     => 'UserName',
        'oracleSID'    => 'oracleSID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->engineName) {
            $res['EngineName'] = $this->engineName;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->oracleSID) {
            $res['oracleSID'] = $this->oracleSID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceEndpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['EngineName'])) {
            $model->engineName = $map['EngineName'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['oracleSID'])) {
            $model->oracleSID = $map['oracleSID'];
        }

        return $model;
    }
}

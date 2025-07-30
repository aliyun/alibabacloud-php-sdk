<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class destinationEndpoint extends Model
{
    /**
     * @description The name of the database to which the migration object in the destination instance belongs.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The database type of the destination instance.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engineName;

    /**
     * @description The endpoint of the destination instance.
     *
     * @example 172.16.88.***
     *
     * @var string
     */
    public $IP;

    /**
     * @description The ID of the destination instance.
     *
     * @example rm-bp1zc3iyqe3qw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the destination instance.
     *
     * @example RDS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The database service port of the destination instance.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The database account of the destination instance.
     *
     * @example dtstest
     *
     * @var string
     */
    public $userName;

    /**
     * @description The system ID (SID) of the Oracle database.
     *
     * >  This parameter is returned only if the database type of the destination instance is **Oracle**.
     *
     * @example testsid
     *
     * @var string
     */
    public $oracleSID;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'engineName' => 'EngineName',
        'IP' => 'IP',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'port' => 'Port',
        'userName' => 'UserName',
        'oracleSID' => 'oracleSID',
    ];

    public function validate() {}

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
     * @return destinationEndpoint
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

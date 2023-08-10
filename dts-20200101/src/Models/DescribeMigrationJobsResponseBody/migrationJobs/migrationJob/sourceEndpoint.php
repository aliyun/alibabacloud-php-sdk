<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob;

use AlibabaCloud\Tea\Model;

class sourceEndpoint extends Model
{
    /**
     * @description The name of the database to which the migration object in the source instance belongs.
     *
     * @example dtstestdata
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
    public $instanceID;

    /**
     * @description The type of the source instance.
     *
     * @example RDS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description This parameter is returned only if the database type of the source instance is **Oracle**.
     *
     * @example testsid
     *
     * @var string
     */
    public $oracleSID;

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
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'engineName'   => 'EngineName',
        'IP'           => 'IP',
        'instanceID'   => 'InstanceID',
        'instanceType' => 'InstanceType',
        'oracleSID'    => 'OracleSID',
        'port'         => 'Port',
        'userName'     => 'UserName',
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
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->oracleSID) {
            $res['OracleSID'] = $this->oracleSID;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OracleSID'])) {
            $model->oracleSID = $map['OracleSID'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

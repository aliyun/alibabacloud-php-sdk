<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList;

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
     * @description The ID of the destination instance.
     *
     * @example rm-bp1imrtn6fq7h****
     *
     * @var string
     */
    public $instanceID;

    /**
     * @description The type of the destination instance.
     *
     * @example RDS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The endpoint of the destination instance.
     *
     * @example 172.16.88.***
     *
     * @var string
     */
    public $ip;

    /**
     * @description The SID of the Oracle database.
     *
     * >  This parameter is returned only if the **EngineName** parameter of the destination instance is set to **Oracle** and the Oracle database is deployed in a non-RAC architecture.
     * @example testsid
     *
     * @var string
     */
    public $oracleSID;

    /**
     * @description The database service port of the destination instance.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the region in which the destination instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description Indicates whether SSL encryption is enabled. Valid values:
     *
     *   **DISABLE**: SSL encryption is disabled.
     *   **ENABLE_WITH_CERTIFICATE**: SSL encryption is enabled, and the CA certificate is uploaded.
     *   **ENABLE_ONLY_4_MONGODB_ALTAS**: SSL encryption is enabled for the connection to an AWS MongoDB Altas database.
     *   **ENABLE_ONLY_4_KAFKA_SCRAM_SHA_256**: SCRAM-SHA-256 is used to encrypt the connection to a Kafka cluster.
     *
     * @example DISABLE
     *
     * @var string
     */
    public $sslSolutionEnum;

    /**
     * @description The database account of the destination instance.
     *
     * @example dtstest
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'databaseName'    => 'DatabaseName',
        'engineName'      => 'EngineName',
        'instanceID'      => 'InstanceID',
        'instanceType'    => 'InstanceType',
        'ip'              => 'Ip',
        'oracleSID'       => 'OracleSID',
        'port'            => 'Port',
        'region'          => 'Region',
        'sslSolutionEnum' => 'SslSolutionEnum',
        'userName'        => 'UserName',
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
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->oracleSID) {
            $res['OracleSID'] = $this->oracleSID;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->sslSolutionEnum) {
            $res['SslSolutionEnum'] = $this->sslSolutionEnum;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['OracleSID'])) {
            $model->oracleSID = $map['OracleSID'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SslSolutionEnum'])) {
            $model->sslSolutionEnum = $map['SslSolutionEnum'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

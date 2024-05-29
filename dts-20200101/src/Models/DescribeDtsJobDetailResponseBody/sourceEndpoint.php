<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class sourceEndpoint extends Model
{
    /**
     * @description The database engine of the source instance.
     *
     * @example 140692647406****
     *
     * @var string
     */
    public $aliyunUid;

    /**
     * @var bool
     */
    public $canModifyPassword;

    /**
     * @description The database service port of the source instance.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The name of the RAM role configured for the Alibaba Cloud account that owns the source instance.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engineName;

    /**
     * @description The system ID (SID) of the Oracle database.
     *
     * >  This parameter is returned only if the **EngineName** parameter of the source instance is set to **Oracle** and the Oracle database is deployed in a non-RAC architecture.
     * @example rm-bp1162kryivb8****
     *
     * @var string
     */
    public $instanceID;

    /**
     * @description The IP address of the source instance.
     *
     * @example RDS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The connection settings of the source instance.
     *
     * @example 172.16.88.***
     *
     * @var string
     */
    public $ip;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **Forward**: Data is synchronized from the source database to the destination database.
     *   **Reverse**: Data is synchronized from the destination database to the source database.
     *
     * @example testsid
     *
     * @var string
     */
    public $oracleSID;

    /**
     * @description The ID of the source instance.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The type of the source instance.
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
     * @example ram-for-dts
     *
     * @var string
     */
    public $roleName;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **Forward**: Data is synchronized from the source database to the destination database.
     *   **Reverse**: Data is synchronized from the destination database to the source database.
     *
     * >  This parameter is returned only if the topology of the data synchronization instance is two-way synchronization.
     * @example DISABLE
     *
     * @var string
     */
    public $sslSolutionEnum;

    /**
     * @description The ID of the region in which the source instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example dtstest
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'aliyunUid'         => 'AliyunUid',
        'canModifyPassword' => 'CanModifyPassword',
        'databaseName'      => 'DatabaseName',
        'engineName'        => 'EngineName',
        'instanceID'        => 'InstanceID',
        'instanceType'      => 'InstanceType',
        'ip'                => 'Ip',
        'oracleSID'         => 'OracleSID',
        'port'              => 'Port',
        'region'            => 'Region',
        'roleName'          => 'RoleName',
        'sslSolutionEnum'   => 'SslSolutionEnum',
        'userName'          => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->canModifyPassword) {
            $res['CanModifyPassword'] = $this->canModifyPassword;
        }
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
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
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
     * @return sourceEndpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['CanModifyPassword'])) {
            $model->canModifyPassword = $map['CanModifyPassword'];
        }
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
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
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

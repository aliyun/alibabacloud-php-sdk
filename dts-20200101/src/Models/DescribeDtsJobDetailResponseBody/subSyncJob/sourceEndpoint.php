<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob;

use AlibabaCloud\Tea\Model;

class sourceEndpoint extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $engineName;

    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $oracleSID;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @description DISABLE: 不使用 SSL, ENABLE_WITH_CERTIFICATE: 使用 SSL, 需要用户上传 CA 证书, ENABLE_ONLY_4_MONGODB_ATLAS: 使用 SSL, 但只适用于 AWS MongoDB Altas, 不需要证书, ENABLE_ONLY_4_KAFKA_SCRAM_SHA_256: Kafka SCRAM-SHA-256 支持, 不需要证书
     *
     * @var string
     */
    public $sslSolutionEnum;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'aliyunUid'       => 'AliyunUid',
        'databaseName'    => 'DatabaseName',
        'engineName'      => 'EngineName',
        'instanceID'      => 'InstanceID',
        'instanceType'    => 'InstanceType',
        'ip'              => 'Ip',
        'oracleSID'       => 'OracleSID',
        'port'            => 'Port',
        'region'          => 'Region',
        'roleName'        => 'RoleName',
        'sslSolutionEnum' => 'SslSolutionEnum',
        'userName'        => 'UserName',
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

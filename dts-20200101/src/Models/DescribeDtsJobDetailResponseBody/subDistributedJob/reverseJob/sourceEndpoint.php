<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subDistributedJob\reverseJob;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $sslSolutionEnum;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'databaseName' => 'DatabaseName',
        'engineName' => 'EngineName',
        'instanceID' => 'InstanceID',
        'instanceType' => 'InstanceType',
        'ip' => 'Ip',
        'oracleSID' => 'OracleSID',
        'port' => 'Port',
        'region' => 'Region',
        'roleName' => 'RoleName',
        'sslSolutionEnum' => 'SslSolutionEnum',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

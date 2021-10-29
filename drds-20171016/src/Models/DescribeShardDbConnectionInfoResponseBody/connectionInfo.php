<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeShardDbConnectionInfoResponseBody;

use AlibabaCloud\Tea\Model;

class connectionInfo extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceUrl;

    /**
     * @var int
     */
    public $blockingTimeout;

    /**
     * @var string
     */
    public $connectionProperties;

    /**
     * @var string
     */
    public $dbStatus;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var int
     */
    public $idleTimeOut;

    /**
     * @var int
     */
    public $maxPoolSize;

    /**
     * @var int
     */
    public $minPoolSize;

    /**
     * @var int
     */
    public $preparedStatementCacheSize;

    /**
     * @var string
     */
    public $subDbName;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'instanceName'               => 'InstanceName',
        'instanceUrl'                => 'InstanceUrl',
        'blockingTimeout'            => 'blockingTimeout',
        'connectionProperties'       => 'connectionProperties',
        'dbStatus'                   => 'dbStatus',
        'dbType'                     => 'dbType',
        'idleTimeOut'                => 'idleTimeOut',
        'maxPoolSize'                => 'maxPoolSize',
        'minPoolSize'                => 'minPoolSize',
        'preparedStatementCacheSize' => 'preparedStatementCacheSize',
        'subDbName'                  => 'subDbName',
        'userName'                   => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceUrl) {
            $res['InstanceUrl'] = $this->instanceUrl;
        }
        if (null !== $this->blockingTimeout) {
            $res['blockingTimeout'] = $this->blockingTimeout;
        }
        if (null !== $this->connectionProperties) {
            $res['connectionProperties'] = $this->connectionProperties;
        }
        if (null !== $this->dbStatus) {
            $res['dbStatus'] = $this->dbStatus;
        }
        if (null !== $this->dbType) {
            $res['dbType'] = $this->dbType;
        }
        if (null !== $this->idleTimeOut) {
            $res['idleTimeOut'] = $this->idleTimeOut;
        }
        if (null !== $this->maxPoolSize) {
            $res['maxPoolSize'] = $this->maxPoolSize;
        }
        if (null !== $this->minPoolSize) {
            $res['minPoolSize'] = $this->minPoolSize;
        }
        if (null !== $this->preparedStatementCacheSize) {
            $res['preparedStatementCacheSize'] = $this->preparedStatementCacheSize;
        }
        if (null !== $this->subDbName) {
            $res['subDbName'] = $this->subDbName;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceUrl'])) {
            $model->instanceUrl = $map['InstanceUrl'];
        }
        if (isset($map['blockingTimeout'])) {
            $model->blockingTimeout = $map['blockingTimeout'];
        }
        if (isset($map['connectionProperties'])) {
            $model->connectionProperties = $map['connectionProperties'];
        }
        if (isset($map['dbStatus'])) {
            $model->dbStatus = $map['dbStatus'];
        }
        if (isset($map['dbType'])) {
            $model->dbType = $map['dbType'];
        }
        if (isset($map['idleTimeOut'])) {
            $model->idleTimeOut = $map['idleTimeOut'];
        }
        if (isset($map['maxPoolSize'])) {
            $model->maxPoolSize = $map['maxPoolSize'];
        }
        if (isset($map['minPoolSize'])) {
            $model->minPoolSize = $map['minPoolSize'];
        }
        if (isset($map['preparedStatementCacheSize'])) {
            $model->preparedStatementCacheSize = $map['preparedStatementCacheSize'];
        }
        if (isset($map['subDbName'])) {
            $model->subDbName = $map['subDbName'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}

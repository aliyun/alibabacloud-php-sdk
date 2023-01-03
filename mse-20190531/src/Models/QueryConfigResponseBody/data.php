<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponseBody\data\nacosRunningEnv;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description A reserved parameter.
     *
     * @example none
     *
     * @var string
     */
    public $autopurgePurgeInterval;

    /**
     * @description A reserved parameter.
     *
     * @example none
     *
     * @var string
     */
    public $autopurgeSnapRetainCount;

    /**
     * @description The name of the cluster.
     *
     * @example name
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Indicates whether RAM authentication of a configuration center is enabled. This parameter is valid for Nacos instances. Valid values:
     *
     *   `true`: enabled
     *   `false`: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $configAuthEnabled;

    /**
     * @description Indicates whether RAM authentication is supported by a configuration center of the instance. This parameter is valid for Nacos instances. Valid values:
     *
     *   `true`: supported
     *   `false`: not supported
     *
     * @example true
     *
     * @var bool
     */
    public $configAuthSupported;

    /**
     * @var int
     */
    public $configContentLimit;

    /**
     * @description Indicates whether configuration encryption of a configuration center is enabled by the instance. This parameter is valid for Nacos instances. Valid values:
     *
     *   `true`: enabled
     *   `false`: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $configSecretEnabled;

    /**
     * @description Indicates whether configuration encryption of a configuration center is supported by the instance. This parameter is valid for Nacos instances. Valid values:
     *
     *   `true`: supported
     *   `false`: not supported
     *
     * @example true
     *
     * @var bool
     */
    public $configSecretSupported;

    /**
     * @var bool
     */
    public $extendedTypesEnable;

    /**
     * @description The maximum connection duration of the instance. This parameter is valid for ZooKeeper instances. Unit: seconds.
     *
     * @example 100
     *
     * @var string
     */
    public $initLimit;

    /**
     * @description The maximum amount of data on each node. This parameter is valid for ZooKeeper instances. Unit: bytes.
     *
     * @example 1
     *
     * @var string
     */
    public $juteMaxbuffer;

    /**
     * @description A reserved parameter.
     *
     * @example none
     *
     * @var string
     */
    public $jvmFlagsCustom;

    /**
     * @description Indicates whether Mesh Configuration Protocol (MCP) is enabled. This parameter is valid for Nacos instances. Valid values:
     *
     *   `true`: enabled
     *   `false`: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $MCPEnabled;

    /**
     * @description Indicates whether MCP is supported. This parameter is valid for Nacos instances. Valid values:
     *
     *   `true`: supported
     *   `false`: not supported
     *
     * @example true
     *
     * @var bool
     */
    public $MCPSupported;

    /**
     * @description The number of connections between a client and a server. This parameter is valid for ZooKeeper instances.\
     * If this parameter is set to 0, no limits are imposed on the number of connections.
     * @example 0
     *
     * @var string
     */
    public $maxClientCnxns;

    /**
     * @description The maximum timeout period. This parameter is valid for ZooKeeper instances.
     *
     * @example -1
     *
     * @var string
     */
    public $maxSessionTimeout;

    /**
     * @description The minimum timeout period. This parameter is valid for ZooKeeper instances.
     *
     * @example -1
     *
     * @var string
     */
    public $minSessionTimeout;

    /**
     * @var nacosRunningEnv
     */
    public $nacosRunningEnv;

    /**
     * @description Indicates whether RAM authentication of a registry is enabled. This parameter is valid for Nacos instances. Valid values:
     *
     *   `true`: enabled
     *   `false`: disabled
     *
     * @example false
     *
     * @var bool
     */
    public $namingAuthEnabled;

    /**
     * @description Indicates whether RAM authentication of services is supported by the instance. This parameter is valid for Nacos instances. Valid values:
     *
     *   `true`: supported
     *   `false`: not supported
     *
     * @example true
     *
     * @var bool
     */
    public $namingAuthSupported;

    /**
     * @description Indicates whether service creation is supported for the instance. This parameter is valid for Nacos instances. Valid values:
     *
     *   `true`: supported
     *   `false`: not supported
     *
     * @example true
     *
     * @var bool
     */
    public $namingCreateServiceSupported;

    /**
     * @description Indicates whether super permissions are enabled. This parameter is valid for ZooKeeper instances. Valid values:
     *
     *   `true`: enabled
     *   `false`: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $openSuperAcl;

    /**
     * @description The password of the user. This parameter is valid only if OpenSuperAcl is set to true.
     *
     * @example password
     *
     * @var string
     */
    public $passWord;

    /**
     * @description Indicates whether the instance was restarted and new configurations have taken effect. Valid values:
     *
     *   `true`: The restart was successful.
     *   `false`: The restart failed.
     *
     * @example true
     *
     * @var bool
     */
    public $restartFlag;

    /**
     * @description The frequency for generating snapshots. This parameter is valid for ZooKeeper instances.
     *
     * @example 100000
     *
     * @var string
     */
    public $snapshotCount;

    /**
     * @description The connection timeout period of the instance. This parameter is valid for ZooKeeper instances. Unit: seconds.
     *
     * @example 10
     *
     * @var string
     */
    public $syncLimit;

    /**
     * @description The time unit of the engine. This parameter is valid for ZooKeeper instances. Default value: 2000. Unit: milliseconds.
     *
     * @example 2000
     *
     * @var string
     */
    public $tickTime;

    /**
     * @description The username of the user. This parameter is valid only if OpenSuperAcl is set to true.
     *
     * @example name
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'autopurgePurgeInterval'       => 'AutopurgePurgeInterval',
        'autopurgeSnapRetainCount'     => 'AutopurgeSnapRetainCount',
        'clusterName'                  => 'ClusterName',
        'configAuthEnabled'            => 'ConfigAuthEnabled',
        'configAuthSupported'          => 'ConfigAuthSupported',
        'configContentLimit'           => 'ConfigContentLimit',
        'configSecretEnabled'          => 'ConfigSecretEnabled',
        'configSecretSupported'        => 'ConfigSecretSupported',
        'extendedTypesEnable'          => 'ExtendedTypesEnable',
        'initLimit'                    => 'InitLimit',
        'juteMaxbuffer'                => 'JuteMaxbuffer',
        'jvmFlagsCustom'               => 'JvmFlagsCustom',
        'MCPEnabled'                   => 'MCPEnabled',
        'MCPSupported'                 => 'MCPSupported',
        'maxClientCnxns'               => 'MaxClientCnxns',
        'maxSessionTimeout'            => 'MaxSessionTimeout',
        'minSessionTimeout'            => 'MinSessionTimeout',
        'nacosRunningEnv'              => 'NacosRunningEnv',
        'namingAuthEnabled'            => 'NamingAuthEnabled',
        'namingAuthSupported'          => 'NamingAuthSupported',
        'namingCreateServiceSupported' => 'NamingCreateServiceSupported',
        'openSuperAcl'                 => 'OpenSuperAcl',
        'passWord'                     => 'PassWord',
        'restartFlag'                  => 'RestartFlag',
        'snapshotCount'                => 'SnapshotCount',
        'syncLimit'                    => 'SyncLimit',
        'tickTime'                     => 'TickTime',
        'userName'                     => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autopurgePurgeInterval) {
            $res['AutopurgePurgeInterval'] = $this->autopurgePurgeInterval;
        }
        if (null !== $this->autopurgeSnapRetainCount) {
            $res['AutopurgeSnapRetainCount'] = $this->autopurgeSnapRetainCount;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->configAuthEnabled) {
            $res['ConfigAuthEnabled'] = $this->configAuthEnabled;
        }
        if (null !== $this->configAuthSupported) {
            $res['ConfigAuthSupported'] = $this->configAuthSupported;
        }
        if (null !== $this->configContentLimit) {
            $res['ConfigContentLimit'] = $this->configContentLimit;
        }
        if (null !== $this->configSecretEnabled) {
            $res['ConfigSecretEnabled'] = $this->configSecretEnabled;
        }
        if (null !== $this->configSecretSupported) {
            $res['ConfigSecretSupported'] = $this->configSecretSupported;
        }
        if (null !== $this->extendedTypesEnable) {
            $res['ExtendedTypesEnable'] = $this->extendedTypesEnable;
        }
        if (null !== $this->initLimit) {
            $res['InitLimit'] = $this->initLimit;
        }
        if (null !== $this->juteMaxbuffer) {
            $res['JuteMaxbuffer'] = $this->juteMaxbuffer;
        }
        if (null !== $this->jvmFlagsCustom) {
            $res['JvmFlagsCustom'] = $this->jvmFlagsCustom;
        }
        if (null !== $this->MCPEnabled) {
            $res['MCPEnabled'] = $this->MCPEnabled;
        }
        if (null !== $this->MCPSupported) {
            $res['MCPSupported'] = $this->MCPSupported;
        }
        if (null !== $this->maxClientCnxns) {
            $res['MaxClientCnxns'] = $this->maxClientCnxns;
        }
        if (null !== $this->maxSessionTimeout) {
            $res['MaxSessionTimeout'] = $this->maxSessionTimeout;
        }
        if (null !== $this->minSessionTimeout) {
            $res['MinSessionTimeout'] = $this->minSessionTimeout;
        }
        if (null !== $this->nacosRunningEnv) {
            $res['NacosRunningEnv'] = null !== $this->nacosRunningEnv ? $this->nacosRunningEnv->toMap() : null;
        }
        if (null !== $this->namingAuthEnabled) {
            $res['NamingAuthEnabled'] = $this->namingAuthEnabled;
        }
        if (null !== $this->namingAuthSupported) {
            $res['NamingAuthSupported'] = $this->namingAuthSupported;
        }
        if (null !== $this->namingCreateServiceSupported) {
            $res['NamingCreateServiceSupported'] = $this->namingCreateServiceSupported;
        }
        if (null !== $this->openSuperAcl) {
            $res['OpenSuperAcl'] = $this->openSuperAcl;
        }
        if (null !== $this->passWord) {
            $res['PassWord'] = $this->passWord;
        }
        if (null !== $this->restartFlag) {
            $res['RestartFlag'] = $this->restartFlag;
        }
        if (null !== $this->snapshotCount) {
            $res['SnapshotCount'] = $this->snapshotCount;
        }
        if (null !== $this->syncLimit) {
            $res['SyncLimit'] = $this->syncLimit;
        }
        if (null !== $this->tickTime) {
            $res['TickTime'] = $this->tickTime;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutopurgePurgeInterval'])) {
            $model->autopurgePurgeInterval = $map['AutopurgePurgeInterval'];
        }
        if (isset($map['AutopurgeSnapRetainCount'])) {
            $model->autopurgeSnapRetainCount = $map['AutopurgeSnapRetainCount'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ConfigAuthEnabled'])) {
            $model->configAuthEnabled = $map['ConfigAuthEnabled'];
        }
        if (isset($map['ConfigAuthSupported'])) {
            $model->configAuthSupported = $map['ConfigAuthSupported'];
        }
        if (isset($map['ConfigContentLimit'])) {
            $model->configContentLimit = $map['ConfigContentLimit'];
        }
        if (isset($map['ConfigSecretEnabled'])) {
            $model->configSecretEnabled = $map['ConfigSecretEnabled'];
        }
        if (isset($map['ConfigSecretSupported'])) {
            $model->configSecretSupported = $map['ConfigSecretSupported'];
        }
        if (isset($map['ExtendedTypesEnable'])) {
            $model->extendedTypesEnable = $map['ExtendedTypesEnable'];
        }
        if (isset($map['InitLimit'])) {
            $model->initLimit = $map['InitLimit'];
        }
        if (isset($map['JuteMaxbuffer'])) {
            $model->juteMaxbuffer = $map['JuteMaxbuffer'];
        }
        if (isset($map['JvmFlagsCustom'])) {
            $model->jvmFlagsCustom = $map['JvmFlagsCustom'];
        }
        if (isset($map['MCPEnabled'])) {
            $model->MCPEnabled = $map['MCPEnabled'];
        }
        if (isset($map['MCPSupported'])) {
            $model->MCPSupported = $map['MCPSupported'];
        }
        if (isset($map['MaxClientCnxns'])) {
            $model->maxClientCnxns = $map['MaxClientCnxns'];
        }
        if (isset($map['MaxSessionTimeout'])) {
            $model->maxSessionTimeout = $map['MaxSessionTimeout'];
        }
        if (isset($map['MinSessionTimeout'])) {
            $model->minSessionTimeout = $map['MinSessionTimeout'];
        }
        if (isset($map['NacosRunningEnv'])) {
            $model->nacosRunningEnv = nacosRunningEnv::fromMap($map['NacosRunningEnv']);
        }
        if (isset($map['NamingAuthEnabled'])) {
            $model->namingAuthEnabled = $map['NamingAuthEnabled'];
        }
        if (isset($map['NamingAuthSupported'])) {
            $model->namingAuthSupported = $map['NamingAuthSupported'];
        }
        if (isset($map['NamingCreateServiceSupported'])) {
            $model->namingCreateServiceSupported = $map['NamingCreateServiceSupported'];
        }
        if (isset($map['OpenSuperAcl'])) {
            $model->openSuperAcl = $map['OpenSuperAcl'];
        }
        if (isset($map['PassWord'])) {
            $model->passWord = $map['PassWord'];
        }
        if (isset($map['RestartFlag'])) {
            $model->restartFlag = $map['RestartFlag'];
        }
        if (isset($map['SnapshotCount'])) {
            $model->snapshotCount = $map['SnapshotCount'];
        }
        if (isset($map['SyncLimit'])) {
            $model->syncLimit = $map['SyncLimit'];
        }
        if (isset($map['TickTime'])) {
            $model->tickTime = $map['TickTime'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

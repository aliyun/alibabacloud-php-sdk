<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateConfigRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var bool
     */
    public $authEnabled;

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
     * @description The ID of the cluster.
     *
     * @example mse-09k1q11****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether to enable Resource Access Management (RAM) authentication for a configuration center. This parameter is valid for Nacos instances. Valid values:
     *
     *   `true`: enabled.
     *   `false`: disabled.
     *
     * > Before you configure this parameter, you must call the QueryConfig operation to obtain the ConfigAuthSupported parameter value to check whether the instance supports the RAM authentication feature.
     * @example true
     *
     * @var bool
     */
    public $configAuthEnabled;

    /**
     * @description Specifies whether to enable configuration encryption for a configuration center. This parameter is valid for Nacos instances. Valid values:
     *
     *   `true`: enabled.
     *   `false`: disabled.
     *
     * > Before you configure this parameter, you must call the QueryConfig operation to obtain the ConfigSecretSupported parameter value to check whether the instance supports configuration encryption.
     * @example true
     *
     * @var bool
     */
    public $configSecretEnabled;

    /**
     * @description The format of the configuration. Supported formats include TEXT, JSON, XML, and HTML.
     *
     * @example TEXT
     *
     * @var string
     */
    public $configType;

    /**
     * @var bool
     */
    public $consoleUIEnabled;

    /**
     * @var bool
     */
    public $enable4lw;

    /**
     * @example true
     *
     * @var bool
     */
    public $eurekaSupported;

    /**
     * @description Specifies whether to enable the time to live (TTL) configuration. This parameter is valid for ZooKeeper instances.
     *
     * @example true
     *
     * @var string
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
     * @description The ID of the instance.
     *
     * @example mse_prepaid_public_cn-st2212****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maximum amount of data on each node. This parameter is valid for ZooKeeper instances. The default maximum data amount on each node is 1 megabyte. Unit: bytes.
     *
     * @example 1048575
     *
     * @var string
     */
    public $juteMaxbuffer;

    /**
     * @description Specifies whether to enable Mesh Configuration Protocol (MCP). This parameter is valid for Nacos instances. Valid values:
     *
     *   `true`: enabled.
     *   `false`: disabled.
     *
     * > Before you configure this parameter, you must call the QueryConfig operation to obtain the MCPSupported parameter value to check whether the instance supports MCP.
     * @example true
     *
     * @var bool
     */
    public $MCPEnabled;

    /**
     * @description The number of connections between a client and a server. This parameter is valid for ZooKeeper instances.\\
     * If this parameter is set to 0, no limits are imposed on the number of connections.
     * @example 0
     *
     * @var string
     */
    public $maxClientCnxns;

    /**
     * @description The maximum timeout period. This parameter is valid for ZooKeeper instances. Unit: seconds.
     *
     * @example 1000
     *
     * @var string
     */
    public $maxSessionTimeout;

    /**
     * @description The minimum timeout period. This parameter is valid for ZooKeeper instances. Unit: seconds.
     *
     * @example 10
     *
     * @var string
     */
    public $minSessionTimeout;

    /**
     * @description Specifies whether to enable RAM authentication for a registry. This parameter is valid for Nacos instances. Valid values:
     *
     *   `true`: enabled.
     *   `false`: disabled.
     *
     * > Before you configure this parameter, you must call the QueryConfig operation to obtain the NamingAuthSupporte parameter value to check whether the instance supports the RAM authentication feature.
     * @example true
     *
     * @var bool
     */
    public $namingAuthEnabled;

    /**
     * @description Specifies whether to enable super permissions. This parameter is valid for ZooKeeper instances. Valid values:
     *
     *   `true`: enabled
     *   `false`: disabled
     *
     * @example true
     *
     * @var string
     */
    public $openSuperAcl;

    /**
     * @description The password that corresponds to the username.
     *
     * > You must specify this parameter if OpenSuperAcl is set to true.
     * @example password
     *
     * @var string
     */
    public $passWord;

    /**
     * @description The extended request parameters in the JSON format.
     *
     * @example {}
     *
     * @var string
     */
    public $requestPars;

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
     * @example true
     *
     * @var bool
     */
    public $TLSEnabled;

    /**
     * @description The time unit. This parameter is valid for ZooKeeper instances. Default value: 2000. Unit: milliseconds.
     *
     * @example 2000
     *
     * @var string
     */
    public $tickTime;

    /**
     * @description The name of the user.
     *
     * > You must specify this parameter if OpenSuperAcl is set to true.
     * @example name
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'acceptLanguage'           => 'AcceptLanguage',
        'authEnabled'              => 'AuthEnabled',
        'autopurgePurgeInterval'   => 'AutopurgePurgeInterval',
        'autopurgeSnapRetainCount' => 'AutopurgeSnapRetainCount',
        'clusterId'                => 'ClusterId',
        'configAuthEnabled'        => 'ConfigAuthEnabled',
        'configSecretEnabled'      => 'ConfigSecretEnabled',
        'configType'               => 'ConfigType',
        'consoleUIEnabled'         => 'ConsoleUIEnabled',
        'enable4lw'                => 'Enable4lw',
        'eurekaSupported'          => 'EurekaSupported',
        'extendedTypesEnable'      => 'ExtendedTypesEnable',
        'initLimit'                => 'InitLimit',
        'instanceId'               => 'InstanceId',
        'juteMaxbuffer'            => 'JuteMaxbuffer',
        'MCPEnabled'               => 'MCPEnabled',
        'maxClientCnxns'           => 'MaxClientCnxns',
        'maxSessionTimeout'        => 'MaxSessionTimeout',
        'minSessionTimeout'        => 'MinSessionTimeout',
        'namingAuthEnabled'        => 'NamingAuthEnabled',
        'openSuperAcl'             => 'OpenSuperAcl',
        'passWord'                 => 'PassWord',
        'requestPars'              => 'RequestPars',
        'snapshotCount'            => 'SnapshotCount',
        'syncLimit'                => 'SyncLimit',
        'TLSEnabled'               => 'TLSEnabled',
        'tickTime'                 => 'TickTime',
        'userName'                 => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->authEnabled) {
            $res['AuthEnabled'] = $this->authEnabled;
        }
        if (null !== $this->autopurgePurgeInterval) {
            $res['AutopurgePurgeInterval'] = $this->autopurgePurgeInterval;
        }
        if (null !== $this->autopurgeSnapRetainCount) {
            $res['AutopurgeSnapRetainCount'] = $this->autopurgeSnapRetainCount;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->configAuthEnabled) {
            $res['ConfigAuthEnabled'] = $this->configAuthEnabled;
        }
        if (null !== $this->configSecretEnabled) {
            $res['ConfigSecretEnabled'] = $this->configSecretEnabled;
        }
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->consoleUIEnabled) {
            $res['ConsoleUIEnabled'] = $this->consoleUIEnabled;
        }
        if (null !== $this->enable4lw) {
            $res['Enable4lw'] = $this->enable4lw;
        }
        if (null !== $this->eurekaSupported) {
            $res['EurekaSupported'] = $this->eurekaSupported;
        }
        if (null !== $this->extendedTypesEnable) {
            $res['ExtendedTypesEnable'] = $this->extendedTypesEnable;
        }
        if (null !== $this->initLimit) {
            $res['InitLimit'] = $this->initLimit;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->juteMaxbuffer) {
            $res['JuteMaxbuffer'] = $this->juteMaxbuffer;
        }
        if (null !== $this->MCPEnabled) {
            $res['MCPEnabled'] = $this->MCPEnabled;
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
        if (null !== $this->namingAuthEnabled) {
            $res['NamingAuthEnabled'] = $this->namingAuthEnabled;
        }
        if (null !== $this->openSuperAcl) {
            $res['OpenSuperAcl'] = $this->openSuperAcl;
        }
        if (null !== $this->passWord) {
            $res['PassWord'] = $this->passWord;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->snapshotCount) {
            $res['SnapshotCount'] = $this->snapshotCount;
        }
        if (null !== $this->syncLimit) {
            $res['SyncLimit'] = $this->syncLimit;
        }
        if (null !== $this->TLSEnabled) {
            $res['TLSEnabled'] = $this->TLSEnabled;
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
     * @return UpdateConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AuthEnabled'])) {
            $model->authEnabled = $map['AuthEnabled'];
        }
        if (isset($map['AutopurgePurgeInterval'])) {
            $model->autopurgePurgeInterval = $map['AutopurgePurgeInterval'];
        }
        if (isset($map['AutopurgeSnapRetainCount'])) {
            $model->autopurgeSnapRetainCount = $map['AutopurgeSnapRetainCount'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ConfigAuthEnabled'])) {
            $model->configAuthEnabled = $map['ConfigAuthEnabled'];
        }
        if (isset($map['ConfigSecretEnabled'])) {
            $model->configSecretEnabled = $map['ConfigSecretEnabled'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['ConsoleUIEnabled'])) {
            $model->consoleUIEnabled = $map['ConsoleUIEnabled'];
        }
        if (isset($map['Enable4lw'])) {
            $model->enable4lw = $map['Enable4lw'];
        }
        if (isset($map['EurekaSupported'])) {
            $model->eurekaSupported = $map['EurekaSupported'];
        }
        if (isset($map['ExtendedTypesEnable'])) {
            $model->extendedTypesEnable = $map['ExtendedTypesEnable'];
        }
        if (isset($map['InitLimit'])) {
            $model->initLimit = $map['InitLimit'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JuteMaxbuffer'])) {
            $model->juteMaxbuffer = $map['JuteMaxbuffer'];
        }
        if (isset($map['MCPEnabled'])) {
            $model->MCPEnabled = $map['MCPEnabled'];
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
        if (isset($map['NamingAuthEnabled'])) {
            $model->namingAuthEnabled = $map['NamingAuthEnabled'];
        }
        if (isset($map['OpenSuperAcl'])) {
            $model->openSuperAcl = $map['OpenSuperAcl'];
        }
        if (isset($map['PassWord'])) {
            $model->passWord = $map['PassWord'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['SnapshotCount'])) {
            $model->snapshotCount = $map['SnapshotCount'];
        }
        if (isset($map['SyncLimit'])) {
            $model->syncLimit = $map['SyncLimit'];
        }
        if (isset($map['TLSEnabled'])) {
            $model->TLSEnabled = $map['TLSEnabled'];
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

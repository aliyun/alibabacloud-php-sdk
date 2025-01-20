<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class UpdateConfigRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var bool
     */
    public $authEnabled;
    /**
     * @var string
     */
    public $autopurgePurgeInterval;
    /**
     * @var string
     */
    public $autopurgeSnapRetainCount;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var bool
     */
    public $configAuthEnabled;
    /**
     * @var bool
     */
    public $configSecretEnabled;
    /**
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
     * @var bool
     */
    public $eurekaSupported;
    /**
     * @var string
     */
    public $extendedTypesEnable;
    /**
     * @var string
     */
    public $initLimit;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $juteMaxbuffer;
    /**
     * @var bool
     */
    public $MCPEnabled;
    /**
     * @var string
     */
    public $maxClientCnxns;
    /**
     * @var string
     */
    public $maxSessionTimeout;
    /**
     * @var string
     */
    public $minSessionTimeout;
    /**
     * @var bool
     */
    public $namingAuthEnabled;
    /**
     * @var string
     */
    public $openSuperAcl;
    /**
     * @var string
     */
    public $passWord;
    /**
     * @var string
     */
    public $requestPars;
    /**
     * @var string
     */
    public $snapshotCount;
    /**
     * @var string
     */
    public $syncLimit;
    /**
     * @var bool
     */
    public $TLSEnabled;
    /**
     * @var string
     */
    public $tickTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponseBody\data\nacosRunningEnv;

class data extends Model
{
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
    public $clusterName;

    /**
     * @var bool
     */
    public $configAuthEnabled;

    /**
     * @var bool
     */
    public $configAuthSupported;

    /**
     * @var int
     */
    public $configContentLimit;

    /**
     * @var bool
     */
    public $configSecretEnabled;

    /**
     * @var bool
     */
    public $configSecretSupported;

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
     * @var bool
     */
    public $extendedTypesEnable;

    /**
     * @var string
     */
    public $initLimit;

    /**
     * @var string
     */
    public $juteMaxbuffer;

    /**
     * @var string
     */
    public $jvmFlagsCustom;

    /**
     * @var bool
     */
    public $MCPEnabled;

    /**
     * @var bool
     */
    public $MCPSupported;

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
     * @var nacosRunningEnv
     */
    public $nacosRunningEnv;

    /**
     * @var bool
     */
    public $namingAuthEnabled;

    /**
     * @var bool
     */
    public $namingAuthSupported;

    /**
     * @var bool
     */
    public $namingCreateServiceSupported;

    /**
     * @var bool
     */
    public $openSuperAcl;

    /**
     * @var string
     */
    public $passWord;

    /**
     * @var string
     */
    public $prometheusSdProtocolEnabled;

    /**
     * @var bool
     */
    public $restartFlag;

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
        'authEnabled' => 'AuthEnabled',
        'autopurgePurgeInterval' => 'AutopurgePurgeInterval',
        'autopurgeSnapRetainCount' => 'AutopurgeSnapRetainCount',
        'clusterName' => 'ClusterName',
        'configAuthEnabled' => 'ConfigAuthEnabled',
        'configAuthSupported' => 'ConfigAuthSupported',
        'configContentLimit' => 'ConfigContentLimit',
        'configSecretEnabled' => 'ConfigSecretEnabled',
        'configSecretSupported' => 'ConfigSecretSupported',
        'consoleUIEnabled' => 'ConsoleUIEnabled',
        'enable4lw' => 'Enable4lw',
        'eurekaSupported' => 'EurekaSupported',
        'extendedTypesEnable' => 'ExtendedTypesEnable',
        'initLimit' => 'InitLimit',
        'juteMaxbuffer' => 'JuteMaxbuffer',
        'jvmFlagsCustom' => 'JvmFlagsCustom',
        'MCPEnabled' => 'MCPEnabled',
        'MCPSupported' => 'MCPSupported',
        'maxClientCnxns' => 'MaxClientCnxns',
        'maxSessionTimeout' => 'MaxSessionTimeout',
        'minSessionTimeout' => 'MinSessionTimeout',
        'nacosRunningEnv' => 'NacosRunningEnv',
        'namingAuthEnabled' => 'NamingAuthEnabled',
        'namingAuthSupported' => 'NamingAuthSupported',
        'namingCreateServiceSupported' => 'NamingCreateServiceSupported',
        'openSuperAcl' => 'OpenSuperAcl',
        'passWord' => 'PassWord',
        'prometheusSdProtocolEnabled' => 'PrometheusSdProtocolEnabled',
        'restartFlag' => 'RestartFlag',
        'snapshotCount' => 'SnapshotCount',
        'syncLimit' => 'SyncLimit',
        'TLSEnabled' => 'TLSEnabled',
        'tickTime' => 'TickTime',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (null !== $this->nacosRunningEnv) {
            $this->nacosRunningEnv->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authEnabled) {
            $res['AuthEnabled'] = $this->authEnabled;
        }

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
            $res['NacosRunningEnv'] = null !== $this->nacosRunningEnv ? $this->nacosRunningEnv->toArray($noStream) : $this->nacosRunningEnv;
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

        if (null !== $this->prometheusSdProtocolEnabled) {
            $res['PrometheusSdProtocolEnabled'] = $this->prometheusSdProtocolEnabled;
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
        if (isset($map['AuthEnabled'])) {
            $model->authEnabled = $map['AuthEnabled'];
        }

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

        if (isset($map['PrometheusSdProtocolEnabled'])) {
            $model->prometheusSdProtocolEnabled = $map['PrometheusSdProtocolEnabled'];
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

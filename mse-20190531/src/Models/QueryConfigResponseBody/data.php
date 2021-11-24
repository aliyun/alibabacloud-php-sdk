<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
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
     * @var bool
     */
    public $configSecretEnabled;

    /**
     * @var bool
     */
    public $configSecretSupported;

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
     * @var bool
     */
    public $openSuperAcl;

    /**
     * @var string
     */
    public $passWord;

    /**
     * @var bool
     */
    public $restartFlag;

    /**
     * @var string
     */
    public $syncLimit;

    /**
     * @var string
     */
    public $tickTime;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'autopurgePurgeInterval'   => 'AutopurgePurgeInterval',
        'autopurgeSnapRetainCount' => 'AutopurgeSnapRetainCount',
        'clusterName'              => 'ClusterName',
        'configAuthEnabled'        => 'ConfigAuthEnabled',
        'configAuthSupported'      => 'ConfigAuthSupported',
        'configSecretEnabled'      => 'ConfigSecretEnabled',
        'configSecretSupported'    => 'ConfigSecretSupported',
        'initLimit'                => 'InitLimit',
        'juteMaxbuffer'            => 'JuteMaxbuffer',
        'jvmFlagsCustom'           => 'JvmFlagsCustom',
        'MCPEnabled'               => 'MCPEnabled',
        'MCPSupported'             => 'MCPSupported',
        'maxClientCnxns'           => 'MaxClientCnxns',
        'openSuperAcl'             => 'OpenSuperAcl',
        'passWord'                 => 'PassWord',
        'restartFlag'              => 'RestartFlag',
        'syncLimit'                => 'SyncLimit',
        'tickTime'                 => 'TickTime',
        'userName'                 => 'UserName',
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
        if (null !== $this->configSecretEnabled) {
            $res['ConfigSecretEnabled'] = $this->configSecretEnabled;
        }
        if (null !== $this->configSecretSupported) {
            $res['ConfigSecretSupported'] = $this->configSecretSupported;
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
        if (null !== $this->openSuperAcl) {
            $res['OpenSuperAcl'] = $this->openSuperAcl;
        }
        if (null !== $this->passWord) {
            $res['PassWord'] = $this->passWord;
        }
        if (null !== $this->restartFlag) {
            $res['RestartFlag'] = $this->restartFlag;
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
        if (isset($map['ConfigSecretEnabled'])) {
            $model->configSecretEnabled = $map['ConfigSecretEnabled'];
        }
        if (isset($map['ConfigSecretSupported'])) {
            $model->configSecretSupported = $map['ConfigSecretSupported'];
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
        if (isset($map['OpenSuperAcl'])) {
            $model->openSuperAcl = $map['OpenSuperAcl'];
        }
        if (isset($map['PassWord'])) {
            $model->passWord = $map['PassWord'];
        }
        if (isset($map['RestartFlag'])) {
            $model->restartFlag = $map['RestartFlag'];
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

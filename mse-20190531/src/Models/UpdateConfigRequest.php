<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateConfigRequest extends Model
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
        'clusterId'                => 'ClusterId',
        'configAuthEnabled'        => 'ConfigAuthEnabled',
        'configSecretEnabled'      => 'ConfigSecretEnabled',
        'configType'               => 'ConfigType',
        'initLimit'                => 'InitLimit',
        'instanceId'               => 'InstanceId',
        'juteMaxbuffer'            => 'JuteMaxbuffer',
        'MCPEnabled'               => 'MCPEnabled',
        'maxClientCnxns'           => 'MaxClientCnxns',
        'openSuperAcl'             => 'OpenSuperAcl',
        'passWord'                 => 'PassWord',
        'requestPars'              => 'RequestPars',
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
        if (null !== $this->openSuperAcl) {
            $res['OpenSuperAcl'] = $this->openSuperAcl;
        }
        if (null !== $this->passWord) {
            $res['PassWord'] = $this->passWord;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
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
     * @return UpdateConfigRequest
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
        if (isset($map['OpenSuperAcl'])) {
            $model->openSuperAcl = $map['OpenSuperAcl'];
        }
        if (isset($map['PassWord'])) {
            $model->passWord = $map['PassWord'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
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

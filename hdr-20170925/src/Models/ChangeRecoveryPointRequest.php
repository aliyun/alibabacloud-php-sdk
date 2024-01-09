<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class ChangeRecoveryPointRequest extends Model
{
    /**
     * @example eip-2zelae2qye2ztjfj82f9z
     *
     * @var string
     */
    public $eipAddressId;

    /**
     * @example 4
     *
     * @var int
     */
    public $recoveryCpu;

    /**
     * @example PL1
     *
     * @var string
     */
    public $recoveryEssdPerformanceLevel;

    /**
     * @example HDR_Recovery-sr-000c9550g8gycc8oi4fb-cpr
     *
     * @var string
     */
    public $recoveryInstanceName;

    /**
     * @example ecs.r6.3xlarge
     *
     * @var string
     */
    public $recoveryInstanceType;

    /**
     * @example 192.168.2.2
     *
     * @var string
     */
    public $recoveryIpAddress;

    /**
     * @example 4294967296
     *
     * @var int
     */
    public $recoveryMemory;

    /**
     * @example vsw-uf61v3bg6r790ir22jqv4
     *
     * @var string
     */
    public $recoveryNetwork;

    /**
     * @example rp-0001625ljmig7ahibe0y
     *
     * @var string
     */
    public $recoveryPointId;

    /**
     * @example 1637002799
     *
     * @var int
     */
    public $recoveryPointTime;

    /**
     * @example echo \"127.0.0.1 kubernetes.docker.internal\" >> /etc/hosts
     *
     * @var string
     */
    public $recoveryPostScriptContent;

    /**
     * @example SHELL
     *
     * @var string
     */
    public $recoveryPostScriptType;

    /**
     * @example false
     *
     * @var bool
     */
    public $recoveryReserveIp;

    /**
     * @example true
     *
     * @var bool
     */
    public $recoveryUseDhcp;

    /**
     * @example false
     *
     * @var bool
     */
    public $recoveryUseEssd;

    /**
     * @example false
     *
     * @var bool
     */
    public $recoveryUseSsd;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example sr-000bak4sdet6gv8q0c2j
     *
     * @var string
     */
    public $serverId;
    protected $_name = [
        'eipAddressId'                 => 'EipAddressId',
        'recoveryCpu'                  => 'RecoveryCpu',
        'recoveryEssdPerformanceLevel' => 'RecoveryEssdPerformanceLevel',
        'recoveryInstanceName'         => 'RecoveryInstanceName',
        'recoveryInstanceType'         => 'RecoveryInstanceType',
        'recoveryIpAddress'            => 'RecoveryIpAddress',
        'recoveryMemory'               => 'RecoveryMemory',
        'recoveryNetwork'              => 'RecoveryNetwork',
        'recoveryPointId'              => 'RecoveryPointId',
        'recoveryPointTime'            => 'RecoveryPointTime',
        'recoveryPostScriptContent'    => 'RecoveryPostScriptContent',
        'recoveryPostScriptType'       => 'RecoveryPostScriptType',
        'recoveryReserveIp'            => 'RecoveryReserveIp',
        'recoveryUseDhcp'              => 'RecoveryUseDhcp',
        'recoveryUseEssd'              => 'RecoveryUseEssd',
        'recoveryUseSsd'               => 'RecoveryUseSsd',
        'securityToken'                => 'SecurityToken',
        'serverId'                     => 'ServerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipAddressId) {
            $res['EipAddressId'] = $this->eipAddressId;
        }
        if (null !== $this->recoveryCpu) {
            $res['RecoveryCpu'] = $this->recoveryCpu;
        }
        if (null !== $this->recoveryEssdPerformanceLevel) {
            $res['RecoveryEssdPerformanceLevel'] = $this->recoveryEssdPerformanceLevel;
        }
        if (null !== $this->recoveryInstanceName) {
            $res['RecoveryInstanceName'] = $this->recoveryInstanceName;
        }
        if (null !== $this->recoveryInstanceType) {
            $res['RecoveryInstanceType'] = $this->recoveryInstanceType;
        }
        if (null !== $this->recoveryIpAddress) {
            $res['RecoveryIpAddress'] = $this->recoveryIpAddress;
        }
        if (null !== $this->recoveryMemory) {
            $res['RecoveryMemory'] = $this->recoveryMemory;
        }
        if (null !== $this->recoveryNetwork) {
            $res['RecoveryNetwork'] = $this->recoveryNetwork;
        }
        if (null !== $this->recoveryPointId) {
            $res['RecoveryPointId'] = $this->recoveryPointId;
        }
        if (null !== $this->recoveryPointTime) {
            $res['RecoveryPointTime'] = $this->recoveryPointTime;
        }
        if (null !== $this->recoveryPostScriptContent) {
            $res['RecoveryPostScriptContent'] = $this->recoveryPostScriptContent;
        }
        if (null !== $this->recoveryPostScriptType) {
            $res['RecoveryPostScriptType'] = $this->recoveryPostScriptType;
        }
        if (null !== $this->recoveryReserveIp) {
            $res['RecoveryReserveIp'] = $this->recoveryReserveIp;
        }
        if (null !== $this->recoveryUseDhcp) {
            $res['RecoveryUseDhcp'] = $this->recoveryUseDhcp;
        }
        if (null !== $this->recoveryUseEssd) {
            $res['RecoveryUseEssd'] = $this->recoveryUseEssd;
        }
        if (null !== $this->recoveryUseSsd) {
            $res['RecoveryUseSsd'] = $this->recoveryUseSsd;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeRecoveryPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipAddressId'])) {
            $model->eipAddressId = $map['EipAddressId'];
        }
        if (isset($map['RecoveryCpu'])) {
            $model->recoveryCpu = $map['RecoveryCpu'];
        }
        if (isset($map['RecoveryEssdPerformanceLevel'])) {
            $model->recoveryEssdPerformanceLevel = $map['RecoveryEssdPerformanceLevel'];
        }
        if (isset($map['RecoveryInstanceName'])) {
            $model->recoveryInstanceName = $map['RecoveryInstanceName'];
        }
        if (isset($map['RecoveryInstanceType'])) {
            $model->recoveryInstanceType = $map['RecoveryInstanceType'];
        }
        if (isset($map['RecoveryIpAddress'])) {
            $model->recoveryIpAddress = $map['RecoveryIpAddress'];
        }
        if (isset($map['RecoveryMemory'])) {
            $model->recoveryMemory = $map['RecoveryMemory'];
        }
        if (isset($map['RecoveryNetwork'])) {
            $model->recoveryNetwork = $map['RecoveryNetwork'];
        }
        if (isset($map['RecoveryPointId'])) {
            $model->recoveryPointId = $map['RecoveryPointId'];
        }
        if (isset($map['RecoveryPointTime'])) {
            $model->recoveryPointTime = $map['RecoveryPointTime'];
        }
        if (isset($map['RecoveryPostScriptContent'])) {
            $model->recoveryPostScriptContent = $map['RecoveryPostScriptContent'];
        }
        if (isset($map['RecoveryPostScriptType'])) {
            $model->recoveryPostScriptType = $map['RecoveryPostScriptType'];
        }
        if (isset($map['RecoveryReserveIp'])) {
            $model->recoveryReserveIp = $map['RecoveryReserveIp'];
        }
        if (isset($map['RecoveryUseDhcp'])) {
            $model->recoveryUseDhcp = $map['RecoveryUseDhcp'];
        }
        if (isset($map['RecoveryUseEssd'])) {
            $model->recoveryUseEssd = $map['RecoveryUseEssd'];
        }
        if (isset($map['RecoveryUseSsd'])) {
            $model->recoveryUseSsd = $map['RecoveryUseSsd'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }

        return $model;
    }
}

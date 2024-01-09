<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class FailbackRequest extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $recoveryCpu;

    /**
     * @example is-0007rvzart0rz2byr2x0
     *
     * @var string
     */
    public $recoveryInfrastructureId;

    /**
     * @example HDR_Recovery-sr-0007rvzart0rz2bv9fzm
     *
     * @var string
     */
    public $recoveryInstanceName;

    /**
     * @example ecs.c5.2xlarge
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
     * @example vsw-bp1xmea0mkjtxqoubk7q8
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
     * @example "echo \"127.0.0.1 kubernetes.docker.internal\" >> /etc/hosts"
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
     * @example true
     *
     * @var bool
     */
    public $recoveryReserveIp;

    /**
     * @example false
     *
     * @var bool
     */
    public $recoveryUseDhcp;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example sr-000bzkmmlwghj95tnx15
     *
     * @var string
     */
    public $serverId;
    protected $_name = [
        'recoveryCpu'               => 'RecoveryCpu',
        'recoveryInfrastructureId'  => 'RecoveryInfrastructureId',
        'recoveryInstanceName'      => 'RecoveryInstanceName',
        'recoveryInstanceType'      => 'RecoveryInstanceType',
        'recoveryIpAddress'         => 'RecoveryIpAddress',
        'recoveryMemory'            => 'RecoveryMemory',
        'recoveryNetwork'           => 'RecoveryNetwork',
        'recoveryPointId'           => 'RecoveryPointId',
        'recoveryPostScriptContent' => 'RecoveryPostScriptContent',
        'recoveryPostScriptType'    => 'RecoveryPostScriptType',
        'recoveryReserveIp'         => 'RecoveryReserveIp',
        'recoveryUseDhcp'           => 'RecoveryUseDhcp',
        'securityToken'             => 'SecurityToken',
        'serverId'                  => 'ServerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recoveryCpu) {
            $res['RecoveryCpu'] = $this->recoveryCpu;
        }
        if (null !== $this->recoveryInfrastructureId) {
            $res['RecoveryInfrastructureId'] = $this->recoveryInfrastructureId;
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
     * @return FailbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecoveryCpu'])) {
            $model->recoveryCpu = $map['RecoveryCpu'];
        }
        if (isset($map['RecoveryInfrastructureId'])) {
            $model->recoveryInfrastructureId = $map['RecoveryInfrastructureId'];
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }

        return $model;
    }
}

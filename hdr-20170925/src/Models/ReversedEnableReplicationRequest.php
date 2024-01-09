<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class ReversedEnableReplicationRequest extends Model
{
    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $appConsistentPointPolicy;

    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $crashConsistentPointPolicy;

    /**
     * @example vsw-bp1xmea0mkjtxqoubk7q8
     *
     * @var string
     */
    public $recoveryNetwork;

    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $replicationComputeResource;

    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $replicationDatastore;

    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $replicationDns;

    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $replicationGateway;

    /**
     * @example is-000bzkmmlwgibbduuoff
     *
     * @var string
     */
    public $replicationInfrastructureId;

    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $replicationIpAddress;

    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $replicationLocation;

    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $replicationNetMask;

    /**
     * @example vsw-bp1ii4x07tey6sisg4blp
     *
     * @var string
     */
    public $replicationNetwork;

    /**
     * @description -
     *
     * @example -
     *
     * @var bool
     */
    public $replicationUseDhcp;

    /**
     * @example false
     *
     * @var bool
     */
    public $replicationUseOriginalInstance;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example sr-000cm9ax8sh2381wa7kv
     *
     * @var string
     */
    public $serverId;

    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $shadowInstanceType;
    protected $_name = [
        'appConsistentPointPolicy'       => 'AppConsistentPointPolicy',
        'crashConsistentPointPolicy'     => 'CrashConsistentPointPolicy',
        'recoveryNetwork'                => 'RecoveryNetwork',
        'replicationComputeResource'     => 'ReplicationComputeResource',
        'replicationDatastore'           => 'ReplicationDatastore',
        'replicationDns'                 => 'ReplicationDns',
        'replicationGateway'             => 'ReplicationGateway',
        'replicationInfrastructureId'    => 'ReplicationInfrastructureId',
        'replicationIpAddress'           => 'ReplicationIpAddress',
        'replicationLocation'            => 'ReplicationLocation',
        'replicationNetMask'             => 'ReplicationNetMask',
        'replicationNetwork'             => 'ReplicationNetwork',
        'replicationUseDhcp'             => 'ReplicationUseDhcp',
        'replicationUseOriginalInstance' => 'ReplicationUseOriginalInstance',
        'securityToken'                  => 'SecurityToken',
        'serverId'                       => 'ServerId',
        'shadowInstanceType'             => 'ShadowInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appConsistentPointPolicy) {
            $res['AppConsistentPointPolicy'] = $this->appConsistentPointPolicy;
        }
        if (null !== $this->crashConsistentPointPolicy) {
            $res['CrashConsistentPointPolicy'] = $this->crashConsistentPointPolicy;
        }
        if (null !== $this->recoveryNetwork) {
            $res['RecoveryNetwork'] = $this->recoveryNetwork;
        }
        if (null !== $this->replicationComputeResource) {
            $res['ReplicationComputeResource'] = $this->replicationComputeResource;
        }
        if (null !== $this->replicationDatastore) {
            $res['ReplicationDatastore'] = $this->replicationDatastore;
        }
        if (null !== $this->replicationDns) {
            $res['ReplicationDns'] = $this->replicationDns;
        }
        if (null !== $this->replicationGateway) {
            $res['ReplicationGateway'] = $this->replicationGateway;
        }
        if (null !== $this->replicationInfrastructureId) {
            $res['ReplicationInfrastructureId'] = $this->replicationInfrastructureId;
        }
        if (null !== $this->replicationIpAddress) {
            $res['ReplicationIpAddress'] = $this->replicationIpAddress;
        }
        if (null !== $this->replicationLocation) {
            $res['ReplicationLocation'] = $this->replicationLocation;
        }
        if (null !== $this->replicationNetMask) {
            $res['ReplicationNetMask'] = $this->replicationNetMask;
        }
        if (null !== $this->replicationNetwork) {
            $res['ReplicationNetwork'] = $this->replicationNetwork;
        }
        if (null !== $this->replicationUseDhcp) {
            $res['ReplicationUseDhcp'] = $this->replicationUseDhcp;
        }
        if (null !== $this->replicationUseOriginalInstance) {
            $res['ReplicationUseOriginalInstance'] = $this->replicationUseOriginalInstance;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->shadowInstanceType) {
            $res['ShadowInstanceType'] = $this->shadowInstanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReversedEnableReplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppConsistentPointPolicy'])) {
            $model->appConsistentPointPolicy = $map['AppConsistentPointPolicy'];
        }
        if (isset($map['CrashConsistentPointPolicy'])) {
            $model->crashConsistentPointPolicy = $map['CrashConsistentPointPolicy'];
        }
        if (isset($map['RecoveryNetwork'])) {
            $model->recoveryNetwork = $map['RecoveryNetwork'];
        }
        if (isset($map['ReplicationComputeResource'])) {
            $model->replicationComputeResource = $map['ReplicationComputeResource'];
        }
        if (isset($map['ReplicationDatastore'])) {
            $model->replicationDatastore = $map['ReplicationDatastore'];
        }
        if (isset($map['ReplicationDns'])) {
            $model->replicationDns = $map['ReplicationDns'];
        }
        if (isset($map['ReplicationGateway'])) {
            $model->replicationGateway = $map['ReplicationGateway'];
        }
        if (isset($map['ReplicationInfrastructureId'])) {
            $model->replicationInfrastructureId = $map['ReplicationInfrastructureId'];
        }
        if (isset($map['ReplicationIpAddress'])) {
            $model->replicationIpAddress = $map['ReplicationIpAddress'];
        }
        if (isset($map['ReplicationLocation'])) {
            $model->replicationLocation = $map['ReplicationLocation'];
        }
        if (isset($map['ReplicationNetMask'])) {
            $model->replicationNetMask = $map['ReplicationNetMask'];
        }
        if (isset($map['ReplicationNetwork'])) {
            $model->replicationNetwork = $map['ReplicationNetwork'];
        }
        if (isset($map['ReplicationUseDhcp'])) {
            $model->replicationUseDhcp = $map['ReplicationUseDhcp'];
        }
        if (isset($map['ReplicationUseOriginalInstance'])) {
            $model->replicationUseOriginalInstance = $map['ReplicationUseOriginalInstance'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ShadowInstanceType'])) {
            $model->shadowInstanceType = $map['ShadowInstanceType'];
        }

        return $model;
    }
}

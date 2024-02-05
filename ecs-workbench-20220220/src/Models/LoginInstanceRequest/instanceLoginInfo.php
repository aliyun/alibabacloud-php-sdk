<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest;

use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\instanceLoginInfo\options;
use AlibabaCloud\Tea\Model;

class instanceLoginInfo extends Model
{
    /**
     * @example password/certificate
     *
     * @var string
     */
    public $authenticationType;

    /**
     * @example ----begin----
     * ----end----
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $credentialToken;

    /**
     * @var string
     */
    public $dockerContainerName;

    /**
     * @var string
     */
    public $dockerExec;

    /**
     * @example 123
     *
     * @var int
     */
    public $durationSeconds;

    /**
     * @example 2022-11-30 00:00:00
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $host;

    /**
     * @example i-123
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ecs/eci/ack
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $loginByInstanceCredential;

    /**
     * @var bool
     */
    public $loginByInstanceShortcut;

    /**
     * @example vpc/classic
     *
     * @var string
     */
    public $networkAccessMode;

    /**
     * @var options
     */
    public $options;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $passPhrase;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $password;

    /**
     * @example 22/3389
     *
     * @var int
     */
    public $port;

    /**
     * @example ssh/rdp/ack
     *
     * @var string
     */
    public $protocol;

    /**
     * @example cn-hangzhou/cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $shortcutToken;

    /**
     * @example root/Administrator
     *
     * @var string
     */
    public $username;

    /**
     * @example vpc-abc
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'authenticationType'        => 'AuthenticationType',
        'certificate'               => 'Certificate',
        'credentialToken'           => 'CredentialToken',
        'dockerContainerName'       => 'DockerContainerName',
        'dockerExec'                => 'DockerExec',
        'durationSeconds'           => 'DurationSeconds',
        'expireTime'                => 'ExpireTime',
        'host'                      => 'Host',
        'instanceId'                => 'InstanceId',
        'instanceType'              => 'InstanceType',
        'loginByInstanceCredential' => 'LoginByInstanceCredential',
        'loginByInstanceShortcut'   => 'LoginByInstanceShortcut',
        'networkAccessMode'         => 'NetworkAccessMode',
        'options'                   => 'Options',
        'passPhrase'                => 'PassPhrase',
        'password'                  => 'Password',
        'port'                      => 'Port',
        'protocol'                  => 'Protocol',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'shortcutToken'             => 'ShortcutToken',
        'username'                  => 'Username',
        'vpcId'                     => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticationType) {
            $res['AuthenticationType'] = $this->authenticationType;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->credentialToken) {
            $res['CredentialToken'] = $this->credentialToken;
        }
        if (null !== $this->dockerContainerName) {
            $res['DockerContainerName'] = $this->dockerContainerName;
        }
        if (null !== $this->dockerExec) {
            $res['DockerExec'] = $this->dockerExec;
        }
        if (null !== $this->durationSeconds) {
            $res['DurationSeconds'] = $this->durationSeconds;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->loginByInstanceCredential) {
            $res['LoginByInstanceCredential'] = $this->loginByInstanceCredential;
        }
        if (null !== $this->loginByInstanceShortcut) {
            $res['LoginByInstanceShortcut'] = $this->loginByInstanceShortcut;
        }
        if (null !== $this->networkAccessMode) {
            $res['NetworkAccessMode'] = $this->networkAccessMode;
        }
        if (null !== $this->options) {
            $res['Options'] = null !== $this->options ? $this->options->toMap() : null;
        }
        if (null !== $this->passPhrase) {
            $res['PassPhrase'] = $this->passPhrase;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->shortcutToken) {
            $res['ShortcutToken'] = $this->shortcutToken;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceLoginInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticationType'])) {
            $model->authenticationType = $map['AuthenticationType'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['CredentialToken'])) {
            $model->credentialToken = $map['CredentialToken'];
        }
        if (isset($map['DockerContainerName'])) {
            $model->dockerContainerName = $map['DockerContainerName'];
        }
        if (isset($map['DockerExec'])) {
            $model->dockerExec = $map['DockerExec'];
        }
        if (isset($map['DurationSeconds'])) {
            $model->durationSeconds = $map['DurationSeconds'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LoginByInstanceCredential'])) {
            $model->loginByInstanceCredential = $map['LoginByInstanceCredential'];
        }
        if (isset($map['LoginByInstanceShortcut'])) {
            $model->loginByInstanceShortcut = $map['LoginByInstanceShortcut'];
        }
        if (isset($map['NetworkAccessMode'])) {
            $model->networkAccessMode = $map['NetworkAccessMode'];
        }
        if (isset($map['Options'])) {
            $model->options = options::fromMap($map['Options']);
        }
        if (isset($map['PassPhrase'])) {
            $model->passPhrase = $map['PassPhrase'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShortcutToken'])) {
            $model->shortcutToken = $map['ShortcutToken'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\instanceLoginInfo\encryptionOptions;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest\instanceLoginInfo\options;

class instanceLoginInfo extends Model
{
    /**
     * @var string
     */
    public $authenticationType;

    /**
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
     * @var int
     */
    public $durationSeconds;

    /**
     * @var encryptionOptions
     */
    public $encryptionOptions;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $instanceId;

    /**
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
     * @var string
     */
    public $networkAccessMode;

    /**
     * @var options
     */
    public $options;

    /**
     * @var string
     */
    public $passPhrase;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
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
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'authenticationType' => 'AuthenticationType',
        'certificate' => 'Certificate',
        'credentialToken' => 'CredentialToken',
        'dockerContainerName' => 'DockerContainerName',
        'dockerExec' => 'DockerExec',
        'durationSeconds' => 'DurationSeconds',
        'encryptionOptions' => 'EncryptionOptions',
        'expireTime' => 'ExpireTime',
        'host' => 'Host',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'loginByInstanceCredential' => 'LoginByInstanceCredential',
        'loginByInstanceShortcut' => 'LoginByInstanceShortcut',
        'networkAccessMode' => 'NetworkAccessMode',
        'options' => 'Options',
        'passPhrase' => 'PassPhrase',
        'password' => 'Password',
        'port' => 'Port',
        'protocol' => 'Protocol',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'shortcutToken' => 'ShortcutToken',
        'username' => 'Username',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->encryptionOptions) {
            $this->encryptionOptions->validate();
        }
        if (null !== $this->options) {
            $this->options->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->encryptionOptions) {
            $res['EncryptionOptions'] = null !== $this->encryptionOptions ? $this->encryptionOptions->toArray($noStream) : $this->encryptionOptions;
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
            $res['Options'] = null !== $this->options ? $this->options->toArray($noStream) : $this->options;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['EncryptionOptions'])) {
            $model->encryptionOptions = encryptionOptions::fromMap($map['EncryptionOptions']);
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

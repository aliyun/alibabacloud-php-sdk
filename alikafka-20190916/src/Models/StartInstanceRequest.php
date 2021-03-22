<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class StartInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $deployModule;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var bool
     */
    public $isEipInner;

    /**
     * @var bool
     */
    public $isSetUserAndPassword;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $securityGroup;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $KMSKeyId;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'regionId'             => 'RegionId',
        'vpcId'                => 'VpcId',
        'vSwitchId'            => 'VSwitchId',
        'deployModule'         => 'DeployModule',
        'zoneId'               => 'ZoneId',
        'isEipInner'           => 'IsEipInner',
        'isSetUserAndPassword' => 'IsSetUserAndPassword',
        'username'             => 'Username',
        'password'             => 'Password',
        'name'                 => 'Name',
        'securityGroup'        => 'SecurityGroup',
        'serviceVersion'       => 'ServiceVersion',
        'config'               => 'Config',
        'KMSKeyId'             => 'KMSKeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->deployModule) {
            $res['DeployModule'] = $this->deployModule;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->isEipInner) {
            $res['IsEipInner'] = $this->isEipInner;
        }
        if (null !== $this->isSetUserAndPassword) {
            $res['IsSetUserAndPassword'] = $this->isSetUserAndPassword;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['DeployModule'])) {
            $model->deployModule = $map['DeployModule'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['IsEipInner'])) {
            $model->isEipInner = $map['IsEipInner'];
        }
        if (isset($map['IsSetUserAndPassword'])) {
            $model->isSetUserAndPassword = $map['IsSetUserAndPassword'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class StartInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $deployModule;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isEipInner;

    /**
     * @var bool
     */
    public $isForceSelectedZones;

    /**
     * @var bool
     */
    public $isSetUserAndPassword;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $notifier;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityGroup;

    /**
     * @var string
     */
    public $selectedZones;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $userPhoneNum;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'config'               => 'Config',
        'deployModule'         => 'DeployModule',
        'instanceId'           => 'InstanceId',
        'isEipInner'           => 'IsEipInner',
        'isForceSelectedZones' => 'IsForceSelectedZones',
        'isSetUserAndPassword' => 'IsSetUserAndPassword',
        'KMSKeyId'             => 'KMSKeyId',
        'name'                 => 'Name',
        'notifier'             => 'Notifier',
        'password'             => 'Password',
        'regionId'             => 'RegionId',
        'securityGroup'        => 'SecurityGroup',
        'selectedZones'        => 'SelectedZones',
        'serviceVersion'       => 'ServiceVersion',
        'userPhoneNum'         => 'UserPhoneNum',
        'username'             => 'Username',
        'vSwitchId'            => 'VSwitchId',
        'vpcId'                => 'VpcId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->deployModule) {
            $res['DeployModule'] = $this->deployModule;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isEipInner) {
            $res['IsEipInner'] = $this->isEipInner;
        }
        if (null !== $this->isForceSelectedZones) {
            $res['IsForceSelectedZones'] = $this->isForceSelectedZones;
        }
        if (null !== $this->isSetUserAndPassword) {
            $res['IsSetUserAndPassword'] = $this->isSetUserAndPassword;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notifier) {
            $res['Notifier'] = $this->notifier;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }
        if (null !== $this->selectedZones) {
            $res['SelectedZones'] = $this->selectedZones;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->userPhoneNum) {
            $res['UserPhoneNum'] = $this->userPhoneNum;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['DeployModule'])) {
            $model->deployModule = $map['DeployModule'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsEipInner'])) {
            $model->isEipInner = $map['IsEipInner'];
        }
        if (isset($map['IsForceSelectedZones'])) {
            $model->isForceSelectedZones = $map['IsForceSelectedZones'];
        }
        if (isset($map['IsSetUserAndPassword'])) {
            $model->isSetUserAndPassword = $map['IsSetUserAndPassword'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Notifier'])) {
            $model->notifier = $map['Notifier'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }
        if (isset($map['SelectedZones'])) {
            $model->selectedZones = $map['SelectedZones'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['UserPhoneNum'])) {
            $model->userPhoneNum = $map['UserPhoneNum'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

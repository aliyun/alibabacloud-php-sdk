<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Dara\Model;

class StartInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var bool
     */
    public $crossZone;

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
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'config' => 'Config',
        'crossZone' => 'CrossZone',
        'deployModule' => 'DeployModule',
        'instanceId' => 'InstanceId',
        'isEipInner' => 'IsEipInner',
        'isForceSelectedZones' => 'IsForceSelectedZones',
        'isSetUserAndPassword' => 'IsSetUserAndPassword',
        'KMSKeyId' => 'KMSKeyId',
        'name' => 'Name',
        'notifier' => 'Notifier',
        'password' => 'Password',
        'regionId' => 'RegionId',
        'securityGroup' => 'SecurityGroup',
        'selectedZones' => 'SelectedZones',
        'serviceVersion' => 'ServiceVersion',
        'userPhoneNum' => 'UserPhoneNum',
        'username' => 'Username',
        'vSwitchId' => 'VSwitchId',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->crossZone) {
            $res['CrossZone'] = $this->crossZone;
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

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['CrossZone'])) {
            $model->crossZone = $map['CrossZone'];
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

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1++] = $item1;
                }
            }
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

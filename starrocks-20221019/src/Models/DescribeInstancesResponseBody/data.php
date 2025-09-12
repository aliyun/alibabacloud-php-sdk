<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesResponseBody\data\tags;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesResponseBody\data\vSwitches;

class data extends Model
{
    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $architecture;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var bool
     */
    public $enableAutoMinorVersionUpgrade;

    /**
     * @var bool
     */
    public $enableSSL;

    /**
     * @var bool
     */
    public $enabledAuditLoader;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var bool
     */
    public $isolateLeader;

    /**
     * @var string
     */
    public $kmsKeyId;

    /**
     * @var string
     */
    public $maintainablePeriod;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var string
     */
    public $monitorType;

    /**
     * @var string
     */
    public $ossLocation;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $payType;

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
    public $runMode;

    /**
     * @var int
     */
    public $runningTime;

    /**
     * @var bool
     */
    public $securityGroupManaged;

    /**
     * @var string
     */
    public $sgId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var vSwitches[]
     */
    public $vSwitches;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'aclId' => 'AclId',
        'architecture' => 'Architecture',
        'beginTime' => 'BeginTime',
        'enableAutoMinorVersionUpgrade' => 'EnableAutoMinorVersionUpgrade',
        'enableSSL' => 'EnableSSL',
        'enabledAuditLoader' => 'EnabledAuditLoader',
        'encrypted' => 'Encrypted',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceStatus' => 'InstanceStatus',
        'isolateLeader' => 'IsolateLeader',
        'kmsKeyId' => 'KmsKeyId',
        'maintainablePeriod' => 'MaintainablePeriod',
        'minorVersion' => 'MinorVersion',
        'monitorType' => 'MonitorType',
        'ossLocation' => 'OssLocation',
        'packageType' => 'PackageType',
        'payType' => 'PayType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'runMode' => 'RunMode',
        'runningTime' => 'RunningTime',
        'securityGroupManaged' => 'SecurityGroupManaged',
        'sgId' => 'SgId',
        'tags' => 'Tags',
        'vSwitches' => 'VSwitches',
        'version' => 'Version',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->vSwitches)) {
            Model::validateArray($this->vSwitches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }

        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->enableAutoMinorVersionUpgrade) {
            $res['EnableAutoMinorVersionUpgrade'] = $this->enableAutoMinorVersionUpgrade;
        }

        if (null !== $this->enableSSL) {
            $res['EnableSSL'] = $this->enableSSL;
        }

        if (null !== $this->enabledAuditLoader) {
            $res['EnabledAuditLoader'] = $this->enabledAuditLoader;
        }

        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->isolateLeader) {
            $res['IsolateLeader'] = $this->isolateLeader;
        }

        if (null !== $this->kmsKeyId) {
            $res['KmsKeyId'] = $this->kmsKeyId;
        }

        if (null !== $this->maintainablePeriod) {
            $res['MaintainablePeriod'] = $this->maintainablePeriod;
        }

        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }

        if (null !== $this->monitorType) {
            $res['MonitorType'] = $this->monitorType;
        }

        if (null !== $this->ossLocation) {
            $res['OssLocation'] = $this->ossLocation;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }

        if (null !== $this->securityGroupManaged) {
            $res['SecurityGroupManaged'] = $this->securityGroupManaged;
        }

        if (null !== $this->sgId) {
            $res['SgId'] = $this->sgId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vSwitches) {
            if (\is_array($this->vSwitches)) {
                $res['VSwitches'] = [];
                $n1 = 0;
                foreach ($this->vSwitches as $item1) {
                    $res['VSwitches'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }

        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['EnableAutoMinorVersionUpgrade'])) {
            $model->enableAutoMinorVersionUpgrade = $map['EnableAutoMinorVersionUpgrade'];
        }

        if (isset($map['EnableSSL'])) {
            $model->enableSSL = $map['EnableSSL'];
        }

        if (isset($map['EnabledAuditLoader'])) {
            $model->enabledAuditLoader = $map['EnabledAuditLoader'];
        }

        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['IsolateLeader'])) {
            $model->isolateLeader = $map['IsolateLeader'];
        }

        if (isset($map['KmsKeyId'])) {
            $model->kmsKeyId = $map['KmsKeyId'];
        }

        if (isset($map['MaintainablePeriod'])) {
            $model->maintainablePeriod = $map['MaintainablePeriod'];
        }

        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }

        if (isset($map['MonitorType'])) {
            $model->monitorType = $map['MonitorType'];
        }

        if (isset($map['OssLocation'])) {
            $model->ossLocation = $map['OssLocation'];
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }

        if (isset($map['SecurityGroupManaged'])) {
            $model->securityGroupManaged = $map['SecurityGroupManaged'];
        }

        if (isset($map['SgId'])) {
            $model->sgId = $map['SgId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $n1 = 0;
                foreach ($map['VSwitches'] as $item1) {
                    $model->vSwitches[$n1] = vSwitches::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

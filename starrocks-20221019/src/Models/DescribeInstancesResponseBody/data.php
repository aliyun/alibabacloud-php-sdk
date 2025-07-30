<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesResponseBody;

use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesResponseBody\data\tags;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesResponseBody\data\vSwitches;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example acl-bp1xc6b9vs013jjtp****
     *
     * @var string
     */
    public $aclId;

    /**
     * @example onECS
     *
     * @var string
     */
    public $architecture;

    /**
     * @example 1733292921000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableAutoMinorVersionUpgrade;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableSSL;

    /**
     * @example true
     *
     * @var bool
     */
    public $enabledAuditLoader;

    /**
     * @example true
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @example 4889001600000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example c-d4be777ff5e8cXXX
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example sr_test_1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example running
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example true
     *
     * @var bool
     */
    public $isolateLeader;

    /**
     * @example rewqfds****
     *
     * @var string
     */
    public $kmsKeyId;

    /**
     * @example 00:00-06:00
     *
     * @var string
     */
    public $maintainablePeriod;

    /**
     * @example 3.2.11-1.79-1.6.5
     *
     * @var string
     */
    public $minorVersion;

    /**
     * @example cms
     *
     * @var string
     */
    public $monitorType;

    /**
     * @example oss://sr-c-****
     *
     * @var string
     */
    public $ossLocation;

    /**
     * @example official
     *
     * @var string
     */
    public $packageType;

    /**
     * @example postPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmytyuofb****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example shared_nothing
     *
     * @var string
     */
    public $runMode;

    /**
     * @example 3645445
     *
     * @var int
     */
    public $runningTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $securityGroupManaged;

    /**
     * @example sg-8vbaz2etr66a62b9****
     *
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
     * @example 3.2
     *
     * @var string
     */
    public $version;

    /**
     * @description VPC ID。
     *
     * @example vpc-bp1rbvag1cafkj4prwXXX
     *
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

    public function validate() {}

    public function toMap()
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = [];
            if (null !== $this->vSwitches && \is_array($this->vSwitches)) {
                $n = 0;
                foreach ($this->vSwitches as $item) {
                    $res['VSwitches'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $n = 0;
                foreach ($map['VSwitches'] as $item) {
                    $model->vSwitches[$n++] = null !== $item ? vSwitches::fromMap($item) : $item;
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

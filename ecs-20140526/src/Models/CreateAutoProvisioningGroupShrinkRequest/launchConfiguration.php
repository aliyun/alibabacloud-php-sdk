<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchConfiguration\arn;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchConfiguration\dataDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchConfiguration\imageOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchConfiguration\schedulerOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchConfiguration\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchConfiguration\tag;
use AlibabaCloud\Tea\Model;

class launchConfiguration extends Model
{
    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @var arn[]
     */
    public $arn;

    /**
     * @description The automatic release time of the pay-as-you-go instance. Specify the time in the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in Coordinated Universal Time (UTC).
     *
     *   If the value of `ss` is not `00`, the start time is automatically rounded down to the nearest minute based on the value of `mm`.
     *   The specified time must be at least 30 minutes later than the current time.
     *   The specified time can be at most three years later than the current time.
     *
     * @example 2018-01-01T12:05:00Z
     *
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @description The performance mode of the burstable instance. Valid values:
     *
     *   Standard: the standard mode. For more information, see the "Standard mode" section in the [Overview of burstable instances](https://help.aliyun.com/document_detail/59977.html) topic.
     *   Unlimited: the unlimited mode. For more information, see the "Unlimited mode" section in the [Overview of burstable instances](https://help.aliyun.com/document_detail/59977.html) topic.
     *
     * This parameter is empty by default.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example Standard
     *
     * @var string
     */
    public $creditSpecification;

    /**
     * @description The cloud disks in the extended configurations of the launch template.
     *
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @description The ID of the deployment set.
     *
     * @example ds-bp1frxuzdg87zh4p****
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The instance hostname. Take note of the following items:
     *
     *   The hostname cannot start or end with a period (.) or hyphen (-). The hostname cannot contain consecutive periods (.) or hyphens (-).
     *   For Windows instances, the hostname must be 2 to 15 characters in length and cannot contain periods (.) or contain only digits. It can contain letters, digits, and hyphens (-).
     *   For instances that run other operating systems such as Linux, the hostname must be 2 to 64 characters in length. You can use periods (.) to separate a hostname into multiple segments. Each segment can contain letters, digits, and hyphens (-).
     *   You cannot specify both `LaunchConfiguration.HostName` and `LaunchConfiguration.HostNames.N`. Otherwise, an error is returned.
     *   When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example k8s-node-[1,4]-ecshost
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The hostname of instance N. You can use this parameter to specify different hostnames for multiple instances. Take note of the following items:
     *
     * - This parameter takes effect only when `AutoProvisioningGroupType` is set to instant.
     * - The value of N indicates the number of instances. Valid values of N: 1 to 1000. The value of N must be the same as the TotalTargetCapacity value.
     * - The hostname cannot start or end with a period (.) or hyphen (-). The hostname cannot contain consecutive periods (.) or hyphens (-).
     * - For Windows instances, the hostname must be 2 to 15 characters in length and cannot contain periods (.) or contain only digits. The hostname can contain letters, digits, and hyphens (-).
     * - For instances that run other operating systems such as Linux, the hostname must be 2 to 64 characters in length. You can use periods (.) to separate the hostname into multiple segments. Each segment can contain letters, digits, and hyphens (-).
     * - You cannot specify both `LaunchConfiguration.HostName` and `LaunchConfiguration.HostNames.N`. Otherwise, an error is returned.
     * - When both LaunchTemplateId and LaunchConfiguration.* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example ecs-host-01
     *
     * @var string[]
     */
    public $hostNames;

    /**
     * @description The name of the image family. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `aliyun` or `acs:`. The name cannot contain `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example hangzhou-daily-update
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description The ID of the image to be used to create the instance. You can call the [DescribeImages](https://help.aliyun.com/document_detail/25534.html) operation to query available image resources. When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example m-bp1g7004ksh0oeuc****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The instance description. The description must be 2 to 256 characters in length. The description can contain letters and cannot start with `http://` or `https://`. When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example Instance_Description
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description The instance name. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * The default value of this parameter is the `InstanceId` value.
     *
     * When you batch create instances, you can batch configure sequential names for the instances. For more information, see [Batch configure sequential names or hostnames for multiple instances](https://help.aliyun.com/document_detail/196048.html).
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example k8s-node-[1,4]-alibabacloud
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The billing method for network usage. Valid values:
     *
     *   PayByBandwidth: pay-by-bandwidth
     *   PayByTraffic: pay-by-traffic
     *
     * >  When the pay-by-traffic billing method for network usage is used, the maximum inbound and outbound bandwidth values are used as the upper limits of bandwidth instead of guaranteed performance specifications. When demands outstrip resource supplies, the maximum bandwidths may be limited. If you want guaranteed bandwidth for your instance, use the pay-by-bandwidth billing method.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum inbound public bandwidth. Unit: Mbit/s. Valid values:
     *
     *   When the maximum outbound public bandwidth is less than or equal to 10 Mbit/s, the valid values of this parameter are 1 to 10 and the default value is 10.
     *   When the maximum outbound public bandwidth is greater than 10 Mbit/s, the valid values of this parameter are 1 to the value of `LaunchConfiguration.InternetMaxBandwidthOut`, and the default value is the value of `LaunchConfiguration.InternetMaxBandwidthOut`.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s. Valid values: 0 to 100.
     *
     * Default value: 0.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description Specifies whether the instance is I/O optimized. Valid values:
     *
     *   none: The instance is not I/O optimized.
     *   optimized: The instance is I/O optimized.
     *
     * For instances of retired instance types, the default value is none. For instances of other instance types, the default value is optimized.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example optimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The key pair name.
     *
     *   For Windows instances, this parameter is ignored. This parameter is empty by default.
     *   By default, password-based logon is disabled for Linux instances.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example KeyPair_Name
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The instance password. The password must be 8 to 30 characters in length and contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. The password can contain the following special characters:
     *
     * ``( ) ` ~ ! @ # $ % ^ & * - _ + = | { }  ``: ; \\" < > , . ? /``  For Windows instances, the password cannot start with a forward slash (/). When both LaunchTemplateId and LaunchConfiguration.* parameters are specified, LaunchTemplateId takes precedence. `
     *
     * @example EcsV587!
     *
     * @var string
     */
    public $password;

    /**
     * @description Specifies whether to use the password preset in the image. Valid values:
     *
     *   true: uses the password preset in the image.
     *   false: does not use the password preset in the image.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example true
     *
     * @var bool
     */
    public $passwordInherit;

    /**
     * @description The name of the instance Resource Access Management (RAM) role. You can call the [ListRoles](https://help.aliyun.com/document_detail/28713.html) operation provided by RAM to query the instance RAM roles that you created. When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example RAM_Name
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The ID of the resource group to which to assign the instance. When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies whether to enable security hardening. Valid values:
     *
     *   Active: enables security hardening. This value is applicable only to public images.
     *   Deactive: disables security hardening. This value is applicable to all image types.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example Active
     *
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @description The ID of the security group to which to assign the instance. When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example sg-bp15ed6xe1yxeycg****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The IDs of the security groups to which the new ECS instances belong.
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The system disk information of instances. When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description The category of the system disk. Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: enhanced SSD (ESSD)
     *   cloud: basic disk
     *
     * For non-I/O optimized instances of retired instance types, the default value is cloud. For other instances, the default value is cloud_efficiency.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The description of the system disk. The description must be 2 to 256 characters in length. The description can contain letters and cannot start with `http://` or `https://`.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example SystemDisk_Description
     *
     * @var string
     */
    public $systemDiskDescription;

    /**
     * @description The name of the system disk. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `http://` or `https://`. The name can contain letters, digits, periods (.), colons (:), underscores (_), and hyphens (-).
     *
     * This parameter is empty by default.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example cloud_ssdSystem
     *
     * @var string
     */
    public $systemDiskName;

    /**
     * @description The performance level of the ESSD to be used as the system disk. Valid values:
     *
     *   PL0 (default): A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * For more information about ESSD performance levels, see [ESSDs](https://help.aliyun.com/document_detail/122389.html).
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example PL0
     *
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @description The size of the system disk. Valid values: 20 to 500. Unit: GiB. The value must be at least 20 and greater than or equal to the size of the image specified by LaunchConfiguration.ImageId.
     *
     * Default value: 40 or the size of the image specified by LaunchConfiguration.ImageId, whichever is greater.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The tag in the extended configurations of the launch template.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The instance user data. The user data must be encoded in Base64. The raw data can be up to 32 KB in size. When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example ZWNobyBoZWxsbyBlY3Mh
     *
     * @var string
     */
    public $userData;

    /**
     * @description Specifies whether to enable auto-renewal for the reserved instance. This parameter is required only when the instance uses the subscription billing method. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal period of the instance. Valid values:
     *
     * Valid values when PeriodUnit is set to Month: 1, 2, 3, 6, 12, 24, 36, 48, and 60.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The image options.
     *
     * When you specify this parameter, take note of the following items:
     *
     *   This parameter takes effect only when the AutoProvisioningGroupType parameter is set to instant.
     *
     * @var imageOptions
     */
    public $imageOptions;

    /**
     * @description The subscription period of the instance. The unit is specified by `PeriodUnit`. This parameter takes effect and is required only if the subscription billing method is selected. Valid values:
     *
     * Valid values if PeriodUnit is set to Month: 1, 2, 3, 6, and 12.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription period. Default value: Month. Valid values:
     *
     * Month
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @var schedulerOptions
     */
    public $schedulerOptions;

    /**
     * @description The protection period of the spot instance. Unit: hours. Default value: 1. Valid values: Valid values:
     *
     *   1: After a spot instance is created, Alibaba Cloud ensures that the instance is not automatically released within 1 hour. After the 1-hour protection period ends, the system compares the bid price with the market price and checks the resource inventory to determine whether to retain or release the instance.
     *   0: After a spot instance is created, Alibaba Cloud does not ensure that the instance runs for 1 hour. The system compares the bid price with the market price and checks the resource inventory to determine whether to retain or release the instance.
     *
     * Alibaba Cloud sends an ECS system event to notify you 5 minutes before the instance is released. The spot instance is billed by second. We recommend that you specify an appropriate protection period based on your business requirements.
     *
     * When you specify this parameter, take note of the following items:
     *
     *   This parameter takes effect only when the AutoProvisioningGroupType parameter is set to instant.
     *
     * @example 1
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The interruption event of the spot instances. Valid values:
     *
     *   Terminate: The instance is released.
     *   Stop: The instance is stopped in economical mode.
     *
     * For information about the economical mode, see [Economical mode](https://help.aliyun.com/document_detail/63353.html).
     *
     * Default value: Terminate.
     *
     * When you specify this parameter, take note of the following items:
     *
     *   This parameter takes effect only when the AutoProvisioningGroupType parameter is set to instant.
     *
     * @example Terminate
     *
     * @var string
     */
    public $spotInterruptionBehavior;
    protected $_name = [
        'arn' => 'Arn',
        'autoReleaseTime' => 'AutoReleaseTime',
        'creditSpecification' => 'CreditSpecification',
        'dataDisk' => 'DataDisk',
        'deploymentSetId' => 'DeploymentSetId',
        'hostName' => 'HostName',
        'hostNames' => 'HostNames',
        'imageFamily' => 'ImageFamily',
        'imageId' => 'ImageId',
        'instanceDescription' => 'InstanceDescription',
        'instanceName' => 'InstanceName',
        'internetChargeType' => 'InternetChargeType',
        'internetMaxBandwidthIn' => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'ioOptimized' => 'IoOptimized',
        'keyPairName' => 'KeyPairName',
        'password' => 'Password',
        'passwordInherit' => 'PasswordInherit',
        'ramRoleName' => 'RamRoleName',
        'resourceGroupId' => 'ResourceGroupId',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'securityGroupId' => 'SecurityGroupId',
        'securityGroupIds' => 'SecurityGroupIds',
        'systemDisk' => 'SystemDisk',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskDescription' => 'SystemDiskDescription',
        'systemDiskName' => 'SystemDiskName',
        'systemDiskPerformanceLevel' => 'SystemDiskPerformanceLevel',
        'systemDiskSize' => 'SystemDiskSize',
        'tag' => 'Tag',
        'userData' => 'UserData',
        'autoRenew' => 'AutoRenew',
        'autoRenewPeriod' => 'AutoRenewPeriod',
        'imageOptions' => 'ImageOptions',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'schedulerOptions' => 'SchedulerOptions',
        'spotDuration' => 'SpotDuration',
        'spotInterruptionBehavior' => 'SpotInterruptionBehavior',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = [];
            if (null !== $this->arn && \is_array($this->arn)) {
                $n = 0;
                foreach ($this->arn as $item) {
                    $res['Arn'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hostNames) {
            $res['HostNames'] = $this->hostNames;
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskDescription) {
            $res['SystemDiskDescription'] = $this->systemDiskDescription;
        }
        if (null !== $this->systemDiskName) {
            $res['SystemDiskName'] = $this->systemDiskName;
        }
        if (null !== $this->systemDiskPerformanceLevel) {
            $res['SystemDiskPerformanceLevel'] = $this->systemDiskPerformanceLevel;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->imageOptions) {
            $res['ImageOptions'] = null !== $this->imageOptions ? $this->imageOptions->toMap() : null;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->schedulerOptions) {
            $res['SchedulerOptions'] = null !== $this->schedulerOptions ? $this->schedulerOptions->toMap() : null;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->spotInterruptionBehavior) {
            $res['SpotInterruptionBehavior'] = $this->spotInterruptionBehavior;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            if (!empty($map['Arn'])) {
                $model->arn = [];
                $n = 0;
                foreach ($map['Arn'] as $item) {
                    $model->arn[$n++] = null !== $item ? arn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HostNames'])) {
            if (!empty($map['HostNames'])) {
                $model->hostNames = $map['HostNames'];
            }
        }
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskDescription'])) {
            $model->systemDiskDescription = $map['SystemDiskDescription'];
        }
        if (isset($map['SystemDiskName'])) {
            $model->systemDiskName = $map['SystemDiskName'];
        }
        if (isset($map['SystemDiskPerformanceLevel'])) {
            $model->systemDiskPerformanceLevel = $map['SystemDiskPerformanceLevel'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ImageOptions'])) {
            $model->imageOptions = imageOptions::fromMap($map['ImageOptions']);
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['SchedulerOptions'])) {
            $model->schedulerOptions = schedulerOptions::fromMap($map['SchedulerOptions']);
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['SpotInterruptionBehavior'])) {
            $model->spotInterruptionBehavior = $map['SpotInterruptionBehavior'];
        }

        return $model;
    }
}

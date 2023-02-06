<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\arn;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\dataDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\hibernationOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\privatePoolOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var hibernationOptions
     */
    public $hibernationOptions;

    /**
     * @var privatePoolOptions
     */
    public $privatePoolOptions;

    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description Specifies whether to associate the instance on a dedicated host with the dedicated host. Valid values:
     *
     *   default: does not associate the instance with the dedicated host. When you start an instance that was stopped in economical mode, the instance is automatically deployed to another dedicated host in the automatic deployment resource pool if the available resources of the original dedicated host are insufficient.
     *   host: associates the instance with the dedicated host. When you start an instance that was stopped in economical mode, the instance remains on the original dedicated host. If the available resources of the original dedicated host are insufficient, the instance cannot start.
     *
     * Default value: default.
     * @example default
     *
     * @var string
     */
    public $affinity;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @var arn[]
     */
    public $arn;

    /**
     * @description Specifies whether to enable auto-renewal for the instance. This parameter is valid only when the `InstanceChargeType` parameter is set to `PrePaid`. Default value: false. Valid values:
     *
     * true: enables auto-renewal.
     * false: does not enable auto-renewal.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal cycle of the instance. This parameter is required when AutoRenew is set to true.
     *
     * Valid values when PeriodUnit is set to Month: 1, 2, 3, 6, and 12
     * @example 2
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the value is unique among different requests. The **ClientToken** value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the cluster in which to create the instance.
     *
     * > This parameter will be removed in the future. We recommend that you use other parameters to ensure future compatibility.
     * @example c-bp67acfmxazb4p****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The performance mode of the burstable instance. Valid values:
     *
     *   Standard: the standard mode. For more information, see the "Standard mode" section in [Burstable instances](~~59977~~).
     *   Unlimited: the unlimited mode. For more information, see the "Unlimited mode" section in [Burstable instances](~~59977~~).
     *
     * @example Standard
     *
     * @var string
     */
    public $creditSpecification;

    /**
     * @description The list of data disks.
     *
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @description The ID of the dedicated host on which to create the instance.
     *
     * If the `DedicatedHostId` parameter is specified, the `SpotStrategy` and `SpotPriceLimit` parameters are ignored. This is because preemptible instances cannot be created on dedicated hosts.
     * @example dh-bp67acfmxazb4p****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description Specifies whether to enable release protection for the instance. This parameter determines whether you can use the ECS console or call the [DeleteInstance](~~25507~~) operation to release the instance. Default value: false. Valid values:
     *
     *   true: enables release protection.
     *   false: disables release protection.
     *
     * >  This parameter is applicable only to pay-as-you-go instances. It can protect instances against manual releases, but not against automatic releases.
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The number of the deployment set group to which to deploy the instance. If the deployment set specified by the DeploymentSetId parameter uses the high availability group strategy (AvailabilityGroup), you can use the DeploymentSetGroupNo parameter to specify a deployment set group in the deployment set. Valid values: 1 to 7.
     *
     * @example 1
     *
     * @var int
     */
    public $deploymentSetGroupNo;

    /**
     * @description The ID of the deployment set to which to deploy the instance.
     *
     * @example ds-bp1brhwhoqinyjd6****
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The description of the instance. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * This parameter is empty by default.
     * @example InstanceTest
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to check the validity of the request without actually making the request. Default value: false. Valid values:
     *
     *   true: The validity of the request is checked but the request is not made. Check items include whether required parameters are specified, the request format, service limits, and available ECS resources. If the check fails, the corresponding error code is returned. If the check succeeds, the `DryRunOperation` error code is returned.
     *   false: The validity of the request is checked, and the request is made if the check succeeds.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The hostname of the instance.
     *
     * The hostname cannot start or end with a period (.) or hyphen (-). It cannot contain consecutive periods (.) or hyphens (-).
     * For a Windows instance, the hostname must be 2 to 15 characters in length and cannot contain periods (.) or contain only digits. It can contain letters, digits, and hyphens (-).
     * For an instance that runs another type of operating system such as Linux, the hostname must be 2 to 64 characters in length. You can use periods (.) to separate the hostname into multiple segments. Each segment can contain letters, digits, and hyphens (-).
     *
     * @example LocalHostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the HPC cluster to which to assign the instance.
     *
     * @example hpc-bp67acfmxazb4p****
     *
     * @var string
     */
    public $hpcClusterId;

    /**
     * @description Specifies whether to enable the access channel for instance metadata. Valid values:
     *
     *   enabled: enables the access channel for instance metadata.
     *   disabled: disables the access channel for instance metadata.
     *
     * >  For more information about instance metadata, see [Overview of ECS instance metadata](~~49122~~).
     * @example enabled
     *
     * @var string
     */
    public $httpEndpoint;

    /**
     * @description >  This parameter is currently in invitational preview and unavailable for general users.
     *
     * @example 0
     *
     * @var int
     */
    public $httpPutResponseHopLimit;

    /**
     * @description Specifies whether to forcefully use the security-enhanced mode (IMDSv2) to access instance metadata. Valid values:
     *
     *   optional: does not forcibly use the security-enhanced mode (IMDSv2).
     *   required: forcefully uses the security-enhanced mode (IMDSv2). After you set this parameter to required, you cannot access instance metadata in normal mode.
     *
     * >  For more information about modes of accessing instance metadata, see [Access mode of instance metadata](~~150575~~).
     * @example optional
     *
     * @var string
     */
    public $httpTokens;

    /**
     * @description The name of the image family. You can set this parameter to obtain the latest available custom image from the specified image family to create the instance.
     *
     * ImageFamily must be empty if `ImageId` is specified.
     * ImageFamily can be specified if `ImageId` is not specified.
     *
     * @example hangzhou-daily-update
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description The ID of the image to use to create the instance. To use an Alibaba Cloud Marketplace image, you can view the `image ID` on the product page of the Alibaba Cloud Marketplace image. This parameter is required if you do not specify the `ImageFamily` parameter to obtain the latest available custom image from the specified image family.
     *
     * @example ubuntu_18_04_64_20G_alibase_20190624.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The internal IP address to assign to the instance.
     *
     * @example 192.168.**.**
     *
     * @var string
     */
    public $innerIpAddress;

    /**
     * @description The billing method of the instance. Default value: PostPaid. Valid values:
     *
     * PrePaid: subscription. If you set this parameter to PrePaid, make sure that you have sufficient balance or credit in your account. Otherwise, an `InvalidPayMethod` error is returned.
     * PostPaid: pay-as-you-go.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The name of the instance. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), periods (.), and hyphens (-). If you do not specify this parameter, the instance ID is used as the instance name by default.
     *
     * @example 2018-12-06T103200Z
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The instance type.
     *
     * Select an instance type. See [Instance families](~~25378~~) or call the [DescribeInstanceTypes](~~25620~~) operation to query the performance data of an instance type, or see [Best practices for instance type selection](~~58291~~) to learn about how to select instance types.
     * Query available resources. You can call the [DescribeAvailableResource](~~66186~~) operation to query available resources in a specific region or zone.
     *
     * @example ecs.g6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The billing method for network usage. Default value: PayByTraffic. Valid values:
     *
     * PayByBandwidth: pay-by-bandwidth
     * PayByTraffic: pay-by-traffic
     *
     * > When the **pay-by-traffic** billing method for network usage is used, the maximum inbound and outbound bandwidth values are used as upper limits of bandwidths instead of guaranteed performance specifications. In scenarios where demand outstrips resource supplies, these maximum bandwidth values may not be reached. If you want guaranteed bandwidths for your instance, use the **pay-by-bandwidth** billing method for network usage.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum inbound public bandwidth. Unit: Mbit/s. Valid values:
     *
     * When the purchased outbound public bandwidth is less than or equal to 10 Mbit/s, the valid values of this parameter are 1 to 10 and the default value is 10.
     * When the purchased outbound public bandwidth is greater than 10 Mbit/s, the valid values of this parameter are 1 to the `InternetMaxBandwidthOut` value and the default value is the `InternetMaxBandwidthOut` value.
     *
     * @example 50
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s. Valid values: 0 to 100.
     *
     * Default value: 0.
     * @example 5
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
     * For other instance types, the default value is optimized.
     * @example optimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The name of the key pair.
     *
     * >  For Windows instances, this parameter is ignored. This parameter is empty by default. The `Password` parameter takes effect even if the KeyPairName parameter is specified.
     * @example KeyPairTestName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example hide
     *
     * @var string
     */
    public $nodeControllerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The password of the instance. The password must be 8 to 30 characters in length and contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. Special characters include:
     *
     * ```plain
     * ( ) ` ~ ! @ # $ % ^ & * - _ + = | { } [ ] : ; \" < > , . ? /
     * Take note of the following items:
     *
     * For security reasons, we recommend that you use HTTPS to send requests if the Password parameter is specified.
     * Passwords of Windows instances cannot start with a forward slash (/).
     * Passwords cannot be set for instances that run some types of operating systems such as Others Linux and Fedora CoreOS. For these instances, only key pairs can be set.
     *
     * @example TestEcs123!
     *
     * @var string
     */
    public $password;

    /**
     * @description Specifies whether to use the password preset in the image. When you use this parameter, leave Password empty and make sure that the selected image has a password preset.
     *
     * @example false
     *
     * @var bool
     */
    public $passwordInherit;

    /**
     * @description The subscription period of the instance. The unit is specified by the `PeriodUnit` parameter. This parameter is valid and required only when `InstanceChargeType` is set to `PrePaid`. If the `DedicatedHostId` parameter is specified, the value of Period must not exceed the subscription period of the specified dedicated host. Valid values:
     *
     * Valid values when PeriodUnit is set to Month: 1, 2, 3, 6, and 12
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription period. Valid values:
     *
     * Default value: Month.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The private IP address to assign to the instance. The private IP address must be an available IP address within the CIDR block of the specified vSwitch.
     *
     * @example 172.16.236.*
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The name of the instance Resource Access Management (RAM) role. You can call the [ListRoles](~~28713~~) operation provided by RAM to query the instance RAM roles that you created.
     *
     * @example RAMTestName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The ID of the region in which to create the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the instance.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to enable security hardening. Valid values:
     *
     *   Active: enables security hardening. This value is applicable only to public images.
     *   Deactive: does not enable security hardening. This value is applicable to all images.
     *
     * @example Active
     *
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @description The ID of the security group to which to assign the instance. Instances in the same security group can communicate with each other.
     *
     * @example sg-bp15ed6xe1yxeycg****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The protection period of the preemptible instance. Unit: hours. Valid values: 0, 1, 2, 3, 4, 5, and 6.
     *
     *   Protection periods of 2, 3, 4, 5, and 6 hours are in invitational preview. If you want to set this parameter to one of these values, submit a ticket.
     *   If this parameter is set to 0, no protection period is configured for the preemptible instance.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The interruption mode of the preemptible instance. Default value: Terminate. Set the value to Terminate, which specifies to release the instance.
     *
     * @example Terminate
     *
     * @var string
     */
    public $spotInterruptionBehavior;

    /**
     * @description The maximum hourly price of the instance. The value is accurate to three decimal places. This parameter is valid only when the `SpotStrategy` parameter is set to `SpotWithPriceLimit`.
     *
     * @example 0.98
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The bidding policy for the pay-as-you-go instance. This parameter is valid only when the `InstanceChargeType` parameter is set to `PostPaid`. Default value: NoSpot. Valid values:
     *
     *   NoSpot: The instance is created as a regular pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is created as a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is created as a preemptible instance for which the market price at the time of purchase is automatically used as the bid price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The ID of the storage set.
     *
     * @example ss-bp1j4i2jdf3owlhe****
     *
     * @var string
     */
    public $storageSetId;

    /**
     * @description The maximum number of partitions in the storage set. Valid values: greater than or equal to 2.
     *
     * @example 2
     *
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Specifies whether to create the instance on a dedicated host. Valid values:
     *
     *   default: creates the instance on a non-dedicated host.
     *   host: creates the instance on a dedicated host. If you do not specify the `DedicatedHostId` parameter, Alibaba Cloud selects a dedicated host for the instance.
     *
     * Default value: default.
     * @example default
     *
     * @var string
     */
    public $tenancy;

    /**
     * @description Specifies whether to use the system configurations for virtual machines provided by Alibaba Cloud (Windows: NTP and KMS. Linux: NTP and YUM).
     *
     * @example true
     *
     * @var bool
     */
    public $useAdditionalService;

    /**
     * @description The user data of the instance. The user data must be encoded in Base64. The maximum size of raw data is 16 KB.
     *
     * @example ZWNobyBoZWxsbyBlY3Mh
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the vSwitch to which to connect the instance. This parameter is required when you create an instance in a VPC. You can call the [DescribeVSwitches](~~35748~~) operation to query available vSwitches.
     *
     * >  If the `VSwitchId` parameter is specified, the zone specified by the `ZoneId` parameter must be the zone where the specified vSwitch is located. You can also leave the `ZoneId` parameter empty. Then, the system selects the zone where the specified vSwitch is located.
     * @example vsw-bp1s5fnvk4gn2tws0****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual LAN (VLAN).
     *
     * @example 10
     *
     * @var string
     */
    public $vlanId;

    /**
     * @description The ID of the zone in which to create the instance. You can call the [DescribeZones](~~25610~~) operation to query the most recent zone list.
     *
     * This parameter is empty by default.
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'hibernationOptions'          => 'HibernationOptions',
        'privatePoolOptions'          => 'PrivatePoolOptions',
        'systemDisk'                  => 'SystemDisk',
        'affinity'                    => 'Affinity',
        'arn'                         => 'Arn',
        'autoRenew'                   => 'AutoRenew',
        'autoRenewPeriod'             => 'AutoRenewPeriod',
        'clientToken'                 => 'ClientToken',
        'clusterId'                   => 'ClusterId',
        'creditSpecification'         => 'CreditSpecification',
        'dataDisk'                    => 'DataDisk',
        'dedicatedHostId'             => 'DedicatedHostId',
        'deletionProtection'          => 'DeletionProtection',
        'deploymentSetGroupNo'        => 'DeploymentSetGroupNo',
        'deploymentSetId'             => 'DeploymentSetId',
        'description'                 => 'Description',
        'dryRun'                      => 'DryRun',
        'hostName'                    => 'HostName',
        'hpcClusterId'                => 'HpcClusterId',
        'httpEndpoint'                => 'HttpEndpoint',
        'httpPutResponseHopLimit'     => 'HttpPutResponseHopLimit',
        'httpTokens'                  => 'HttpTokens',
        'imageFamily'                 => 'ImageFamily',
        'imageId'                     => 'ImageId',
        'innerIpAddress'              => 'InnerIpAddress',
        'instanceChargeType'          => 'InstanceChargeType',
        'instanceName'                => 'InstanceName',
        'instanceType'                => 'InstanceType',
        'internetChargeType'          => 'InternetChargeType',
        'internetMaxBandwidthIn'      => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut'     => 'InternetMaxBandwidthOut',
        'ioOptimized'                 => 'IoOptimized',
        'keyPairName'                 => 'KeyPairName',
        'nodeControllerId'            => 'NodeControllerId',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'password'                    => 'Password',
        'passwordInherit'             => 'PasswordInherit',
        'period'                      => 'Period',
        'periodUnit'                  => 'PeriodUnit',
        'privateIpAddress'            => 'PrivateIpAddress',
        'ramRoleName'                 => 'RamRoleName',
        'regionId'                    => 'RegionId',
        'resourceGroupId'             => 'ResourceGroupId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'securityGroupId'             => 'SecurityGroupId',
        'spotDuration'                => 'SpotDuration',
        'spotInterruptionBehavior'    => 'SpotInterruptionBehavior',
        'spotPriceLimit'              => 'SpotPriceLimit',
        'spotStrategy'                => 'SpotStrategy',
        'storageSetId'                => 'StorageSetId',
        'storageSetPartitionNumber'   => 'StorageSetPartitionNumber',
        'tag'                         => 'Tag',
        'tenancy'                     => 'Tenancy',
        'useAdditionalService'        => 'UseAdditionalService',
        'userData'                    => 'UserData',
        'vSwitchId'                   => 'VSwitchId',
        'vlanId'                      => 'VlanId',
        'zoneId'                      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hibernationOptions) {
            $res['HibernationOptions'] = null !== $this->hibernationOptions ? $this->hibernationOptions->toMap() : null;
        }
        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toMap() : null;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }
        if (null !== $this->arn) {
            $res['Arn'] = [];
            if (null !== $this->arn && \is_array($this->arn)) {
                $n = 0;
                foreach ($this->arn as $item) {
                    $res['Arn'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->deploymentSetGroupNo) {
            $res['DeploymentSetGroupNo'] = $this->deploymentSetGroupNo;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }
        if (null !== $this->httpEndpoint) {
            $res['HttpEndpoint'] = $this->httpEndpoint;
        }
        if (null !== $this->httpPutResponseHopLimit) {
            $res['HttpPutResponseHopLimit'] = $this->httpPutResponseHopLimit;
        }
        if (null !== $this->httpTokens) {
            $res['HttpTokens'] = $this->httpTokens;
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->innerIpAddress) {
            $res['InnerIpAddress'] = $this->innerIpAddress;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (null !== $this->nodeControllerId) {
            $res['NodeControllerId'] = $this->nodeControllerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->spotInterruptionBehavior) {
            $res['SpotInterruptionBehavior'] = $this->spotInterruptionBehavior;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->storageSetId) {
            $res['StorageSetId'] = $this->storageSetId;
        }
        if (null !== $this->storageSetPartitionNumber) {
            $res['StorageSetPartitionNumber'] = $this->storageSetPartitionNumber;
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
        if (null !== $this->tenancy) {
            $res['Tenancy'] = $this->tenancy;
        }
        if (null !== $this->useAdditionalService) {
            $res['UseAdditionalService'] = $this->useAdditionalService;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HibernationOptions'])) {
            $model->hibernationOptions = hibernationOptions::fromMap($map['HibernationOptions']);
        }
        if (isset($map['PrivatePoolOptions'])) {
            $model->privatePoolOptions = privatePoolOptions::fromMap($map['PrivatePoolOptions']);
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }
        if (isset($map['Arn'])) {
            if (!empty($map['Arn'])) {
                $model->arn = [];
                $n          = 0;
                foreach ($map['Arn'] as $item) {
                    $model->arn[$n++] = null !== $item ? arn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['DeploymentSetGroupNo'])) {
            $model->deploymentSetGroupNo = $map['DeploymentSetGroupNo'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }
        if (isset($map['HttpEndpoint'])) {
            $model->httpEndpoint = $map['HttpEndpoint'];
        }
        if (isset($map['HttpPutResponseHopLimit'])) {
            $model->httpPutResponseHopLimit = $map['HttpPutResponseHopLimit'];
        }
        if (isset($map['HttpTokens'])) {
            $model->httpTokens = $map['HttpTokens'];
        }
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InnerIpAddress'])) {
            $model->innerIpAddress = $map['InnerIpAddress'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
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
        if (isset($map['NodeControllerId'])) {
            $model->nodeControllerId = $map['NodeControllerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['SpotInterruptionBehavior'])) {
            $model->spotInterruptionBehavior = $map['SpotInterruptionBehavior'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['StorageSetId'])) {
            $model->storageSetId = $map['StorageSetId'];
        }
        if (isset($map['StorageSetPartitionNumber'])) {
            $model->storageSetPartitionNumber = $map['StorageSetPartitionNumber'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tenancy'])) {
            $model->tenancy = $map['Tenancy'];
        }
        if (isset($map['UseAdditionalService'])) {
            $model->useAdditionalService = $map['UseAdditionalService'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

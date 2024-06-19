<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\acrRegistryInfo;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\dnsConfig;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\hostAliase;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\hostSecurityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\imageRegistryCredential;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\initContainer;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\overheadReservationOption;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\tag;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume;
use AlibabaCloud\Tea\Model;

class CreateContainerGroupRequest extends Model
{
    /**
     * @var dnsConfig
     */
    public $dnsConfig;

    /**
     * @var hostSecurityContext
     */
    public $hostSecurityContext;

    /**
     * @var securityContext
     */
    public $securityContext;

    /**
     * @description The information about the Container Registry Enterprise Edition instance that provides the image for the creation of the elastic container instance. For more information, see [Pull images from a Container Registry Enterprise Edition instance without using a secret](https://help.aliyun.com/document_detail/194250.html).
     *
     * @var acrRegistryInfo[]
     */
    public $acrRegistryInfo;

    /**
     * @description The active period of the elastic container instance. After this period expires, the instance is forced to exit. Unit: seconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $activeDeadlineSeconds;

    /**
     * @description Specifies whether to automatically create an EIP and associate it with the elastic container instance.
     *
     * @example true
     *
     * @var bool
     */
    public $autoCreateEip;

    /**
     * @description Specifies whether to automatically match image caches. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $autoMatchImageCache;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotency](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-xxxx-12d3-xxxx-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The computing power type of the instance. For more information, see [Set the computing power type to economy when you create an elastic container instance](https://help.aliyun.com/document_detail/2638061.html).
     *
     * @var string[]
     */
    public $computeCategory;

    /**
     * @description The information about the container.
     *
     * This parameter is required.
     * @var container[]
     */
    public $container;

    /**
     * @description The name of the elastic container instance (container group). The name must meet the following requirements:
     *
     *   The name must be 2 to 128 characters in length.
     *   The name can contain lowercase letters, digits, and hyphens (-). It cannot start or end with a hyphen (-).
     *
     * This parameter is required.
     * @example nginx-test
     *
     * @var string
     */
    public $containerGroupName;

    /**
     * @description Specifies whether to enable container resource view. Container resource view displays the actual container resource data instead of data of the host. If the specifications of the generated elastic container instance are larger than the specifications that you request for when you create the instance, you can enable the ContainerResourceView feature to ensure that the resources that you view in the container are the same as the resources that you request for.
     *
     * @example false
     *
     * @var bool
     */
    public $containerResourceView;

    /**
     * @description The path to core dump files. For more information, see [Save core files to volumes](https://help.aliyun.com/document_detail/167801.html).
     *
     * >  The path cannot start with |. You cannot use core dump files to configure executable programs.``
     * @example /xx/xx/core
     *
     * @var string
     */
    public $corePattern;

    /**
     * @description The number of vCPUs that you want to allocate to the instance.
     *
     * @example 1.0
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The CPU architecture of the instance. Default value: AMD64. Valid values:
     *
     *   AMD64
     *   ARM64
     *
     * @example ARM64
     *
     * @var string
     */
    public $cpuArchitecture;

    /**
     * @description The number of physical CPU cores. You can specify this parameter for only specific ECS instance types.
     *
     * @example 2
     *
     * @var int
     */
    public $cpuOptionsCore;

    /**
     * @description This parameter is not available.
     *
     * @example 1
     *
     * @var string
     */
    public $cpuOptionsNuma;

    /**
     * @description The number of threads per core. You can specify this parameter for only specific ECS instance types. A value of 1 specifies that Hyper-Threading is disabled.
     *
     * @example 2
     *
     * @var int
     */
    public $cpuOptionsThreadsPerCore;

    /**
     * @description The bucket that stores the data cache.
     *
     * @example default
     *
     * @var string
     */
    public $dataCacheBucket;

    /**
     * @description Specifies whether to enable the performance burst feature when ESSDs AutoPL are used to store data caches. For more information, see [ESSDs AutoPL](https://help.aliyun.com/document_detail/368372.html).
     *
     * @example false
     *
     * @var bool
     */
    public $dataCacheBurstingEnabled;

    /**
     * @description The performance level (PL) of the disk that you want to use to store data caches.\\
     * Enhanced SSDs (ESSDs) are preferentially used to store data caches. The default performance level is PL1.
     * @example PL1
     *
     * @var string
     */
    public $dataCachePL;

    /**
     * @description The input/output operations per second (IOPS) provisioned for ESSDs AutoPL when ESSDs AutoPL are used to store data caches.\\
     * For more information, see [ESSDs AutoPL](https://help.aliyun.com/document_detail/368372.html).
     * @example 40000
     *
     * @var int
     */
    public $dataCacheProvisionedIops;

    /**
     * @description The Domain Name System (DNS) policy. Valid values:
     *
     *   None: uses the DNS that is specified by DnsConfig.
     *   Default: uses the DNS that is specified for the runtime environment.
     *
     * @example Default
     *
     * @var string
     */
    public $dnsPolicy;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   true: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, service limits, and available resources. If the request passes the dry run, the DryRunOperation error code is returned. Otherwise, an error message is returned.
     *   false (default): performs a dry run and performs the actual request. If the request passes the dry run, the elastic container instance is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The maximum outbound bandwidth. Unit: bit/s.
     *
     * @example 1024000
     *
     * @var int
     */
    public $egressBandwidth;

    /**
     * @description The maximum bandwidth value for the EIP. Unit: Mbit/s. Default value: 5.\\
     * This parameter is valid only when AutoCreateEip is set to true.
     * @example 5
     *
     * @var int
     */
    public $eipBandwidth;

    /**
     * @description The EIP bandwidth plan that you want to associate with the instance.
     *
     * @example cbwp-2zeukbj916scmj51m****
     *
     * @var string
     */
    public $eipCommonBandwidthPackage;

    /**
     * @description The line type of the EIP. Default value: BGP. Valid values:
     *
     *   BGP: BGP (Multi-ISP) line
     *   BGP_PRO: BGP (Multi-ISP) Pro line
     *
     * @example BPG
     *
     * @var string
     */
    public $eipISP;

    /**
     * @description The ID of the elastic IP address (EIP).
     *
     * @example eip-uf66jeqopgqa9hdn****
     *
     * @var string
     */
    public $eipInstanceId;

    /**
     * @description The increased capacity of the temporary storage space. Unit: GiB.\\
     * For more information, see [Increase the size of the temporary storage space](https://help.aliyun.com/document_detail/204066.html).
     * @example 20
     *
     * @var int
     */
    public $ephemeralStorage;

    /**
     * @description Specifies whether to configure the instance to use a fixed IP address. For more information, see [Configure an elastic container instance to use a fixed IP address](https://help.aliyun.com/document_detail/2381086.html).
     *
     * @example true
     *
     * @var string
     */
    public $fixedIp;

    /**
     * @description The retention period of the fixed IP address after the original instance is released and the fixed IP address becomes idle. Unit: hours. Default value: 48.
     *
     * @example 24
     *
     * @var int
     */
    public $fixedIpRetainHour;

    /**
     * @description The version of the GPU driver. Default value: tesla=470.82.01. Valid values:
     *
     *   tesla=470.82.01
     *   tesla=525.85.12
     *
     * >  You can switch the GPU driver version only for a few Elastic Compute Service (ECS) instance types. For more information, see [Specify GPU-accelerated ECS instance types to create an elastic container instance](https://help.aliyun.com/document_detail/2579486.html).
     * @example tesla=525.85.12
     *
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @description The alias of the elastic container instance.
     *
     * @var hostAliase[]
     */
    public $hostAliase;

    /**
     * @description The hostname.
     *
     * @example test
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The image acceleration mode. Valid values:
     *
     *   nydus: uses Nydus to accelerate image pulling. The images must support Nydus.
     *   dadi: uses DADI to accelerate image pulling. The images must support DADI.
     *   p2p: uses P2P to accelerate image pulling. The images must support p2p.
     *   imc: uses image caches to accelerate image pulling.
     *
     * @example imc
     *
     * @var string
     */
    public $imageAccelerateMode;

    /**
     * @description The information about the logon credentials.
     *
     * @var imageRegistryCredential[]
     */
    public $imageRegistryCredential;

    /**
     * @description The ID of the image cache. For more information, see [Use image caches to accelerate the creation of instances](https://help.aliyun.com/document_detail/141281.html).
     *
     * @example imc-2zebxkiifuyzzlhl****
     *
     * @var string
     */
    public $imageSnapshotId;

    /**
     * @description The maximum inbound bandwidth. Unit: bit/s.
     *
     * @example 1024000
     *
     * @var int
     */
    public $ingressBandwidth;

    /**
     * @description The information about the init containers.
     *
     * @var initContainer[]
     */
    public $initContainer;

    /**
     * @description The address of the self-managed image repository. When you create an elastic container instance by using an image in a self-managed image repository that uses a self-signed certificate, you must specify this parameter to skip the certificate authentication. This prevents image pull failures caused by certificate authentication failures.
     *
     * @example "harbor***.pre.com,192.168.XX.XX:5000,reg***.test.com:80"
     *
     * @var string
     */
    public $insecureRegistry;

    /**
     * @description The ECS instance types that you specify to create the elastic container instance. Multiple instance types are supported. For more information, see [Specify ECS instance types to create an elastic container instance](https://help.aliyun.com/document_detail/114664.html).
     *
     * @example ecs.c5.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The number of IPv6 addresses that are assigned to the instance. Set the value to 1. You can assign only one IPv6 address to an elastic container instance.
     *
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description The maximum IPv6 Internet bandwidth when you set Ipv6GatewayBandwidthEnable to true. Valid values:
     *
     *   If the billing method for IPv6 network usage is pay-by-bandwidth, the maximum IPv6 Internet bandwidth ranges from 1 to 2,000 Mbit/s.
     *
     *   If the billing method for IPv6 network usage is pay-by-traffic, the maximum IPv6 Internet bandwidth varies based on the edition of the IPv6 gateway.
     *
     *   If the IPv6 gateway is of Free Edition, the maximum IPv6 Internet bandwidth ranges from 1 to 200 Mbit/s.
     *   If the IPv6 gateway is of Enterprise Edition, the maximum IPv6 Internet bandwidth ranges from 1 to 500 Mbit/s.
     *   If the IPv6 gateway is of Enhanced Enterprise Edition, the maximum IPv6 Internet bandwidth ranges from 1 to 1000 Mbit/s.
     *
     * The default value is the maximum value in the Internet bandwidth range of the IPv6 gateway.
     * @example 100
     *
     * @var string
     */
    public $ipv6GatewayBandwidth;

    /**
     * @description Specifies whether to enable Internet access to the elastic container instance over IPv6 addresses.
     *
     * @example true
     *
     * @var bool
     */
    public $ipv6GatewayBandwidthEnable;

    /**
     * @description The memory size that you want to allocate to the instance. Unit: GiB.
     *
     * @example 2.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description The endpoints of the Network Time Protocol (NTP) servers.
     *
     * @example ntp.cloud.aliyuncs.com
     *
     * @var string[]
     */
    public $ntpServer;

    /**
     * @description The operating system of the elastic container instance. Default value: Linux. Valid values:
     *
     *   Linux
     *   Windows
     *
     * >  Windows instances are in invitational preview. To use the operating system, submit a ticket.
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The options that you can configure when you enable the overhead reservation feature.
     *
     * @var overheadReservationOption
     */
    public $overheadReservationOption;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The address of the self-managed image repository. When you create an elastic container instance by using an image in a self-managed image repository that uses the HTTP protocol, you must specify this parameter. This way, Elastic Container Instance pulls the image over the HTTP protocol instead of the default HTTPS protocol. This prevents image pull failures caused by different protocols.
     *
     * @example "harbor***.pre.com,192.168.XX.XX:5000,reg***.test.com:80"
     *
     * @var string
     */
    public $plainHttpRegistry;

    /**
     * @description The private IP address of the elastic container instance. Only IPv4 addresses are supported. Make sure that the IP address is idle.
     *
     * @example 172.16.0.1
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The name of the instance Resource Access Management (RAM) role. You can use the same RAM role to access elastic container instances and ECS instances. For more information, see [Use an instance RAM role by calling API operations](https://help.aliyun.com/document_detail/61178.html).
     *
     * @example RamTestRole
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-uf66jeqopgqa9hdn****
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
     * @description The restart policy of the instance. Valid values:
     *
     *   Always: Always restarts the instance if a container in the instance exits upon termination.
     *   Never: Never restarts the instance if a container in the instance exits upon termination.
     *   OnFailure: Restarts the instance only if a container in the instance exists upon failure with a status code of non-zero.
     *
     * Default value: Always.
     * @example Always
     *
     * @var string
     */
    public $restartPolicy;

    /**
     * @description The resource scheduling policy when you specify multiple zones to create an elastic container instance. To specify multiple zones, you can use the VSwitchId to specify multiple vSwitches. Valid values:
     *
     *   VSwitchOrdered: The system schedules resources in the sequence of the vSwitches.
     *   VSwitchRandom: The system schedules resources at random.
     *
     * For more information, see [Specify multiple zones to create an elastic container instance](https://help.aliyun.com/document_detail/157290.html).
     * @example VSwitchOrdered
     *
     * @var string
     */
    public $scheduleStrategy;

    /**
     * @description The ID of the security group to which the instance belongs. Instances in the same security group can access each other.
     *
     * If you do not specify a security group, the system automatically uses the default security group in the region that you selected. Make sure that the inbound rules of the security group contain the container protocols and port numbers that you want to expose. If you do not have a default security group in the region, the system creates a default security group, and then adds the container protocols and port numbers that you specified to the inbound rules of the security group.
     * @example sg-uf66jeqopgqa9hdn****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description Specifies whether to use a shared namespace. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $shareProcessNamespace;

    /**
     * @description The protection period of the preemptible elastic container instance. Unit: hours. Default value: 1. A value of 0 indicates no protection period.
     *
     * @example 1
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The maximum hourly price of the preemptible elastic container instance. The value can be accurate to three decimal places.
     *
     * If you set SpotStrategy to SpotWithPriceLimit, you must specify the SpotPriceLimit parameter.
     * @example 0.025
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The bid policy for the instance. Valid values:
     *
     *   NoSpot: The instance is created as a pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is created as a preemptible instance for which you specify the maximum hourly price.
     *   SpotAsPriceGo: The instance is created as a preemptible instance for which the market price at the time of purchase is automatically used as the bid price.
     *
     * Default value: NoSpot.
     * @example SpotWithPriceLimit
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description Specifies whether to enable periodical execution.
     *
     *   true: enables periodical execution.
     *   false: disables periodical execution.
     *
     * @example true
     *
     * @var bool
     */
    public $strictSpot;

    /**
     * @description The tags that you want to add to the instance. You can bind a maximum of 20 tags. For more information, see [Use tags to manage elastic container instances](https://help.aliyun.com/document_detail/146608.html).
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The buffer period of time during which the program handles operations before the program is stopped. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $terminationGracePeriodSeconds;

    /**
     * @description The IDs of the vSwitches that connect to the instance. You can specify up to 10 vSwitch IDs at a time. Separate multiple vSwitch IDs with commas (,). Example: `vsw-***,vsw-***`.
     *
     * >  The number of IP addresses in the vSwitch CIDR block determines the maximum number of elastic container instances that you can create for the vSwitch. Before you create elastic container instances, you must plan the CIDR block of the vSwitch.
     * @example vsw-bp1xpiowfm5vo8o3c****,vsw-bp1rkyjgr1xwoho6k****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The information about the volume that you want to mount to the container.
     *
     * @var volume[]
     */
    public $volume;

    /**
     * @description The zone ID of the instance. If you do not specify this parameter, the system selects a zone.
     *
     * This parameter is empty by default.
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dnsConfig'                     => 'DnsConfig',
        'hostSecurityContext'           => 'HostSecurityContext',
        'securityContext'               => 'SecurityContext',
        'acrRegistryInfo'               => 'AcrRegistryInfo',
        'activeDeadlineSeconds'         => 'ActiveDeadlineSeconds',
        'autoCreateEip'                 => 'AutoCreateEip',
        'autoMatchImageCache'           => 'AutoMatchImageCache',
        'clientToken'                   => 'ClientToken',
        'computeCategory'               => 'ComputeCategory',
        'container'                     => 'Container',
        'containerGroupName'            => 'ContainerGroupName',
        'containerResourceView'         => 'ContainerResourceView',
        'corePattern'                   => 'CorePattern',
        'cpu'                           => 'Cpu',
        'cpuArchitecture'               => 'CpuArchitecture',
        'cpuOptionsCore'                => 'CpuOptionsCore',
        'cpuOptionsNuma'                => 'CpuOptionsNuma',
        'cpuOptionsThreadsPerCore'      => 'CpuOptionsThreadsPerCore',
        'dataCacheBucket'               => 'DataCacheBucket',
        'dataCacheBurstingEnabled'      => 'DataCacheBurstingEnabled',
        'dataCachePL'                   => 'DataCachePL',
        'dataCacheProvisionedIops'      => 'DataCacheProvisionedIops',
        'dnsPolicy'                     => 'DnsPolicy',
        'dryRun'                        => 'DryRun',
        'egressBandwidth'               => 'EgressBandwidth',
        'eipBandwidth'                  => 'EipBandwidth',
        'eipCommonBandwidthPackage'     => 'EipCommonBandwidthPackage',
        'eipISP'                        => 'EipISP',
        'eipInstanceId'                 => 'EipInstanceId',
        'ephemeralStorage'              => 'EphemeralStorage',
        'fixedIp'                       => 'FixedIp',
        'fixedIpRetainHour'             => 'FixedIpRetainHour',
        'gpuDriverVersion'              => 'GpuDriverVersion',
        'hostAliase'                    => 'HostAliase',
        'hostName'                      => 'HostName',
        'imageAccelerateMode'           => 'ImageAccelerateMode',
        'imageRegistryCredential'       => 'ImageRegistryCredential',
        'imageSnapshotId'               => 'ImageSnapshotId',
        'ingressBandwidth'              => 'IngressBandwidth',
        'initContainer'                 => 'InitContainer',
        'insecureRegistry'              => 'InsecureRegistry',
        'instanceType'                  => 'InstanceType',
        'ipv6AddressCount'              => 'Ipv6AddressCount',
        'ipv6GatewayBandwidth'          => 'Ipv6GatewayBandwidth',
        'ipv6GatewayBandwidthEnable'    => 'Ipv6GatewayBandwidthEnable',
        'memory'                        => 'Memory',
        'ntpServer'                     => 'NtpServer',
        'osType'                        => 'OsType',
        'overheadReservationOption'     => 'OverheadReservationOption',
        'ownerAccount'                  => 'OwnerAccount',
        'ownerId'                       => 'OwnerId',
        'plainHttpRegistry'             => 'PlainHttpRegistry',
        'privateIpAddress'              => 'PrivateIpAddress',
        'ramRoleName'                   => 'RamRoleName',
        'regionId'                      => 'RegionId',
        'resourceGroupId'               => 'ResourceGroupId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'restartPolicy'                 => 'RestartPolicy',
        'scheduleStrategy'              => 'ScheduleStrategy',
        'securityGroupId'               => 'SecurityGroupId',
        'shareProcessNamespace'         => 'ShareProcessNamespace',
        'spotDuration'                  => 'SpotDuration',
        'spotPriceLimit'                => 'SpotPriceLimit',
        'spotStrategy'                  => 'SpotStrategy',
        'strictSpot'                    => 'StrictSpot',
        'tag'                           => 'Tag',
        'terminationGracePeriodSeconds' => 'TerminationGracePeriodSeconds',
        'vSwitchId'                     => 'VSwitchId',
        'volume'                        => 'Volume',
        'zoneId'                        => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsConfig) {
            $res['DnsConfig'] = null !== $this->dnsConfig ? $this->dnsConfig->toMap() : null;
        }
        if (null !== $this->hostSecurityContext) {
            $res['HostSecurityContext'] = null !== $this->hostSecurityContext ? $this->hostSecurityContext->toMap() : null;
        }
        if (null !== $this->securityContext) {
            $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toMap() : null;
        }
        if (null !== $this->acrRegistryInfo) {
            $res['AcrRegistryInfo'] = [];
            if (null !== $this->acrRegistryInfo && \is_array($this->acrRegistryInfo)) {
                $n = 0;
                foreach ($this->acrRegistryInfo as $item) {
                    $res['AcrRegistryInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->activeDeadlineSeconds) {
            $res['ActiveDeadlineSeconds'] = $this->activeDeadlineSeconds;
        }
        if (null !== $this->autoCreateEip) {
            $res['AutoCreateEip'] = $this->autoCreateEip;
        }
        if (null !== $this->autoMatchImageCache) {
            $res['AutoMatchImageCache'] = $this->autoMatchImageCache;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->computeCategory) {
            $res['ComputeCategory'] = $this->computeCategory;
        }
        if (null !== $this->container) {
            $res['Container'] = [];
            if (null !== $this->container && \is_array($this->container)) {
                $n = 0;
                foreach ($this->container as $item) {
                    $res['Container'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->containerGroupName) {
            $res['ContainerGroupName'] = $this->containerGroupName;
        }
        if (null !== $this->containerResourceView) {
            $res['ContainerResourceView'] = $this->containerResourceView;
        }
        if (null !== $this->corePattern) {
            $res['CorePattern'] = $this->corePattern;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->cpuArchitecture) {
            $res['CpuArchitecture'] = $this->cpuArchitecture;
        }
        if (null !== $this->cpuOptionsCore) {
            $res['CpuOptionsCore'] = $this->cpuOptionsCore;
        }
        if (null !== $this->cpuOptionsNuma) {
            $res['CpuOptionsNuma'] = $this->cpuOptionsNuma;
        }
        if (null !== $this->cpuOptionsThreadsPerCore) {
            $res['CpuOptionsThreadsPerCore'] = $this->cpuOptionsThreadsPerCore;
        }
        if (null !== $this->dataCacheBucket) {
            $res['DataCacheBucket'] = $this->dataCacheBucket;
        }
        if (null !== $this->dataCacheBurstingEnabled) {
            $res['DataCacheBurstingEnabled'] = $this->dataCacheBurstingEnabled;
        }
        if (null !== $this->dataCachePL) {
            $res['DataCachePL'] = $this->dataCachePL;
        }
        if (null !== $this->dataCacheProvisionedIops) {
            $res['DataCacheProvisionedIops'] = $this->dataCacheProvisionedIops;
        }
        if (null !== $this->dnsPolicy) {
            $res['DnsPolicy'] = $this->dnsPolicy;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->egressBandwidth) {
            $res['EgressBandwidth'] = $this->egressBandwidth;
        }
        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }
        if (null !== $this->eipCommonBandwidthPackage) {
            $res['EipCommonBandwidthPackage'] = $this->eipCommonBandwidthPackage;
        }
        if (null !== $this->eipISP) {
            $res['EipISP'] = $this->eipISP;
        }
        if (null !== $this->eipInstanceId) {
            $res['EipInstanceId'] = $this->eipInstanceId;
        }
        if (null !== $this->ephemeralStorage) {
            $res['EphemeralStorage'] = $this->ephemeralStorage;
        }
        if (null !== $this->fixedIp) {
            $res['FixedIp'] = $this->fixedIp;
        }
        if (null !== $this->fixedIpRetainHour) {
            $res['FixedIpRetainHour'] = $this->fixedIpRetainHour;
        }
        if (null !== $this->gpuDriverVersion) {
            $res['GpuDriverVersion'] = $this->gpuDriverVersion;
        }
        if (null !== $this->hostAliase) {
            $res['HostAliase'] = [];
            if (null !== $this->hostAliase && \is_array($this->hostAliase)) {
                $n = 0;
                foreach ($this->hostAliase as $item) {
                    $res['HostAliase'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->imageAccelerateMode) {
            $res['ImageAccelerateMode'] = $this->imageAccelerateMode;
        }
        if (null !== $this->imageRegistryCredential) {
            $res['ImageRegistryCredential'] = [];
            if (null !== $this->imageRegistryCredential && \is_array($this->imageRegistryCredential)) {
                $n = 0;
                foreach ($this->imageRegistryCredential as $item) {
                    $res['ImageRegistryCredential'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageSnapshotId) {
            $res['ImageSnapshotId'] = $this->imageSnapshotId;
        }
        if (null !== $this->ingressBandwidth) {
            $res['IngressBandwidth'] = $this->ingressBandwidth;
        }
        if (null !== $this->initContainer) {
            $res['InitContainer'] = [];
            if (null !== $this->initContainer && \is_array($this->initContainer)) {
                $n = 0;
                foreach ($this->initContainer as $item) {
                    $res['InitContainer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->insecureRegistry) {
            $res['InsecureRegistry'] = $this->insecureRegistry;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }
        if (null !== $this->ipv6GatewayBandwidth) {
            $res['Ipv6GatewayBandwidth'] = $this->ipv6GatewayBandwidth;
        }
        if (null !== $this->ipv6GatewayBandwidthEnable) {
            $res['Ipv6GatewayBandwidthEnable'] = $this->ipv6GatewayBandwidthEnable;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->ntpServer) {
            $res['NtpServer'] = $this->ntpServer;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->overheadReservationOption) {
            $res['OverheadReservationOption'] = null !== $this->overheadReservationOption ? $this->overheadReservationOption->toMap() : null;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->plainHttpRegistry) {
            $res['PlainHttpRegistry'] = $this->plainHttpRegistry;
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
        if (null !== $this->restartPolicy) {
            $res['RestartPolicy'] = $this->restartPolicy;
        }
        if (null !== $this->scheduleStrategy) {
            $res['ScheduleStrategy'] = $this->scheduleStrategy;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->shareProcessNamespace) {
            $res['ShareProcessNamespace'] = $this->shareProcessNamespace;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->strictSpot) {
            $res['StrictSpot'] = $this->strictSpot;
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
        if (null !== $this->terminationGracePeriodSeconds) {
            $res['TerminationGracePeriodSeconds'] = $this->terminationGracePeriodSeconds;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->volume) {
            $res['Volume'] = [];
            if (null !== $this->volume && \is_array($this->volume)) {
                $n = 0;
                foreach ($this->volume as $item) {
                    $res['Volume'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateContainerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = dnsConfig::fromMap($map['DnsConfig']);
        }
        if (isset($map['HostSecurityContext'])) {
            $model->hostSecurityContext = hostSecurityContext::fromMap($map['HostSecurityContext']);
        }
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }
        if (isset($map['AcrRegistryInfo'])) {
            if (!empty($map['AcrRegistryInfo'])) {
                $model->acrRegistryInfo = [];
                $n                      = 0;
                foreach ($map['AcrRegistryInfo'] as $item) {
                    $model->acrRegistryInfo[$n++] = null !== $item ? acrRegistryInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ActiveDeadlineSeconds'])) {
            $model->activeDeadlineSeconds = $map['ActiveDeadlineSeconds'];
        }
        if (isset($map['AutoCreateEip'])) {
            $model->autoCreateEip = $map['AutoCreateEip'];
        }
        if (isset($map['AutoMatchImageCache'])) {
            $model->autoMatchImageCache = $map['AutoMatchImageCache'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ComputeCategory'])) {
            if (!empty($map['ComputeCategory'])) {
                $model->computeCategory = $map['ComputeCategory'];
            }
        }
        if (isset($map['Container'])) {
            if (!empty($map['Container'])) {
                $model->container = [];
                $n                = 0;
                foreach ($map['Container'] as $item) {
                    $model->container[$n++] = null !== $item ? container::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContainerGroupName'])) {
            $model->containerGroupName = $map['ContainerGroupName'];
        }
        if (isset($map['ContainerResourceView'])) {
            $model->containerResourceView = $map['ContainerResourceView'];
        }
        if (isset($map['CorePattern'])) {
            $model->corePattern = $map['CorePattern'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CpuArchitecture'])) {
            $model->cpuArchitecture = $map['CpuArchitecture'];
        }
        if (isset($map['CpuOptionsCore'])) {
            $model->cpuOptionsCore = $map['CpuOptionsCore'];
        }
        if (isset($map['CpuOptionsNuma'])) {
            $model->cpuOptionsNuma = $map['CpuOptionsNuma'];
        }
        if (isset($map['CpuOptionsThreadsPerCore'])) {
            $model->cpuOptionsThreadsPerCore = $map['CpuOptionsThreadsPerCore'];
        }
        if (isset($map['DataCacheBucket'])) {
            $model->dataCacheBucket = $map['DataCacheBucket'];
        }
        if (isset($map['DataCacheBurstingEnabled'])) {
            $model->dataCacheBurstingEnabled = $map['DataCacheBurstingEnabled'];
        }
        if (isset($map['DataCachePL'])) {
            $model->dataCachePL = $map['DataCachePL'];
        }
        if (isset($map['DataCacheProvisionedIops'])) {
            $model->dataCacheProvisionedIops = $map['DataCacheProvisionedIops'];
        }
        if (isset($map['DnsPolicy'])) {
            $model->dnsPolicy = $map['DnsPolicy'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EgressBandwidth'])) {
            $model->egressBandwidth = $map['EgressBandwidth'];
        }
        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }
        if (isset($map['EipCommonBandwidthPackage'])) {
            $model->eipCommonBandwidthPackage = $map['EipCommonBandwidthPackage'];
        }
        if (isset($map['EipISP'])) {
            $model->eipISP = $map['EipISP'];
        }
        if (isset($map['EipInstanceId'])) {
            $model->eipInstanceId = $map['EipInstanceId'];
        }
        if (isset($map['EphemeralStorage'])) {
            $model->ephemeralStorage = $map['EphemeralStorage'];
        }
        if (isset($map['FixedIp'])) {
            $model->fixedIp = $map['FixedIp'];
        }
        if (isset($map['FixedIpRetainHour'])) {
            $model->fixedIpRetainHour = $map['FixedIpRetainHour'];
        }
        if (isset($map['GpuDriverVersion'])) {
            $model->gpuDriverVersion = $map['GpuDriverVersion'];
        }
        if (isset($map['HostAliase'])) {
            if (!empty($map['HostAliase'])) {
                $model->hostAliase = [];
                $n                 = 0;
                foreach ($map['HostAliase'] as $item) {
                    $model->hostAliase[$n++] = null !== $item ? hostAliase::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ImageAccelerateMode'])) {
            $model->imageAccelerateMode = $map['ImageAccelerateMode'];
        }
        if (isset($map['ImageRegistryCredential'])) {
            if (!empty($map['ImageRegistryCredential'])) {
                $model->imageRegistryCredential = [];
                $n                              = 0;
                foreach ($map['ImageRegistryCredential'] as $item) {
                    $model->imageRegistryCredential[$n++] = null !== $item ? imageRegistryCredential::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageSnapshotId'])) {
            $model->imageSnapshotId = $map['ImageSnapshotId'];
        }
        if (isset($map['IngressBandwidth'])) {
            $model->ingressBandwidth = $map['IngressBandwidth'];
        }
        if (isset($map['InitContainer'])) {
            if (!empty($map['InitContainer'])) {
                $model->initContainer = [];
                $n                    = 0;
                foreach ($map['InitContainer'] as $item) {
                    $model->initContainer[$n++] = null !== $item ? initContainer::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InsecureRegistry'])) {
            $model->insecureRegistry = $map['InsecureRegistry'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }
        if (isset($map['Ipv6GatewayBandwidth'])) {
            $model->ipv6GatewayBandwidth = $map['Ipv6GatewayBandwidth'];
        }
        if (isset($map['Ipv6GatewayBandwidthEnable'])) {
            $model->ipv6GatewayBandwidthEnable = $map['Ipv6GatewayBandwidthEnable'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NtpServer'])) {
            if (!empty($map['NtpServer'])) {
                $model->ntpServer = $map['NtpServer'];
            }
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['OverheadReservationOption'])) {
            $model->overheadReservationOption = overheadReservationOption::fromMap($map['OverheadReservationOption']);
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PlainHttpRegistry'])) {
            $model->plainHttpRegistry = $map['PlainHttpRegistry'];
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
        if (isset($map['RestartPolicy'])) {
            $model->restartPolicy = $map['RestartPolicy'];
        }
        if (isset($map['ScheduleStrategy'])) {
            $model->scheduleStrategy = $map['ScheduleStrategy'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['ShareProcessNamespace'])) {
            $model->shareProcessNamespace = $map['ShareProcessNamespace'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['StrictSpot'])) {
            $model->strictSpot = $map['StrictSpot'];
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
        if (isset($map['TerminationGracePeriodSeconds'])) {
            $model->terminationGracePeriodSeconds = $map['TerminationGracePeriodSeconds'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['Volume'])) {
            if (!empty($map['Volume'])) {
                $model->volume = [];
                $n             = 0;
                foreach ($map['Volume'] as $item) {
                    $model->volume[$n++] = null !== $item ? volume::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

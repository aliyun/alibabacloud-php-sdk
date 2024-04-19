<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\workerDataDisks;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @description The network access control list (ACL) of the SLB instance associated with the API server if the cluster is a registered cluster.
     *
     * @var string[]
     */
    public $accessControlList;

    /**
     * @description The components that you want to install in the cluster. When you create a cluster, you can set the `addons` parameter to install specific components.
     *
     **Network plug-in**: required. The Flannel and Terway plug-ins are supported. Select one of the plug-ins for the cluster.
     *
     *   Specify the Flannel plug-in in the following format: \[{"name":"flannel","config":""}].
     *   If you want to use the Terway component, specify the value in the \[{"Name": "terway-eniip","Config": ""}] format.
     *
     **Volume plug-in**: required. The `CSI` and `FlexVolume` volume plug-ins are supported.
     *
     *   Specify the `CSI` plug-in in the following format: \[{"name":"csi-plugin","config": ""},{"name": "csi-provisioner","config": ""}].
     *   Specify the `FlexVolume` plug-in in the following format: \[{"name": "flexvolume","config": ""}].
     *
     **Simple Log Service component**: optional. We recommend that you enable Simple Log Service. If Simple Log Service is disabled, you cannot use the cluster auditing feature.
     *
     *   Use an existing `Simple Log Service project`: \[{"name": "logtail-ds","config": "{"IngressDashboardEnabled":"true","sls_project_name":"your_sls_project_name"}"}].
     *   To create a `Simple Log Service project`, specify the component in the following format: \[{"name": "logtail-ds","config": "{"IngressDashboardEnabled":"true"}"}].
     *
     **Ingress controller**`: optional. By default, the nginx-ingress-controller component is installed in ACK dedicated clusters.`
     *
     *   To install nginx-ingress-controller and enable Internet access, specify the Ingress controller in the following format: \[{"name":"nginx-ingress-controller","config":"{"IngressSlbNetworkType":"internet"}"}].
     *   To disable the system to automatically install nginx-ingress-controller, specify the component in the following format: \[{"name": "nginx-ingress-controller","config": "","disabled": true}].
     *
     **Event center**: optional. By default, the event center feature is enabled.
     *
     * Enable the ack-node-problem-detector component in the following format: \[{"name":"ack-node-problem-detector","config":"{"sls_project_name":"your_sls_project_name"}"}].
     * @var Addon[]
     */
    public $addons;

    /**
     * @description Service accounts provide identities for pods when pods communicate with the `API server` of the cluster. `api-audiences` are used by the `API server` to check whether the `tokens` of requests are legitimate.`` Separate multiple `audiences` with commas (,).
     *
     * For more information about `ServiceAccount`, see [Enable service account token volume projection](~~160384~~).
     * @example kubernetes.default.svc
     *
     * @var string
     */
    public $apiAudiences;

    /**
     * @description The billing method of the cluster. The following resources are billed on a subscription basis:
     *
     * Default value: PostPaid.
     * @example 1
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Specifies whether to enable Center for Internet Security (CIS) reinforcement. For more information, see [CIS reinforcement](~~223744~~).
     *
     * Valid values:
     *
     *   `true`: enables CIS reinforcement.
     *   `false`: disables CIS reinforcement.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $cisEnabled;

    /**
     * @description Specifies whether to install the CloudMonitor agent. Valid values:
     *
     *   `true`: installs the CloudMonitor agent.
     *   `false`: does not install the CloudMonitor agent.
     *
     * Default value: `false`.
     * @example true
     *
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @description The domain name of the cluster.
     *
     * The domain name can contain one or more parts that are separated by periods (.). Each part cannot exceed 63 characters in length, and can contain lowercase letters, digits, and hyphens (-). Each part must start and end with a lowercase letter or digit.
     * @example cluster.local
     *
     * @var string
     */
    public $clusterDomain;

    /**
     * @description After you set `cluster_type` to `ManagedKubernetes` and configure the `profile` parameter, you can further specify the edition of the cluster. Valid values:
     *
     *   `ack.pro.small`: Pro.
     *   `ack.standard`: Basic. If you leave the parameter empty, the Basic edition is selected.
     *
     * @example ack.pro.small
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description *   `Kubernetes`: ACK dedicated cluster.
     *   `ManagedKubernetes`: ACK managed cluster. ACK managed clusters include ACK Basic clusters, ACK Pro clusters, ACK Serverless clusters (Basic and Pro), ACK Edge clusters (Basic and Pro), and ACK Lingjun clusters (Pro).
     *   `ExternalKubernetes`: registered cluster.
     *
     * @example Kubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The CIDR block of pods. You can specify 10.0.0.0/8, 172.16-31.0.0/12-16, 192.168.0.0/16, or their subnets as the CIDR block of pods. The pod CIDR block cannot overlap with the CIDR block of the VPC in which the cluster is deployed and the CIDR blocks of existing clusters in the VPC. You cannot modify the pod CIDR block after you create the cluster.
     *
     * >  This parameter is required if the cluster uses the Flannel plug-in.
     * @example 172.20.0.0/16
     *
     * @var string
     */
    public $containerCidr;

    /**
     * @description The list of control plane components for which you want to enable log collection.
     *
     * By default, the log of kube-apiserver, kube-controller-manager, and kube-scheduler is collected.
     * @var string[]
     */
    public $controlplaneLogComponents;

    /**
     * @description The Simple Log Service project that is used to store the logs of control plane components. You can use an existing project or create one. If you choose to create a Simple Log Service project, the created project is named in the `k8s-log-{ClusterID}` format.
     *
     * @example k8s-log-xxx
     *
     * @var string
     */
    public $controlplaneLogProject;

    /**
     * @description The retention period of control plane logs in days.
     *
     * @example 30
     *
     * @var string
     */
    public $controlplaneLogTtl;

    /**
     * @description The CPU management policy of the nodes in the node pool. The following policies are supported if the Kubernetes version of the cluster is 1.12.6 or later:
     *
     *   `static`: allows pods with specific resource characteristics on the node to be granted with enhanced CPU affinity and exclusivity.
     *   `none`: specifies that the default CPU affinity is used.
     *
     * Default value: `none`.
     * @example none
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description Specifies custom subject alternative names (SANs) for the API server certificate to accept requests from specified IP addresses or domain names. Multiple IP addresses and domain names are separated by commas (,).
     *
     * @example cs.aliyun.com
     *
     * @var string
     */
    public $customSan;

    /**
     * @description Specifies whether to enable cluster deletion protection. If this option is enabled, the cluster cannot be deleted in the console or by calling API operations. Valid values:
     *
     *   `true`: enables deletion protection for the cluster. This way, the cluster cannot be deleted in the Container Service console or by calling API operations.
     *   `false`: disables deletion protection for the cluster. This way, the cluster can be deleted in the Container Service console or by calling API operations.
     *
     * Default value: `false`.
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description Specifies whether to perform a rollback if the cluster fails to be created. Valid values:
     *
     *   `true`: performs a rollback if the system fails to create the cluster.
     *   `false`: does not perform a rollback if the system fails to create the cluster.
     *
     * Default value: `true`.
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description Specifies whether to enable the RAM Roles for Service Accounts (RRSA) feature.
     *
     * @example true
     *
     * @var bool
     */
    public $enableRrsa;

    /**
     * @description The ID of a key that is managed by Key Management Service (KMS). The key is used to encrypt data disks. For more information, see [KMS](~~28935~~).
     *
     * >  The key can be used only in ACK Pro clusters.
     * @example 0fe64791-55eb-4fc7-84c5-c6c7cdca****
     *
     * @var string
     */
    public $encryptionProviderKey;

    /**
     * @description Specifies whether to enable Internet access for the cluster. You can use an elastic IP address (EIP) to expose the API server. This way, you can access the cluster over the Internet. Valid values:
     *
     *   `true`: enables Internet access.
     *   `false`: disables Internet access. If you set this parameter to false, the API server cannot be accessed over the Internet.
     *
     * Default value: `false`.
     * @example true
     *
     * @var bool
     */
    public $endpointPublicAccess;

    /**
     * @description Specifies whether to mount a data disk to a node that is created based on an existing ECS instance. Valid values:
     *
     *   `true`: stores the data of containers and images on a data disk. Back up the existing data on the data disk first.
     *   `false`: does not store the data of containers and images on a data disk.
     *
     * How to mount a data disk:
     *
     *   If an ECS instance has data disks mounted and the file system of the last data disk is not initialized, the system automatically formats the data disk to ext4. Then, the system mounts the data disk to /var/lib/docker and /var/lib/kubelet.
     *   If no data disk is mounted to the ECS instance, the system does not purchase a new data disk.
     *
     * @example false
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @description Specifies a custom image for nodes. By default, the image provided by ACK is used. You can select a custom image to replace the default image. For more information, see [Custom images](~~146647~~).
     *
     * @example m-bp16z7xko3vvv8gt****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of OS distribution that you want to use. To specify the node OS, we recommend that you use this parameter. Valid values:
     *
     *   CentOS
     *   AliyunLinux
     *   AliyunLinux Qboot
     *   AliyunLinuxUEFI
     *   AliyunLinux3
     *   Windows
     *   WindowsCore
     *   AliyunLinux3Arm64
     *   ContainerOS
     *
     * Default value: `CentOS`.
     * @example AliyunLinux
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The list of existing ECS instances that are specified as worker nodes for the cluster.
     *
     * >  This parameter is required when you create worker nodes on existing ECS instances.
     * @var string[]
     */
    public $instances;

    /**
     * @description The cluster IP stack.
     *
     * @example Optional value: IPv4 (Single stack) or IPv6 (Dual Stack)
     * Default value: IPV4
     * @var string
     */
    public $ipStack;

    /**
     * @description Specifies whether to create an advanced security group. This parameter takes effect only if `security_group_id` is left empty.
     *
     * >  To use a basic security group, make sure that the sum of the number of nodes in the cluster and the number of pods that use Terway does not exceed 2,000. Therefore, we recommend that you specify an advanced security group for a cluster that has Terway installed.
     *
     *   `true`: creates an advanced security group.
     *   `false`: does not create an advanced security group.
     *
     * Default value: `true`.
     * @example true
     *
     * @var bool
     */
    public $isEnterpriseSecurityGroup;

    /**
     * @description Specifies whether to retain the names of existing ECS instances that are used in the cluster. Valid values:
     *
     *   `true`: retains the names.
     *   `false`: does not retain the names. The new names are assigned by the system.
     *
     * Default value: `true`.
     * @example true
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @description The name of the key pair. You must set this parameter or the `login_password` parameter.
     *
     * @example secrity-key
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description The Kubernetes version of the cluster. The Kubernetes versions supported by ACK are the same as the Kubernetes versions supported by open source Kubernetes. We recommend that you specify the latest Kubernetes version. If you do not specify this parameter, the latest Kubernetes version is used.
     *
     * You can create clusters of the latest two Kubernetes versions in the ACK console. If you want to create clusters that run earlier Kubernetes versions, use the API. For more information about the Kubernetes versions supported by ACK, see [Release notes on Kubernetes versions](~~185269~~).
     * @example 1.16.9-aliyun.1
     *
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @description The specification of the Server Load Balancer (SLB) instance. Valid values:
     *
     *   slb.s1.small
     *   slb.s2.small
     *   slb.s2.medium
     *   slb.s3.small
     *   slb.s3.medium
     *   slb.s3.large
     *
     * Default value: `slb.s2.small`.
     * @example slb.s2.small
     *
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @description Enables Simple Log Service for the cluster. This parameter takes effect only on ACK Serverless clusters. Set the value to `SLS`.
     *
     * @example SLS
     *
     * @var string
     */
    public $loggingType;

    /**
     * @description The password for SSH logon. You must set this parameter or `key_pair`. The password must be 8 to 30 characters in length, and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *
     * @example Hello@1234
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description Specifies whether to enable auto-renewal for master nodes. This parameter takes effect only if `master_instance_charge_type` is set to `PrePaid`. Valid values:
     *
     *   `true`: enables auto-renewal.
     *   `false`: disables auto-renewal.
     *
     * Default value: `true`.
     * @example true
     *
     * @var bool
     */
    public $masterAutoRenew;

    /**
     * @description The cycle of auto-renewal. This parameter takes effect and is required only if the subscription billing method is selected for master nodes.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $masterAutoRenewPeriod;

    /**
     * @description The number of master nodes. Valid values: `3` and `5`.
     *
     * Default value: `3`.
     * @example 3
     *
     * @var int
     */
    public $masterCount;

    /**
     * @description The billing method of master nodes. Valid values:
     *
     *   `PrePaid`: subscription.
     *   `PostPaid`: pay-as-you-go.
     *
     * Default value: `PostPaid`.
     * @example PrePaid
     *
     * @var string
     */
    public $masterInstanceChargeType;

    /**
     * @description The instance types of master nodes. For more information, see [Overview of instance families](~~25378~~).
     *
     * @var string[]
     */
    public $masterInstanceTypes;

    /**
     * @description The subscription duration of master nodes. This parameter takes effect and is required only if `master_instance_charge_type` is set to `PrePaid`.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $masterPeriod;

    /**
     * @description The billing cycle of master nodes. This parameter is required if master_instance_charge_type is set to `PrePaid`.
     *
     * Set the value to `Month`. Master nodes are billed only on a monthly basis.
     * @example Month
     *
     * @var string
     */
    public $masterPeriodUnit;

    /**
     * @description The type of system disk that you want to use for the master nodes. Valid values:
     *
     *   `cloud_efficiency`: ultra disk.
     *   `cloud_ssd`: standard SSD.
     *   `cloud_essd`: enhanced SSD (ESSD).
     *
     * Default value: `cloud_ssd`. The default value may vary in different zones.
     * @example cloud_ssd
     *
     * @var string
     */
    public $masterSystemDiskCategory;

    /**
     * @description The performance level (PL) of the system disk that you want to use for master nodes. This parameter takes effect only for ESSDs. For more information about the relationship between disk PLs and disk sizes, see [ESSDs](~~122389~~).
     *
     * @example PL1
     *
     * @var string
     */
    public $masterSystemDiskPerformanceLevel;

    /**
     * @description The size of the system disk that is specified for master nodes. Valid values: 40 to 500. Unit: GiB.
     *
     * Default value: `120`.
     * @example 120
     *
     * @var int
     */
    public $masterSystemDiskSize;

    /**
     * @description The ID of the automatic snapshot policy that is used by the system disk specified for master nodes.
     *
     * @example sp-2zej1nogjvovnz4z****
     *
     * @var string
     */
    public $masterSystemDiskSnapshotPolicyId;

    /**
     * @description The IDs of the vSwitches that are specified for master nodes. You can specify up to three vSwitches. We recommend that you specify three vSwitches in different zones to ensure high availability.
     *
     * The number of vSwitches must be the same as that specified in `master_count` and the same as those specified in `master_vswitch_ids`.
     * @var string[]
     */
    public $masterVswitchIds;

    /**
     * @description The cluster name.
     *
     * The cluster name must be 1 to 63 characters in length, and can contain digits, letters, and underscores (\_). The cluster name must not start with a hyphen (-).
     * @example cluster-demo
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to create a NAT gateway and configure SNAT rules when the system creates the ACK Serverless cluster. Valid values:
     *
     *   `true`: automatically creates a NAT gateway and configures SNAT rules. This enables Internet access for the VPC in which the cluster is deployed.
     *   `false`: does not create a NAT gateway or configure SNAT rules. In this case, the cluster in the VPC cannot access the Internet.
     *
     * Default value: `false`.
     * @example true
     *
     * @var bool
     */
    public $natGateway;

    /**
     * @description The maximum number of IP addresses that can be assigned to nodes. This number is determined by the node CIDR block. This parameter takes effect only if the cluster uses Flannel as the network plug-in.
     *
     * Default value: `26`.
     * @example 25
     *
     * @var string
     */
    public $nodeCidrMask;

    /**
     * @description The name of the custom node.
     *
     * A node name consists of a prefix, an IP substring, and a suffix.
     *
     *   The prefix and suffix can contain multiple parts that are separated by periods (.). Each part can contain lowercase letters, digits, and hyphens (-), and must start and end with a lowercase letter or digit.
     *   The IP substring length specifies the number of digits to be truncated from the end of the node IP address. The IP substring length ranges from 5 to 12.
     *
     * For example, if the node IP address is 192.168.0.55, the prefix is aliyun.com, the IP substring length is 5, and the suffix is test, the node name will be aliyun.com00055test.
     * @example aliyun.com00055test
     *
     * @var string
     */
    public $nodeNameMode;

    /**
     * @description The node port range. Valid values: 30000 to 65535.
     *
     * Default value: `30000-32767`.
     * @example 30000~32767
     *
     * @var string
     */
    public $nodePortRange;

    /**
     * @description The list of node pools.
     *
     * @var Nodepool[]
     */
    public $nodepools;

    /**
     * @description The number of worker nodes. Valid values: 0 to 100.
     *
     * @example 3
     *
     * @deprecated
     *
     * @var int
     */
    public $numOfNodes;

    /**
     * @description The type of OS. Valid values:
     *
     *   Windows
     *   Linux
     *
     * Default value: `Linux`.
     * @example Linux
     *
     * @var string
     */
    public $osType;

    /**
     * @description The subscription duration. This parameter takes effect and is required only when you set charge_type to PrePaid.
     *
     * Default value: 1.
     * @example FY2023
     *
     * @var int
     */
    public $period;

    /**
     * @description The billing cycle. This parameter is required if charge_type is set to PrePaid.
     *
     * Set the value to Month. Master nodes are billed only on a monthly basis.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The OS distribution that is used. Valid values:
     *
     *   CentOS
     *   AliyunLinux
     *   QbootAliyunLinux
     *   Qboot
     *   Windows
     *   WindowsCore
     *
     * Default value: `CentOS`.
     * @example CentOS
     *
     * @var string
     */
    public $platform;

    /**
     * @description The list of pod vSwitches. You need to specify at least one pod vSwitch for each node vSwitch and the pod vSwitches must not be the same as the node vSwitches (`vswitch`). We recommend that you specify pod vSwitches whose mask lengths are no longer than 19.
     *
     * >  The `pod_vswitch_ids` parameter is required if the cluster uses Terway as the network plug-in.
     * @var string[]
     */
    public $podVswitchIds;

    /**
     * @description If you set `cluster_type` to `ManagedKubernetes`, an ACK managed cluster is created. In this case, you can further specify the cluster edition. Valid values:
     *
     *   `Default`. ACK managed cluster. ACK managed clusters include ACK Basic clusters and ACK Pro clusters.
     *   `Edge`: ACK Edge cluster. ACK Edge clusters include ACK Edge Basic clusters and ACK Edge Pro clusters.
     *   `Serverless`: ACK Serverless cluster. ACK Serverless clusters include ACK Serverless Basic clusters and ACK Serverless Pro clusters.
     *   `Lingjun`: ACK Lingjun Pro cluster.
     *
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The kube-proxy mode. Valid values:
     *
     *   `iptables`: iptables is a kube-proxy mode. It uses iptables rules to conduct Service discovery and load balancing. The performance of this mode is limited by the size of the cluster. This mode is suitable for clusters that run a small number of Services.
     *   `ipvs`: provides high performance and uses IP Virtual Server (IPVS). This allows you to configure service discovery and load balancing. This mode is suitable for clusters that are required to run a large number of services. We recommend that you use this mode in scenarios when high load balancing performance is required.
     *
     * Default value: `ipvs`.
     * @example ipvs
     *
     * @var string
     */
    public $proxyMode;

    /**
     * @description The list of ApsaraDB RDS instances. Select the ApsaraDB RDS instances that you want to add to the whitelist. We recommend that you add the CIDR block of pods and CIDR block of nodes to the ApsaraDB RDS instances in the ApsaraDB RDS console. When you set the ApsaraDB RDS instances, you cannot scale out the number of nodes because the instances are not in the Running state.
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description The ID of the region in which the cluster is deployed.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the cluster belongs. You can use resource groups to isolate clusters.
     *
     * @example rg-acfm3mkrure****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The container runtime. The default container runtime is Docker. containerd and Sandboxed-Container are also supported.
     *
     * For more information about how to select a proper container runtime, see [How to select between Docker and Sandboxed-Container](~~160313~~).
     * @var Runtime
     */
    public $runtime;

    /**
     * @description The ID of an existing security group. You need to choose between this parameter and the `is_enterprise_security_group` parameter. Cluster nodes are automatically added to the security group.
     *
     * @example sg-bp1bdue0qc1g7k****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description Service accounts provide identities for pods when pods communicate with the `API server` of the cluster. `service-account-issuer` is the issuer of the `serviceaccount token`, which corresponds to the `iss` field in the `token payload`.
     *
     * For more information about `ServiceAccount`, see [Enable service account token volume projection](~~160384~~).
     * @example kubernetes.default.svc
     *
     * @var string
     */
    public $serviceAccountIssuer;

    /**
     * @description The CIDR block of Services. Valid values: 10.0.0.0/16-24, 172.16-31.0.0/16-24, and 192.168.0.0/16-24. The CIDR block of Services cannot overlap with the CIDR block of the VPC (10.1.0.0/21) or the CIDR blocks of existing clusters in the VPC. You cannot modify the CIDR block of Services after the cluster is created.
     *
     * By default, the CIDR block of Services is set to 172.19.0.0/20.
     * @example 172.21.0.0/20
     *
     * @var string
     */
    public $serviceCidr;

    /**
     * @description The type of service discovery that is implemented in the `ACK Serverless` cluster.
     *
     *   `CoreDNS`: CoreDNS is a standard service discovery plug-in that is provided by open source Kubernetes. To use DNS resolution, you must provision pods. By default, two elastic container instances are used. The specification of each instance is 0.25 vCores and 512 MiB of memory.
     *   `PrivateZone`: a DNS resolution service provided by Alibaba Cloud. You must activate Alibaba Cloud DNS PrivateZone before you can use it for service discovery.
     *
     * By default, this parameter is not specified.
     * @var string[]
     */
    public $serviceDiscoveryTypes;

    /**
     * @description Specifies whether to configure Source Network Address Translation (SNAT) rules for the VPC where your cluster is deployed. Valid values:
     *
     *   `true`: automatically creates a NAT gateway and configures SNAT rules. Set this parameter to `true` if nodes and applications in the cluster need to access the Internet.
     *   `false`: does not create a NAT gateway or configure SNAT rules. In this case, nodes and applications in the cluster cannot access the Internet.
     *
     * Default value: `true`.
     * @example true
     *
     * @var bool
     */
    public $snatEntry;

    /**
     * @description Specifies whether to enable reinforcement based on Multi-Level Protection Scheme (MLPS). For more information, see [ACK reinforcement based on classified protection](~~196148~~).
     *
     * Valid values:
     *
     *   `true`: enables reinforcement based on MLPS.
     *   `false`: disables reinforcement based on MLPS.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $socEnabled;

    /**
     * @description Specifies whether to enable SSH logon. If this parameter is set to true, you can log on to master nodes in an ACK dedicated cluster over the Internet. This parameter does not take effect in ACK managed clusters. Valid values:
     *
     *   `true`: enables SSH logon.
     *   `false`: disables SSH logon.
     *
     * Default value: `false`.
     * @example true
     *
     * @var bool
     */
    public $sshFlags;

    /**
     * @description The tags to be added to nodes. You must add tags based on the following rules:
     *
     *   A tag is a case-sensitive key-value pair. You can add up to 20 tags.
     *   When you add a tag, you must specify a unique key but you can leave the value empty. A key cannot exceed 64 characters in length and a value cannot exceed 128 characters in length. Keys and values cannot start with aliyun, acs:, https://, or http://. For more information, see [Labels and Selectors](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#syntax-and-character-set).
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * @description The taints of the nodes in the node pool. Taints can be used together with tolerations to avoid scheduling pods to specified nodes. For more information, see [taint-and-toleration](https://kubernetes.io/zh/docs/concepts/scheduling-eviction/taint-and-toleration/).
     *
     * @var Taint[]
     */
    public $taints;

    /**
     * @description Specifies the timeout period of cluster creation. Unit: minutes.
     *
     * Default value: `60`.
     * @example 60
     *
     * @var int
     */
    public $timeoutMins;

    /**
     * @description The time zone of the cluster.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @description The custom Certificate Authority (CA) certificate used by the cluster.
     *
     * @example -----BEGIN CERTIFICATE-----****
     *
     * @var string
     */
    public $userCa;

    /**
     * @description The user data of nodes.
     *
     * @example IyEvdXNyL2Jpbi9iYXNoCmVjaG8gIkhlbGxvIEFD****
     *
     * @var string
     */
    public $userData;

    /**
     * @description The virtual private cloud (VPC) in which you want to deploy the cluster. This parameter is required.
     *
     * @example vpc-2zeik9h3ahvv2zz95****
     *
     * @var string
     */
    public $vpcid;

    /**
     * @description The vSwitches that are specified for nodes in the cluster. This parameter is required when you create an ACK managed cluster that does not contain nodes.
     *
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @description Specifies whether to enable auto renewal for worker nodes. This parameter takes effect and is required only if `worker_instance_charge_type` is set to `PrePaid`. Valid values:
     *
     *   `true`: enables auto-renewal.
     *   `false`: disables auto-renewal.
     *
     * Default value: `true`.
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $workerAutoRenew;

    /**
     * @description The cycle of auto-renewal. This parameter takes effect and is required only if the subscription billing method is selected for worker nodes.
     *
     * Valid values: 1, 2, 3, 6, and 12.
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $workerAutoRenewPeriod;

    /**
     * @description The configurations of the data disks that you want to mount to worker nodes. The configurations include the disk type and disk size.
     *
     * @deprecated
     *
     * @var workerDataDisks[]
     */
    public $workerDataDisks;

    /**
     * @description The billing method of worker nodes. Valid values:
     *
     *   `PrePaid`: subscription.
     *   `PostPaid`: pay-as-you-go.
     *
     * Default value: PostPaid.
     * @example PrePaid
     *
     * @deprecated
     *
     * @var string
     */
    public $workerInstanceChargeType;

    /**
     * @description The instance configurations of worker nodes.
     *
     * @deprecated
     *
     * @var string[]
     */
    public $workerInstanceTypes;

    /**
     * @description The subscription duration of worker nodes. This parameter takes effect and is required only if `worker_instance_charge_type` is set to `PrePaid`.
     *
     * Default value: 1.
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $workerPeriod;

    /**
     * @description The billing cycle of worker nodes. This parameter is required if worker_instance_charge_type is set to `PrePaid`.
     *
     * Set the value to `Month`. Worker nodes are billed only on a monthly basis.
     * @example Month
     *
     * @deprecated
     *
     * @var string
     */
    public $workerPeriodUnit;

    /**
     * @description The category of the system disks for worker nodes. For more information, see [Elastic Block Storage devices](~~63136~~).
     *
     * Valid values:
     *
     *   `cloud_efficiency`: ultra disk.
     *   `cloud_ssd`: standard SSD.
     *
     * Default value: `cloud_ssd`.
     * @example cloud_efficiency
     *
     * @deprecated
     *
     * @var string
     */
    public $workerSystemDiskCategory;

    /**
     * @description If the system disk is an ESSD, you can set the PL of the ESSD. For more information, see [Enhanced SSDs](~~122389~~).
     *
     * Valid values:
     *
     *   PL0
     *   PL1
     *   PL2
     *   PL3
     *
     * @example PL1
     *
     * @deprecated
     *
     * @var string
     */
    public $workerSystemDiskPerformanceLevel;

    /**
     * @description The system disk size of worker nodes. Unit: GiB.
     *
     * Default value: `120`.
     * @example 120
     *
     * @deprecated
     *
     * @var int
     */
    public $workerSystemDiskSize;

    /**
     * @description The ID of the automatic snapshot policy that is used by the system disk specified for worker nodes.
     *
     * @example sp-2zej1nogjvovnz4z****
     *
     * @deprecated
     *
     * @var string
     */
    public $workerSystemDiskSnapshotPolicyId;

    /**
     * @description The list of vSwitches that are specified for nodes. Each node is allocated a vSwitch.
     *
     * The `worker_vswitch_ids` parameter is optional but the `vswitch_ids` parameter is required when you create an ACK managed cluster that does not contain nodes.
     * @deprecated
     *
     * @var string[]
     */
    public $workerVswitchIds;

    /**
     * @description The ID of the zone to which the cluster belongs. This parameter takes effect in only ACK Serverless clusters.
     *
     * When you create an ACK Serverless cluster, you must configure `zone_id` if `vpc_id` and `vswitch_ids` are not configured. This way, the system automatically creates a VPC in the specified zone.
     * @example cn-beiji****
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accessControlList'                => 'access_control_list',
        'addons'                           => 'addons',
        'apiAudiences'                     => 'api_audiences',
        'chargeType'                       => 'charge_type',
        'cisEnabled'                       => 'cis_enabled',
        'cloudMonitorFlags'                => 'cloud_monitor_flags',
        'clusterDomain'                    => 'cluster_domain',
        'clusterSpec'                      => 'cluster_spec',
        'clusterType'                      => 'cluster_type',
        'containerCidr'                    => 'container_cidr',
        'controlplaneLogComponents'        => 'controlplane_log_components',
        'controlplaneLogProject'           => 'controlplane_log_project',
        'controlplaneLogTtl'               => 'controlplane_log_ttl',
        'cpuPolicy'                        => 'cpu_policy',
        'customSan'                        => 'custom_san',
        'deletionProtection'               => 'deletion_protection',
        'disableRollback'                  => 'disable_rollback',
        'enableRrsa'                       => 'enable_rrsa',
        'encryptionProviderKey'            => 'encryption_provider_key',
        'endpointPublicAccess'             => 'endpoint_public_access',
        'formatDisk'                       => 'format_disk',
        'imageId'                          => 'image_id',
        'imageType'                        => 'image_type',
        'instances'                        => 'instances',
        'ipStack'                          => 'ip_stack',
        'isEnterpriseSecurityGroup'        => 'is_enterprise_security_group',
        'keepInstanceName'                 => 'keep_instance_name',
        'keyPair'                          => 'key_pair',
        'kubernetesVersion'                => 'kubernetes_version',
        'loadBalancerSpec'                 => 'load_balancer_spec',
        'loggingType'                      => 'logging_type',
        'loginPassword'                    => 'login_password',
        'masterAutoRenew'                  => 'master_auto_renew',
        'masterAutoRenewPeriod'            => 'master_auto_renew_period',
        'masterCount'                      => 'master_count',
        'masterInstanceChargeType'         => 'master_instance_charge_type',
        'masterInstanceTypes'              => 'master_instance_types',
        'masterPeriod'                     => 'master_period',
        'masterPeriodUnit'                 => 'master_period_unit',
        'masterSystemDiskCategory'         => 'master_system_disk_category',
        'masterSystemDiskPerformanceLevel' => 'master_system_disk_performance_level',
        'masterSystemDiskSize'             => 'master_system_disk_size',
        'masterSystemDiskSnapshotPolicyId' => 'master_system_disk_snapshot_policy_id',
        'masterVswitchIds'                 => 'master_vswitch_ids',
        'name'                             => 'name',
        'natGateway'                       => 'nat_gateway',
        'nodeCidrMask'                     => 'node_cidr_mask',
        'nodeNameMode'                     => 'node_name_mode',
        'nodePortRange'                    => 'node_port_range',
        'nodepools'                        => 'nodepools',
        'numOfNodes'                       => 'num_of_nodes',
        'osType'                           => 'os_type',
        'period'                           => 'period',
        'periodUnit'                       => 'period_unit',
        'platform'                         => 'platform',
        'podVswitchIds'                    => 'pod_vswitch_ids',
        'profile'                          => 'profile',
        'proxyMode'                        => 'proxy_mode',
        'rdsInstances'                     => 'rds_instances',
        'regionId'                         => 'region_id',
        'resourceGroupId'                  => 'resource_group_id',
        'runtime'                          => 'runtime',
        'securityGroupId'                  => 'security_group_id',
        'serviceAccountIssuer'             => 'service_account_issuer',
        'serviceCidr'                      => 'service_cidr',
        'serviceDiscoveryTypes'            => 'service_discovery_types',
        'snatEntry'                        => 'snat_entry',
        'socEnabled'                       => 'soc_enabled',
        'sshFlags'                         => 'ssh_flags',
        'tags'                             => 'tags',
        'taints'                           => 'taints',
        'timeoutMins'                      => 'timeout_mins',
        'timezone'                         => 'timezone',
        'userCa'                           => 'user_ca',
        'userData'                         => 'user_data',
        'vpcid'                            => 'vpcid',
        'vswitchIds'                       => 'vswitch_ids',
        'workerAutoRenew'                  => 'worker_auto_renew',
        'workerAutoRenewPeriod'            => 'worker_auto_renew_period',
        'workerDataDisks'                  => 'worker_data_disks',
        'workerInstanceChargeType'         => 'worker_instance_charge_type',
        'workerInstanceTypes'              => 'worker_instance_types',
        'workerPeriod'                     => 'worker_period',
        'workerPeriodUnit'                 => 'worker_period_unit',
        'workerSystemDiskCategory'         => 'worker_system_disk_category',
        'workerSystemDiskPerformanceLevel' => 'worker_system_disk_performance_level',
        'workerSystemDiskSize'             => 'worker_system_disk_size',
        'workerSystemDiskSnapshotPolicyId' => 'worker_system_disk_snapshot_policy_id',
        'workerVswitchIds'                 => 'worker_vswitch_ids',
        'zoneId'                           => 'zone_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlList) {
            $res['access_control_list'] = $this->accessControlList;
        }
        if (null !== $this->addons) {
            $res['addons'] = [];
            if (null !== $this->addons && \is_array($this->addons)) {
                $n = 0;
                foreach ($this->addons as $item) {
                    $res['addons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->apiAudiences) {
            $res['api_audiences'] = $this->apiAudiences;
        }
        if (null !== $this->chargeType) {
            $res['charge_type'] = $this->chargeType;
        }
        if (null !== $this->cisEnabled) {
            $res['cis_enabled'] = $this->cisEnabled;
        }
        if (null !== $this->cloudMonitorFlags) {
            $res['cloud_monitor_flags'] = $this->cloudMonitorFlags;
        }
        if (null !== $this->clusterDomain) {
            $res['cluster_domain'] = $this->clusterDomain;
        }
        if (null !== $this->clusterSpec) {
            $res['cluster_spec'] = $this->clusterSpec;
        }
        if (null !== $this->clusterType) {
            $res['cluster_type'] = $this->clusterType;
        }
        if (null !== $this->containerCidr) {
            $res['container_cidr'] = $this->containerCidr;
        }
        if (null !== $this->controlplaneLogComponents) {
            $res['controlplane_log_components'] = $this->controlplaneLogComponents;
        }
        if (null !== $this->controlplaneLogProject) {
            $res['controlplane_log_project'] = $this->controlplaneLogProject;
        }
        if (null !== $this->controlplaneLogTtl) {
            $res['controlplane_log_ttl'] = $this->controlplaneLogTtl;
        }
        if (null !== $this->cpuPolicy) {
            $res['cpu_policy'] = $this->cpuPolicy;
        }
        if (null !== $this->customSan) {
            $res['custom_san'] = $this->customSan;
        }
        if (null !== $this->deletionProtection) {
            $res['deletion_protection'] = $this->deletionProtection;
        }
        if (null !== $this->disableRollback) {
            $res['disable_rollback'] = $this->disableRollback;
        }
        if (null !== $this->enableRrsa) {
            $res['enable_rrsa'] = $this->enableRrsa;
        }
        if (null !== $this->encryptionProviderKey) {
            $res['encryption_provider_key'] = $this->encryptionProviderKey;
        }
        if (null !== $this->endpointPublicAccess) {
            $res['endpoint_public_access'] = $this->endpointPublicAccess;
        }
        if (null !== $this->formatDisk) {
            $res['format_disk'] = $this->formatDisk;
        }
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->imageType) {
            $res['image_type'] = $this->imageType;
        }
        if (null !== $this->instances) {
            $res['instances'] = $this->instances;
        }
        if (null !== $this->ipStack) {
            $res['ip_stack'] = $this->ipStack;
        }
        if (null !== $this->isEnterpriseSecurityGroup) {
            $res['is_enterprise_security_group'] = $this->isEnterpriseSecurityGroup;
        }
        if (null !== $this->keepInstanceName) {
            $res['keep_instance_name'] = $this->keepInstanceName;
        }
        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }
        if (null !== $this->kubernetesVersion) {
            $res['kubernetes_version'] = $this->kubernetesVersion;
        }
        if (null !== $this->loadBalancerSpec) {
            $res['load_balancer_spec'] = $this->loadBalancerSpec;
        }
        if (null !== $this->loggingType) {
            $res['logging_type'] = $this->loggingType;
        }
        if (null !== $this->loginPassword) {
            $res['login_password'] = $this->loginPassword;
        }
        if (null !== $this->masterAutoRenew) {
            $res['master_auto_renew'] = $this->masterAutoRenew;
        }
        if (null !== $this->masterAutoRenewPeriod) {
            $res['master_auto_renew_period'] = $this->masterAutoRenewPeriod;
        }
        if (null !== $this->masterCount) {
            $res['master_count'] = $this->masterCount;
        }
        if (null !== $this->masterInstanceChargeType) {
            $res['master_instance_charge_type'] = $this->masterInstanceChargeType;
        }
        if (null !== $this->masterInstanceTypes) {
            $res['master_instance_types'] = $this->masterInstanceTypes;
        }
        if (null !== $this->masterPeriod) {
            $res['master_period'] = $this->masterPeriod;
        }
        if (null !== $this->masterPeriodUnit) {
            $res['master_period_unit'] = $this->masterPeriodUnit;
        }
        if (null !== $this->masterSystemDiskCategory) {
            $res['master_system_disk_category'] = $this->masterSystemDiskCategory;
        }
        if (null !== $this->masterSystemDiskPerformanceLevel) {
            $res['master_system_disk_performance_level'] = $this->masterSystemDiskPerformanceLevel;
        }
        if (null !== $this->masterSystemDiskSize) {
            $res['master_system_disk_size'] = $this->masterSystemDiskSize;
        }
        if (null !== $this->masterSystemDiskSnapshotPolicyId) {
            $res['master_system_disk_snapshot_policy_id'] = $this->masterSystemDiskSnapshotPolicyId;
        }
        if (null !== $this->masterVswitchIds) {
            $res['master_vswitch_ids'] = $this->masterVswitchIds;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->natGateway) {
            $res['nat_gateway'] = $this->natGateway;
        }
        if (null !== $this->nodeCidrMask) {
            $res['node_cidr_mask'] = $this->nodeCidrMask;
        }
        if (null !== $this->nodeNameMode) {
            $res['node_name_mode'] = $this->nodeNameMode;
        }
        if (null !== $this->nodePortRange) {
            $res['node_port_range'] = $this->nodePortRange;
        }
        if (null !== $this->nodepools) {
            $res['nodepools'] = [];
            if (null !== $this->nodepools && \is_array($this->nodepools)) {
                $n = 0;
                foreach ($this->nodepools as $item) {
                    $res['nodepools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->numOfNodes) {
            $res['num_of_nodes'] = $this->numOfNodes;
        }
        if (null !== $this->osType) {
            $res['os_type'] = $this->osType;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['period_unit'] = $this->periodUnit;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }
        if (null !== $this->podVswitchIds) {
            $res['pod_vswitch_ids'] = $this->podVswitchIds;
        }
        if (null !== $this->profile) {
            $res['profile'] = $this->profile;
        }
        if (null !== $this->proxyMode) {
            $res['proxy_mode'] = $this->proxyMode;
        }
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
        }
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }
        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
        }
        if (null !== $this->securityGroupId) {
            $res['security_group_id'] = $this->securityGroupId;
        }
        if (null !== $this->serviceAccountIssuer) {
            $res['service_account_issuer'] = $this->serviceAccountIssuer;
        }
        if (null !== $this->serviceCidr) {
            $res['service_cidr'] = $this->serviceCidr;
        }
        if (null !== $this->serviceDiscoveryTypes) {
            $res['service_discovery_types'] = $this->serviceDiscoveryTypes;
        }
        if (null !== $this->snatEntry) {
            $res['snat_entry'] = $this->snatEntry;
        }
        if (null !== $this->socEnabled) {
            $res['soc_enabled'] = $this->socEnabled;
        }
        if (null !== $this->sshFlags) {
            $res['ssh_flags'] = $this->sshFlags;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taints) {
            $res['taints'] = [];
            if (null !== $this->taints && \is_array($this->taints)) {
                $n = 0;
                foreach ($this->taints as $item) {
                    $res['taints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeoutMins) {
            $res['timeout_mins'] = $this->timeoutMins;
        }
        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }
        if (null !== $this->userCa) {
            $res['user_ca'] = $this->userCa;
        }
        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
        }
        if (null !== $this->vpcid) {
            $res['vpcid'] = $this->vpcid;
        }
        if (null !== $this->vswitchIds) {
            $res['vswitch_ids'] = $this->vswitchIds;
        }
        if (null !== $this->workerAutoRenew) {
            $res['worker_auto_renew'] = $this->workerAutoRenew;
        }
        if (null !== $this->workerAutoRenewPeriod) {
            $res['worker_auto_renew_period'] = $this->workerAutoRenewPeriod;
        }
        if (null !== $this->workerDataDisks) {
            $res['worker_data_disks'] = [];
            if (null !== $this->workerDataDisks && \is_array($this->workerDataDisks)) {
                $n = 0;
                foreach ($this->workerDataDisks as $item) {
                    $res['worker_data_disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workerInstanceChargeType) {
            $res['worker_instance_charge_type'] = $this->workerInstanceChargeType;
        }
        if (null !== $this->workerInstanceTypes) {
            $res['worker_instance_types'] = $this->workerInstanceTypes;
        }
        if (null !== $this->workerPeriod) {
            $res['worker_period'] = $this->workerPeriod;
        }
        if (null !== $this->workerPeriodUnit) {
            $res['worker_period_unit'] = $this->workerPeriodUnit;
        }
        if (null !== $this->workerSystemDiskCategory) {
            $res['worker_system_disk_category'] = $this->workerSystemDiskCategory;
        }
        if (null !== $this->workerSystemDiskPerformanceLevel) {
            $res['worker_system_disk_performance_level'] = $this->workerSystemDiskPerformanceLevel;
        }
        if (null !== $this->workerSystemDiskSize) {
            $res['worker_system_disk_size'] = $this->workerSystemDiskSize;
        }
        if (null !== $this->workerSystemDiskSnapshotPolicyId) {
            $res['worker_system_disk_snapshot_policy_id'] = $this->workerSystemDiskSnapshotPolicyId;
        }
        if (null !== $this->workerVswitchIds) {
            $res['worker_vswitch_ids'] = $this->workerVswitchIds;
        }
        if (null !== $this->zoneId) {
            $res['zone_id'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['access_control_list'])) {
            if (!empty($map['access_control_list'])) {
                $model->accessControlList = $map['access_control_list'];
            }
        }
        if (isset($map['addons'])) {
            if (!empty($map['addons'])) {
                $model->addons = [];
                $n             = 0;
                foreach ($map['addons'] as $item) {
                    $model->addons[$n++] = null !== $item ? Addon::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['api_audiences'])) {
            $model->apiAudiences = $map['api_audiences'];
        }
        if (isset($map['charge_type'])) {
            $model->chargeType = $map['charge_type'];
        }
        if (isset($map['cis_enabled'])) {
            $model->cisEnabled = $map['cis_enabled'];
        }
        if (isset($map['cloud_monitor_flags'])) {
            $model->cloudMonitorFlags = $map['cloud_monitor_flags'];
        }
        if (isset($map['cluster_domain'])) {
            $model->clusterDomain = $map['cluster_domain'];
        }
        if (isset($map['cluster_spec'])) {
            $model->clusterSpec = $map['cluster_spec'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }
        if (isset($map['container_cidr'])) {
            $model->containerCidr = $map['container_cidr'];
        }
        if (isset($map['controlplane_log_components'])) {
            if (!empty($map['controlplane_log_components'])) {
                $model->controlplaneLogComponents = $map['controlplane_log_components'];
            }
        }
        if (isset($map['controlplane_log_project'])) {
            $model->controlplaneLogProject = $map['controlplane_log_project'];
        }
        if (isset($map['controlplane_log_ttl'])) {
            $model->controlplaneLogTtl = $map['controlplane_log_ttl'];
        }
        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }
        if (isset($map['custom_san'])) {
            $model->customSan = $map['custom_san'];
        }
        if (isset($map['deletion_protection'])) {
            $model->deletionProtection = $map['deletion_protection'];
        }
        if (isset($map['disable_rollback'])) {
            $model->disableRollback = $map['disable_rollback'];
        }
        if (isset($map['enable_rrsa'])) {
            $model->enableRrsa = $map['enable_rrsa'];
        }
        if (isset($map['encryption_provider_key'])) {
            $model->encryptionProviderKey = $map['encryption_provider_key'];
        }
        if (isset($map['endpoint_public_access'])) {
            $model->endpointPublicAccess = $map['endpoint_public_access'];
        }
        if (isset($map['format_disk'])) {
            $model->formatDisk = $map['format_disk'];
        }
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['image_type'])) {
            $model->imageType = $map['image_type'];
        }
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = $map['instances'];
            }
        }
        if (isset($map['ip_stack'])) {
            $model->ipStack = $map['ip_stack'];
        }
        if (isset($map['is_enterprise_security_group'])) {
            $model->isEnterpriseSecurityGroup = $map['is_enterprise_security_group'];
        }
        if (isset($map['keep_instance_name'])) {
            $model->keepInstanceName = $map['keep_instance_name'];
        }
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['kubernetes_version'])) {
            $model->kubernetesVersion = $map['kubernetes_version'];
        }
        if (isset($map['load_balancer_spec'])) {
            $model->loadBalancerSpec = $map['load_balancer_spec'];
        }
        if (isset($map['logging_type'])) {
            $model->loggingType = $map['logging_type'];
        }
        if (isset($map['login_password'])) {
            $model->loginPassword = $map['login_password'];
        }
        if (isset($map['master_auto_renew'])) {
            $model->masterAutoRenew = $map['master_auto_renew'];
        }
        if (isset($map['master_auto_renew_period'])) {
            $model->masterAutoRenewPeriod = $map['master_auto_renew_period'];
        }
        if (isset($map['master_count'])) {
            $model->masterCount = $map['master_count'];
        }
        if (isset($map['master_instance_charge_type'])) {
            $model->masterInstanceChargeType = $map['master_instance_charge_type'];
        }
        if (isset($map['master_instance_types'])) {
            if (!empty($map['master_instance_types'])) {
                $model->masterInstanceTypes = $map['master_instance_types'];
            }
        }
        if (isset($map['master_period'])) {
            $model->masterPeriod = $map['master_period'];
        }
        if (isset($map['master_period_unit'])) {
            $model->masterPeriodUnit = $map['master_period_unit'];
        }
        if (isset($map['master_system_disk_category'])) {
            $model->masterSystemDiskCategory = $map['master_system_disk_category'];
        }
        if (isset($map['master_system_disk_performance_level'])) {
            $model->masterSystemDiskPerformanceLevel = $map['master_system_disk_performance_level'];
        }
        if (isset($map['master_system_disk_size'])) {
            $model->masterSystemDiskSize = $map['master_system_disk_size'];
        }
        if (isset($map['master_system_disk_snapshot_policy_id'])) {
            $model->masterSystemDiskSnapshotPolicyId = $map['master_system_disk_snapshot_policy_id'];
        }
        if (isset($map['master_vswitch_ids'])) {
            if (!empty($map['master_vswitch_ids'])) {
                $model->masterVswitchIds = $map['master_vswitch_ids'];
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nat_gateway'])) {
            $model->natGateway = $map['nat_gateway'];
        }
        if (isset($map['node_cidr_mask'])) {
            $model->nodeCidrMask = $map['node_cidr_mask'];
        }
        if (isset($map['node_name_mode'])) {
            $model->nodeNameMode = $map['node_name_mode'];
        }
        if (isset($map['node_port_range'])) {
            $model->nodePortRange = $map['node_port_range'];
        }
        if (isset($map['nodepools'])) {
            if (!empty($map['nodepools'])) {
                $model->nodepools = [];
                $n                = 0;
                foreach ($map['nodepools'] as $item) {
                    $model->nodepools[$n++] = null !== $item ? Nodepool::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['num_of_nodes'])) {
            $model->numOfNodes = $map['num_of_nodes'];
        }
        if (isset($map['os_type'])) {
            $model->osType = $map['os_type'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }
        if (isset($map['period_unit'])) {
            $model->periodUnit = $map['period_unit'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }
        if (isset($map['pod_vswitch_ids'])) {
            if (!empty($map['pod_vswitch_ids'])) {
                $model->podVswitchIds = $map['pod_vswitch_ids'];
            }
        }
        if (isset($map['profile'])) {
            $model->profile = $map['profile'];
        }
        if (isset($map['proxy_mode'])) {
            $model->proxyMode = $map['proxy_mode'];
        }
        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = $map['rds_instances'];
            }
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['runtime'])) {
            $model->runtime = Runtime::fromMap($map['runtime']);
        }
        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
        }
        if (isset($map['service_account_issuer'])) {
            $model->serviceAccountIssuer = $map['service_account_issuer'];
        }
        if (isset($map['service_cidr'])) {
            $model->serviceCidr = $map['service_cidr'];
        }
        if (isset($map['service_discovery_types'])) {
            if (!empty($map['service_discovery_types'])) {
                $model->serviceDiscoveryTypes = $map['service_discovery_types'];
            }
        }
        if (isset($map['snat_entry'])) {
            $model->snatEntry = $map['snat_entry'];
        }
        if (isset($map['soc_enabled'])) {
            $model->socEnabled = $map['soc_enabled'];
        }
        if (isset($map['ssh_flags'])) {
            $model->sshFlags = $map['ssh_flags'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n             = 0;
                foreach ($map['taints'] as $item) {
                    $model->taints[$n++] = null !== $item ? Taint::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['timeout_mins'])) {
            $model->timeoutMins = $map['timeout_mins'];
        }
        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }
        if (isset($map['user_ca'])) {
            $model->userCa = $map['user_ca'];
        }
        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }
        if (isset($map['vpcid'])) {
            $model->vpcid = $map['vpcid'];
        }
        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = $map['vswitch_ids'];
            }
        }
        if (isset($map['worker_auto_renew'])) {
            $model->workerAutoRenew = $map['worker_auto_renew'];
        }
        if (isset($map['worker_auto_renew_period'])) {
            $model->workerAutoRenewPeriod = $map['worker_auto_renew_period'];
        }
        if (isset($map['worker_data_disks'])) {
            if (!empty($map['worker_data_disks'])) {
                $model->workerDataDisks = [];
                $n                      = 0;
                foreach ($map['worker_data_disks'] as $item) {
                    $model->workerDataDisks[$n++] = null !== $item ? workerDataDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['worker_instance_charge_type'])) {
            $model->workerInstanceChargeType = $map['worker_instance_charge_type'];
        }
        if (isset($map['worker_instance_types'])) {
            if (!empty($map['worker_instance_types'])) {
                $model->workerInstanceTypes = $map['worker_instance_types'];
            }
        }
        if (isset($map['worker_period'])) {
            $model->workerPeriod = $map['worker_period'];
        }
        if (isset($map['worker_period_unit'])) {
            $model->workerPeriodUnit = $map['worker_period_unit'];
        }
        if (isset($map['worker_system_disk_category'])) {
            $model->workerSystemDiskCategory = $map['worker_system_disk_category'];
        }
        if (isset($map['worker_system_disk_performance_level'])) {
            $model->workerSystemDiskPerformanceLevel = $map['worker_system_disk_performance_level'];
        }
        if (isset($map['worker_system_disk_size'])) {
            $model->workerSystemDiskSize = $map['worker_system_disk_size'];
        }
        if (isset($map['worker_system_disk_snapshot_policy_id'])) {
            $model->workerSystemDiskSnapshotPolicyId = $map['worker_system_disk_snapshot_policy_id'];
        }
        if (isset($map['worker_vswitch_ids'])) {
            if (!empty($map['worker_vswitch_ids'])) {
                $model->workerVswitchIds = $map['worker_vswitch_ids'];
            }
        }
        if (isset($map['zone_id'])) {
            $model->zoneId = $map['zone_id'];
        }

        return $model;
    }
}

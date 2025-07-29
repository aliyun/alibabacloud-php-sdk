<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\auditLogConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\autoMode;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\controlPlaneConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\operationPolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\rrsaConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\workerDataDisks;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @description The network access control list (ACL) rule of the SLB instance associated with the API server if the cluster is a registered cluster.
     *
     * @var string[]
     */
    public $accessControlList;

    /**
     * @description The components that you want to install in the cluster. When you create a cluster, you can configure the `addons` parameter to specify the components that you want to install.
     *
     **Network plug-in**: required. The Flannel and Terway plug-ins are supported. Select one of the plug-ins for the cluster.
     *
     *   If you want to use the Terway component, specify the network plug-in in the [{"name":"flannel","config":""}] format.
     *   If you want to use the Terway component, specify the value network plug-in in the [{"name": "terway-eniip","Config": ""}] format.
     *
     **Volume plug-in**: optional. Only the `Container Storage Interface (CSI)` plug-in is supported.
     *
     * Specify the `CSI` plug-in in the following format: [{"name":"csi-plugin","config": ""},{"name": "csi-provisioner","config": ""}].
     *
     **Simple Log Service component**: optional. We recommend that you enable Simple Log Service. If Simple Log Service is disabled, you cannot use the cluster auditing feature.
     *
     *   Specify an existing `Simple Log Service project` in the following format: [{"name": "logtail-ds","config": "{"IngressDashboardEnabled":"true","sls_project_name":"your_sls_project_name"}"}].
     *   To create a `Simple Log Service project`, specify the component in the following format: [{"name": "logtail-ds","config": "{"IngressDashboardEnabled":"true"}"}].
     *
     **Ingress controller**: optional. By default, the `nginx-ingress-controller` component is installed in ACK dedicated clusters.
     *
     *   To install nginx-ingress-controller and enable Internet access, specify the Ingress controller in the following format: [{"name":"nginx-ingress-controller","config":"{"IngressSlbNetworkType":"internet"}"}].
     *   To disable the automatic installation of nginx-ingress-controller, specify the Ingress controller in the following format: [{"name": "nginx-ingress-controller","config": "","disabled": true}].
     *
     **Event center**: optional. By default, the event center feature is enabled.
     *
     * You can use ACK event centers to store and query events and configure alerts. You can use the Logstores that are associated with ACK event centers free of charge within 90 days. For more information, see [Create and use an event center](https://help.aliyun.com/document_detail/150476.html).
     *
     * To enable the event center feature, specify the event center component in the following format: [{"name":"ack-node-problem-detector","config":"{"sls_project_name":"your_sls_project_name"}"}].
     *
     * @var Addon[]
     */
    public $addons;

    /**
     * @description Service accounts provide identities for pods when pods communicate with the `API server` of the cluster. The `api-audiences` parameter validates `tokens` and is used by the `API server` to check whether the `tokens` of requests are valid. Separate multiple values with commas (,).``
     *
     * For more information about `service accounts`, see [Enable service account token volume projection](https://help.aliyun.com/document_detail/160384.html).
     *
     * @example kubernetes.default.svc
     *
     * @var string
     */
    public $apiAudiences;

    /**
     * @var auditLogConfig
     */
    public $auditLogConfig;

    /**
     * @var autoMode
     */
    public $autoMode;

    /**
     * @description [**Deprecated**]
     *
     * Specifies whether to enable auto-renewal. This parameter takes effect only when `charge_type` is set to `PrePaid`. Valid values:
     *
     *   `true`: enables auto-renewal.
     *   `false`: disables auto-renewal.
     *
     * Default value: `false`.
     *
     * This parameter was changed on October 15, 2024. For more information, see [Announcement on changes to the parameter behavior of the CreateCluster operation](https://help.aliyun.com/document_detail/2849194.html).
     *
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description [**Deprecated**]
     *
     * The auto-renewal duration. This parameter takes effect only if charge_type is set to PrePaid and auto_renew is set to true. If you set `period_unit` to Month, the valid values of auto_renew_period are 1, 2, 3, 6, and 12.
     *
     * Default value: 1.
     *
     * This parameter was changed on October 15, 2024. For more information, see [Announcement on changes to the parameter behavior of the CreateCluster operation](https://help.aliyun.com/document_detail/2849194.html).
     *
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description [**Deprecated**]
     *
     * The billing method of the CLB instance that is used by the API server. Default value: PostPaid. Valid values:
     *
     *   PostPaid: pay-as-you-go.
     *   PrePaid: subscription. This billing method is not supported by newly created CLB instances. Existing CLB instances are not affected.
     *
     * >
     *
     *   This parameter was changed on October 15, 2024. For more information, see [Announcement on changes to the parameter behavior of the CreateCluster operation](https://help.aliyun.com/document_detail/2849194.html).
     *
     *   Starting from December 1, 2024, newly created CLB instances no longer support the subscription billing method, and an instance fee will be charged for newly created CLB instances
     *
     * For more information, see [CLB billing adjustments](https://help.aliyun.com/document_detail/2839797.html).
     *
     * @example 1
     *
     * @deprecated
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description [Deprecated] When you configure the control plane, use the `security_hardening_os` parameter in the `control_plane_config` section instead. When you configure a node pool, use the `security_hardening_os` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * @example false
     *
     * @deprecated
     *
     * @var bool
     */
    public $cisEnabled;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `cloud_monitor_flags` parameter in the `control_plane_config` section instead. When you configure a node pool, use the `cms_enabled` parameter of the `kubernetes_config` field in the nodepool section instead.
     *
     * Specifies whether to install the CloudMonitor agent. Valid values:
     *
     *   `true`: installs the CloudMonitor agent.
     *   `false`: does not install the CloudMonitor agent.
     *
     * Default value: `false`.
     *
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @description The domain name of the cluster.
     *
     * The domain name can contain one or more parts that are separated by periods (.). Each part cannot exceed 63 characters in length, and can contain lowercase letters, digits, and hyphens (-). Each part must start and end with a lowercase letter or digit.
     *
     * @example cluster.local
     *
     * @var string
     */
    public $clusterDomain;

    /**
     * @description If you set `cluster_type` to `ManagedKubernetes` and specify `profile`, you can further specify the edition of the cluster. Valid values:
     *
     *   `ack.pro.small`: Pro Edition.
     *   `ack.standard`: Basic Edition. If you leave the parameter empty, an ACK Basic cluster is created.
     *
     * @example ack.pro.small
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description *   `Kubernetes`: ACK dedicated cluster.
     *   `ManagedKubernetes`: ACK managed cluster. ACK managed clusters include ACK Basic clusters, ACK Pro clusters, ACK Serverless clusters (Basic Edition and Pro Edition), ACK Edge clusters (Basic Edition and Pro Edition), and ACK Lingjun clusters (Pro Edition).
     *   `ExternalKubernetes`: registered cluster.
     *
     * This parameter is required.
     *
     * @example Kubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The pod CIDR block. You can specify 10.0.0.0/8, 172.16-31.0.0/12-16, 192.168.0.0/16, or their subnets as the pod CIDR block. The pod CIDR block cannot overlap with the CIDR block of the VPC in which the cluster is deployed and the CIDR blocks of existing clusters in the VPC. You cannot modify the pod CIDR block after you create the cluster.
     *
     * For more information about how to plan the network of an ACK cluster, see [Plan the network of an ACK cluster](https://help.aliyun.com/document_detail/86500.html).
     *
     * >  This parameter is required if the cluster uses the Flannel plug-in.
     *
     * @example 172.20.0.0/16
     *
     * @var string
     */
    public $containerCidr;

    /**
     * @description The control plane configurations of an ACK dedicated cluster.
     *
     * @var controlPlaneConfig
     */
    public $controlPlaneConfig;

    /**
     * @description The control plane components for which you want to enable log collection.
     *
     * By default, the logs of kube-apiserver, kube-controller-manager, and kube-scheduler are collected.
     *
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
     * @description [**Deprecated**] When you configure the control plane, use the `cpu_policy` parameter in the `control_plane_config` section instead. When you configure a node pool, use the `cpu_policy` parameter of the `kubernetes_config` field in the `nodepool` section instead.
     *
     * The CPU management policy of the node. The following policies are supported if the Kubernetes version of the cluster is 1.12.6 or later:
     *
     *   `static`: allows pods with specific resource characteristics on the node to be granted enhanced CPU affinity and exclusivity.
     *   `none`: specifies that the default CPU affinity is used.
     *
     * Default value: `none`.
     *
     * @example none
     *
     * @deprecated
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description The custom subject alternative names (SANs) for the API server certificate to accept requests from specified IP addresses or domain names. Separate multiple IP addresses and domain names with commas (,).
     *
     * @example cs.aliyun.com
     *
     * @deprecated
     *
     * @var string
     */
    public $customSan;

    /**
     * @description Specifies whether to enable cluster deletion protection. If you enable this option, the cluster cannot be deleted in the console or by calling API operations. Valid values:
     *
     *   `true`: enables cluster deletion protection.
     *   `false`: disables cluster deletion protection.
     *
     * Default value: `false`.
     *
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description [**Deprecated**] By default, the system does not perform a rollback when the cluster fails to be created. You must manually delete the cluster that fails to be created.
     *
     * Specifies whether to perform a rollback when the cluster fails to be created. Valid values:
     *
     *   `true`: performs a rollback when the cluster fails to be created.
     *   `false`: does not perform a rollback when the cluster fails to be created.
     *
     * Default value: `true`.
     *
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
     * @deprecated
     *
     * @var bool
     */
    public $enableRrsa;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used to encrypt the system disk. For more information, see [What is KMS?](https://help.aliyun.com/document_detail/28935.html)
     *
     * >  The key can be used only in ACK Pro clusters.
     *
     * @example 0fe64791-55eb-4fc7-84c5-c6c7cdca****
     *
     * @var string
     */
    public $encryptionProviderKey;

    /**
     * @description Specifies whether to enable Internet access for the cluster. You can use an elastic IP address (EIP) to expose the API server. This way, you can access the cluster over the Internet. Valid values:
     *
     *   `true`: enables Internet access for the cluster.
     *   `false`: disables Internet access for the cluster. If you set the value to false, the API server cannot be accessed over the Internet.
     *
     * Default value: `false`.
     *
     * @example true
     *
     * @var bool
     */
    public $endpointPublicAccess;

    /**
     * @var string[]
     */
    public $extraSans;

    /**
     * @description [**Deprecated**] When you configure a node pool, you cannot add existing nodes to the cluster. If you want to add existing nodes, you must first create a node pool and then call the [AttachInstancesToNodePool](https://help.aliyun.com/document_detail/2667920.html) operation.
     *
     * Specifies whether to mount a data disk to a node that is created based on an existing ECS instance. Valid values:
     *
     *   `true`: stores the data of containers and images on a data disk. The existing data stored in the data disk is lost. Back up the existing data first.
     *   `false`: does not store the data of containers and images on a data disk.
     *
     * Default value: `false`.
     *
     * How data disks are mounted:
     *
     *   If an ECS instance has data disks mounted and the file system of the last data disk is not initialized, the system automatically formats the data disk to ext4. Then, the system mounts the data disk to /var/lib/docker and /var/lib/kubelet.
     *   If no data disk is mounted to the ECS instance, the system does not purchase a new data disk.
     *
     * @example false
     *
     * @deprecated
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `image_id` parameter in the `control_plane_config` section instead. When you configure a node pool, use the `image_id` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The custom image for nodes. By default, the image provided by ACK is used. You can select a custom image to replace the default image. For more information, see [Use a custom image to create an ACK cluster](https://help.aliyun.com/document_detail/146647.html).
     *
     * @example m-bp16z7xko3vvv8gt****
     *
     * @deprecated
     *
     * @var string
     */
    public $imageId;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `image_type` parameter in the `control_plane_config` section instead. When you configure a node pool, use the `image_type` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The type of OS distribution that you want to use. To specify the node OS, we recommend that you use this parameter. Valid values:
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
     *
     * @example AliyunLinux
     *
     * @deprecated
     *
     * @var string
     */
    public $imageType;

    /**
     * @description [**Deprecated**] When you configure a node pool, you cannot add existing nodes to the cluster. If you want to add existing nodes, you must first create a node pool and then call the [AttachInstancesToNodePool](https://help.aliyun.com/document_detail/2667920.html) operation.
     *
     * The existing ECS instances that are specified as worker nodes for the cluster.
     *
     * >  This parameter is required if you create worker nodes on existing ECS instances.
     *
     * @deprecated
     *
     * @var string[]
     */
    public $instances;

    /**
     * @description The IP stack of the cluster.
     *
     * @example Optional value: ipv4 (Single stack) or ipv6 (Dual Stack)
     * Default value: IPV4
     *
     * @var string
     */
    public $ipStack;

    /**
     * @description Specifies whether to create an advanced security group. This parameter takes effect only if `security_group_id` is left empty.
     *
     * >  To use a basic security group, make sure that the sum of the number of nodes in the cluster and the number of pods that use Terway does not exceed 2,000. Therefore, we recommend that you specify an advanced security group for a cluster that uses Terway.
     *
     *   `true`: creates an advanced security group.
     *   `false`: does not create an advanced security group.
     *
     * Default value: `true`.
     *
     * @example true
     *
     * @var bool
     */
    public $isEnterpriseSecurityGroup;

    /**
     * @description [**Deprecated**] When you configure a node pool, you cannot add existing nodes to the cluster. If you want to add existing nodes, you must first create a node pool and then call the [AttachInstancesToNodePool](https://help.aliyun.com/document_detail/2667920.html) operation.
     *
     * Specifies whether to retain the names of existing ECS instances that are used in the cluster. Valid values:
     *
     *   `true`: retains the names.
     *   `false`: does not retain the names. The system assigns new names.
     *
     * Default value: `true`.
     *
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `key_pair` parameter in the `control_plane_config` section instead. When you configure a node pool, use the `key_pair` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The name of the key pair. You must configure this parameter or `login_password`.
     *
     * @example secrity-key
     *
     * @deprecated
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description The Kubernetes version of the cluster. The Kubernetes versions supported by ACK are the same as the Kubernetes versions supported by open source Kubernetes. We recommend that you specify the latest Kubernetes version. If you do not specify this parameter, the latest Kubernetes version is used.
     *
     * You can create ACK clusters of the latest three Kubernetes versions in the ACK console. If you want to create clusters that run earlier Kubernetes versions, use the ACK API. For more information about the Kubernetes versions supported by ACK, see [Support for Kubernetes versions](https://help.aliyun.com/document_detail/185269.html).
     *
     * @example 1.16.9-aliyun.1
     *
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @description Specifies the ID of the CLB instance for accessing the API server. If this parameter is specified, the system does not automatically create a CLB instance for the API server.
     *
     * >  Make sure that the CLB instance does not have other dependencies, such as listeners and backend servers. You cannot specify shared-resource or Internet-facing CLB instances.
     *
     * @example lb-wz9t256gqa3vbouk****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description [**Deprecated**] The pay-as-you-go billing method is used by Classic Load Balancer (CLB) instances. This parameter does not take effect.
     *
     * The specification of the Server Load Balancer (SLB) instance. Valid values:
     *
     *   slb.s1.small
     *   slb.s2.small
     *   slb.s2.medium
     *   slb.s3.small
     *   slb.s3.medium
     *   slb.s3.large
     *
     * Default value: `slb.s2.small`.
     *
     * @example slb.s2.small
     *
     * @deprecated
     *
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @description Enables Simple Log Service for the cluster. This parameter takes effect only for ACK Serverless clusters. Set the value to `SLS`.
     *
     * @example SLS
     *
     * @var string
     */
    public $loggingType;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `login_password` parameter in the `control_plane_config` section instead. When you configure a node pool, use the `login_password` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The password for SSH logon. You must set this parameter or `key_pair`. The password must be 8 to 30 characters in length, and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *
     * @example Hello@1234
     *
     * @deprecated
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description The configurations of the cluster maintenance window.
     *
     * @var MaintenanceWindow
     */
    public $maintenanceWindow;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `auto-renew` parameter in the `control_plane_config` section instead.
     *
     * Specifies whether to enable auto-renewal for master nodes. This parameter takes effect only when `master_instance_charge_type` is set to `PrePaid`. Valid values:
     *
     *   `true`: enables auto-renewal.
     *   `false`: disables auto-renewal.
     *
     * Default value: `true`.
     *
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $masterAutoRenew;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `auto-renew_period` parameter in the `control_plane_config` section instead.
     *
     * The auto-renewal duration. This parameter takes effect and is required only when the subscription billing method is selected for master nodes.
     *
     * Valid values: 1, 2, 3, 6, and 12.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $masterAutoRenewPeriod;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `size` parameter in the `control_plane_config` section instead.
     *
     * The number of master nodes. Valid values: `3` and `5`.
     *
     * Default value: `3`.
     *
     * @example 3
     *
     * @deprecated
     *
     * @var int
     */
    public $masterCount;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `instance_charge_type` parameter in the `control_plane_config` section instead.
     *
     * The billing method of master nodes. Valid values:
     *
     *   `PrePaid`: subscription.
     *   `PostPaid`: pay-as-you-go.
     *
     * Default value: `PostPaid`.
     *
     * @example PrePaid
     *
     * @deprecated
     *
     * @var string
     */
    public $masterInstanceChargeType;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `instance_types` parameter in the `control_plane_config` section instead.
     *
     * The instance types of master nodes. For more information, see [Overview of instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * @deprecated
     *
     * @var string[]
     */
    public $masterInstanceTypes;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `unit` parameter in the `control_plane_config` section instead.
     *
     * The subscription duration of master nodes. This parameter takes effect and is required only when `master_instance_charge_type` is set to `PrePaid`.
     *
     * Valid values: 1, 2, 3, 6, 12, 24, 36, 48, and 60.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $masterPeriod;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `period_unit` parameter in the `control_plane_config` section instead.
     *
     * The billing cycle of the master nodes in the cluster. This parameter is required if master_instance_charge_type is set to `PrePaid`.
     *
     * Valid value: `Month`, which indicates that master nodes are billed only on a monthly basis.
     *
     * @example Month
     *
     * @deprecated
     *
     * @var string
     */
    public $masterPeriodUnit;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `system_disk_category` parameter in the `control_plane_config` section instead.
     *
     * The system disk category of master nodes. Valid values:
     *
     *   `cloud_efficiency`: ultra disk.
     *   `cloud_ssd`: standard SSD.
     *   `cloud_essd`: Enterprise SSD (ESSD).
     *
     * Default value: `cloud_ssd`. The default value may vary in different zones.
     *
     * @example cloud_ssd
     *
     * @deprecated
     *
     * @var string
     */
    public $masterSystemDiskCategory;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `system_disk_performance_level` parameter in the `control_plane_config` section instead.
     *
     * The performance level (PL) of the system disk that you want to use for master nodes. This parameter takes effect only for ESSDs. For more information about the relationship between disk PLs and disk sizes, see [ESSDs](https://help.aliyun.com/document_detail/122389.html).
     *
     * @example PL1
     *
     * @deprecated
     *
     * @var string
     */
    public $masterSystemDiskPerformanceLevel;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `system_disk_disk` parameter in the `control_plane_config` section instead.
     *
     * The system disk size of master nodes. Valid values: 40 to 500. Unit: GiB.
     *
     * Default value: `120`.
     *
     * @example 120
     *
     * @deprecated
     *
     * @var int
     */
    public $masterSystemDiskSize;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `system_disk_snapshot_policy_id` parameter in the `control_plane_config` section instead.
     *
     * The ID of the automatic snapshot policy that is used by the system disk specified for master nodes.
     *
     * @example sp-2zej1nogjvovnz4z****
     *
     * @deprecated
     *
     * @var string
     */
    public $masterSystemDiskSnapshotPolicyId;

    /**
     * @description [**Deprecated**] Use the `vswitch_ids` parameter instead.
     *
     * The IDs of the vSwitches that are specified for master nodes. You can specify up to three vSwitches. We recommend that you specify three vSwitches in different zones to ensure high availability.
     *
     * The number of vSwitches must be the same as the value of the `master_count` parameter and also the same as the number of vSwitches specified in the `master_vswitch_ids` parameter.
     *
     * @deprecated
     *
     * @var string[]
     */
    public $masterVswitchIds;

    /**
     * @description The cluster name.
     *
     * The name must be 1 to 63 characters in length, and can contain digits, letters, and hyphens (-). The name cannot start with a hyphen (-).
     *
     * This parameter is required.
     *
     * @example cluster-demo
     *
     * @var string
     */
    public $name;

    /**
     * @description [Deprecated] Use the `snat_entry` parameter instead.
     *
     * @example true
     *
     * @var bool
     */
    public $natGateway;

    /**
     * @description The maximum number of IP addresses that can be assigned to each node. This number is determined by the subnet mask of the specified CIDR block. This parameter takes effect only if the cluster uses the Flannel plug-in.
     *
     * Default value: `26`.
     *
     * @example 25
     *
     * @var string
     */
    public $nodeCidrMask;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `node_name_mode` parameter of the `kubernetes_config` field in the `nodepool` section instead.
     *
     * The custom node name.
     *
     * A custom node name consists of a prefix, a node IP address, and a suffix.
     *
     *   The prefix and suffix can contain multiple parts that are separated by periods (.). Each part can contain lowercase letters, digits, and hyphens (-), and must start and end with a lowercase letter or digit.
     *   The IP substring length specifies the number of digits to be truncated from the end of the node IP address. The IP substring length ranges from 5 to 12.
     *
     * For example, if the node IP address is 192.168.0.55, the prefix is aliyun.com, the IP substring length is 5, and the suffix is test, the node name will aliyun.com00055test.
     *
     * @example aliyun.com00055test
     *
     * @deprecated
     *
     * @var string
     */
    public $nodeNameMode;

    /**
     * @description The node port range. Valid values: 30000 to 65535.
     *
     * Default value: `30000-32767`.
     *
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
     * @description [**Deprecated**] When you configure a node pool, use the `desired_size` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The number of worker nodes. Valid values: 0 to 100.
     *
     * @example 3
     *
     * @deprecated
     *
     * @var int
     */
    public $numOfNodes;

    /**
     * @description The automatic O\\&M policy of the cluster.
     *
     * @var operationPolicy
     */
    public $operationPolicy;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `image_type` parameter in the `control_plane_config` section instead. When you configure a node pool, use the `image_type` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The type of OS. Valid values:
     *
     *   Windows
     *   Linux
     *
     * Default value: `Linux`.
     *
     * @example Linux
     *
     * @deprecated
     *
     * @var string
     */
    public $osType;

    /**
     * @description [**Deprecated**]
     *
     * The subscription duration. This parameter takes effect and is required only when you set charge_type to PrePaid.
     *
     * Valid values: 1, 2, 3, 6, 12, 24, 36, 48, and 60.
     *
     * Default value: 1.
     *
     * This parameter was changed on October 15, 2024. For more information, see [Announcement on changes to the parameter behavior of the CreateCluster operation](https://help.aliyun.com/document_detail/2849194.html).
     *
     * @example FY2023
     *
     * @deprecated
     *
     * @var int
     */
    public $period;

    /**
     * @description [**Deprecated**]
     *
     * The billing cycle. This parameter is required if charge_type is set to PrePaid.
     *
     * Valid value: Month, which indicates that resources are billed only on a monthly basis.
     *
     * This parameter was changed on October 15, 2024. For more information, see [Announcement on changes to the parameter behavior of the CreateCluster operation](https://help.aliyun.com/document_detail/2849194.html).
     *
     * @example Month
     *
     * @deprecated
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `platform` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The OS distribution that is used. Valid values:
     *
     *   CentOS
     *   AliyunLinux
     *   QbootAliyunLinux
     *   Qboot
     *   Windows
     *   WindowsCore
     *
     * Default value: `CentOS`.
     *
     * @example CentOS
     *
     * @deprecated
     *
     * @var string
     */
    public $platform;

    /**
     * @description If you select Terway as the network plug-in, you must allocate vSwitches to pods. For each vSwitch that allocates IP addresses to worker nodes, you must select a vSwitch in the same zone to allocate IP addresses to pods.
     *
     * >  We recommend that you select pod vSwitches whose subnet masks do not exceed 19 bits in length. The maximum subnet mask length of a pod vSwitch is 25 bits. If you select a pod vSwitch whose subnet mask exceeds 25 bits in length, the IP addresses that can be allocated to pods may be insufficient.
     *
     * @var string[]
     */
    public $podVswitchIds;

    /**
     * @description If you set `cluster_type` to `ManagedKubernetes`, an ACK managed cluster is created. In this case, you can further specify the cluster edition. Valid values:
     *
     *   `Default`: ACK managed cluster. ACK managed clusters include ACK Basic clusters and ACK Pro clusters.
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
     *   `iptables`: a mature and stable mode that uses iptables rules to conduct service discovery and load balancing. The performance of this mode is limited by the size of the cluster. This mode is suitable for clusters that run a small number of Services.
     *   `ipvs`: a mode that provides high performance and uses IP Virtual Server (IPVS) to conduct service discovery and load balancing. This mode is suitable for clusters that run a large number of Services. We recommend that you use this mode in scenarios that require high-performance load balancing.
     *
     * Default value: `ipvs`.
     *
     * @example ipvs
     *
     * @var string
     */
    public $proxyMode;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `rds_instances` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The ApsaraDB RDS instances. The pod CIDR block and node CIDR block are added to the whitelists of the ApsaraDB RDS instances. We recommend that you add the pod CIDR block and node CIDR block to the whitelists of the ApsaraDB RDS instances in the ApsaraDB RDS console. If the RDS instances are not in the Running state, new nodes cannot be added to the cluster.
     *
     * @deprecated
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description The ID of the region in which the cluster is deployed. For more information about the regions supported by ACK, see [Regions supported by ACK](https://help.aliyun.com/document_detail/216938.html).
     *
     * This parameter is required.
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
     * @var rrsaConfig
     */
    public $rrsaConfig;

    /**
     * @description The container runtime. The default container runtime is Docker. containerd and Sandboxed-Container are also supported.
     *
     * For more information about how to select a proper container runtime, see [Comparison among Docker, containerd, and Sandboxed-Container](https://help.aliyun.com/document_detail/160313.html).
     *
     * @var Runtime
     */
    public $runtime;

    /**
     * @description The ID of an existing security group. You must specify this parameter or `is_enterprise_security_group`. Cluster nodes are automatically added to the security group.
     *
     * @example sg-bp1bdue0qc1g7k****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `security_hardening_os` parameter in the `control_plane_config` section instead. When you configure a node pool, use the `security_hardening_os` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * Specifies whether to enable Alibaba Cloud Linux Security Hardening. Valid values:
     *
     *   `true`: enables Alibaba Cloud Linux Security Hardening.
     *   `false`: disables Alibaba Cloud Linux Security Hardening.
     *
     * Default value: `false`.
     *
     * @example false
     *
     * @deprecated
     *
     * @var bool
     */
    public $securityHardeningOs;

    /**
     * @description Service accounts provide identities for pods when pods communicate with the `API server` of the cluster. `service-account-issuer` specifies the issuer of the `serviceaccount token`, which is specified by using the `iss` field in the `token payload`.
     *
     * For more information about `ServiceAccount`, see [Enable service account token volume projection](https://help.aliyun.com/document_detail/160384.html).
     *
     * @example kubernetes.default.svc
     *
     * @var string
     */
    public $serviceAccountIssuer;

    /**
     * @description The Service CIDR block. Valid values: 10.0.0.0/16-24, 172.16-31.0.0/16-24, and 192.168.0.0/16-24. The Service CIDR block cannot overlap with the VPC CIDR block (10.1.0.0/21) or the CIDR blocks of existing clusters in the VPC. You cannot modify the Service CIDR block after the cluster is created.
     *
     * By default, the Service CIDR block is set to 172.19.0.0/20.
     *
     * This parameter is required.
     *
     * @example 172.21.0.0/20
     *
     * @var string
     */
    public $serviceCidr;

    /**
     * @description The methods for implementing service discovery in `ACK Serverless` clusters.
     *
     *   `CoreDNS`: a standard service discovery plug-in that is provided by open source Kubernetes. To use DNS resolution, you must provision pods. By default, two elastic container instances are used. The specification of each instance is 0.25 vCores and 512 MiB of memory.
     *   `PrivateZone`: a DNS resolution service provided by Alibaba Cloud. You must activate Alibaba Cloud DNS PrivateZone before you can use it for service discovery.
     *
     * By default, this parameter is not specified.
     *
     * @var string[]
     */
    public $serviceDiscoveryTypes;

    /**
     * @description Specifies whether to configure SNAT rules for the VPC in which your cluster is deployed. Valid values:
     *
     *   `true`: automatically creates a NAT gateway and configures SNAT rules. Set the value to `true` if nodes and applications in the cluster need to access the Internet.
     *   `false`: does not create a NAT gateway or configure SNAT rules. In this case, nodes and applications in the cluster cannot access the Internet.
     *
     * >  If this feature is disabled when you create the cluster, you can also manually enable this feature after you create the cluster. For more information, see [Enable an existing ACK cluster to access the Internet](https://help.aliyun.com/document_detail/178480.html).
     *
     * Default value: `true`.
     *
     * @example true
     *
     * @var bool
     */
    public $snatEntry;

    /**
     * @description [**Deprecated**] When you configure the control plane, use the `soc_enabled` parameter in the `control_plane_config` section instead. When you configure a node pool, use the `soc_enabled` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * Specifies whether to enable Multi-Level Protection Scheme (MLPS) security hardening. For more information, see [ACK security hardening based on MLPS](https://help.aliyun.com/document_detail/196148.html).
     *
     * Valid values:
     *
     *   `true`: enables MLPS security hardening.
     *   `false`: disables MLPS security hardening.
     *
     * Default value: `false`.
     *
     * @example false
     *
     * @deprecated
     *
     * @var bool
     */
    public $socEnabled;

    /**
     * @description Specifies whether to enable SSH logon. If this parameter is set to true, you can log on to master nodes in an ACK dedicated cluster over the Internet. This parameter does not take effect for ACK managed clusters. Valid values:
     *
     *   `true`: enables SSH logon.
     *   `false`: disables SSH logon.
     *
     * Default value: `false`.
     *
     * @example true
     *
     * @var bool
     */
    public $sshFlags;

    /**
     * @description The labels that you want to add to nodes. You must add labels based on the following rules:
     *
     *   A label is a case-sensitive key-value pair. You can add up to 20 labels.
     *   When you add a label, you must specify a unique key, but you can leave the value empty. A key cannot exceed 64 characters in length, and a value cannot exceed 128 characters in length. Keys and values cannot start with aliyun, acs:, https://, or http://. For more information, see [Labels and Selectors](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#syntax-and-character-set).
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `taints` parameter of the `kubernetes_config` field in the `nodepool` section instead.
     *
     * The taints that you want to add to nodes. Taints can be used together with tolerations to avoid scheduling pods to specific nodes. For more information, see [taint-and-toleration](https://kubernetes.io/zh/docs/concepts/scheduling-eviction/taint-and-toleration/).
     *
     * @deprecated
     *
     * @var Taint[]
     */
    public $taints;

    /**
     * @description [**Deprecated**] By default, the system does not perform a rollback when the cluster fails to be created. You must manually delete the cluster that fails to be created.
     *
     * Specifies the timeout period of cluster creation. Unit: minutes.
     *
     * Default value: `60`.
     *
     * @example 60
     *
     * @deprecated
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
     * @description The vSwitches for nodes in the cluster. This parameter is required if you create an ACK managed cluster that does not contain nodes.
     *
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `auto_renew` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * Specifies whether to enable auto-renewal for worker nodes. This parameter takes effect and is required only when `worker_instance_charge_type` is set to `PrePaid`. Valid values:
     *
     *   `true`: enables auto-renewal.
     *   `false`: disables auto-renewal.
     *
     * Default value: `true`.
     *
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $workerAutoRenew;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `auto_renew_period` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The auto-renewal duration of worker nodes. This parameter takes effect and is required only if the subscription billing method is selected for worker nodes.
     *
     * Valid values: 1, 2, 3, 6, and 12.
     *
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $workerAutoRenewPeriod;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `data_disks` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The configurations of the data disks that you want to mount to worker nodes. The configurations include the disk category and disk size.
     *
     * @deprecated
     *
     * @var workerDataDisks[]
     */
    public $workerDataDisks;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `instance_charge_type` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The billing method of worker nodes. Valid values:
     *
     *   `PrePaid`: subscription.
     *   `PostPaid`: pay-as-you-go.
     *
     * Default value: PostPaid.
     *
     * @example PrePaid
     *
     * @deprecated
     *
     * @var string
     */
    public $workerInstanceChargeType;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `instance_types` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The instance configurations of worker nodes.
     *
     * @deprecated
     *
     * @var string[]
     */
    public $workerInstanceTypes;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `period` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The subscription duration of worker nodes. This parameter takes effect and is required only when `worker_instance_charge_type` is set to `PrePaid`.
     *
     * Valid values: 1, 2, 3, 6, 12, 24, 36, 48, and 60.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $workerPeriod;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `period_unit` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The billing cycle of worker nodes. This parameter is required if worker_instance_charge_type is set to `PrePaid`.
     *
     * Valid value: `Month`, which indicates that worker nodes are billed only on a monthly basis.
     *
     * @example Month
     *
     * @deprecated
     *
     * @var string
     */
    public $workerPeriodUnit;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `system_disk_category` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The system disk category of worker nodes. For more information, see [Elastic Block Storage devices](https://help.aliyun.com/document_detail/63136.html).
     *
     * Valid values:
     *
     *   `cloud_efficiency`: ultra disk.
     *   `cloud_ssd`: standard SSD.
     *
     * Default value: `cloud_ssd`.
     *
     * @example cloud_efficiency
     *
     * @deprecated
     *
     * @var string
     */
    public $workerSystemDiskCategory;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `system_disk_performance_level` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * If the system disk is an ESSD, you can specify the PL of the ESSD. For more information, see [Enterprise SSDs](https://help.aliyun.com/document_detail/122389.html).
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
     * @description [**Deprecated**] When you configure a node pool, use the `system_disk_size` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The system disk size of worker nodes. Unit: GiB.
     *
     * Valid values: 40 to 500.
     *
     * The value of this parameter must be at least 40 and greater than or equal to the image size.
     *
     * Default value: `120`.
     *
     * @example 120
     *
     * @deprecated
     *
     * @var int
     */
    public $workerSystemDiskSize;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `system_disk_snapshot_policy_id` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The ID of the automatic snapshot policy that is used by the system disk specified for worker nodes.
     *
     * @example sp-2zej1nogjvovnz4z****
     *
     * @deprecated
     *
     * @var string
     */
    public $workerSystemDiskSnapshotPolicyId;

    /**
     * @description [**Deprecated**] When you configure a node pool, use the `vswitch_ids` parameter of the `scaling_group` field in the `nodepool` section instead.
     *
     * The vSwitches for worker nodes. Each worker node is allocated a vSwitch.
     *
     * `worker_vswitch_ids` is optional, but `vswitch_ids` is required if you create an ACK managed cluster that does not contain nodes.
     *
     * @deprecated
     *
     * @var string[]
     */
    public $workerVswitchIds;

    /**
     * @description [Deprecated] Use the `zone_ids` parameter instead.
     *
     * The ID of the zone to which the cluster belongs. This parameter is specific to ACK Serverless clusters.
     *
     * When you create an ACK managed cluster, you must set the `zone_id` parameter if `vpc_id` and `vswitch_ids` are not specified. This way, the system automatically creates a VPC in the specified zone. This parameter is invalid if you specify the `vpc_id` and `vswitch_ids` parameters.
     *
     * @example cn-beiji****
     *
     * @deprecated
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The IDs of the zone in which the cluster is deployed. This parameter is specific to ACK managed clusters.
     *
     * When you create an ACK managed cluster, you must set the `zone_id` parameter if `vpc_id` and `vswitch_ids` are not specified. This way, the system automatically creates a VPC in the specified zone. This parameter is invalid if you specify the `vpc_id` and `vswitch_ids` parameters.
     *
     * @var string[]
     */
    public $zoneIds;
    protected $_name = [
        'accessControlList' => 'access_control_list',
        'addons' => 'addons',
        'apiAudiences' => 'api_audiences',
        'auditLogConfig' => 'audit_log_config',
        'autoMode' => 'auto_mode',
        'autoRenew' => 'auto_renew',
        'autoRenewPeriod' => 'auto_renew_period',
        'chargeType' => 'charge_type',
        'cisEnabled' => 'cis_enabled',
        'cloudMonitorFlags' => 'cloud_monitor_flags',
        'clusterDomain' => 'cluster_domain',
        'clusterSpec' => 'cluster_spec',
        'clusterType' => 'cluster_type',
        'containerCidr' => 'container_cidr',
        'controlPlaneConfig' => 'control_plane_config',
        'controlplaneLogComponents' => 'controlplane_log_components',
        'controlplaneLogProject' => 'controlplane_log_project',
        'controlplaneLogTtl' => 'controlplane_log_ttl',
        'cpuPolicy' => 'cpu_policy',
        'customSan' => 'custom_san',
        'deletionProtection' => 'deletion_protection',
        'disableRollback' => 'disable_rollback',
        'enableRrsa' => 'enable_rrsa',
        'encryptionProviderKey' => 'encryption_provider_key',
        'endpointPublicAccess' => 'endpoint_public_access',
        'extraSans' => 'extra_sans',
        'formatDisk' => 'format_disk',
        'imageId' => 'image_id',
        'imageType' => 'image_type',
        'instances' => 'instances',
        'ipStack' => 'ip_stack',
        'isEnterpriseSecurityGroup' => 'is_enterprise_security_group',
        'keepInstanceName' => 'keep_instance_name',
        'keyPair' => 'key_pair',
        'kubernetesVersion' => 'kubernetes_version',
        'loadBalancerId' => 'load_balancer_id',
        'loadBalancerSpec' => 'load_balancer_spec',
        'loggingType' => 'logging_type',
        'loginPassword' => 'login_password',
        'maintenanceWindow' => 'maintenance_window',
        'masterAutoRenew' => 'master_auto_renew',
        'masterAutoRenewPeriod' => 'master_auto_renew_period',
        'masterCount' => 'master_count',
        'masterInstanceChargeType' => 'master_instance_charge_type',
        'masterInstanceTypes' => 'master_instance_types',
        'masterPeriod' => 'master_period',
        'masterPeriodUnit' => 'master_period_unit',
        'masterSystemDiskCategory' => 'master_system_disk_category',
        'masterSystemDiskPerformanceLevel' => 'master_system_disk_performance_level',
        'masterSystemDiskSize' => 'master_system_disk_size',
        'masterSystemDiskSnapshotPolicyId' => 'master_system_disk_snapshot_policy_id',
        'masterVswitchIds' => 'master_vswitch_ids',
        'name' => 'name',
        'natGateway' => 'nat_gateway',
        'nodeCidrMask' => 'node_cidr_mask',
        'nodeNameMode' => 'node_name_mode',
        'nodePortRange' => 'node_port_range',
        'nodepools' => 'nodepools',
        'numOfNodes' => 'num_of_nodes',
        'operationPolicy' => 'operation_policy',
        'osType' => 'os_type',
        'period' => 'period',
        'periodUnit' => 'period_unit',
        'platform' => 'platform',
        'podVswitchIds' => 'pod_vswitch_ids',
        'profile' => 'profile',
        'proxyMode' => 'proxy_mode',
        'rdsInstances' => 'rds_instances',
        'regionId' => 'region_id',
        'resourceGroupId' => 'resource_group_id',
        'rrsaConfig' => 'rrsa_config',
        'runtime' => 'runtime',
        'securityGroupId' => 'security_group_id',
        'securityHardeningOs' => 'security_hardening_os',
        'serviceAccountIssuer' => 'service_account_issuer',
        'serviceCidr' => 'service_cidr',
        'serviceDiscoveryTypes' => 'service_discovery_types',
        'snatEntry' => 'snat_entry',
        'socEnabled' => 'soc_enabled',
        'sshFlags' => 'ssh_flags',
        'tags' => 'tags',
        'taints' => 'taints',
        'timeoutMins' => 'timeout_mins',
        'timezone' => 'timezone',
        'userCa' => 'user_ca',
        'userData' => 'user_data',
        'vpcid' => 'vpcid',
        'vswitchIds' => 'vswitch_ids',
        'workerAutoRenew' => 'worker_auto_renew',
        'workerAutoRenewPeriod' => 'worker_auto_renew_period',
        'workerDataDisks' => 'worker_data_disks',
        'workerInstanceChargeType' => 'worker_instance_charge_type',
        'workerInstanceTypes' => 'worker_instance_types',
        'workerPeriod' => 'worker_period',
        'workerPeriodUnit' => 'worker_period_unit',
        'workerSystemDiskCategory' => 'worker_system_disk_category',
        'workerSystemDiskPerformanceLevel' => 'worker_system_disk_performance_level',
        'workerSystemDiskSize' => 'worker_system_disk_size',
        'workerSystemDiskSnapshotPolicyId' => 'worker_system_disk_snapshot_policy_id',
        'workerVswitchIds' => 'worker_vswitch_ids',
        'zoneId' => 'zone_id',
        'zoneIds' => 'zone_ids',
    ];

    public function validate() {}

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
        if (null !== $this->auditLogConfig) {
            $res['audit_log_config'] = null !== $this->auditLogConfig ? $this->auditLogConfig->toMap() : null;
        }
        if (null !== $this->autoMode) {
            $res['auto_mode'] = null !== $this->autoMode ? $this->autoMode->toMap() : null;
        }
        if (null !== $this->autoRenew) {
            $res['auto_renew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['auto_renew_period'] = $this->autoRenewPeriod;
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
        if (null !== $this->controlPlaneConfig) {
            $res['control_plane_config'] = null !== $this->controlPlaneConfig ? $this->controlPlaneConfig->toMap() : null;
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
        if (null !== $this->extraSans) {
            $res['extra_sans'] = $this->extraSans;
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
        if (null !== $this->loadBalancerId) {
            $res['load_balancer_id'] = $this->loadBalancerId;
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
        if (null !== $this->maintenanceWindow) {
            $res['maintenance_window'] = null !== $this->maintenanceWindow ? $this->maintenanceWindow->toMap() : null;
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
        if (null !== $this->operationPolicy) {
            $res['operation_policy'] = null !== $this->operationPolicy ? $this->operationPolicy->toMap() : null;
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
        if (null !== $this->rrsaConfig) {
            $res['rrsa_config'] = null !== $this->rrsaConfig ? $this->rrsaConfig->toMap() : null;
        }
        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
        }
        if (null !== $this->securityGroupId) {
            $res['security_group_id'] = $this->securityGroupId;
        }
        if (null !== $this->securityHardeningOs) {
            $res['security_hardening_os'] = $this->securityHardeningOs;
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
        if (null !== $this->zoneIds) {
            $res['zone_ids'] = $this->zoneIds;
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
                $n = 0;
                foreach ($map['addons'] as $item) {
                    $model->addons[$n++] = null !== $item ? Addon::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['api_audiences'])) {
            $model->apiAudiences = $map['api_audiences'];
        }
        if (isset($map['audit_log_config'])) {
            $model->auditLogConfig = auditLogConfig::fromMap($map['audit_log_config']);
        }
        if (isset($map['auto_mode'])) {
            $model->autoMode = autoMode::fromMap($map['auto_mode']);
        }
        if (isset($map['auto_renew'])) {
            $model->autoRenew = $map['auto_renew'];
        }
        if (isset($map['auto_renew_period'])) {
            $model->autoRenewPeriod = $map['auto_renew_period'];
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
        if (isset($map['control_plane_config'])) {
            $model->controlPlaneConfig = controlPlaneConfig::fromMap($map['control_plane_config']);
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
        if (isset($map['extra_sans'])) {
            if (!empty($map['extra_sans'])) {
                $model->extraSans = $map['extra_sans'];
            }
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
        if (isset($map['load_balancer_id'])) {
            $model->loadBalancerId = $map['load_balancer_id'];
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
        if (isset($map['maintenance_window'])) {
            $model->maintenanceWindow = MaintenanceWindow::fromMap($map['maintenance_window']);
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
                $n = 0;
                foreach ($map['nodepools'] as $item) {
                    $model->nodepools[$n++] = null !== $item ? Nodepool::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['num_of_nodes'])) {
            $model->numOfNodes = $map['num_of_nodes'];
        }
        if (isset($map['operation_policy'])) {
            $model->operationPolicy = operationPolicy::fromMap($map['operation_policy']);
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
        if (isset($map['rrsa_config'])) {
            $model->rrsaConfig = rrsaConfig::fromMap($map['rrsa_config']);
        }
        if (isset($map['runtime'])) {
            $model->runtime = Runtime::fromMap($map['runtime']);
        }
        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
        }
        if (isset($map['security_hardening_os'])) {
            $model->securityHardeningOs = $map['security_hardening_os'];
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
                $n = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n = 0;
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
                $n = 0;
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
        if (isset($map['zone_ids'])) {
            if (!empty($map['zone_ids'])) {
                $model->zoneIds = $map['zone_ids'];
            }
        }

        return $model;
    }
}

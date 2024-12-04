<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterShrinkRequest extends Model
{
    /**
     * @description The list of software that you want to install in the cluster. Valid values of N: 0 to 10.
     *
     * @var string
     */
    public $additionalPackagesShrink;

    /**
     * @description The configurations of the custom addons in the cluster. Only one addon is supported.
     *
     * @var string
     */
    public $addonsShrink;

    /**
     * @description The client version. By default, the latest version is used.
     *
     * @example 2.1.0
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The cluster type. Valid values:
     *
     *   Standard
     *   Serverless
     *
     * @example Standard
     *
     * @var string
     */
    public $clusterCategory;

    /**
     * @description The access credentials of the cluster.
     *
     * @var string
     */
    public $clusterCredentialsShrink;

    /**
     * @description The post-processing script of the cluster.
     *
     * @var string
     */
    public $clusterCustomConfigurationShrink;

    /**
     * @description The cluster description. The description must be 1 to 128 characters in length and can contain letters, digits, hyphens (-), and underscores (_).
     *
     * @example slurm22.05.8-cluster-20240718
     *
     * @var string
     */
    public $clusterDescription;

    /**
     * @description The deployment mode of the cluster. Valid values:
     *
     *   Integrated
     *   Hybrid
     *   Custom
     *
     * @example Integrated
     *
     * @var string
     */
    public $clusterMode;

    /**
     * @description The cluster name. The name must be 1 to 128 characters in length and can contain letters, digits, hyphens (-), and underscores (_).
     *
     * @example slurm22.05.8-cluster-20240718
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The ID of the vSwitch that you want the cluster to use. The vSwitch must reside in the VPC that is specified by the `ClusterVpcId` parameter.
     *
     * You can call the [DescribeVpcs](https://help.aliyun.com/document_detail/448581.html) operation to query information about the created VPCs and vSwitches.
     * @example vsw-f8za5p0mwzgdu3wgx****
     *
     * @var string
     */
    public $clusterVSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the cluster resides.
     *
     * @example vpc-m5efjevmclc0xdmys****
     *
     * @var string
     */
    public $clusterVpcId;

    /**
     * @description Specifies whether to enable deletion protection for the cluster. Deletion protection decides whether the cluster can be deleted in the console or by calling the [DeleteCluster](https://help.aliyun.com/document_detail/424406.html) operation. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description Specifies whether to use an advanced security group. Valid values:
     *
     *   true: automatically creates and uses an advanced security group.
     *   false: automatically creates and uses a basic security group.
     *
     * For more information, see [Basic security groups and advanced security groups](https://help.aliyun.com/document_detail/605897.html).
     * @example false
     *
     * @var bool
     */
    public $isEnterpriseSecurityGroup;

    /**
     * @description The configurations of the cluster management node.
     *
     * @var string
     */
    public $managerShrink;

    /**
     * @description The maximum number of vCPUs that can be used by compute nodes in the cluster. Valid values: 0 to 100,000.
     *
     * @example 10000
     *
     * @var int
     */
    public $maxCoreCount;

    /**
     * @description The maximum number of compute nodes that the cluster can manage. Valid values: 0 to 5,000.
     *
     * @example 500
     *
     * @var int
     */
    public $maxCount;

    /**
     * @description The configurations of the queues in the cluster. The number of queues can be 0 to 8.
     *
     * @var string
     */
    public $queuesShrink;

    /**
     * @description The ID of the resource group to which the cluster belongs.
     *
     * You can call the [ListResourceGroups](https://help.aliyun.com/document_detail/158855.html) operation to obtain the IDs of the resource groups.
     * @example rg-acfmxazb4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the security group to which the cluster belongs.
     *
     * You can call the [DescribeSecurityGroups](https://help.aliyun.com/document_detail/25556.html) operation to query available security groups in the current region.
     * @example sg-bp13n61xsydodfyg****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The configurations of shared storage in the cluster.
     *
     * @var string
     */
    public $sharedStoragesShrink;

    /**
     * @description The tags of the cluster.
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'additionalPackagesShrink'         => 'AdditionalPackages',
        'addonsShrink'                     => 'Addons',
        'clientVersion'                    => 'ClientVersion',
        'clusterCategory'                  => 'ClusterCategory',
        'clusterCredentialsShrink'         => 'ClusterCredentials',
        'clusterCustomConfigurationShrink' => 'ClusterCustomConfiguration',
        'clusterDescription'               => 'ClusterDescription',
        'clusterMode'                      => 'ClusterMode',
        'clusterName'                      => 'ClusterName',
        'clusterVSwitchId'                 => 'ClusterVSwitchId',
        'clusterVpcId'                     => 'ClusterVpcId',
        'deletionProtection'               => 'DeletionProtection',
        'isEnterpriseSecurityGroup'        => 'IsEnterpriseSecurityGroup',
        'managerShrink'                    => 'Manager',
        'maxCoreCount'                     => 'MaxCoreCount',
        'maxCount'                         => 'MaxCount',
        'queuesShrink'                     => 'Queues',
        'resourceGroupId'                  => 'ResourceGroupId',
        'securityGroupId'                  => 'SecurityGroupId',
        'sharedStoragesShrink'             => 'SharedStorages',
        'tagsShrink'                       => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalPackagesShrink) {
            $res['AdditionalPackages'] = $this->additionalPackagesShrink;
        }
        if (null !== $this->addonsShrink) {
            $res['Addons'] = $this->addonsShrink;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->clusterCategory) {
            $res['ClusterCategory'] = $this->clusterCategory;
        }
        if (null !== $this->clusterCredentialsShrink) {
            $res['ClusterCredentials'] = $this->clusterCredentialsShrink;
        }
        if (null !== $this->clusterCustomConfigurationShrink) {
            $res['ClusterCustomConfiguration'] = $this->clusterCustomConfigurationShrink;
        }
        if (null !== $this->clusterDescription) {
            $res['ClusterDescription'] = $this->clusterDescription;
        }
        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterVSwitchId) {
            $res['ClusterVSwitchId'] = $this->clusterVSwitchId;
        }
        if (null !== $this->clusterVpcId) {
            $res['ClusterVpcId'] = $this->clusterVpcId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->isEnterpriseSecurityGroup) {
            $res['IsEnterpriseSecurityGroup'] = $this->isEnterpriseSecurityGroup;
        }
        if (null !== $this->managerShrink) {
            $res['Manager'] = $this->managerShrink;
        }
        if (null !== $this->maxCoreCount) {
            $res['MaxCoreCount'] = $this->maxCoreCount;
        }
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }
        if (null !== $this->queuesShrink) {
            $res['Queues'] = $this->queuesShrink;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->sharedStoragesShrink) {
            $res['SharedStorages'] = $this->sharedStoragesShrink;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalPackages'])) {
            $model->additionalPackagesShrink = $map['AdditionalPackages'];
        }
        if (isset($map['Addons'])) {
            $model->addonsShrink = $map['Addons'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ClusterCategory'])) {
            $model->clusterCategory = $map['ClusterCategory'];
        }
        if (isset($map['ClusterCredentials'])) {
            $model->clusterCredentialsShrink = $map['ClusterCredentials'];
        }
        if (isset($map['ClusterCustomConfiguration'])) {
            $model->clusterCustomConfigurationShrink = $map['ClusterCustomConfiguration'];
        }
        if (isset($map['ClusterDescription'])) {
            $model->clusterDescription = $map['ClusterDescription'];
        }
        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterVSwitchId'])) {
            $model->clusterVSwitchId = $map['ClusterVSwitchId'];
        }
        if (isset($map['ClusterVpcId'])) {
            $model->clusterVpcId = $map['ClusterVpcId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['IsEnterpriseSecurityGroup'])) {
            $model->isEnterpriseSecurityGroup = $map['IsEnterpriseSecurityGroup'];
        }
        if (isset($map['Manager'])) {
            $model->managerShrink = $map['Manager'];
        }
        if (isset($map['MaxCoreCount'])) {
            $model->maxCoreCount = $map['MaxCoreCount'];
        }
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }
        if (isset($map['Queues'])) {
            $model->queuesShrink = $map['Queues'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SharedStorages'])) {
            $model->sharedStoragesShrink = $map['SharedStorages'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}

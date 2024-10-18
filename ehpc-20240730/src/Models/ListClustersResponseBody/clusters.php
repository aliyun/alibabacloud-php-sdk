<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\additionalPackages;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\addons;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\clusterCustomConfiguration;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\manager;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\nodes;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\users;
use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @description The information about installed software in the cluster.
     *
     * @var additionalPackages[]
     */
    public $additionalPackages;

    /**
     * @description The information about the addons in the cluster.
     *
     * @var addons[]
     */
    public $addons;

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
     * @description The time when the cluster was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time is displayed in UTC. For more information, see [ISO 8601](https://help.aliyun.com/document_detail/25696.html).
     *
     * @example 2024-08-06T12:43:01.000Z
     *
     * @var string
     */
    public $clusterCreateTime;

    /**
     * @description The logon credential type of the cluster. Valid values:
     *
     *   password: requires passwords for logons.
     *   keypair: requires key pairs for logons.
     *
     * @var string[]
     */
    public $clusterCredentials;

    /**
     * @description The post-processing script used by the cluster.
     *
     * @var clusterCustomConfiguration
     */
    public $clusterCustomConfiguration;

    /**
     * @description The cluster description.
     *
     * @example Demo
     *
     * @var string
     */
    public $clusterDescription;

    /**
     * @description The cluster ID.
     *
     * @example ehpc-hz-VMKe******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The deployment type of the cluster. Valid values:
     *
     *   Integrated: public cloud
     *   Hybrid: hybrid cloud
     *   Custom: a custom cluster
     *
     * @example Integrated
     *
     * @var string
     */
    public $clusterMode;

    /**
     * @description The time when the cluster was modified. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time is displayed in UTC. For more information, see [ISO 8601](https://help.aliyun.com/document_detail/25696.html).
     *
     * @example 2024-08-06T12:43:01.000Z
     *
     * @var string
     */
    public $clusterModifyTime;

    /**
     * @description The cluster name.
     *
     * @example slurm22.05.8-cluster-20240227
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The cluster state. Valid values:
     *
     *   uninit: The cluster is being installed.
     *   creating: The cluster is being created.
     *   initing: The cluster is being initialized.
     *   running: The cluster is running.
     *   Releasing: The cluster is being released.
     *   stopping: The cluster is being stopped.
     *   stopped: The cluster is stopped.
     *   exception: The cluster has run into an exception.
     *   pending: The cluster is waiting to be configured.
     *
     * @example running
     *
     * @var string
     */
    public $clusterStatus;

    /**
     * @description The vCPU-hour usage of the cluster.
     *
     * @example 1000
     *
     * @var float
     */
    public $clusterUsedCoreTime;

    /**
     * @description The ID of the vSwitch used by the cluster.
     *
     * @example vsw-f8za5p0mwzgdu3wgx****
     *
     * @var string
     */
    public $clusterVSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC) used by the cluster.
     *
     * @example vpc-m5efjevmclc0xdmys****
     *
     * @var string
     */
    public $clusterVpcId;

    /**
     * @description Indicates whether deletion protection is enabled for the cluster. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The Elastic High Performance Computing (E-HPC) version.
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $ehpcVersion;

    /**
     * @description The configurations of the cluster management node.
     *
     * @var manager
     */
    public $manager;

    /**
     * @description The maximum total number of vCPUs used by the compute nodes that can be managed by the cluster.
     *
     * @example 10000
     *
     * @var int
     */
    public $maxCoreCount;

    /**
     * @description The maximum number of compute nodes that can be managed by the cluster.
     *
     * @example 500
     *
     * @var int
     */
    public $maxCount;

    /**
     * @description The node statistics of the cluster.
     *
     * @var nodes
     */
    public $nodes;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the security group used by the cluster.
     *
     * @example sg-bp13n61xsydodfyg****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The user attribute information of the cluster.
     *
     * @var users
     */
    public $users;
    protected $_name = [
        'additionalPackages'         => 'AdditionalPackages',
        'addons'                     => 'Addons',
        'clusterCategory'            => 'ClusterCategory',
        'clusterCreateTime'          => 'ClusterCreateTime',
        'clusterCredentials'         => 'ClusterCredentials',
        'clusterCustomConfiguration' => 'ClusterCustomConfiguration',
        'clusterDescription'         => 'ClusterDescription',
        'clusterId'                  => 'ClusterId',
        'clusterMode'                => 'ClusterMode',
        'clusterModifyTime'          => 'ClusterModifyTime',
        'clusterName'                => 'ClusterName',
        'clusterStatus'              => 'ClusterStatus',
        'clusterUsedCoreTime'        => 'ClusterUsedCoreTime',
        'clusterVSwitchId'           => 'ClusterVSwitchId',
        'clusterVpcId'               => 'ClusterVpcId',
        'deletionProtection'         => 'DeletionProtection',
        'ehpcVersion'                => 'EhpcVersion',
        'manager'                    => 'Manager',
        'maxCoreCount'               => 'MaxCoreCount',
        'maxCount'                   => 'MaxCount',
        'nodes'                      => 'Nodes',
        'resourceGroupId'            => 'ResourceGroupId',
        'securityGroupId'            => 'SecurityGroupId',
        'users'                      => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalPackages) {
            $res['AdditionalPackages'] = [];
            if (null !== $this->additionalPackages && \is_array($this->additionalPackages)) {
                $n = 0;
                foreach ($this->additionalPackages as $item) {
                    $res['AdditionalPackages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->addons) {
            $res['Addons'] = [];
            if (null !== $this->addons && \is_array($this->addons)) {
                $n = 0;
                foreach ($this->addons as $item) {
                    $res['Addons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clusterCategory) {
            $res['ClusterCategory'] = $this->clusterCategory;
        }
        if (null !== $this->clusterCreateTime) {
            $res['ClusterCreateTime'] = $this->clusterCreateTime;
        }
        if (null !== $this->clusterCredentials) {
            $res['ClusterCredentials'] = $this->clusterCredentials;
        }
        if (null !== $this->clusterCustomConfiguration) {
            $res['ClusterCustomConfiguration'] = null !== $this->clusterCustomConfiguration ? $this->clusterCustomConfiguration->toMap() : null;
        }
        if (null !== $this->clusterDescription) {
            $res['ClusterDescription'] = $this->clusterDescription;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }
        if (null !== $this->clusterModifyTime) {
            $res['ClusterModifyTime'] = $this->clusterModifyTime;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = $this->clusterStatus;
        }
        if (null !== $this->clusterUsedCoreTime) {
            $res['ClusterUsedCoreTime'] = $this->clusterUsedCoreTime;
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
        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }
        if (null !== $this->manager) {
            $res['Manager'] = null !== $this->manager ? $this->manager->toMap() : null;
        }
        if (null !== $this->maxCoreCount) {
            $res['MaxCoreCount'] = $this->maxCoreCount;
        }
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = null !== $this->nodes ? $this->nodes->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->users) {
            $res['Users'] = null !== $this->users ? $this->users->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalPackages'])) {
            if (!empty($map['AdditionalPackages'])) {
                $model->additionalPackages = [];
                $n                         = 0;
                foreach ($map['AdditionalPackages'] as $item) {
                    $model->additionalPackages[$n++] = null !== $item ? additionalPackages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Addons'])) {
            if (!empty($map['Addons'])) {
                $model->addons = [];
                $n             = 0;
                foreach ($map['Addons'] as $item) {
                    $model->addons[$n++] = null !== $item ? addons::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClusterCategory'])) {
            $model->clusterCategory = $map['ClusterCategory'];
        }
        if (isset($map['ClusterCreateTime'])) {
            $model->clusterCreateTime = $map['ClusterCreateTime'];
        }
        if (isset($map['ClusterCredentials'])) {
            if (!empty($map['ClusterCredentials'])) {
                $model->clusterCredentials = $map['ClusterCredentials'];
            }
        }
        if (isset($map['ClusterCustomConfiguration'])) {
            $model->clusterCustomConfiguration = clusterCustomConfiguration::fromMap($map['ClusterCustomConfiguration']);
        }
        if (isset($map['ClusterDescription'])) {
            $model->clusterDescription = $map['ClusterDescription'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }
        if (isset($map['ClusterModifyTime'])) {
            $model->clusterModifyTime = $map['ClusterModifyTime'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = $map['ClusterStatus'];
        }
        if (isset($map['ClusterUsedCoreTime'])) {
            $model->clusterUsedCoreTime = $map['ClusterUsedCoreTime'];
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
        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }
        if (isset($map['Manager'])) {
            $model->manager = manager::fromMap($map['Manager']);
        }
        if (isset($map['MaxCoreCount'])) {
            $model->maxCoreCount = $map['MaxCoreCount'];
        }
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = nodes::fromMap($map['Nodes']);
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Users'])) {
            $model->users = users::fromMap($map['Users']);
        }

        return $model;
    }
}

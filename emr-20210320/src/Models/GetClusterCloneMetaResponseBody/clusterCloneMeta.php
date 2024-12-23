<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\Application;
use AlibabaCloud\SDK\Emr\V20210320\Models\ApplicationConfig;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody\clusterCloneMeta\scalingPolicies;
use AlibabaCloud\SDK\Emr\V20210320\Models\NodeAttributes;
use AlibabaCloud\SDK\Emr\V20210320\Models\NodeGroup;
use AlibabaCloud\SDK\Emr\V20210320\Models\Script;
use AlibabaCloud\SDK\Emr\V20210320\Models\SubscriptionConfig;
use AlibabaCloud\SDK\Emr\V20210320\Models\Tag;
use AlibabaCloud\Tea\Model;

class clusterCloneMeta extends Model
{
    /**
     * @description The modified configuration items.
     *
     * @var ApplicationConfig[]
     */
    public $applicationConfigs;

    /**
     * @description The services deployed in the cluster.
     *
     * @var Application[]
     */
    public $applications;

    /**
     * @description The bootstrap actions. Number of elements in the array: 1 to 10.
     *
     * @var Script[]
     */
    public $bootstrapScripts;

    /**
     * @description The cluster ID.
     *
     * @example c-b933c5aac7f7****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example emrtest
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   STARTING
     *   START_FAILED
     *   BOOTSTRAPPING
     *   RUNNING
     *   TERMINATING
     *   TERMINATED
     *   TERMINATED_WITH_ERRORS
     *   TERMINATE_FAILED
     *
     * @example RUNNING
     *
     * @var string
     */
    public $clusterState;

    /**
     * @description The cluster type. Valid values:
     *
     *   DATALAKE
     *   OLAP
     *   DATAFLOW
     *   DATASERVING
     *   CUSTOM
     *   HADOOP
     *
     * @example DATALAKE
     *
     * @var string
     */
    public $clusterType;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The deployment mode of master nodes in the cluster. Valid values:
     *
     *   NORMAL: regular mode.
     *   HA: high availability mode.
     *
     * @example HA
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The EMR service role.
     *
     * @example AliyunEMRDefaultRole
     *
     * @var string
     */
    public $emrDefaultRole;

    /**
     * @description Indicates whether the service configurations of a Hadoop cluster that you made during cluster creation can be cloned. Valid values:
     *
     *   False
     *   True
     *
     * @var bool
     */
    public $existCloneConfig;

    /**
     * @description The node attributes.
     *
     * @var NodeAttributes
     */
    public $nodeAttributes;

    /**
     * @description The node groups. Number of elements in the array: 1 to 100.
     *
     * @var NodeGroup[]
     */
    public $nodeGroups;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   PayAsYouGo
     *   Subscription
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The EMR version.
     *
     * @example EMR-5.6.0
     *
     * @var string
     */
    public $releaseVersion;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzabjyop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The auto scaling policies of each node group in the cluster.
     *
     * @var scalingPolicies[]
     */
    public $scalingPolicies;

    /**
     * @description The security mode of the cluster. Valid values:
     *
     *   NORMAL: regular mode. Kerberos is not enabled.
     *   KERBEROS: Kerberos mode. Kerberos is enabled.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $securityMode;

    /**
     * @description The subscription configurations.
     *
     * @var SubscriptionConfig
     */
    public $subscriptionConfig;

    /**
     * @description The tags.
     *
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'applicationConfigs' => 'ApplicationConfigs',
        'applications'       => 'Applications',
        'bootstrapScripts'   => 'BootstrapScripts',
        'clusterId'          => 'ClusterId',
        'clusterName'        => 'ClusterName',
        'clusterState'       => 'ClusterState',
        'clusterType'        => 'ClusterType',
        'deletionProtection' => 'DeletionProtection',
        'deployMode'         => 'DeployMode',
        'emrDefaultRole'     => 'EmrDefaultRole',
        'existCloneConfig'   => 'ExistCloneConfig',
        'nodeAttributes'     => 'NodeAttributes',
        'nodeGroups'         => 'NodeGroups',
        'paymentType'        => 'PaymentType',
        'regionId'           => 'RegionId',
        'releaseVersion'     => 'ReleaseVersion',
        'resourceGroupId'    => 'ResourceGroupId',
        'scalingPolicies'    => 'ScalingPolicies',
        'securityMode'       => 'SecurityMode',
        'subscriptionConfig' => 'SubscriptionConfig',
        'tags'               => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationConfigs) {
            $res['ApplicationConfigs'] = [];
            if (null !== $this->applicationConfigs && \is_array($this->applicationConfigs)) {
                $n = 0;
                foreach ($this->applicationConfigs as $item) {
                    $res['ApplicationConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->applications) {
            $res['Applications'] = [];
            if (null !== $this->applications && \is_array($this->applications)) {
                $n = 0;
                foreach ($this->applications as $item) {
                    $res['Applications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bootstrapScripts) {
            $res['BootstrapScripts'] = [];
            if (null !== $this->bootstrapScripts && \is_array($this->bootstrapScripts)) {
                $n = 0;
                foreach ($this->bootstrapScripts as $item) {
                    $res['BootstrapScripts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterState) {
            $res['ClusterState'] = $this->clusterState;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->emrDefaultRole) {
            $res['EmrDefaultRole'] = $this->emrDefaultRole;
        }
        if (null !== $this->existCloneConfig) {
            $res['ExistCloneConfig'] = $this->existCloneConfig;
        }
        if (null !== $this->nodeAttributes) {
            $res['NodeAttributes'] = null !== $this->nodeAttributes ? $this->nodeAttributes->toMap() : null;
        }
        if (null !== $this->nodeGroups) {
            $res['NodeGroups'] = [];
            if (null !== $this->nodeGroups && \is_array($this->nodeGroups)) {
                $n = 0;
                foreach ($this->nodeGroups as $item) {
                    $res['NodeGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->releaseVersion) {
            $res['ReleaseVersion'] = $this->releaseVersion;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scalingPolicies) {
            $res['ScalingPolicies'] = [];
            if (null !== $this->scalingPolicies && \is_array($this->scalingPolicies)) {
                $n = 0;
                foreach ($this->scalingPolicies as $item) {
                    $res['ScalingPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityMode) {
            $res['SecurityMode'] = $this->securityMode;
        }
        if (null !== $this->subscriptionConfig) {
            $res['SubscriptionConfig'] = null !== $this->subscriptionConfig ? $this->subscriptionConfig->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterCloneMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationConfigs'])) {
            if (!empty($map['ApplicationConfigs'])) {
                $model->applicationConfigs = [];
                $n                         = 0;
                foreach ($map['ApplicationConfigs'] as $item) {
                    $model->applicationConfigs[$n++] = null !== $item ? ApplicationConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n                   = 0;
                foreach ($map['Applications'] as $item) {
                    $model->applications[$n++] = null !== $item ? Application::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BootstrapScripts'])) {
            if (!empty($map['BootstrapScripts'])) {
                $model->bootstrapScripts = [];
                $n                       = 0;
                foreach ($map['BootstrapScripts'] as $item) {
                    $model->bootstrapScripts[$n++] = null !== $item ? Script::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterState'])) {
            $model->clusterState = $map['ClusterState'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['EmrDefaultRole'])) {
            $model->emrDefaultRole = $map['EmrDefaultRole'];
        }
        if (isset($map['ExistCloneConfig'])) {
            $model->existCloneConfig = $map['ExistCloneConfig'];
        }
        if (isset($map['NodeAttributes'])) {
            $model->nodeAttributes = NodeAttributes::fromMap($map['NodeAttributes']);
        }
        if (isset($map['NodeGroups'])) {
            if (!empty($map['NodeGroups'])) {
                $model->nodeGroups = [];
                $n                 = 0;
                foreach ($map['NodeGroups'] as $item) {
                    $model->nodeGroups[$n++] = null !== $item ? NodeGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReleaseVersion'])) {
            $model->releaseVersion = $map['ReleaseVersion'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ScalingPolicies'])) {
            if (!empty($map['ScalingPolicies'])) {
                $model->scalingPolicies = [];
                $n                      = 0;
                foreach ($map['ScalingPolicies'] as $item) {
                    $model->scalingPolicies[$n++] = null !== $item ? scalingPolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityMode'])) {
            $model->securityMode = $map['SecurityMode'];
        }
        if (isset($map['SubscriptionConfig'])) {
            $model->subscriptionConfig = SubscriptionConfig::fromMap($map['SubscriptionConfig']);
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

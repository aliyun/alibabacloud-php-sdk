<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\Application;
use AlibabaCloud\SDK\Emr\V20210320\Models\ApplicationConfig;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody\clusterCloneMeta\scalingPolicies;
use AlibabaCloud\SDK\Emr\V20210320\Models\NodeAttributes;
use AlibabaCloud\SDK\Emr\V20210320\Models\NodeGroup;
use AlibabaCloud\SDK\Emr\V20210320\Models\Script;
use AlibabaCloud\SDK\Emr\V20210320\Models\SubscriptionConfig;
use AlibabaCloud\SDK\Emr\V20210320\Models\Tag;

class clusterCloneMeta extends Model
{
    /**
     * @var ApplicationConfig[]
     */
    public $applicationConfigs;
    /**
     * @var Application[]
     */
    public $applications;
    /**
     * @var Script[]
     */
    public $bootstrapScripts;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $clusterName;
    /**
     * @var string
     */
    public $clusterState;
    /**
     * @var string
     */
    public $clusterType;
    /**
     * @var bool
     */
    public $deletionProtection;
    /**
     * @var string
     */
    public $deployMode;
    /**
     * @var string
     */
    public $emrDefaultRole;
    /**
     * @var bool
     */
    public $existCloneConfig;
    /**
     * @var NodeAttributes
     */
    public $nodeAttributes;
    /**
     * @var NodeGroup[]
     */
    public $nodeGroups;
    /**
     * @var string
     */
    public $paymentType;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $releaseVersion;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var scalingPolicies[]
     */
    public $scalingPolicies;
    /**
     * @var string
     */
    public $securityMode;
    /**
     * @var SubscriptionConfig
     */
    public $subscriptionConfig;
    /**
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
        if (\is_array($this->applicationConfigs)) {
            Model::validateArray($this->applicationConfigs);
        }
        if (\is_array($this->applications)) {
            Model::validateArray($this->applications);
        }
        if (\is_array($this->bootstrapScripts)) {
            Model::validateArray($this->bootstrapScripts);
        }
        if (null !== $this->nodeAttributes) {
            $this->nodeAttributes->validate();
        }
        if (\is_array($this->nodeGroups)) {
            Model::validateArray($this->nodeGroups);
        }
        if (\is_array($this->scalingPolicies)) {
            Model::validateArray($this->scalingPolicies);
        }
        if (null !== $this->subscriptionConfig) {
            $this->subscriptionConfig->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationConfigs) {
            if (\is_array($this->applicationConfigs)) {
                $res['ApplicationConfigs'] = [];
                $n1                        = 0;
                foreach ($this->applicationConfigs as $item1) {
                    $res['ApplicationConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->applications) {
            if (\is_array($this->applications)) {
                $res['Applications'] = [];
                $n1                  = 0;
                foreach ($this->applications as $item1) {
                    $res['Applications'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->bootstrapScripts) {
            if (\is_array($this->bootstrapScripts)) {
                $res['BootstrapScripts'] = [];
                $n1                      = 0;
                foreach ($this->bootstrapScripts as $item1) {
                    $res['BootstrapScripts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['NodeAttributes'] = null !== $this->nodeAttributes ? $this->nodeAttributes->toArray($noStream) : $this->nodeAttributes;
        }

        if (null !== $this->nodeGroups) {
            if (\is_array($this->nodeGroups)) {
                $res['NodeGroups'] = [];
                $n1                = 0;
                foreach ($this->nodeGroups as $item1) {
                    $res['NodeGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->scalingPolicies)) {
                $res['ScalingPolicies'] = [];
                $n1                     = 0;
                foreach ($this->scalingPolicies as $item1) {
                    $res['ScalingPolicies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->securityMode) {
            $res['SecurityMode'] = $this->securityMode;
        }

        if (null !== $this->subscriptionConfig) {
            $res['SubscriptionConfig'] = null !== $this->subscriptionConfig ? $this->subscriptionConfig->toArray($noStream) : $this->subscriptionConfig;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ApplicationConfigs'])) {
            if (!empty($map['ApplicationConfigs'])) {
                $model->applicationConfigs = [];
                $n1                        = 0;
                foreach ($map['ApplicationConfigs'] as $item1) {
                    $model->applicationConfigs[$n1++] = ApplicationConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n1                  = 0;
                foreach ($map['Applications'] as $item1) {
                    $model->applications[$n1++] = Application::fromMap($item1);
                }
            }
        }

        if (isset($map['BootstrapScripts'])) {
            if (!empty($map['BootstrapScripts'])) {
                $model->bootstrapScripts = [];
                $n1                      = 0;
                foreach ($map['BootstrapScripts'] as $item1) {
                    $model->bootstrapScripts[$n1++] = Script::fromMap($item1);
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
                $n1                = 0;
                foreach ($map['NodeGroups'] as $item1) {
                    $model->nodeGroups[$n1++] = NodeGroup::fromMap($item1);
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
                $n1                     = 0;
                foreach ($map['ScalingPolicies'] as $item1) {
                    $model->scalingPolicies[$n1++] = scalingPolicies::fromMap($item1);
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = Tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

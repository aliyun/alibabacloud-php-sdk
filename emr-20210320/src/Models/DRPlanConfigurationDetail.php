<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\DRPlanConfigurationDetail\managedScalingPolicy;

class DRPlanConfigurationDetail extends Model
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
    public $clusterName;

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
    public $description;

    /**
     * @var string
     */
    public $logCollectStrategy;

    /**
     * @var managedScalingPolicy
     */
    public $managedScalingPolicy;

    /**
     * @var string
     */
    public $metaStoreType;

    /**
     * @var NodeAttributes
     */
    public $nodeAttributes;

    /**
     * @var NodeGroupConfig[]
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
     * @var ScalingPolicy[]
     */
    public $scalingPolicies;

    /**
     * @var string
     */
    public $scalingTimeZone;

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
        'applications' => 'Applications',
        'bootstrapScripts' => 'BootstrapScripts',
        'clusterName' => 'ClusterName',
        'clusterType' => 'ClusterType',
        'deletionProtection' => 'DeletionProtection',
        'deployMode' => 'DeployMode',
        'description' => 'Description',
        'logCollectStrategy' => 'LogCollectStrategy',
        'managedScalingPolicy' => 'ManagedScalingPolicy',
        'metaStoreType' => 'MetaStoreType',
        'nodeAttributes' => 'NodeAttributes',
        'nodeGroups' => 'NodeGroups',
        'paymentType' => 'PaymentType',
        'regionId' => 'RegionId',
        'releaseVersion' => 'ReleaseVersion',
        'resourceGroupId' => 'ResourceGroupId',
        'scalingPolicies' => 'ScalingPolicies',
        'scalingTimeZone' => 'ScalingTimeZone',
        'securityMode' => 'SecurityMode',
        'subscriptionConfig' => 'SubscriptionConfig',
        'tags' => 'Tags',
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
        if (null !== $this->managedScalingPolicy) {
            $this->managedScalingPolicy->validate();
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
                $n1 = 0;
                foreach ($this->applicationConfigs as $item1) {
                    $res['ApplicationConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applications) {
            if (\is_array($this->applications)) {
                $res['Applications'] = [];
                $n1 = 0;
                foreach ($this->applications as $item1) {
                    $res['Applications'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bootstrapScripts) {
            if (\is_array($this->bootstrapScripts)) {
                $res['BootstrapScripts'] = [];
                $n1 = 0;
                foreach ($this->bootstrapScripts as $item1) {
                    $res['BootstrapScripts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->logCollectStrategy) {
            $res['LogCollectStrategy'] = $this->logCollectStrategy;
        }

        if (null !== $this->managedScalingPolicy) {
            $res['ManagedScalingPolicy'] = null !== $this->managedScalingPolicy ? $this->managedScalingPolicy->toArray($noStream) : $this->managedScalingPolicy;
        }

        if (null !== $this->metaStoreType) {
            $res['MetaStoreType'] = $this->metaStoreType;
        }

        if (null !== $this->nodeAttributes) {
            $res['NodeAttributes'] = null !== $this->nodeAttributes ? $this->nodeAttributes->toArray($noStream) : $this->nodeAttributes;
        }

        if (null !== $this->nodeGroups) {
            if (\is_array($this->nodeGroups)) {
                $res['NodeGroups'] = [];
                $n1 = 0;
                foreach ($this->nodeGroups as $item1) {
                    $res['NodeGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
                $n1 = 0;
                foreach ($this->scalingPolicies as $item1) {
                    $res['ScalingPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scalingTimeZone) {
            $res['ScalingTimeZone'] = $this->scalingTimeZone;
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
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['ApplicationConfigs'] as $item1) {
                    $model->applicationConfigs[$n1] = ApplicationConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n1 = 0;
                foreach ($map['Applications'] as $item1) {
                    $model->applications[$n1] = Application::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BootstrapScripts'])) {
            if (!empty($map['BootstrapScripts'])) {
                $model->bootstrapScripts = [];
                $n1 = 0;
                foreach ($map['BootstrapScripts'] as $item1) {
                    $model->bootstrapScripts[$n1] = Script::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LogCollectStrategy'])) {
            $model->logCollectStrategy = $map['LogCollectStrategy'];
        }

        if (isset($map['ManagedScalingPolicy'])) {
            $model->managedScalingPolicy = managedScalingPolicy::fromMap($map['ManagedScalingPolicy']);
        }

        if (isset($map['MetaStoreType'])) {
            $model->metaStoreType = $map['MetaStoreType'];
        }

        if (isset($map['NodeAttributes'])) {
            $model->nodeAttributes = NodeAttributes::fromMap($map['NodeAttributes']);
        }

        if (isset($map['NodeGroups'])) {
            if (!empty($map['NodeGroups'])) {
                $model->nodeGroups = [];
                $n1 = 0;
                foreach ($map['NodeGroups'] as $item1) {
                    $model->nodeGroups[$n1] = NodeGroupConfig::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['ScalingPolicies'] as $item1) {
                    $model->scalingPolicies[$n1] = ScalingPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ScalingTimeZone'])) {
            $model->scalingTimeZone = $map['ScalingTimeZone'];
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = Tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

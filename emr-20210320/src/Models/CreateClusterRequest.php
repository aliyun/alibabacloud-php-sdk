<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @description The application configurations. You can specify a maximum of 1,000 items.
     *
     * @var ApplicationConfig[]
     */
    public $applicationConfigs;

    /**
     * @description The applications. You can specify a maximum of 100 items.
     *
     * This parameter is required.
     * @var Application[]
     */
    public $applications;

    /**
     * @description The bootstrap actions. You can specify a maximum of 10 items.
     *
     * @var Script[]
     */
    public $bootstrapScripts;

    /**
     * @description The idempotent client token. If you call the same ClientToken multiple times, the returned results are the same. Only one cluster can be created with the same ClientToken.
     *
     * @example A7D960FA-6DBA-5E07-8746-A63E3E4D****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The name of the cluster. The name must be 1 to 128 characters in length. It must start with a letter and cannot start with http:// or https://. It can contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * This parameter is required.
     * @example emrtest
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   DATALAKE: data lake
     *   OLAP: online analytical processing (OLAP)
     *   DATAFLOW: Dataflow
     *   DATASERVING: DataServing
     *   CUSTOM: a custom hybrid cluster.
     *   HADOOP: the old data lake. We recommend that you use the new data lake.
     *
     * This parameter is required.
     * @example DATALAKE
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The deployment mode of master nodes in the cluster. Valid values:
     *
     *   NORMAL: regular mode. This is the default value. A cluster that contains only one master node is created.
     *   HA: high availability (HA) mode. A cluster that contains three master nodes is created.
     *
     * @example HA
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The attributes of all ECS instances.
     *
     * This parameter is required.
     * @var NodeAttributes
     */
    public $nodeAttributes;

    /**
     * @description The node groups. You can specify a maximum of 100 items.
     *
     * This parameter is required.
     * @example NORMAL
     *
     * @var NodeGroupConfig[]
     */
    public $nodeGroups;

    /**
     * @description The billing cycle of the instance. Valid values:
     *
     *   PayAsYouGo: pay-as-you-go
     *   Subscription: subscription
     *
     * Default value: PayAsYouGo.
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The version of EMR. You can view the EMR release version on the EMR cluster purchase page.
     *
     * This parameter is required.
     * @example EMR-5.8.0
     *
     * @var string
     */
    public $releaseVersion;

    /**
     * @description The ID of the resource group to which to assign the ENI.
     *
     * @example rg-acfmzabjyop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The security mode of the cluster. Valid values:
     *
     *   NORMAL: disables Kerberos authentication for the cluster. This is the default value.
     *   KERBEROS: enables Kerberos authentication for the cluster.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $securityMode;

    /**
     * @description The subscription configurations. This parameter is required only if you set the PaymentType parameter to Subscription.
     *
     * @var SubscriptionConfig
     */
    public $subscriptionConfig;

    /**
     * @description The tags. You can specify a maximum of 20 items.
     *
     * @example A7D960FA-6DBA-5E07-8746-A63E3E4D****
     *
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'applicationConfigs' => 'ApplicationConfigs',
        'applications'       => 'Applications',
        'bootstrapScripts'   => 'BootstrapScripts',
        'clientToken'        => 'ClientToken',
        'clusterName'        => 'ClusterName',
        'clusterType'        => 'ClusterType',
        'deployMode'         => 'DeployMode',
        'nodeAttributes'     => 'NodeAttributes',
        'nodeGroups'         => 'NodeGroups',
        'paymentType'        => 'PaymentType',
        'regionId'           => 'RegionId',
        'releaseVersion'     => 'ReleaseVersion',
        'resourceGroupId'    => 'ResourceGroupId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
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
     * @return CreateClusterRequest
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['NodeAttributes'])) {
            $model->nodeAttributes = NodeAttributes::fromMap($map['NodeAttributes']);
        }
        if (isset($map['NodeGroups'])) {
            if (!empty($map['NodeGroups'])) {
                $model->nodeGroups = [];
                $n                 = 0;
                foreach ($map['NodeGroups'] as $item) {
                    $model->nodeGroups[$n++] = null !== $item ? NodeGroupConfig::fromMap($item) : $item;
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

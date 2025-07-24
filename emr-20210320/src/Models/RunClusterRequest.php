<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class RunClusterRequest extends Model
{
    /**
     * @description The application configurations. Number of elements in the array: 1 to 1000.
     *
     * @var ApplicationConfig[]
     */
    public $applicationConfigs;

    /**
     * @description The list of services. Number of elements in the array: 1 to 100.
     *
     * This parameter is required.
     *
     * @var Application[]
     */
    public $applications;

    /**
     * @description The array of bootstrap scripts. Number of elements in the array: 1 to 10.
     *
     * @var Script[]
     */
    public $bootstrapScripts;

    /**
     * @description The client token that is used to ensure the idempotence of the request. The same ClientToken value for multiple calls to the RunCluster operation results in identical responses. Only one cluster can be created by using the same ClientToken value.
     *
     * @example A7D960FA-6DBA-5E07-8746-A63E3E4D****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The cluster name. The name must be 1 to 128 characters in length. The name must start with a letter but cannot start with http:// or https://. The name can contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example emrtest
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   DATALAKE
     *   OLAP
     *   DATAFLOW
     *   DATASERVING
     *   CUSTOM
     *   HADOOP: We recommend that you set this parameter to DATALAKE rather than HADOOP.
     *
     * If the first time you create an EMR cluster is after 17:00 (UTC+8) on December 19, 2022, you cannot create a Hadoop, Data Science, Presto, or ZooKeeper cluster.
     *
     * This parameter is required.
     *
     * @example DATALAKE
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description Specifies whether to enable release protection for the cluster. Valid values:
     *
     *   true: enables release protection for the cluster.
     *   false: disables release protection for the cluster.
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The deployment mode of master nodes in the cluster. Valid values:
     *
     *   NORMAL: regular mode. This is the default value. A cluster that contains only one master node is created.
     *   HA: high availability mode. A cluster that contains at least three master nodes is created.
     *
     * @example HA
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The cluster description.
     *
     * @example Emr cluster for ETL
     *
     * @var string
     */
    public $description;

    /**
     * @description The node attributes. The basic attributes of all ECS nodes in the cluster.
     *
     * @var NodeAttributes
     */
    public $nodeAttributes;

    /**
     * @description The array of configurations of the node groups. Number of elements in the array: 1 to 100.
     *
     * This parameter is required.
     *
     * @var NodeGroupConfig[]
     */
    public $nodeGroups;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   PayAsYouGo
     *   Subscription
     *
     * Default value: PayAsYouGo.
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @var Promotion[]
     */
    public $promotions;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The EMR version. You can query available EMR versions in the EMR console.
     *
     * This parameter is required.
     *
     * @example EMR-5.16.0
     *
     * @var string
     */
    public $releaseVersion;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmzabjyop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The security mode of the cluster. Valid values:
     *
     *   NORMAL: regular mode. Kerberos authentication is disabled. This is the default value.
     *   KERBEROS: Kerberos mode. Kerberos authentication is enabled.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $securityMode;

    /**
     * @description The subscription configurations. This parameter is required when the PaymentType parameter is set to Subscription.
     *
     * @var SubscriptionConfig
     */
    public $subscriptionConfig;

    /**
     * @description The tag. Number of elements in the array: 0 to 20.
     *
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'applicationConfigs' => 'ApplicationConfigs',
        'applications' => 'Applications',
        'bootstrapScripts' => 'BootstrapScripts',
        'clientToken' => 'ClientToken',
        'clusterName' => 'ClusterName',
        'clusterType' => 'ClusterType',
        'deletionProtection' => 'DeletionProtection',
        'deployMode' => 'DeployMode',
        'description' => 'Description',
        'nodeAttributes' => 'NodeAttributes',
        'nodeGroups' => 'NodeGroups',
        'paymentType' => 'PaymentType',
        'promotions' => 'Promotions',
        'regionId' => 'RegionId',
        'releaseVersion' => 'ReleaseVersion',
        'resourceGroupId' => 'ResourceGroupId',
        'securityMode' => 'SecurityMode',
        'subscriptionConfig' => 'SubscriptionConfig',
        'tags' => 'Tags',
    ];

    public function validate() {}

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
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->promotions) {
            $res['Promotions'] = [];
            if (null !== $this->promotions && \is_array($this->promotions)) {
                $n = 0;
                foreach ($this->promotions as $item) {
                    $res['Promotions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return RunClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationConfigs'])) {
            if (!empty($map['ApplicationConfigs'])) {
                $model->applicationConfigs = [];
                $n = 0;
                foreach ($map['ApplicationConfigs'] as $item) {
                    $model->applicationConfigs[$n++] = null !== $item ? ApplicationConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n = 0;
                foreach ($map['Applications'] as $item) {
                    $model->applications[$n++] = null !== $item ? Application::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BootstrapScripts'])) {
            if (!empty($map['BootstrapScripts'])) {
                $model->bootstrapScripts = [];
                $n = 0;
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
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NodeAttributes'])) {
            $model->nodeAttributes = NodeAttributes::fromMap($map['NodeAttributes']);
        }
        if (isset($map['NodeGroups'])) {
            if (!empty($map['NodeGroups'])) {
                $model->nodeGroups = [];
                $n = 0;
                foreach ($map['NodeGroups'] as $item) {
                    $model->nodeGroups[$n++] = null !== $item ? NodeGroupConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['Promotions'])) {
            if (!empty($map['Promotions'])) {
                $model->promotions = [];
                $n = 0;
                foreach ($map['Promotions'] as $item) {
                    $model->promotions[$n++] = null !== $item ? Promotion::fromMap($item) : $item;
                }
            }
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
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

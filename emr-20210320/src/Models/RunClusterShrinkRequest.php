<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class RunClusterShrinkRequest extends Model
{
    /**
     * @description The application configurations. Number of elements in the array: 1 to 1000.
     *
     * @var string
     */
    public $applicationConfigsShrink;

    /**
     * @description The list of services. Number of elements in the array: 1 to 100.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $applicationsShrink;

    /**
     * @description The array of bootstrap scripts. Number of elements in the array: 1 to 10.
     *
     * @var string
     */
    public $bootstrapScriptsShrink;

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
     * @var string
     */
    public $nodeAttributesShrink;

    /**
     * @description The array of configurations of the node groups. Number of elements in the array: 1 to 100.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $nodeGroupsShrink;

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
     * @var string
     */
    public $promotionsShrink;

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
     * @var string
     */
    public $subscriptionConfigShrink;

    /**
     * @description The tag. Number of elements in the array: 0 to 20.
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'applicationConfigsShrink' => 'ApplicationConfigs',
        'applicationsShrink' => 'Applications',
        'bootstrapScriptsShrink' => 'BootstrapScripts',
        'clientToken' => 'ClientToken',
        'clusterName' => 'ClusterName',
        'clusterType' => 'ClusterType',
        'deletionProtection' => 'DeletionProtection',
        'deployMode' => 'DeployMode',
        'description' => 'Description',
        'nodeAttributesShrink' => 'NodeAttributes',
        'nodeGroupsShrink' => 'NodeGroups',
        'paymentType' => 'PaymentType',
        'promotionsShrink' => 'Promotions',
        'regionId' => 'RegionId',
        'releaseVersion' => 'ReleaseVersion',
        'resourceGroupId' => 'ResourceGroupId',
        'securityMode' => 'SecurityMode',
        'subscriptionConfigShrink' => 'SubscriptionConfig',
        'tagsShrink' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationConfigsShrink) {
            $res['ApplicationConfigs'] = $this->applicationConfigsShrink;
        }
        if (null !== $this->applicationsShrink) {
            $res['Applications'] = $this->applicationsShrink;
        }
        if (null !== $this->bootstrapScriptsShrink) {
            $res['BootstrapScripts'] = $this->bootstrapScriptsShrink;
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
        if (null !== $this->nodeAttributesShrink) {
            $res['NodeAttributes'] = $this->nodeAttributesShrink;
        }
        if (null !== $this->nodeGroupsShrink) {
            $res['NodeGroups'] = $this->nodeGroupsShrink;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->promotionsShrink) {
            $res['Promotions'] = $this->promotionsShrink;
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
        if (null !== $this->subscriptionConfigShrink) {
            $res['SubscriptionConfig'] = $this->subscriptionConfigShrink;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunClusterShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationConfigs'])) {
            $model->applicationConfigsShrink = $map['ApplicationConfigs'];
        }
        if (isset($map['Applications'])) {
            $model->applicationsShrink = $map['Applications'];
        }
        if (isset($map['BootstrapScripts'])) {
            $model->bootstrapScriptsShrink = $map['BootstrapScripts'];
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
            $model->nodeAttributesShrink = $map['NodeAttributes'];
        }
        if (isset($map['NodeGroups'])) {
            $model->nodeGroupsShrink = $map['NodeGroups'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['Promotions'])) {
            $model->promotionsShrink = $map['Promotions'];
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
            $model->subscriptionConfigShrink = $map['SubscriptionConfig'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}

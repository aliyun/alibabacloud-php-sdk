<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class RunClusterShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationConfigsShrink;

    /**
     * @var string
     */
    public $applicationsShrink;

    /**
     * @var string
     */
    public $bootstrapScriptsShrink;

    /**
     * @var string
     */
    public $clientToken;

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
    public $nodeAttributesShrink;

    /**
     * @var string
     */
    public $nodeGroupsShrink;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $promotionsShrink;

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
     * @var string
     */
    public $securityMode;

    /**
     * @var string
     */
    public $subscriptionConfigShrink;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

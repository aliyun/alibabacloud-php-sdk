<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class RunClusterShrinkRequest extends Model
{
    /**
     * @description 应用配置。数组元素个数N的取值范围：1~1000。
     *
     * @var string
     */
    public $applicationConfigsShrink;

    /**
     * @description 应用列表。数组元素个数N的取值范围：1~100。
     *
     * This parameter is required.
     * @var string
     */
    public $applicationsShrink;

    /**
     * @description 引导脚本。数组元素个数N的取值范围：1~10。
     *
     * @var string
     */
    public $bootstrapScriptsShrink;

    /**
     * @description 幂等客户端TOKEN。同一个ClientToken多次调用的返回结果一致，同一个ClientToken最多只创建一个集群。
     *
     * @example A7D960FA-6DBA-5E07-8746-A63E3E4D****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 集群名称。长度为1~128个字符，必须以大小字母或中文开头，不能以http://和https://开头。可以包含中文、英文、数字、半角冒号（:）、下划线（_）、半角句号（.）或者短划线（-）
     *
     * This parameter is required.
     * @example emrtest
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description 创建的EMR集群类型。取值范围：
     * This parameter is required.
     * @example DATALAKE
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description 集群中的应用部署模式。取值范围：
     * 默认值：NORMAL。
     * @example HA
     *
     * @var string
     */
    public $deployMode;

    /**
     * @example Emr cluster for ETL
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $nodeAttributesShrink;

    /**
     * @description 节点组。数组元素个数N的取值范围：1~100。
     * This parameter is required.
     * @var string
     */
    public $nodeGroupsShrink;

    /**
     * @description 集群的付费类型。取值范围：
     * 默认值：PayAsYouGo。
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description 区域ID。
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description EMR发行版。
     *
     * This parameter is required.
     * @example EMR-5.16.0
     *
     * @var string
     */
    public $releaseVersion;

    /**
     * @description 集群所在的企业资源组ID。
     *
     * @example rg-acfmzabjyop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Kerberos安全模式。取值范围：
     * 默认值：NORMAL
     * @example NORMAL
     *
     * @var string
     */
    public $securityMode;

    /**
     * @var string
     */
    public $subscriptionConfigShrink;

    /**
     * @description 标签。数组元数个数N的取值范围：0~20。
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'applicationConfigsShrink' => 'ApplicationConfigs',
        'applicationsShrink'       => 'Applications',
        'bootstrapScriptsShrink'   => 'BootstrapScripts',
        'clientToken'              => 'ClientToken',
        'clusterName'              => 'ClusterName',
        'clusterType'              => 'ClusterType',
        'deployMode'               => 'DeployMode',
        'description'              => 'Description',
        'nodeAttributesShrink'     => 'NodeAttributes',
        'nodeGroupsShrink'         => 'NodeGroups',
        'paymentType'              => 'PaymentType',
        'regionId'                 => 'RegionId',
        'releaseVersion'           => 'ReleaseVersion',
        'resourceGroupId'          => 'ResourceGroupId',
        'securityMode'             => 'SecurityMode',
        'subscriptionConfigShrink' => 'SubscriptionConfig',
        'tagsShrink'               => 'Tags',
    ];

    public function validate()
    {
    }

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

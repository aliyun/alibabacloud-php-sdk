<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @description 应用配置。数组元素个数N的取值范围：1~1000。
     *
     * @var ApplicationConfig[]
     */
    public $applicationConfigs;

    /**
     * @description 应用列表。数组元素个数N的取值范围：1~100。
     *
     * @var Application[]
     */
    public $applications;

    /**
     * @description 引导脚本。数组元素个数N的取值范围：1~10。
     *
     * @var Script[]
     */
    public $bootstrapScripts;

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
     * @example emrtest
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description 创建的EMR集群类型。取值范围：
     * - HADOOP：旧版数据湖（不推荐使用，建议使用新版数据湖）。
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
     * @description 节点属性。集群中的ECS节点基础属性。
     *
     * @var NodeAttributes
     */
    public $nodeAttributes;

    /**
     * @description 节点组。数组元素个数N的取值范围：1~100。
     * <p>
     * @example NORMAL
     *
     * @var NodeGroupConfig[]
     */
    public $nodeGroups;

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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description EMR发行版。
     *
     * @example EMR-5.8.0
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
     * @description 预付费配置。当PaymentType取值Subscription时该参数生效。
     *
     * @var SubscriptionConfig
     */
    public $subscriptionConfig;

    /**
     * @description 标签。数组元数个数N的取值范围：0~20。
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

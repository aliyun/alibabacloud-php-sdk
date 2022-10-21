<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
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
     * @var string
     */
    public $deployMode;

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class UpdateClusterShrinkRequest extends Model
{
    /**
     * @description The client version. By default, the latest version is used.
     *
     * @example 2.1.0
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The post-processing script of the cluster.
     *
     * @var string
     */
    public $clusterCustomConfigurationShrink;

    /**
     * @description The cluster description. The description must be 1 to 128 characters in length and can contain letters, digits, hyphens (-), and underscores (_).
     *
     * @example slurm22.05.8-serverless-cluster-20240805
     *
     * @var string
     */
    public $clusterDescription;

    /**
     * @description The cluster ID.
     *
     * You can call the [ListClusters](https://help.aliyun.com/document_detail/87116.html) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The cluster name. The name must be 1 to 128 characters in length and can contain letters, digits, hyphens (-), and underscores (_).
     *
     * @example slurm22.05.8-serverless-cluster-20240805
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Specifies whether to enable deletion protection for the cluster. Deletion protection decides whether the cluster can be deleted in the console or by calling the DeleteCluster operation. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description Specifies whether to enable auto scale-in for the cluster. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableScaleIn;

    /**
     * @description Specifies whether to enable auto scale-out for the cluster. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableScaleOut;

    /**
     * @description The interval at which the cluster is automatically scaled out.
     *
     * @example 2
     *
     * @var int
     */
    public $growInterval;

    /**
     * @description The idle duration of the compute nodes allowed by the cluster.
     *
     * @example 4
     *
     * @var int
     */
    public $idleInterval;

    /**
     * @description The total maximum number of vCPUs for use by compute nodes in the cluster. Valid values: 0 to 100,000.
     *
     * @example 10000
     *
     * @var int
     */
    public $maxCoreCount;

    /**
     * @description The maximum number of compute nodes that the cluster can manage. Valid values: 0 to 5,000.
     *
     * @example 500
     *
     * @var int
     */
    public $maxCount;
    protected $_name = [
        'clientVersion'                    => 'ClientVersion',
        'clusterCustomConfigurationShrink' => 'ClusterCustomConfiguration',
        'clusterDescription'               => 'ClusterDescription',
        'clusterId'                        => 'ClusterId',
        'clusterName'                      => 'ClusterName',
        'deletionProtection'               => 'DeletionProtection',
        'enableScaleIn'                    => 'EnableScaleIn',
        'enableScaleOut'                   => 'EnableScaleOut',
        'growInterval'                     => 'GrowInterval',
        'idleInterval'                     => 'IdleInterval',
        'maxCoreCount'                     => 'MaxCoreCount',
        'maxCount'                         => 'MaxCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->clusterCustomConfigurationShrink) {
            $res['ClusterCustomConfiguration'] = $this->clusterCustomConfigurationShrink;
        }
        if (null !== $this->clusterDescription) {
            $res['ClusterDescription'] = $this->clusterDescription;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->enableScaleIn) {
            $res['EnableScaleIn'] = $this->enableScaleIn;
        }
        if (null !== $this->enableScaleOut) {
            $res['EnableScaleOut'] = $this->enableScaleOut;
        }
        if (null !== $this->growInterval) {
            $res['GrowInterval'] = $this->growInterval;
        }
        if (null !== $this->idleInterval) {
            $res['IdleInterval'] = $this->idleInterval;
        }
        if (null !== $this->maxCoreCount) {
            $res['MaxCoreCount'] = $this->maxCoreCount;
        }
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateClusterShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ClusterCustomConfiguration'])) {
            $model->clusterCustomConfigurationShrink = $map['ClusterCustomConfiguration'];
        }
        if (isset($map['ClusterDescription'])) {
            $model->clusterDescription = $map['ClusterDescription'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['EnableScaleIn'])) {
            $model->enableScaleIn = $map['EnableScaleIn'];
        }
        if (isset($map['EnableScaleOut'])) {
            $model->enableScaleOut = $map['EnableScaleOut'];
        }
        if (isset($map['GrowInterval'])) {
            $model->growInterval = $map['GrowInterval'];
        }
        if (isset($map['IdleInterval'])) {
            $model->idleInterval = $map['IdleInterval'];
        }
        if (isset($map['MaxCoreCount'])) {
            $model->maxCoreCount = $map['MaxCoreCount'];
        }
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }

        return $model;
    }
}

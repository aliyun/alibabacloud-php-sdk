<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateClusterRequest\clusterCustomConfiguration;
use AlibabaCloud\Tea\Model;

class UpdateClusterRequest extends Model
{
    /**
     * @example 2.1.0
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @var clusterCustomConfiguration
     */
    public $clusterCustomConfiguration;

    /**
     * @example slurm22.05.8-serverless-cluster-20240805
     *
     * @var string
     */
    public $clusterDescription;

    /**
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example slurm22.05.8-serverless-cluster-20240805
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableScaleIn;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableScaleOut;

    /**
     * @example 2
     *
     * @var int
     */
    public $growInterval;

    /**
     * @example 4
     *
     * @var int
     */
    public $idleInterval;

    /**
     * @example 10000
     *
     * @var int
     */
    public $maxCoreCount;

    /**
     * @example 500
     *
     * @var int
     */
    public $maxCount;
    protected $_name = [
        'clientVersion'              => 'ClientVersion',
        'clusterCustomConfiguration' => 'ClusterCustomConfiguration',
        'clusterDescription'         => 'ClusterDescription',
        'clusterId'                  => 'ClusterId',
        'clusterName'                => 'ClusterName',
        'deletionProtection'         => 'DeletionProtection',
        'enableScaleIn'              => 'EnableScaleIn',
        'enableScaleOut'             => 'EnableScaleOut',
        'growInterval'               => 'GrowInterval',
        'idleInterval'               => 'IdleInterval',
        'maxCoreCount'               => 'MaxCoreCount',
        'maxCount'                   => 'MaxCount',
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
        if (null !== $this->clusterCustomConfiguration) {
            $res['ClusterCustomConfiguration'] = null !== $this->clusterCustomConfiguration ? $this->clusterCustomConfiguration->toMap() : null;
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
     * @return UpdateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ClusterCustomConfiguration'])) {
            $model->clusterCustomConfiguration = clusterCustomConfiguration::fromMap($map['ClusterCustomConfiguration']);
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

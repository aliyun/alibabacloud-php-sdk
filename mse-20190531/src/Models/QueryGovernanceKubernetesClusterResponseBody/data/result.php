<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryGovernanceKubernetesClusterResponseBody\data;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $k8sVersion;

    /**
     * @var string
     */
    public $namespaceInfos;

    /**
     * @var string
     */
    public $pilotStartTime;

    /**
     * @var string
     */
    public $pilotVersion;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $versionLifeCycle;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'k8sVersion' => 'K8sVersion',
        'namespaceInfos' => 'NamespaceInfos',
        'pilotStartTime' => 'PilotStartTime',
        'pilotVersion' => 'PilotVersion',
        'region' => 'Region',
        'versionLifeCycle' => 'VersionLifeCycle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->k8sVersion) {
            $res['K8sVersion'] = $this->k8sVersion;
        }

        if (null !== $this->namespaceInfos) {
            $res['NamespaceInfos'] = $this->namespaceInfos;
        }

        if (null !== $this->pilotStartTime) {
            $res['PilotStartTime'] = $this->pilotStartTime;
        }

        if (null !== $this->pilotVersion) {
            $res['PilotVersion'] = $this->pilotVersion;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->versionLifeCycle) {
            $res['VersionLifeCycle'] = $this->versionLifeCycle;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['K8sVersion'])) {
            $model->k8sVersion = $map['K8sVersion'];
        }

        if (isset($map['NamespaceInfos'])) {
            $model->namespaceInfos = $map['NamespaceInfos'];
        }

        if (isset($map['PilotStartTime'])) {
            $model->pilotStartTime = $map['PilotStartTime'];
        }

        if (isset($map['PilotVersion'])) {
            $model->pilotVersion = $map['PilotVersion'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['VersionLifeCycle'])) {
            $model->versionLifeCycle = $map['VersionLifeCycle'];
        }

        return $model;
    }
}

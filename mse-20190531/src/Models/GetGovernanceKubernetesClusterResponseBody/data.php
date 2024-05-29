<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterResponseBody\data\namespaces;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example cd23228b3c80c4d4f9ad7af1d87cc30d5
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the instance.
     *
     * @example myCluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The version of Kubernetes.
     *
     * @example 1.20.11-aliyun.1
     *
     * @var string
     */
    public $k8sVersion;

    /**
     * @description The information of the namespace.
     *
     * @example [{\\"Name\\":\\"ack-onepilot\\",\\"Tags\\":null},{\\"Name\\":\\"default\\",\\"Tags\\":{\\"mse-enable\\":\\"enabled\\"}},{\\"Name\\":\\"kube-node-lease\\",\\"Tags\\":null},{\\"Name\\":\\"kube-public\\",\\"Tags\\":null},{\\"Name\\":\\"kube-system\\",\\"Tags\\":null}]
     *
     * @var string
     */
    public $namespaceInfos;

    /**
     * @description The queried namespaces.
     *
     * @var namespaces[]
     */
    public $namespaces;

    /**
     * @description The time when the pilot component was started.
     *
     * @example 2022-01-11T11:50:38.000+0000
     *
     * @var string
     */
    public $pilotStartTime;

    /**
     * @description The ID of the region in which the instance resides. The region is supported by MSE.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The time of the last modification.
     *
     * @example 2022-01-12T05:24:31.000+0000
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'clusterName'    => 'ClusterName',
        'k8sVersion'     => 'K8sVersion',
        'namespaceInfos' => 'NamespaceInfos',
        'namespaces'     => 'Namespaces',
        'pilotStartTime' => 'PilotStartTime',
        'region'         => 'Region',
        'updateTime'     => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->namespaces) {
            $res['Namespaces'] = [];
            if (null !== $this->namespaces && \is_array($this->namespaces)) {
                $n = 0;
                foreach ($this->namespaces as $item) {
                    $res['Namespaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pilotStartTime) {
            $res['PilotStartTime'] = $this->pilotStartTime;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = [];
                $n                 = 0;
                foreach ($map['Namespaces'] as $item) {
                    $model->namespaces[$n++] = null !== $item ? namespaces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PilotStartTime'])) {
            $model->pilotStartTime = $map['PilotStartTime'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}

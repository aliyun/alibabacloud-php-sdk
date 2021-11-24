<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateGovernanceKubernetesClusterRequest extends Model
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
    public $nameSpaceInfos;

    /**
     * @var int
     */
    public $pilotStartTime;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'clusterName'    => 'ClusterName',
        'k8sVersion'     => 'K8sVersion',
        'nameSpaceInfos' => 'NameSpaceInfos',
        'pilotStartTime' => 'PilotStartTime',
        'regionId'       => 'RegionId',
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
        if (null !== $this->nameSpaceInfos) {
            $res['NameSpaceInfos'] = $this->nameSpaceInfos;
        }
        if (null !== $this->pilotStartTime) {
            $res['PilotStartTime'] = $this->pilotStartTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGovernanceKubernetesClusterRequest
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
        if (isset($map['NameSpaceInfos'])) {
            $model->nameSpaceInfos = $map['NameSpaceInfos'];
        }
        if (isset($map['PilotStartTime'])) {
            $model->pilotStartTime = $map['PilotStartTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

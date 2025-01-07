<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListPrivateK8sResponseBody;

use AlibabaCloud\Tea\Model;

class privateK8sInfos extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 12345
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The IP address of the API server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $apiServerIp;

    /**
     * @description The name of the cluster.
     *
     * @example xxx
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The ID of the policy.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The version of Kubernetes.
     *
     * @example 1.18
     *
     * @var string
     */
    public $k8sVersion;

    /**
     * @description The server configuration of Kubernetes.
     *
     * @example xxx
     *
     * @var string
     */
    public $kubeConfig;

    /**
     * @description The network type. Valid values:
     *
     *   **1**: Internet.
     *   **2**: VPC.
     *
     * @example 1
     *
     * @var int
     */
    public $netType;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-2zet5l358k6z0gnz*****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'aliUid'      => 'AliUid',
        'apiServerIp' => 'ApiServerIp',
        'clusterName' => 'ClusterName',
        'id'          => 'Id',
        'k8sVersion'  => 'K8sVersion',
        'kubeConfig'  => 'KubeConfig',
        'netType'     => 'NetType',
        'regionId'    => 'RegionId',
        'vpcId'       => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->apiServerIp) {
            $res['ApiServerIp'] = $this->apiServerIp;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->k8sVersion) {
            $res['K8sVersion'] = $this->k8sVersion;
        }
        if (null !== $this->kubeConfig) {
            $res['KubeConfig'] = $this->kubeConfig;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateK8sInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ApiServerIp'])) {
            $model->apiServerIp = $map['ApiServerIp'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['K8sVersion'])) {
            $model->k8sVersion = $map['K8sVersion'];
        }
        if (isset($map['KubeConfig'])) {
            $model->kubeConfig = $map['KubeConfig'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListPodRiskResponseBody;

use AlibabaCloud\Tea\Model;

class podRiskList extends Model
{
    /**
     * @description The number of alerts that are generated for the pod.
     *
     * @example 10
     *
     * @var int
     */
    public $alarmCount;

    /**
     * @description The ID of the container cluster.
     *
     * @example c1d903a628af043659a043af59d89****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example test66
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The timestamp that indicates the time when the pod was created. Unit: milliseconds.
     *
     * @example 1644283112720
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The number of baseline risk items that are detected in the pod.
     *
     * @example 1
     *
     * @var int
     */
    public $hcCount;

    /**
     * @description The instance ID of the node.
     *
     * @example i-7yvdq597****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The namespace of the Kubernetes cluster.
     *
     * @example kube-system
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the node.
     *
     * @example test
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The name of the pod.
     *
     * @example expoit-xxx-b****
     *
     * @var string
     */
    public $pod;

    /**
     * @description The IP address of the pod.
     *
     * @example 172.0.XXX.XXX
     *
     * @var string
     */
    public $podIp;

    /**
     * @description The number of vulnerabilities that are detected in the pod.
     *
     * @example 1
     *
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'alarmCount'  => 'AlarmCount',
        'clusterId'   => 'ClusterId',
        'clusterName' => 'ClusterName',
        'createTime'  => 'CreateTime',
        'hcCount'     => 'HcCount',
        'instanceId'  => 'InstanceId',
        'namespace'   => 'Namespace',
        'nodeName'    => 'NodeName',
        'pod'         => 'Pod',
        'podIp'       => 'PodIp',
        'vulCount'    => 'VulCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmCount) {
            $res['AlarmCount'] = $this->alarmCount;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->hcCount) {
            $res['HcCount'] = $this->hcCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->pod) {
            $res['Pod'] = $this->pod;
        }
        if (null !== $this->podIp) {
            $res['PodIp'] = $this->podIp;
        }
        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return podRiskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmCount'])) {
            $model->alarmCount = $map['AlarmCount'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HcCount'])) {
            $model->hcCount = $map['HcCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Pod'])) {
            $model->pod = $map['Pod'];
        }
        if (isset($map['PodIp'])) {
            $model->podIp = $map['PodIp'];
        }
        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }

        return $model;
    }
}

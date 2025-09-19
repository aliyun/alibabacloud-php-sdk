<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerGroupedFieldDetailResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $alarmCount;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clusterCurrentVersion;

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
    public $clusterState;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var int
     */
    public $containerCount;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $pod;

    /**
     * @var int
     */
    public $podCount;

    /**
     * @var string
     */
    public $podIp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'alarmCount' => 'AlarmCount',
        'appName' => 'AppName',
        'clusterCurrentVersion' => 'ClusterCurrentVersion',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'clusterState' => 'ClusterState',
        'clusterType' => 'ClusterType',
        'containerCount' => 'ContainerCount',
        'createTime' => 'CreateTime',
        'instanceCount' => 'InstanceCount',
        'namespace' => 'Namespace',
        'nodeName' => 'NodeName',
        'pod' => 'Pod',
        'podCount' => 'PodCount',
        'podIp' => 'PodIp',
        'regionId' => 'RegionId',
        'vulCount' => 'VulCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmCount) {
            $res['AlarmCount'] = $this->alarmCount;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->clusterCurrentVersion) {
            $res['ClusterCurrentVersion'] = $this->clusterCurrentVersion;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->clusterState) {
            $res['ClusterState'] = $this->clusterState;
        }

        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->containerCount) {
            $res['ContainerCount'] = $this->containerCount;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
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

        if (null !== $this->podCount) {
            $res['PodCount'] = $this->podCount;
        }

        if (null !== $this->podIp) {
            $res['PodIp'] = $this->podIp;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
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
        if (isset($map['AlarmCount'])) {
            $model->alarmCount = $map['AlarmCount'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ClusterCurrentVersion'])) {
            $model->clusterCurrentVersion = $map['ClusterCurrentVersion'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['ClusterState'])) {
            $model->clusterState = $map['ClusterState'];
        }

        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['ContainerCount'])) {
            $model->containerCount = $map['ContainerCount'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
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

        if (isset($map['PodCount'])) {
            $model->podCount = $map['PodCount'];
        }

        if (isset($map['PodIp'])) {
            $model->podIp = $map['PodIp'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }

        return $model;
    }
}

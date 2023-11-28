<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeCollectorResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeCollectorResponseBody\result\extendConfigs\machines;
use AlibabaCloud\Tea\Model;

class extendConfigs extends Model
{
    /**
     * @description The configuration type. Valid values:
     *
     *   collectorTargetInstance
     *   collectorDeployMachine
     *   collectorElasticsearchForKibana
     *
     * @example collectorDeployMachine
     *
     * @var string
     */
    public $configType;

    /**
     * @description Indicates whether monitoring is enabled. This parameter is returned if the value of **configType** is **collectorTargetInstance**. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableMonitoring;

    /**
     * @description The ID of the machine group. This parameter is returned if the value of **configType** is **collectorDeployMachine**.
     *
     * @example default_ct-cn-5i2l75bz4776****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The private endpoint of Kibana after you enable the Kibana dashboard. This parameter is returned if the value of **configType** is **collectorElasticsearchForKibana**.
     *
     * @example es-cn-n6w1o1x0w001c****-kibana.internal.elasticsearch.aliyuncs.com:5601
     *
     * @var string
     */
    public $host;

    /**
     * @var string[]
     */
    public $hosts;

    /**
     * @description The ID of the resource that is associated with the shipper. If the value of **configType** is **collectorTargetInstance**, the value of this parameter is the ID of the resource specified in the output configuration part of the shipper. If the value of **configType** is **collectorDeployMachines** and the value of **type** is **ACKCluster**, the value of this parameter is the ID of the ACK cluster.
     *
     * @example es-cn-n6w1o1****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the cluster specified in the output configuration part of the shipper. Valid values: elasticsearch and logstash. This parameter is returned if the value of **configType** is **collectorTargetInstance**.
     *
     * @example elasticsearch
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The public endpoint of Kibana after you enable the Kibana dashboard. This parameter is returned if the value of **configType** is **collectorElasticsearchForKibana**.
     *
     * @example https://es-cn-nif1z89fz003i****.kibana.elasticsearch.aliyuncs.com:5601
     *
     * @var string
     */
    public $kibanaHost;

    /**
     * @description The information about the Elastic Compute Service (ECS) instances on which the shipper is deployed. This parameter is returned if the value of **configType** is **collectorDeployMachines** and the value of **type** is **ECSInstanceId**.
     *
     * @var machines[]
     */
    public $machines;

    /**
     * @description The transmission protocol, which must be the same as the access protocol of the resource specified in the output configuration part of the shipper. Valid values: HTTP and HTTPS. This parameter is returned if the value of **configType** is **collectorTargetInstance**.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The number of pods from which data is succcessfully collected in the Container Service for Kubernetes (ACK) cluster.
     *
     * @example 8
     *
     * @var string
     */
    public $successPodsCount;

    /**
     * @description The total number of pods from which data is collected in the ACK cluster.
     *
     * @example 10
     *
     * @var string
     */
    public $totalPodsCount;

    /**
     * @description The type of the machine on which the shipper is deployed. This parameter is returned if the value of **configType** is **collectorDeployMachine**. Valid values:
     *
     *   ECSInstanceId
     *   ACKCluster
     *
     * @example ECSInstanceId
     *
     * @var string
     */
    public $type;

    /**
     * @description The username that is used to access the resource specified in the output configuration part of the shipper. The default value is elastic. This parameter is returned if the value of **configType** is **collectorTargetInstance** or **collectorElasticsearchForKibana**.
     *
     * @example elastic
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'configType'       => 'configType',
        'enableMonitoring' => 'enableMonitoring',
        'groupId'          => 'groupId',
        'host'             => 'host',
        'hosts'            => 'hosts',
        'instanceId'       => 'instanceId',
        'instanceType'     => 'instanceType',
        'kibanaHost'       => 'kibanaHost',
        'machines'         => 'machines',
        'protocol'         => 'protocol',
        'successPodsCount' => 'successPodsCount',
        'totalPodsCount'   => 'totalPodsCount',
        'type'             => 'type',
        'userName'         => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }
        if (null !== $this->enableMonitoring) {
            $res['enableMonitoring'] = $this->enableMonitoring;
        }
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->hosts) {
            $res['hosts'] = $this->hosts;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->kibanaHost) {
            $res['kibanaHost'] = $this->kibanaHost;
        }
        if (null !== $this->machines) {
            $res['machines'] = [];
            if (null !== $this->machines && \is_array($this->machines)) {
                $n = 0;
                foreach ($this->machines as $item) {
                    $res['machines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->successPodsCount) {
            $res['successPodsCount'] = $this->successPodsCount;
        }
        if (null !== $this->totalPodsCount) {
            $res['totalPodsCount'] = $this->totalPodsCount;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }
        if (isset($map['enableMonitoring'])) {
            $model->enableMonitoring = $map['enableMonitoring'];
        }
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['hosts'])) {
            if (!empty($map['hosts'])) {
                $model->hosts = $map['hosts'];
            }
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['kibanaHost'])) {
            $model->kibanaHost = $map['kibanaHost'];
        }
        if (isset($map['machines'])) {
            if (!empty($map['machines'])) {
                $model->machines = [];
                $n               = 0;
                foreach ($map['machines'] as $item) {
                    $model->machines[$n++] = null !== $item ? machines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['successPodsCount'])) {
            $model->successPodsCount = $map['successPodsCount'];
        }
        if (isset($map['totalPodsCount'])) {
            $model->totalPodsCount = $map['totalPodsCount'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}

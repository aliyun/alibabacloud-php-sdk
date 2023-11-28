<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorResponseBody\result\extendConfigs\machines;
use AlibabaCloud\Tea\Model;

class extendConfigs extends Model
{
    /**
     * @description The type of the configuration items. Valid values:
     *
     *   collectorTargetInstance: indicates the information about the output of the shipper.
     *   collectorDeployMachine: indicates the information about the machine on which the shipper is installed.
     *   collectorElasticsearchForKibana: indicates the information about the Elasticsearch cluster for which Kibana Dashboard is enabled.
     *
     * @example collectorDeployMachine
     *
     * @var string
     */
    public $configType;

    /**
     * @description Indicates whether Kibana Monitoring is enabled. This parameter is returned only when **configType** is set to **collectorTargetInstance** and **instanceType** is set to **elasticsearch**. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $enableMonitoring;

    /**
     * @description The machine group ID. This parameter is returned only when **configType** is set to **collectorDeployMachine**.
     *
     * @example default_ct-cn-5i2l75bz4776****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The address that is used to access Kibana over an internal network after you enable Kibana Dashboard. This parameter is returned only when **configType** is set to **collectorElasticsearchForKibana**.
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
     * @description The ID of the object that is associated with the shipper. If **configType** is set to **collectorTargetInstance**, the value of this parameter is the ID of the output of the shipper. If **configType** is set to **collectorDeployMachines** and **type** is set to **ACKCluster**, the value of this parameter is the ID of an ACK cluster.
     *
     * @example es-cn-nif1z89fz003i****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the output of the shipper. Valid values: elasticsearch and logstash. This parameter is returned only when **configType** is set to **collectorTargetInstance**.
     *
     * @example elasticsearch
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The address that is used to access Kibana over the Internet after you enable Kibana Dashboard. This parameter is returned only when **configType** is set to **collectorElasticsearchForKibana**.
     *
     * @example https://es-cn-nif1z89fz003i****.kibana.elasticsearch.aliyuncs.com:5601
     *
     * @var string
     */
    public $kibanaHost;

    /**
     * @description This parameter is returned only when configType is set to collectorDeployMachine.
     *
     * This parameter indicates the information about the ECS instances or ACK clusters on which the shipper is installed.
     * @var machines[]
     */
    public $machines;

    /**
     * @description The transfer protocol that is used. It is the same as the protocol over which you can access the output of the shipper. Valid values: HTTP and HTTPS. This parameter is returned only when **configType** is set to **collectorTargetInstance**.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The number of pods from which logs are successfully collected in the ACK cluster. This parameter is returned only when **configType** is set to **collectorDeployMachines** and **type** is set to **ACKCluster**.
     *
     * @example 8
     *
     * @var string
     */
    public $successPodsCount;

    /**
     * @description The number of pods from which logs needed to be collected in the ACK cluster. This parameter is returned only when **configType** is set to **collectorDeployMachines** and **type** is set to **ACKCluster**.
     *
     * @example 10
     *
     * @var string
     */
    public $totalPodsCount;

    /**
     * @description The type of the machine on which the shipper is installed. This parameter is returned only when **configType** is set to **collectorDeployMachine**. Valid values:
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
     * @description The username that is used to access the output of the shipper. Default value: elastic. This parameter is returned only when **configType** is set to **collectorTargetInstance** or **collectorElasticsearchForKibana**.
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

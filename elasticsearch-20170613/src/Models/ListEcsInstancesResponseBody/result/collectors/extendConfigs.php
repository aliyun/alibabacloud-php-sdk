<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody\result\collectors;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody\result\collectors\extendConfigs\machines;
use AlibabaCloud\Tea\Model;

class extendConfigs extends Model
{
    /**
     * @description The instance type specified by Collector Output. Supports Elasticsearch and Logstash. Displayed when the **configType** is **collectorTargetInstance**.
     *
     * @example collectorDeployMachine
     *
     * @var string
     */
    public $configType;

    /**
     * @description The ID of the host group. Displayed when the **configType** is **collectorDeployMachine**.
     *
     * @example true
     *
     * @var bool
     */
    public $enableMonitoring;

    /**
     * @description The configuration type. Valid values:
     *
     *   collectorTargetInstance: Collector Output
     *   collectorDeployMachine: Collector Deployment Machine
     *   Collector Elasticsearch ForKibana: Elasticsearch instance information that supports the Kibana dashboard
     *
     * @example default_ct-cn-5i2l75bz4776****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The path in which Filebeat is collected.
     *
     * @var string[]
     */
    public $hosts;

    /**
     * @description The list of ECS instances on which the collector is deployed. Displayed when the **configType** is **collectorDeployMachines** and the **type** is **ECSInstanceId**.
     *
     * @example es-cn-nif1z89fz003i****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The transmission protocol, which must be the same as the access protocol of the instance specified by Output. HTTP and HTTPS. Displayed when the **configType** is **collectorTargetInstance**.
     *
     * @example elasticsearch
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The status of each crawl on the ECS instance. Valid values:
     *
     *   heartOk: The heartbeat is normal.
     *   heartLost: The heartbeat is abnormal.
     *   uninstalled
     *   failed: The installation failed.
     *
     * @var machines[]
     */
    public $machines;

    /**
     * @description The username that is used to access the instance. The default value is elastic. Displayed when the **configType** is **collectorTargetInstance** or **collectorElasticsearchForKibana**.
     *
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The ID of the instance that is associated with the crawker. If the **configType** parameter is set to **collectorTargetInstance**, the value of this parameter is the ID of the output collector. If the **configType** parameter is set to **collectorDeployMachines** and the **type** parameter is set to **ACKCluster**, the value of this parameter is the ID of the ACK cluster.
     *
     * @example ECSInstanceId
     *
     * @var string
     */
    public $type;

    /**
     * @description The type of the machine on which the Collector is deployed. This parameter is displayed when the **configType** is **collectorDeployMachine**. Valid values:
     *
     *   ECSInstanceId:ECS
     *   ACKCluster: Container Kubernetes
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
        'hosts'            => 'hosts',
        'instanceId'       => 'instanceId',
        'instanceType'     => 'instanceType',
        'machines'         => 'machines',
        'protocol'         => 'protocol',
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
        if (null !== $this->hosts) {
            $res['hosts'] = $this->hosts;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}

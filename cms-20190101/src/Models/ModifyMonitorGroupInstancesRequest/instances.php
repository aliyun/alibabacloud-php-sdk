<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMonitorGroupInstancesRequest;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The abbreviation of the name of the service to which the instances to be added to the application group belong. Valid values:
     *
     *   ECS: Elastic Compute Service (ECS) instances provided by Alibaba Cloud and hosts not provided by Alibaba Cloud
     *
     *   RDS: ApsaraDB for RDS
     *
     *   ADS: AnalyticDB
     *
     *   SLB: Server Load Balancer (SLB)
     *
     *   VPC: Virtual Private Cloud (VPC)
     *
     *   APIGATEWAY: API Gateway
     *
     *   CDN: Alibaba Cloud Content Delivery Network (CDN)
     *
     *   CS: Container Service for Swarm
     *
     *   DCDN: Dynamic Route for CDN
     *
     *   DDoS: Anti-DDoS Pro
     *
     *   EIP: Elastic IP Address (EIP)
     *
     *   ELASTICSEARCH: Elasticsearch
     *
     *   EMR: E-MapReduce
     *
     *   ESS: Auto Scaling
     *
     *   HBASE: ApsaraDB for Hbase
     *
     *   IOT_EDGE: IoT Edge
     *
     *   K8S_POD: pods in Container Service for Kubernetes
     *
     *   KVSTORE_SHARDING: ApsaraDB for Redis of the cluster architecture
     *
     *   KVSTORE_SPLITRW: ApsaraDB for Redis of the read/write splitting architecture
     *
     *   KVSTORE_STANDARD: ApsaraDB for Redis of the standard architecture
     *
     *   MEMCACHE: ApsaraDB for Memcache
     *
     *   MNS: Message Service (MNS)
     *
     *   MONGODB: ApsaraDB for MongoDB of the replica set architecture
     *
     *   MONGODB_CLUSTER: ApsaraDB for MongoDB of the cluster architecture
     *
     *   MONGODB_SHARDING: ApsaraDB for MongoDB of the sharded cluster architecture
     *
     *   MQ_TOPIC: MNS topics
     *
     *   OCS: ApsaraDB for Memcache of earlier versions
     *
     *   OPENSEARCH: Open Search
     *
     *   OSS: Object Storage Service (OSS)
     *
     *   POLARDB: PolarDB
     *
     *   PETADATA: HybridDB for MySQL
     *
     *   SCDN: Secure Content Delivery Network (SCDN)
     *
     *   SHAREBANDWIDTHPACKAGES: EIP Bandwidth Plan
     *
     *   SLS: Log Service
     *
     *   VPN: VPN Gateway
     *
     * Valid values of N: 1 to 2000.
     * @example ECS
     *
     * @var string
     */
    public $category;

    /**
     * @description The ID of the instance. Valid values of N: 1 to 2000.
     *
     * @example i-a2d5q7pm12****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance. Valid values of N: 1 to 2000.
     *
     * @example HostName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The ID of the region where the instance resides. Valid values of N: 1 to 2000.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'category'     => 'Category',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteMonitorGroupInstancesRequest extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example ecs
     *
     * @var string
     */
    public $category;

    /**
     * @description The instances to be removed from the application group. Separate multiple instances with commas (,). You can remove a maximum of 20 instances from an application group at a time.
     *
     * @example 123456
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The abbreviation of the service name. Valid values:
     *
     *   ECS: Elastic Compute Service (ECS) instances provided by Alibaba Cloud and hosts not provided by Alibaba Cloud
     *   RDS: ApsaraDB for RDS
     *   ADS: AnalyticDB
     *   SLB: Server Load Balancer (SLB)
     *   VPC: Virtual Private Cloud (VPC)
     *   APIGATEWAY: API Gateway
     *   CDN: Alibaba Cloud Content Delivery Network (CDN)
     *   CS: Container Service for Swarm
     *   DCDN: Dynamic Route for CDN
     *   DDoS: Anti-DDoS Pro
     *   EIP: Elastic IP Address (EIP)
     *   ELASTICSEARCH: Elasticsearch
     *   EMR: E-MapReduce
     *   ESS: Auto Scaling
     *   HBASE: ApsaraDB for Hbase
     *   IOT_EDGE: IoT Edge
     *   K8S_POD: pods in Container Service for Kubernetes
     *   KVSTORE_SHARDING: ApsaraDB for Redis of the cluster architecture
     *   KVSTORE_SPLITRW: ApsaraDB for Redis of the read/write splitting architecture
     *   KVSTORE_STANDARD: ApsaraDB for Redis of the standard architecture
     *   MEMCACHE: ApsaraDB for Memcache
     *   MNS: Message Service (MNS)
     *   MONGODB: ApsaraDB for MongoDB of the replica set architecture
     *   MONGODB_CLUSTER: ApsaraDB for MongoDB of the cluster architecture
     *   MONGODB_SHARDING: ApsaraDB for MongoDB of the sharded cluster architecture
     *   MQ_TOPIC: MNS topics
     *   OCS: ApsaraDB for Memcache of earlier versions
     *   OPENSEARCH: Open Search
     *   OSS: Object Storage Service (OSS)
     *   POLARDB: PolarDB
     *   PETADATA: HybridDB for MySQL
     *   SCDN: Secure Content Delivery Network (SCDN)
     *   SHAREBANDWIDTHPACKAGES: EIP Bandwidth Plan
     *   SLS: Log Service
     *   VPN: VPN Gateway
     *
     * @example i-a2d5q7pm3f912****,i-a2d5q7pm3f222****
     *
     * @var string
     */
    public $instanceIdList;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'category'       => 'Category',
        'groupId'        => 'GroupId',
        'instanceIdList' => 'InstanceIdList',
        'regionId'       => 'RegionId',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMonitorGroupInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceIdList'])) {
            $model->instanceIdList = $map['InstanceIdList'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

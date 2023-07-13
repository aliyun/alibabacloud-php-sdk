<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponseBody\monitorGroupCategories\monitorGroupCategory;

use AlibabaCloud\Tea\Model;

class categoryItem extends Model
{
    /**
     * @description The name of the cloud service. Valid values:
     *
     *   ecs: Elastic Compute Service (ECS) instances that are provided by Alibaba Cloud and hosts that are not provided by Alibaba Cloud
     *   rds: ApsaraDB RDS
     *   ads: AnalyticDB
     *   slb: Server Load Balancer (SLB)
     *   vpc: Virtual Private Cloud (VPC)
     *   apigateway: API Gateway
     *   cdn: Alibaba Cloud Content Delivery Network (CDN)
     *   cs: Container Service for Swarm
     *   dcdn: Dynamic Route for CDN (DCDN)
     *   ddos: Anti-DDoS
     *   eip: Elastic IP Address (EIP)
     *   elasticsearch: Elasticsearch
     *   emr: E-MapReduce
     *   ess: Auto Scaling
     *   hbase: ApsaraDB for HBase
     *   iot_edge: IoT Edge
     *   k8s_pod: pods in Container Service for Kubernetes (ACK)
     *   kvstore_sharding: ApsaraDB for Redis of the cluster master-replica architecture
     *   kvstore_splitrw: ApsaraDB for Redis of the read/write splitting architecture
     *   kvstore_standard: ApsaraDB for Redis of the standard master-replica architecture
     *   memcache: ApsaraDB for Memcache
     *   mns: Message Service (MNS)
     *   mongodb: ApsaraDB for MongoDB of the replica set architecture
     *   mongodb_cluster: ApsaraDB for MongoDB of the cluster architecture
     *   mongodb_sharding: ApsaraDB for MongoDB of the sharded cluster architecture
     *   mq_topic: MNS topics
     *   ocs: ApsaraDB for Memcache of earlier versions
     *   opensearch: Open Search
     *   oss: Object Storage Service (OSS)
     *   polardb: PolarDB
     *   petadata: HybridDB for MySQL
     *   scdn: Secure CDN (SCDN)
     *   sharebandwidthpackages: EIP Bandwidth Plan
     *   sls: Log Service
     *   vpn: VPN Gateway
     *
     * @example ECS
     *
     * @var string
     */
    public $category;

    /**
     * @description The number of resources that belong to the cloud service.
     *
     * @example 1
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'category' => 'Category',
        'count'    => 'Count',
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
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categoryItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}

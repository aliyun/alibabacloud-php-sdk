<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMonitorGroupInstancesRequest extends Model
{
    /**
     * @description The abbreviation of the name of the service to which the instances in the application group belong. Valid values:
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
     * Valid values of N: 1 to 200.
     * @example ecs
     *
     * @var string
     */
    public $category;

    /**
     * @description The ID of the application group.
     *
     * @example 12345
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the instance. You can query multiple instances by specifying multiple IDs.
     *
     * @example i-x1234568
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The keyword used to search for instances. Fuzzy search based on instance name is supported.
     *
     * @example s1
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'category'    => 'Category',
        'groupId'     => 'GroupId',
        'instanceIds' => 'InstanceIds',
        'keyword'     => 'Keyword',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
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
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitorGroupInstancesRequest
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
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

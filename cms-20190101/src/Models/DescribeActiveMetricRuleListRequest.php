<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeActiveMetricRuleListRequest extends Model
{
    /**
     * @description The abbreviation of the service name. The following services support one-click alert:
     *
     *   ecs: Elastic Compute Service (ECS)
     *   rds: ApsaraDB for RDS
     *   slb: Server Load Balancer (SLB)
     *   redis_standard: ApsaraDB for Redis of the standard architecture
     *   redis_sharding: ApsaraDB for Redis of the cluster architecture
     *   redis_splitrw: ApsaraDB for Redis of the read/write splitting architecture
     *   mongodb: ApsaraDB for MongoDB of the replica set architecture
     *   mongodb_sharding: ApsaraDB for MongoDB of the sharded cluster architecture
     *   hbase: ApsaraDB for HBase
     *   elasticsearch: Elasticsearch
     *   opensearch: Open Search
     *
     * @example ecs
     *
     * @var string
     */
    public $product;
    protected $_name = [
        'product' => 'Product',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActiveMetricRuleListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}

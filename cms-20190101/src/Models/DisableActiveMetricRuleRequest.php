<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DisableActiveMetricRuleRequest extends Model
{
    /**
     * @description The service for which you want to disable one-click alert. Valid values:
     *
     *   ecs: Elastic Compute Service (ECS)
     *   rds: ApsaraDB RDS
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

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'product'  => 'Product',
        'regionId' => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableActiveMetricRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

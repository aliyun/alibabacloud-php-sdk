<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DisableElasticPlanRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * >  You can call the [DescribeDBClusters](~~454250~~) operation to query the ID of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     * @example amv-wz9509beptiz****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the scaling plan.
     *
     * >  You can call the [DescribeElasticPlans](~~601334~~) operation to query the name of a scaling plan for a specific cluster.
     * @example test
     *
     * @var string
     */
    public $elasticPlanName;
    protected $_name = [
        'DBClusterId'     => 'DBClusterId',
        'elasticPlanName' => 'ElasticPlanName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->elasticPlanName) {
            $res['ElasticPlanName'] = $this->elasticPlanName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableElasticPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ElasticPlanName'])) {
            $model->elasticPlanName = $map['ElasticPlanName'];
        }

        return $model;
    }
}

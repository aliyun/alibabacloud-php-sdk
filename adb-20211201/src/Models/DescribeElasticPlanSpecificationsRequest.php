<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticPlanSpecificationsRequest extends Model
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
     * @description The name of the resource group.
     *
     * > *   This parameter is required only when you query the resource specifications that can be scaled for an interactive resource group.
     * > *   You can call the [DescribeDBResourceGroup](~~459446~~) operation to query the name of a resource group within a specific cluster.
     * @example test
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The type of the scaling plan. Valid values:
     *
     *   EXECUTOR: interactive resource groups, which fall into the computing resource category.
     *   WORKER: EIUs.
     *
     * @example EXECUTOR
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'DBClusterId'       => 'DBClusterId',
        'resourceGroupName' => 'ResourceGroupName',
        'type'              => 'Type',
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
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticPlanSpecificationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

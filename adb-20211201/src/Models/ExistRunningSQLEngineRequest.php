<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ExistRunningSQLEngineRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * >  You can call the [DescribeDBClusters](~~612397~~) operation to query the information about all AnalyticDB for MySQL clusters within a region, including cluster IDs.
     * @example amv-bp1cit7z8j****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the resource group.
     *
     * >  You can call the [DescribeDBResourceGroup](~~459446~~) operation to query the name of the resource group for a cluster.
     * @example spark_test
     *
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'DBClusterId'       => 'DBClusterId',
        'resourceGroupName' => 'ResourceGroupName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExistRunningSQLEngineRequest
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

        return $model;
    }
}

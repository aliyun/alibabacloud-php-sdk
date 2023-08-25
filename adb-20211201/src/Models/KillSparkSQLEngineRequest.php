<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class KillSparkSQLEngineRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-8vbn8pq537k8w****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the resource group.
     *
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
     * @return KillSparkSQLEngineRequest
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

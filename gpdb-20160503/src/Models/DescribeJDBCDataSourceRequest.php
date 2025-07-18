<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeJDBCDataSourceRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * >  You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) operation to query the information about all AnalyticDB for PostgreSQL instances within a region, including instance IDs.
     *
     * This parameter is required.
     *
     * @example gp-xxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The data source ID.
     *
     * This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $dataSourceId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'dataSourceId' => 'DataSourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJDBCDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        return $model;
    }
}

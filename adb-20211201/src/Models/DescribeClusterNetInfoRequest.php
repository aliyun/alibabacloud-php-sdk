<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterNetInfoRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * This parameter is required.
     * @example amv-wz9dqvn0o7****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The database engine of the cluster. Valid values:
     *
     *   **AnalyticDB** (default): the AnalyticDB for MySQL engine.
     *   **Clickhouse**: the wide table engine.
     *
     * @example Clickhouse
     *
     * @var string
     */
    public $engine;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'engine'      => 'Engine',
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
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterNetInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}

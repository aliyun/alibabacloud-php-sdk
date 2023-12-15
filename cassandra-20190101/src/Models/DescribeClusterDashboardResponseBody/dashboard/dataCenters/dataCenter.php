<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard\dataCenters;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard\dataCenters\dataCenter\nodes;
use AlibabaCloud\Tea\Model;

class dataCenter extends Model
{
    /**
     * @example cn-shanghai-e
     *
     * @var string
     */
    public $dataCenterId;

    /**
     * @var nodes
     */
    public $nodes;
    protected $_name = [
        'dataCenterId' => 'DataCenterId',
        'nodes'        => 'Nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = null !== $this->nodes ? $this->nodes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataCenter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = nodes::fromMap($map['Nodes']);
        }

        return $model;
    }
}

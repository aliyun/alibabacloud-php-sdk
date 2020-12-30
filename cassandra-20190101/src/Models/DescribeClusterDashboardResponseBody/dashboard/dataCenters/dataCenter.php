<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard\dataCenters;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard\dataCenters\dataCenter\nodes;
use AlibabaCloud\Tea\Model;

class dataCenter extends Model
{
    /**
     * @var nodes
     */
    public $nodes;

    /**
     * @var string
     */
    public $dataCenterId;
    protected $_name = [
        'nodes'        => 'Nodes',
        'dataCenterId' => 'DataCenterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['Nodes'] = null !== $this->nodes ? $this->nodes->toMap() : null;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
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
        if (isset($map['Nodes'])) {
            $model->nodes = nodes::fromMap($map['Nodes']);
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }

        return $model;
    }
}

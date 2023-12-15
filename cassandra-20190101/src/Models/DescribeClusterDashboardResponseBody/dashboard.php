<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard\dataCenters;
use AlibabaCloud\Tea\Model;

class dashboard extends Model
{
    /**
     * @example cds-bp1syjlt****q976
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var dataCenters
     */
    public $dataCenters;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'dataCenters' => 'DataCenters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataCenters) {
            $res['DataCenters'] = null !== $this->dataCenters ? $this->dataCenters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dashboard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataCenters'])) {
            $model->dataCenters = dataCenters::fromMap($map['DataCenters']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard\dataCenters;
use AlibabaCloud\Tea\Model;

class dashboard extends Model
{
    /**
     * @var dataCenters
     */
    public $dataCenters;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'dataCenters' => 'DataCenters',
        'clusterId'   => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCenters) {
            $res['DataCenters'] = null !== $this->dataCenters ? $this->dataCenters->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['DataCenters'])) {
            $model->dataCenters = dataCenters::fromMap($map['DataCenters']);
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard;
use AlibabaCloud\Tea\Model;

class DescribeClusterDashboardResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dashboard
     */
    public $dashboard;
    protected $_name = [
        'requestId' => 'RequestId',
        'dashboard' => 'Dashboard',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dashboard) {
            $res['Dashboard'] = null !== $this->dashboard ? $this->dashboard->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterDashboardResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Dashboard'])) {
            $model->dashboard = dashboard::fromMap($map['Dashboard']);
        }

        return $model;
    }
}

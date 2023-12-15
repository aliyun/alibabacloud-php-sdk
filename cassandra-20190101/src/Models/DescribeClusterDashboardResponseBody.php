<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard;
use AlibabaCloud\Tea\Model;

class DescribeClusterDashboardResponseBody extends Model
{
    /**
     * @var dashboard
     */
    public $dashboard;

    /**
     * @example 9339F598-0560-43CE-9F57-CD7B6B385DBB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dashboard' => 'Dashboard',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dashboard) {
            $res['Dashboard'] = null !== $this->dashboard ? $this->dashboard->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Dashboard'])) {
            $model->dashboard = dashboard::fromMap($map['Dashboard']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

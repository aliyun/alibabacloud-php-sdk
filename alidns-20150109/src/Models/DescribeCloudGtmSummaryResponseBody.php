<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudGtmSummaryResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $instanceTotalCount;

    /**
     * @example 101
     *
     * @var int
     */
    public $monitorTaskTotalCount;

    /**
     * @example 20
     *
     * @var int
     */
    public $monitorTaskTotalQuota;

    /**
     * @example 199C3699-9A7B-41A1-BB5A-F1E862D3CB38
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTotalCount'    => 'InstanceTotalCount',
        'monitorTaskTotalCount' => 'MonitorTaskTotalCount',
        'monitorTaskTotalQuota' => 'MonitorTaskTotalQuota',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTotalCount) {
            $res['InstanceTotalCount'] = $this->instanceTotalCount;
        }
        if (null !== $this->monitorTaskTotalCount) {
            $res['MonitorTaskTotalCount'] = $this->monitorTaskTotalCount;
        }
        if (null !== $this->monitorTaskTotalQuota) {
            $res['MonitorTaskTotalQuota'] = $this->monitorTaskTotalQuota;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudGtmSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTotalCount'])) {
            $model->instanceTotalCount = $map['InstanceTotalCount'];
        }
        if (isset($map['MonitorTaskTotalCount'])) {
            $model->monitorTaskTotalCount = $map['MonitorTaskTotalCount'];
        }
        if (isset($map['MonitorTaskTotalQuota'])) {
            $model->monitorTaskTotalQuota = $map['MonitorTaskTotalQuota'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

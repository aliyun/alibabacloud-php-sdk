<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribeCloudGtmSummaryResponseBody extends Model
{
    /**
     * @var int
     */
    public $instanceTotalCount;

    /**
     * @var int
     */
    public $monitorTaskTotalCount;

    /**
     * @var int
     */
    public $monitorTaskTotalQuota;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTotalCount' => 'InstanceTotalCount',
        'monitorTaskTotalCount' => 'MonitorTaskTotalCount',
        'monitorTaskTotalQuota' => 'MonitorTaskTotalQuota',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskMetricInfoResponseBody\metricInfo;
use AlibabaCloud\Tea\Model;

class GetDISyncTaskMetricInfoResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description isSuccess
     *
     * @var bool
     */
    public $success;

    /**
     * @var metricInfo
     */
    public $metricInfo;
    protected $_name = [
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'metricInfo' => 'MetricInfo',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->metricInfo) {
            $res['MetricInfo'] = null !== $this->metricInfo ? $this->metricInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDISyncTaskMetricInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['MetricInfo'])) {
            $model->metricInfo = metricInfo::fromMap($map['MetricInfo']);
        }

        return $model;
    }
}

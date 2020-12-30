<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobDetailResponseBody\jobDetail;
use AlibabaCloud\Tea\Model;

class GetJobDetailResponseBody extends Model
{
    /**
     * @var jobDetail
     */
    public $jobDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobDetail' => 'JobDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobDetail) {
            $res['JobDetail'] = null !== $this->jobDetail ? $this->jobDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobDetail'])) {
            $model->jobDetail = jobDetail::fromMap($map['JobDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

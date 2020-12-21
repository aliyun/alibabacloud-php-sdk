<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobDetailResponse\jobDetail;
use AlibabaCloud\Tea\Model;

class GetJobDetailResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var jobDetail
     */
    public $jobDetail;
    protected $_name = [
        'requestId' => 'RequestId',
        'jobDetail' => 'JobDetail',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('jobDetail', $this->jobDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->jobDetail) {
            $res['JobDetail'] = null !== $this->jobDetail ? $this->jobDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobDetailResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['JobDetail'])) {
            $model->jobDetail = jobDetail::fromMap($map['JobDetail']);
        }

        return $model;
    }
}

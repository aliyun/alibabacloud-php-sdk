<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class AttachCommonBandwidthPackageToLoadBalancerResponseBody extends Model
{
    /**
     * @description The asynchronous task ID.
     *
     * @example 72dcd26b-f12d-4c27-b3af-18f6aed5****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The request ID.
     *
     * @example 2EF39708-974B-5E74-AFF5-3445263035A8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobId'     => 'JobId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachCommonBandwidthPackageToLoadBalancerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class DisableLoadBalancerIpv6InternetResponseBody extends Model
{
    /**
     * @description The asynchronous task ID.
     *
     * @example d12871a6-ebb2-41f3-8d74-d9f452bb****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The request ID.
     *
     * @example 7D866E37-1123-5160-AFF1-BDAF5EB86A8A
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
     * @return DisableLoadBalancerIpv6InternetResponseBody
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DescribeExcpetionCountResponseBody extends Model
{
    /**
     * @description The number of assets that are in an abnormal state.
     *
     * @example 0
     *
     * @var int
     */
    public $exceptionIpCount;

    /**
     * @description The number of Anti-DDoS Origin instances that are about to expire.
     *
     * @example 1
     *
     * @var int
     */
    public $expireTimeCount;

    /**
     * @description The ID of the request.
     *
     * @example 4B45279A-B1BE-5EEE-87CA-58AF4183EA58
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exceptionIpCount' => 'ExceptionIpCount',
        'expireTimeCount'  => 'ExpireTimeCount',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exceptionIpCount) {
            $res['ExceptionIpCount'] = $this->exceptionIpCount;
        }
        if (null !== $this->expireTimeCount) {
            $res['ExpireTimeCount'] = $this->expireTimeCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExcpetionCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExceptionIpCount'])) {
            $model->exceptionIpCount = $map['ExceptionIpCount'];
        }
        if (isset($map['ExpireTimeCount'])) {
            $model->expireTimeCount = $map['ExpireTimeCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

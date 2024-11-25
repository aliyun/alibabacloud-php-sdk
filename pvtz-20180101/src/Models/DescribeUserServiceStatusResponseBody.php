<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserServiceStatusResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 99626905-678A-4E8A-984E-6AEB09993996
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Current user\\"s service status:
     *
     *  **CLOSED**: Not activated
     *  **OPENED**: Activated
     *  **IN_DEBT**: Overdue payment
     *  **IN_DEBT_OVER_DUE**: Payment overdue
     *
     * @example OPENED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'requestId' => 'RequestId',
        'status'    => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserServiceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

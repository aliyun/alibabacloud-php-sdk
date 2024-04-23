<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class QueryDedicatedBlockStorageClusterDiskThroughputStatusResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example A37597A6-BB99-19B3-85EA-4C2B91F0****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the throughput after setting the throughput by SetDedicatedBlockStorageClusterDiskThroughput api.
     *
     * - FAIL(): The throughput setting has failed.
     * @example RUNNING
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
     * @return QueryDedicatedBlockStorageClusterDiskThroughputStatusResponseBody
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

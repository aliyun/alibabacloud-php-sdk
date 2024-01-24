<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbLogInfoResponseBody\logTimeRange;
use AlibabaCloud\Tea\Model;

class DescribeInstDbLogInfoResponseBody extends Model
{
    /**
     * @description The time range for log query.
     *
     * @var logTimeRange
     */
    public $logTimeRange;

    /**
     * @description The ID of the request.
     *
     * @example A5438952-70EE-4FA5-87A9-080DB0ASD45F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'logTimeRange' => 'LogTimeRange',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logTimeRange) {
            $res['LogTimeRange'] = null !== $this->logTimeRange ? $this->logTimeRange->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstDbLogInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogTimeRange'])) {
            $model->logTimeRange = logTimeRange::fromMap($map['LogTimeRange']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbLogInfoResponseBody\logTimeRange;
use AlibabaCloud\Tea\Model;

class DescribeInstDbLogInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var logTimeRange
     */
    public $logTimeRange;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'    => 'RequestId',
        'logTimeRange' => 'LogTimeRange',
        'success'      => 'Success',
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
        if (null !== $this->logTimeRange) {
            $res['LogTimeRange'] = null !== $this->logTimeRange ? $this->logTimeRange->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LogTimeRange'])) {
            $model->logTimeRange = logTimeRange::fromMap($map['LogTimeRange']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

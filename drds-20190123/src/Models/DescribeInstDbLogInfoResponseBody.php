<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbLogInfoResponseBody\logTimeRange;
use AlibabaCloud\Tea\Model;

class DescribeInstDbLogInfoResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var logTimeRange
     */
    public $logTimeRange;
    protected $_name = [
        'success'      => 'Success',
        'requestId'    => 'RequestId',
        'logTimeRange' => 'LogTimeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->logTimeRange) {
            $res['LogTimeRange'] = null !== $this->logTimeRange ? $this->logTimeRange->toMap() : null;
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LogTimeRange'])) {
            $model->logTimeRange = logTimeRange::fromMap($map['LogTimeRange']);
        }

        return $model;
    }
}

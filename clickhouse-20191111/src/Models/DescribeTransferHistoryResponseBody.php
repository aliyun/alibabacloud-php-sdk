<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTransferHistoryResponseBody\historyDetails;
use AlibabaCloud\Tea\Model;

class DescribeTransferHistoryResponseBody extends Model
{
    /**
     * @var historyDetails
     */
    public $historyDetails;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'historyDetails' => 'HistoryDetails',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->historyDetails) {
            $res['HistoryDetails'] = null !== $this->historyDetails ? $this->historyDetails->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTransferHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HistoryDetails'])) {
            $model->historyDetails = historyDetails::fromMap($map['HistoryDetails']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

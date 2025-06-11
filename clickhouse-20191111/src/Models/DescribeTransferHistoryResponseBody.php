<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTransferHistoryResponseBody\historyDetails;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->historyDetails) {
            $this->historyDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->historyDetails) {
            $res['HistoryDetails'] = null !== $this->historyDetails ? $this->historyDetails->toArray($noStream) : $this->historyDetails;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

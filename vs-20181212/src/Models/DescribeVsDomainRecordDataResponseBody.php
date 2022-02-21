<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainRecordDataResponseBody\recordDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVsDomainRecordDataResponseBody extends Model
{
    /**
     * @var recordDataPerInterval
     */
    public $recordDataPerInterval;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordDataPerInterval' => 'RecordDataPerInterval',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordDataPerInterval) {
            $res['RecordDataPerInterval'] = null !== $this->recordDataPerInterval ? $this->recordDataPerInterval->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVsDomainRecordDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordDataPerInterval'])) {
            $model->recordDataPerInterval = recordDataPerInterval::fromMap($map['RecordDataPerInterval']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

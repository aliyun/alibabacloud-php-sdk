<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainRecordDataResponseBody\recordDataPerInterval;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->recordDataPerInterval) {
            $this->recordDataPerInterval->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordDataPerInterval) {
            $res['RecordDataPerInterval'] = null !== $this->recordDataPerInterval ? $this->recordDataPerInterval->toArray($noStream) : $this->recordDataPerInterval;
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
        if (isset($map['RecordDataPerInterval'])) {
            $model->recordDataPerInterval = recordDataPerInterval::fromMap($map['RecordDataPerInterval']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

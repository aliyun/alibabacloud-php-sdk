<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsResponseBody\statistics;

class DescribeRecordStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var statistics
     */
    public $statistics;
    protected $_name = [
        'requestId' => 'RequestId',
        'statistics' => 'Statistics',
    ];

    public function validate()
    {
        if (null !== $this->statistics) {
            $this->statistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statistics) {
            $res['Statistics'] = null !== $this->statistics ? $this->statistics->toArray($noStream) : $this->statistics;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Statistics'])) {
            $model->statistics = statistics::fromMap($map['Statistics']);
        }

        return $model;
    }
}

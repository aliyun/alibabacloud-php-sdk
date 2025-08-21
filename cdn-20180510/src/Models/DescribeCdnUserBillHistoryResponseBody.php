<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillHistoryResponseBody\billHistoryData;

class DescribeCdnUserBillHistoryResponseBody extends Model
{
    /**
     * @var billHistoryData
     */
    public $billHistoryData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'billHistoryData' => 'BillHistoryData',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->billHistoryData) {
            $this->billHistoryData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billHistoryData) {
            $res['BillHistoryData'] = null !== $this->billHistoryData ? $this->billHistoryData->toArray($noStream) : $this->billHistoryData;
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
        if (isset($map['BillHistoryData'])) {
            $model->billHistoryData = billHistoryData::fromMap($map['BillHistoryData']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

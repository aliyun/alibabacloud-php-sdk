<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponseBody\billHistoryData;
use AlibabaCloud\Tea\Model;

class DescribeDcdnUserBillHistoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var billHistoryData
     */
    public $billHistoryData;
    protected $_name = [
        'requestId'       => 'RequestId',
        'billHistoryData' => 'BillHistoryData',
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
        if (null !== $this->billHistoryData) {
            $res['BillHistoryData'] = null !== $this->billHistoryData ? $this->billHistoryData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnUserBillHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BillHistoryData'])) {
            $model->billHistoryData = billHistoryData::fromMap($map['BillHistoryData']);
        }

        return $model;
    }
}

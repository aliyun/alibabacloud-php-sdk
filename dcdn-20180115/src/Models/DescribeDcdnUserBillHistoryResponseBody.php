<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponseBody\billHistoryData;
use AlibabaCloud\Tea\Model;

class DescribeDcdnUserBillHistoryResponseBody extends Model
{
    /**
     * @var billHistoryData
     */
    public $billHistoryData;

    /**
     * @example ED61C6C3-8241-4187-AAA7-5157AE175CEC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'billHistoryData' => 'BillHistoryData',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billHistoryData) {
            $res['BillHistoryData'] = null !== $this->billHistoryData ? $this->billHistoryData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BillHistoryData'])) {
            $model->billHistoryData = billHistoryData::fromMap($map['BillHistoryData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

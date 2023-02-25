<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillTypeResponseBody\billTypeData;
use AlibabaCloud\Tea\Model;

class DescribeDcdnUserBillTypeResponseBody extends Model
{
    /**
     * @description The information about the metering method.
     *
     * @var billTypeData
     */
    public $billTypeData;

    /**
     * @description The ID of the request.
     *
     * @example C370DAF1-C838-4288-A1A0-9A87633D248E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'billTypeData' => 'BillTypeData',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billTypeData) {
            $res['BillTypeData'] = null !== $this->billTypeData ? $this->billTypeData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnUserBillTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillTypeData'])) {
            $model->billTypeData = billTypeData::fromMap($map['BillTypeData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

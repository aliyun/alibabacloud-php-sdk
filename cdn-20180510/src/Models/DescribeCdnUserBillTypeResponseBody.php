<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillTypeResponseBody\billTypeData;

class DescribeCdnUserBillTypeResponseBody extends Model
{
    /**
     * @var billTypeData
     */
    public $billTypeData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'billTypeData' => 'BillTypeData',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->billTypeData) {
            $this->billTypeData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billTypeData) {
            $res['BillTypeData'] = null !== $this->billTypeData ? $this->billTypeData->toArray($noStream) : $this->billTypeData;
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
        if (isset($map['BillTypeData'])) {
            $model->billTypeData = billTypeData::fromMap($map['BillTypeData']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

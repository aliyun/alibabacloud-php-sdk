<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Dara\Model;

class QueryDeliveredSupplyItemsRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $commodityTypeCode;
    protected $_name = [
        'accountId' => 'accountId',
        'commodityTypeCode' => 'commodityTypeCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->commodityTypeCode) {
            $res['commodityTypeCode'] = $this->commodityTypeCode;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['commodityTypeCode'])) {
            $model->commodityTypeCode = $map['commodityTypeCode'];
        }

        return $model;
    }
}

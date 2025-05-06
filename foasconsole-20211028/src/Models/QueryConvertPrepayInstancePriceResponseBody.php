<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertPrepayInstancePriceResponseBody\priceInfo;

class QueryConvertPrepayInstancePriceResponseBody extends Model
{
    /**
     * @var priceInfo
     */
    public $priceInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'priceInfo' => 'PriceInfo',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->priceInfo) {
            $this->priceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->priceInfo) {
            $res['PriceInfo'] = null !== $this->priceInfo ? $this->priceInfo->toArray($noStream) : $this->priceInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['PriceInfo'])) {
            $model->priceInfo = priceInfo::fromMap($map['PriceInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

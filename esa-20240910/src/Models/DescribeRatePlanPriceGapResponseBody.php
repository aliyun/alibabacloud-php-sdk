<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeRatePlanPriceGapResponseBody\priceModel;

class DescribeRatePlanPriceGapResponseBody extends Model
{
    /**
     * @var priceModel
     */
    public $priceModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'priceModel' => 'PriceModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->priceModel) {
            $this->priceModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->priceModel) {
            $res['PriceModel'] = null !== $this->priceModel ? $this->priceModel->toArray($noStream) : $this->priceModel;
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
        if (isset($map['PriceModel'])) {
            $model->priceModel = priceModel::fromMap($map['PriceModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

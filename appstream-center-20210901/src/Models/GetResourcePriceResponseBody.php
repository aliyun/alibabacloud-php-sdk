<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponseBody\priceModel;
use AlibabaCloud\Tea\Model;

class GetResourcePriceResponseBody extends Model
{
    /**
     * @example InvalidParameter.ProductType
     *
     * @var string
     */
    public $code;

    /**
     * @example The parameter ProductType is invalid.
     *
     * @var string
     */
    public $message;

    /**
     * @var priceModel
     */
    public $priceModel;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'       => 'Code',
        'message'    => 'Message',
        'priceModel' => 'PriceModel',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->priceModel) {
            $res['PriceModel'] = null !== $this->priceModel ? $this->priceModel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourcePriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PriceModel'])) {
            $model->priceModel = priceModel::fromMap($map['PriceModel']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

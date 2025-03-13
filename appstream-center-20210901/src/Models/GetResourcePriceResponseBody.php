<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponseBody\priceList;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponseBody\priceModel;
use AlibabaCloud\Tea\Model;

class GetResourcePriceResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example InvalidParameter.ProductType
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message.
     *
     * @example The parameter ProductType is invalid.
     *
     * @var string
     */
    public $message;

    /**
     * @description The price objects.
     *
     * This parameter is returned only if a value is specified for AppInstanceType.
     * @var priceList[]
     */
    public $priceList;

    /**
     * @description The price object.
     *
     * This parameter is returned only if a value is specified for NodeInstanceType.
     * @var priceModel
     */
    public $priceModel;

    /**
     * @description The request ID.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'       => 'Code',
        'message'    => 'Message',
        'priceList'  => 'PriceList',
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
        if (null !== $this->priceList) {
            $res['PriceList'] = [];
            if (null !== $this->priceList && \is_array($this->priceList)) {
                $n = 0;
                foreach ($this->priceList as $item) {
                    $res['PriceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['PriceList'])) {
            if (!empty($map['PriceList'])) {
                $model->priceList = [];
                $n                = 0;
                foreach ($map['PriceList'] as $item) {
                    $model->priceList[$n++] = null !== $item ? priceList::fromMap($item) : $item;
                }
            }
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

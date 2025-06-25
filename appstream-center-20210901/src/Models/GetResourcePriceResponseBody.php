<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponseBody\priceList;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponseBody\priceModel;

class GetResourcePriceResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var priceList[]
     */
    public $priceList;

    /**
     * @var priceModel
     */
    public $priceModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'priceList' => 'PriceList',
        'priceModel' => 'PriceModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->priceList)) {
            Model::validateArray($this->priceList);
        }
        if (null !== $this->priceModel) {
            $this->priceModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->priceList) {
            if (\is_array($this->priceList)) {
                $res['PriceList'] = [];
                $n1 = 0;
                foreach ($this->priceList as $item1) {
                    $res['PriceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PriceList'])) {
            if (!empty($map['PriceList'])) {
                $model->priceList = [];
                $n1 = 0;
                foreach ($map['PriceList'] as $item1) {
                    $model->priceList[$n1] = priceList::fromMap($item1);
                    ++$n1;
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

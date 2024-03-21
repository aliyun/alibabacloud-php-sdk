<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\SDK\Trademark\V20190902\Models\GetOrderConfirmUrlRequest\items;
use AlibabaCloud\Tea\Model;

class GetOrderConfirmUrlRequest extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $outTraceCode;

    /**
     * @var string
     */
    public $outTraceType;
    protected $_name = [
        'items'        => 'Items',
        'outTraceCode' => 'OutTraceCode',
        'outTraceType' => 'OutTraceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outTraceCode) {
            $res['OutTraceCode'] = $this->outTraceCode;
        }
        if (null !== $this->outTraceType) {
            $res['OutTraceType'] = $this->outTraceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOrderConfirmUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OutTraceCode'])) {
            $model->outTraceCode = $map['OutTraceCode'];
        }
        if (isset($map['OutTraceType'])) {
            $model->outTraceType = $map['OutTraceType'];
        }

        return $model;
    }
}

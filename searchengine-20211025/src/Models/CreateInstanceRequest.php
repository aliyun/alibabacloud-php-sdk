<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateInstanceRequest\components;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateInstanceRequest\order;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description The billing method of the instance. Valid values: PREPAY and POSTPAY. PREPAY indicates the instance is a subscription instance. When you set this parameter to PREPAY, make sure that your Alibaba Cloud account supports balance payment or credit card payment. Otherwise, the system returns the InvalidPayMethod error message. If you set this parameter to PREPAY, you must also specify the paymentInfo parameter. POSTPAY indicates that the instance is a pay-as-you-go instance. This billing method is not supported.
     *
     * @example ""
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description A list of instance-related specifications.
     *
     * @var components[]
     */
    public $components;

    /**
     * @description The billing information.
     *
     * @var order
     */
    public $order;
    protected $_name = [
        'chargeType' => 'chargeType',
        'components' => 'components',
        'order'      => 'order',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }
        if (null !== $this->components) {
            $res['components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->order) {
            $res['order'] = null !== $this->order ? $this->order->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }
        if (isset($map['components'])) {
            if (!empty($map['components'])) {
                $model->components = [];
                $n                 = 0;
                foreach ($map['components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['order'])) {
            $model->order = order::fromMap($map['order']);
        }

        return $model;
    }
}

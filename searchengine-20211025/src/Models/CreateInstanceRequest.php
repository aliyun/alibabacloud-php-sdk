<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateInstanceRequest\components;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateInstanceRequest\order;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateInstanceRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description The billing method of the instance. Valid values: PREPAY: subscription. If you set this parameter to PREPAY, make sure that your Alibaba Cloud account supports balance payment or credit card payment. Otherwise, the system returns the InvalidPayMethod error message. If you set this parameter to PREPAY, you must also specify paymentInfo. POSTPAY: pay-as-you-go. This billing method is not supported.
     *
     * @example ""
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The information about the instance specification.
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

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'chargeType'      => 'chargeType',
        'components'      => 'components',
        'order'           => 'order',
        'resourceGroupId' => 'resourceGroupId',
        'tags'            => 'tags',
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
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

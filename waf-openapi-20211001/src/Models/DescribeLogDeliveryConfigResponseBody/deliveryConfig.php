<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeLogDeliveryConfigResponseBody;

use AlibabaCloud\Dara\Model;

class deliveryConfig extends Model
{
    /**
     * @var string
     */
    public $deliveryDetail;

    /**
     * @var string
     */
    public $deliveryName;

    /**
     * @var string
     */
    public $deliveryType;
    protected $_name = [
        'deliveryDetail' => 'DeliveryDetail',
        'deliveryName' => 'DeliveryName',
        'deliveryType' => 'DeliveryType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryDetail) {
            $res['DeliveryDetail'] = $this->deliveryDetail;
        }

        if (null !== $this->deliveryName) {
            $res['DeliveryName'] = $this->deliveryName;
        }

        if (null !== $this->deliveryType) {
            $res['DeliveryType'] = $this->deliveryType;
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
        if (isset($map['DeliveryDetail'])) {
            $model->deliveryDetail = $map['DeliveryDetail'];
        }

        if (isset($map['DeliveryName'])) {
            $model->deliveryName = $map['DeliveryName'];
        }

        if (isset($map['DeliveryType'])) {
            $model->deliveryType = $map['DeliveryType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceLogDeliveryStatusResponseBody;

use AlibabaCloud\Dara\Model;

class logConfigs extends Model
{
    /**
     * @var string
     */
    public $deliveryName;

    /**
     * @var string
     */
    public $deliveryType;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var bool
     */
    public $status;
    protected $_name = [
        'deliveryName' => 'DeliveryName',
        'deliveryType' => 'DeliveryType',
        'resource' => 'Resource',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryName) {
            $res['DeliveryName'] = $this->deliveryName;
        }

        if (null !== $this->deliveryType) {
            $res['DeliveryType'] = $this->deliveryType;
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DeliveryName'])) {
            $model->deliveryName = $map['DeliveryName'];
        }

        if (isset($map['DeliveryType'])) {
            $model->deliveryType = $map['DeliveryType'];
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

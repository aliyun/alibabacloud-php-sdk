<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\DeliveryOrderResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deliveryStatus;
    protected $_name = [
        'deliveryStatus' => 'DeliveryStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryStatus) {
            $res['DeliveryStatus'] = $this->deliveryStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryStatus'])) {
            $model->deliveryStatus = $map['DeliveryStatus'];
        }

        return $model;
    }
}

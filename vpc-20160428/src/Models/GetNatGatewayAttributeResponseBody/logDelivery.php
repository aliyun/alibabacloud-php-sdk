<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class logDelivery extends Model
{
    /**
     * @var string
     */
    public $deliverLogsErrorMessage;

    /**
     * @var string
     */
    public $deliveryStatus;

    /**
     * @var string
     */
    public $logDeliveryType;

    /**
     * @var string
     */
    public $logDestination;
    protected $_name = [
        'deliverLogsErrorMessage' => 'DeliverLogsErrorMessage',
        'deliveryStatus'          => 'DeliveryStatus',
        'logDeliveryType'         => 'LogDeliveryType',
        'logDestination'          => 'LogDestination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliverLogsErrorMessage) {
            $res['DeliverLogsErrorMessage'] = $this->deliverLogsErrorMessage;
        }
        if (null !== $this->deliveryStatus) {
            $res['DeliveryStatus'] = $this->deliveryStatus;
        }
        if (null !== $this->logDeliveryType) {
            $res['LogDeliveryType'] = $this->logDeliveryType;
        }
        if (null !== $this->logDestination) {
            $res['LogDestination'] = $this->logDestination;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logDelivery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliverLogsErrorMessage'])) {
            $model->deliverLogsErrorMessage = $map['DeliverLogsErrorMessage'];
        }
        if (isset($map['DeliveryStatus'])) {
            $model->deliveryStatus = $map['DeliveryStatus'];
        }
        if (isset($map['LogDeliveryType'])) {
            $model->logDeliveryType = $map['LogDeliveryType'];
        }
        if (isset($map['LogDestination'])) {
            $model->logDestination = $map['LogDestination'];
        }

        return $model;
    }
}

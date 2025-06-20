<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetDeliveryChannelResponseBody\deliveryChannelFilter;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetDeliveryChannelResponseBody\resourceChangeDelivery;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetDeliveryChannelResponseBody\resourceSnapshotDelivery;

class GetDeliveryChannelResponseBody extends Model
{
    /**
     * @var string
     */
    public $deliveryChannelDescription;

    /**
     * @var deliveryChannelFilter
     */
    public $deliveryChannelFilter;

    /**
     * @var string
     */
    public $deliveryChannelId;

    /**
     * @var string
     */
    public $deliveryChannelName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceChangeDelivery
     */
    public $resourceChangeDelivery;

    /**
     * @var resourceSnapshotDelivery
     */
    public $resourceSnapshotDelivery;
    protected $_name = [
        'deliveryChannelDescription' => 'DeliveryChannelDescription',
        'deliveryChannelFilter' => 'DeliveryChannelFilter',
        'deliveryChannelId' => 'DeliveryChannelId',
        'deliveryChannelName' => 'DeliveryChannelName',
        'requestId' => 'RequestId',
        'resourceChangeDelivery' => 'ResourceChangeDelivery',
        'resourceSnapshotDelivery' => 'ResourceSnapshotDelivery',
    ];

    public function validate()
    {
        if (null !== $this->deliveryChannelFilter) {
            $this->deliveryChannelFilter->validate();
        }
        if (null !== $this->resourceChangeDelivery) {
            $this->resourceChangeDelivery->validate();
        }
        if (null !== $this->resourceSnapshotDelivery) {
            $this->resourceSnapshotDelivery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryChannelDescription) {
            $res['DeliveryChannelDescription'] = $this->deliveryChannelDescription;
        }

        if (null !== $this->deliveryChannelFilter) {
            $res['DeliveryChannelFilter'] = null !== $this->deliveryChannelFilter ? $this->deliveryChannelFilter->toArray($noStream) : $this->deliveryChannelFilter;
        }

        if (null !== $this->deliveryChannelId) {
            $res['DeliveryChannelId'] = $this->deliveryChannelId;
        }

        if (null !== $this->deliveryChannelName) {
            $res['DeliveryChannelName'] = $this->deliveryChannelName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceChangeDelivery) {
            $res['ResourceChangeDelivery'] = null !== $this->resourceChangeDelivery ? $this->resourceChangeDelivery->toArray($noStream) : $this->resourceChangeDelivery;
        }

        if (null !== $this->resourceSnapshotDelivery) {
            $res['ResourceSnapshotDelivery'] = null !== $this->resourceSnapshotDelivery ? $this->resourceSnapshotDelivery->toArray($noStream) : $this->resourceSnapshotDelivery;
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
        if (isset($map['DeliveryChannelDescription'])) {
            $model->deliveryChannelDescription = $map['DeliveryChannelDescription'];
        }

        if (isset($map['DeliveryChannelFilter'])) {
            $model->deliveryChannelFilter = deliveryChannelFilter::fromMap($map['DeliveryChannelFilter']);
        }

        if (isset($map['DeliveryChannelId'])) {
            $model->deliveryChannelId = $map['DeliveryChannelId'];
        }

        if (isset($map['DeliveryChannelName'])) {
            $model->deliveryChannelName = $map['DeliveryChannelName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceChangeDelivery'])) {
            $model->resourceChangeDelivery = resourceChangeDelivery::fromMap($map['ResourceChangeDelivery']);
        }

        if (isset($map['ResourceSnapshotDelivery'])) {
            $model->resourceSnapshotDelivery = resourceSnapshotDelivery::fromMap($map['ResourceSnapshotDelivery']);
        }

        return $model;
    }
}

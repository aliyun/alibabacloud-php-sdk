<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview\destinations\items;

use AlibabaCloud\Dara\Model;

class lastDelivery extends Model
{
    /**
     * @var string
     */
    public $acceptedAt;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $deliveryId;

    /**
     * @var string
     */
    public $lastAttemptAt;

    /**
     * @var string
     */
    public $sendKind;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'acceptedAt' => 'AcceptedAt',
        'createdAt' => 'CreatedAt',
        'deliveryId' => 'DeliveryId',
        'lastAttemptAt' => 'LastAttemptAt',
        'sendKind' => 'SendKind',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptedAt) {
            $res['AcceptedAt'] = $this->acceptedAt;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->deliveryId) {
            $res['DeliveryId'] = $this->deliveryId;
        }

        if (null !== $this->lastAttemptAt) {
            $res['LastAttemptAt'] = $this->lastAttemptAt;
        }

        if (null !== $this->sendKind) {
            $res['SendKind'] = $this->sendKind;
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
        if (isset($map['AcceptedAt'])) {
            $model->acceptedAt = $map['AcceptedAt'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['DeliveryId'])) {
            $model->deliveryId = $map['DeliveryId'];
        }

        if (isset($map['LastAttemptAt'])) {
            $model->lastAttemptAt = $map['LastAttemptAt'];
        }

        if (isset($map['SendKind'])) {
            $model->sendKind = $map['SendKind'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

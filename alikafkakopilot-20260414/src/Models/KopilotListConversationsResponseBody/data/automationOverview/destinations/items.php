<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview\destinations;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview\destinations\items\lastDelivery;

class items extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $destinationId;

    /**
     * @var lastDelivery
     */
    public $lastDelivery;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'createdAt' => 'CreatedAt',
        'destinationId' => 'DestinationId',
        'lastDelivery' => 'LastDelivery',
        'name' => 'Name',
        'status' => 'Status',
        'type' => 'Type',
        'updatedAt' => 'UpdatedAt',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->lastDelivery) {
            $this->lastDelivery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->destinationId) {
            $res['DestinationId'] = $this->destinationId;
        }

        if (null !== $this->lastDelivery) {
            $res['LastDelivery'] = null !== $this->lastDelivery ? $this->lastDelivery->toArray($noStream) : $this->lastDelivery;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['DestinationId'])) {
            $model->destinationId = $map['DestinationId'];
        }

        if (isset($map['LastDelivery'])) {
            $model->lastDelivery = lastDelivery::fromMap($map['LastDelivery']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

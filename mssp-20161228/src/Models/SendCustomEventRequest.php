<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Dara\Model;

class SendCustomEventRequest extends Model
{
    /**
     * @var string
     */
    public $customerId;
    /**
     * @var string
     */
    public $dataSource;
    /**
     * @var string
     */
    public $eventDescription;
    /**
     * @var string
     */
    public $eventDetails;
    /**
     * @var string
     */
    public $eventMarkdown;
    /**
     * @var string
     */
    public $eventName;
    /**
     * @var string
     */
    public $eventType;
    /**
     * @var int
     */
    public $findTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $isSend;
    /**
     * @var string
     */
    public $level;
    /**
     * @var int
     */
    public $occurrenceTime;
    /**
     * @var string
     */
    public $ownerId;
    /**
     * @var string
     */
    public $product;
    /**
     * @var string
     */
    public $uniqueId;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'customerId'       => 'CustomerId',
        'dataSource'       => 'DataSource',
        'eventDescription' => 'EventDescription',
        'eventDetails'     => 'EventDetails',
        'eventMarkdown'    => 'EventMarkdown',
        'eventName'        => 'EventName',
        'eventType'        => 'EventType',
        'findTime'         => 'FindTime',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'isSend'           => 'IsSend',
        'level'            => 'Level',
        'occurrenceTime'   => 'OccurrenceTime',
        'ownerId'          => 'OwnerId',
        'product'          => 'Product',
        'uniqueId'         => 'UniqueId',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }

        if (null !== $this->eventDescription) {
            $res['EventDescription'] = $this->eventDescription;
        }

        if (null !== $this->eventDetails) {
            $res['EventDetails'] = $this->eventDetails;
        }

        if (null !== $this->eventMarkdown) {
            $res['EventMarkdown'] = $this->eventMarkdown;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->findTime) {
            $res['FindTime'] = $this->findTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->isSend) {
            $res['IsSend'] = $this->isSend;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->occurrenceTime) {
            $res['OccurrenceTime'] = $this->occurrenceTime;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }

        if (isset($map['EventDescription'])) {
            $model->eventDescription = $map['EventDescription'];
        }

        if (isset($map['EventDetails'])) {
            $model->eventDetails = $map['EventDetails'];
        }

        if (isset($map['EventMarkdown'])) {
            $model->eventMarkdown = $map['EventMarkdown'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['FindTime'])) {
            $model->findTime = $map['FindTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IsSend'])) {
            $model->isSend = $map['IsSend'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['OccurrenceTime'])) {
            $model->occurrenceTime = $map['OccurrenceTime'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class SendCustomEventRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1214484929940219
     *
     * @var string
     */
    public $customerId;

    /**
     * @example aegis_suspicious_event
     *
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
     * @description This parameter is required.
     *
     * @var string
     */
    public $eventName;

    /**
     * @description This parameter is required.
     *
     * @example SUSP_CUSTOM_CFW
     *
     * @var string
     */
    public $eventType;

    /**
     * @description This parameter is required.
     *
     * @example 2023-04-23 14:47:34
     *
     * @var int
     */
    public $findTime;

    /**
     * @example i-uf60h3ns25bzq9eyf8ps
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var string
     */
    public $isSend;

    /**
     * @description This parameter is required.
     *
     * @example serious
     *
     * @var string
     */
    public $level;

    /**
     * @example 1724956996000
     *
     * @var int
     */
    public $occurrenceTime;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @example CloudSecCenter
     *
     * @var string
     */
    public $product;

    /**
     * @description This parameter is required.
     *
     * @example 68888f02-98f2-492b-a2b2-5b13295755b7
     *
     * @var string
     */
    public $uniqueId;

    /**
     * @description UUID。
     *
     * @example 93B6CDAB-7D2E-33D2-9EBA-25D561A2E95F
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'customerId'       => 'CustomerId',
        'dataSource'       => 'DataSource',
        'eventDescription' => 'EventDescription',
        'eventDetails'     => 'EventDetails',
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SendCustomEventRequest
     */
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

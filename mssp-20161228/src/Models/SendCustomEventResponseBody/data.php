<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\SendCustomEventResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1601097845544644
     *
     * @var string
     */
    public $customerId;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @example c0dc71d1-8a1d-4043-9767-f6c420e34901-81bd
     *
     * @var string
     */
    public $eventId;

    /**
     * @example SUSP_CUSTOM_WAF
     *
     * @var string
     */
    public $eventType;

    /**
     * @example 1914348
     *
     * @var int
     */
    public $id;

    /**
     * @example 352675
     *
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $workTaskName;
    protected $_name = [
        'customerId'   => 'CustomerId',
        'customerName' => 'CustomerName',
        'eventId'      => 'EventId',
        'eventType'    => 'EventType',
        'id'           => 'Id',
        'ownerId'      => 'OwnerId',
        'ownerName'    => 'OwnerName',
        'workTaskName' => 'WorkTaskName',
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
        if (null !== $this->customerName) {
            $res['CustomerName'] = $this->customerName;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->workTaskName) {
            $res['WorkTaskName'] = $this->workTaskName;
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
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }
        if (isset($map['CustomerName'])) {
            $model->customerName = $map['CustomerName'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['WorkTaskName'])) {
            $model->workTaskName = $map['WorkTaskName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Metaspace\V20221014\Models\ApplyCoordinationForCoordinatorResponseBody;

use AlibabaCloud\Dara\Model;

class coordinateFlowModels extends Model
{
    /**
     * @var string
     */
    public $coId;

    /**
     * @var string
     */
    public $coordinateStatus;

    /**
     * @var string
     */
    public $coordinateTicket;

    /**
     * @var string
     */
    public $coordinatorUserId;

    /**
     * @var string
     */
    public $ownerUserId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'coId' => 'CoId',
        'coordinateStatus' => 'CoordinateStatus',
        'coordinateTicket' => 'CoordinateTicket',
        'coordinatorUserId' => 'CoordinatorUserId',
        'ownerUserId' => 'OwnerUserId',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coId) {
            $res['CoId'] = $this->coId;
        }

        if (null !== $this->coordinateStatus) {
            $res['CoordinateStatus'] = $this->coordinateStatus;
        }

        if (null !== $this->coordinateTicket) {
            $res['CoordinateTicket'] = $this->coordinateTicket;
        }

        if (null !== $this->coordinatorUserId) {
            $res['CoordinatorUserId'] = $this->coordinatorUserId;
        }

        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
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
        if (isset($map['CoId'])) {
            $model->coId = $map['CoId'];
        }

        if (isset($map['CoordinateStatus'])) {
            $model->coordinateStatus = $map['CoordinateStatus'];
        }

        if (isset($map['CoordinateTicket'])) {
            $model->coordinateTicket = $map['CoordinateTicket'];
        }

        if (isset($map['CoordinatorUserId'])) {
            $model->coordinatorUserId = $map['CoordinatorUserId'];
        }

        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}

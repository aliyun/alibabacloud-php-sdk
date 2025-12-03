<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Metaspace\V20220307\Models\ApplyCoordinationWithCodeResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
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
     * @var int
     */
    public $coordinatorAliUid;

    /**
     * @var string
     */
    public $coordinatorUserId;

    /**
     * @var int
     */
    public $ownerAliUid;

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

    /**
     * @var string
     */
    public $resourceRegionId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'coId' => 'CoId',
        'coordinateStatus' => 'CoordinateStatus',
        'coordinateTicket' => 'CoordinateTicket',
        'coordinatorAliUid' => 'CoordinatorAliUid',
        'coordinatorUserId' => 'CoordinatorUserId',
        'ownerAliUid' => 'OwnerAliUid',
        'ownerUserId' => 'OwnerUserId',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
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

        if (null !== $this->coordinatorAliUid) {
            $res['CoordinatorAliUid'] = $this->coordinatorAliUid;
        }

        if (null !== $this->coordinatorUserId) {
            $res['CoordinatorUserId'] = $this->coordinatorUserId;
        }

        if (null !== $this->ownerAliUid) {
            $res['OwnerAliUid'] = $this->ownerAliUid;
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

        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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

        if (isset($map['CoordinatorAliUid'])) {
            $model->coordinatorAliUid = $map['CoordinatorAliUid'];
        }

        if (isset($map['CoordinatorUserId'])) {
            $model->coordinatorUserId = $map['CoordinatorUserId'];
        }

        if (isset($map['OwnerAliUid'])) {
            $model->ownerAliUid = $map['OwnerAliUid'];
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

        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}

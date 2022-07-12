<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyCoordinationForMonitoringResponseBody;

use AlibabaCloud\Tea\Model;

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
    public $initiatorType;

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
        'coId'             => 'CoId',
        'coordinateStatus' => 'CoordinateStatus',
        'coordinateTicket' => 'CoordinateTicket',
        'initiatorType'    => 'InitiatorType',
        'ownerUserId'      => 'OwnerUserId',
        'resourceId'       => 'ResourceId',
        'resourceName'     => 'ResourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->initiatorType) {
            $res['InitiatorType'] = $this->initiatorType;
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

    /**
     * @param array $map
     *
     * @return coordinateFlowModels
     */
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
        if (isset($map['InitiatorType'])) {
            $model->initiatorType = $map['InitiatorType'];
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

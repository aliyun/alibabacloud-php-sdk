<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyCoordinationForMonitoringResponseBody;

use AlibabaCloud\Tea\Model;

class coordinateFlowModels extends Model
{
    /**
     * @description The ID of the stream collaboration.
     *
     * @example co-0sot77uale3****
     *
     * @var string
     */
    public $coId;

    /**
     * @description The current status of the collaboration task.
     *
     * Valid values:
     *
     *   COORDINATING: The collaboration task is being executed.
     *
     *   TERMINATING: The collaboration task is being terminated.
     *
     *   TERMINATED: The collaboration task is terminated.
     *
     *   PENDING: The collaboration task is pending to be executed.
     *
     * @example PENDING
     *
     * @var string
     */
    public $coordinateStatus;

    /**
     * @description The ticket that is used to establish the Adaptive Streaming Protocol (ASP)-based connection.
     *
     * @example 1VDQ0VTUw0KW0Rlc2t0b3BdDQpHV1Rva2VuPTAwTzgwL3liS25zUEVGdkF6eU1Pc1ExeHZWdmk4VEE3NFJvU1V1d0dPYm1BNkNJWklDMHVNQklWcjU2NS80S0ZQekQ4aGFTR0ZHelZqMTFGbkRpWWgvUFF1Zm1xSXNGdFRFNFRWMExJNit3TkU0L2RMb04wNXBBSE5Tc3M4dWFXY3lwWE****
     *
     * @var string
     */
    public $coordinateTicket;

    /**
     * @description The type of the initiator.
     *
     * Valid values:
     *
     *   ADMIN_INITIATE_FORCE: The administrator forcibly initiates the collaboration request.
     *
     *   ADMIN_INITIATE: The administrator initiates the collaboration request.
     *
     *   COORDINATOR_INITIATE_FORCE: The coordinator forcibly initiates the collaboration request.
     *
     * @example COORDINATOR_INITIATE_FORCE
     *
     * @var string
     */
    public $initiatorType;

    /**
     * @description The ID of the Alibaba Cloud account of the end user.
     *
     * @example alice
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @description The ID of the cloud desktop.
     *
     * @example ecd-96vi03f9emqnl****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the cloud desktop.
     *
     * @example TestDesktop
     *
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

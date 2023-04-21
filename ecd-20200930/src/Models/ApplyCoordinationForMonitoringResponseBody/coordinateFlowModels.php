<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyCoordinationForMonitoringResponseBody;

use AlibabaCloud\Tea\Model;

class coordinateFlowModels extends Model
{
    /**
     * @example co-0sot77uale3****
     *
     * @var string
     */
    public $coId;

    /**
     * @example PENDING
     *
     * @var string
     */
    public $coordinateStatus;

    /**
     * @example 1VDQ0VTUw0KW0Rlc2t0b3BdDQpHV1Rva2VuPTAwTzgwL3liS25zUEVGdkF6eU1Pc1ExeHZWdmk4VEE3NFJvU1V1d0dPYm1BNkNJWklDMHVNQklWcjU2NS80S0ZQekQ4aGFTR0ZHelZqMTFGbkRpWWgvUFF1Zm1xSXNGdFRFNFRWMExJNit3TkU0L2RMb04wNXBBSE5Tc3M4dWFXY3lwWE****
     *
     * @var string
     */
    public $coordinateTicket;

    /**
     * @example COORDINATOR_INITIATE_FORCE
     *
     * @var string
     */
    public $initiatorType;

    /**
     * @example alice
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @example ecd-96vi03f9emqnl****
     *
     * @var string
     */
    public $resourceId;

    /**
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

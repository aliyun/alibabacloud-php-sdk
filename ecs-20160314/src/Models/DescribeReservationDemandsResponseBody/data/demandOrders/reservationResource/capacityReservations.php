<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandsResponseBody\data\demandOrders\reservationResource;

use AlibabaCloud\Tea\Model;

class capacityReservations extends Model
{
    /**
     * @var string
     */
    public $approveCode;

    /**
     * @var string
     */
    public $approveNotes;

    /**
     * @var int
     */
    public $instanceAmount;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $matchCriteria;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'approveCode'          => 'ApproveCode',
        'approveNotes'         => 'ApproveNotes',
        'instanceAmount'       => 'InstanceAmount',
        'instanceType'         => 'InstanceType',
        'matchCriteria'        => 'MatchCriteria',
        'planId'               => 'PlanId',
        'privatePoolOptionsId' => 'PrivatePoolOptionsId',
        'startTime'            => 'StartTime',
        'status'               => 'Status',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approveCode) {
            $res['ApproveCode'] = $this->approveCode;
        }
        if (null !== $this->approveNotes) {
            $res['ApproveNotes'] = $this->approveNotes;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->matchCriteria) {
            $res['MatchCriteria'] = $this->matchCriteria;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->privatePoolOptionsId) {
            $res['PrivatePoolOptionsId'] = $this->privatePoolOptionsId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacityReservations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApproveCode'])) {
            $model->approveCode = $map['ApproveCode'];
        }
        if (isset($map['ApproveNotes'])) {
            $model->approveNotes = $map['ApproveNotes'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MatchCriteria'])) {
            $model->matchCriteria = $map['MatchCriteria'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PrivatePoolOptionsId'])) {
            $model->privatePoolOptionsId = $map['PrivatePoolOptionsId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

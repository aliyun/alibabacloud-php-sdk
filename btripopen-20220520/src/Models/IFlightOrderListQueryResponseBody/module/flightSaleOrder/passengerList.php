<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IFlightOrderListQueryResponseBody\module\flightSaleOrder;

use AlibabaCloud\Tea\Model;

class passengerList extends Model
{
    /**
     * @example 0111
     *
     * @var string
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @example 1002
     *
     * @var string
     */
    public $departmentId;

    /**
     * @var string
     */
    public $departmentName;

    /**
     * @example 01112
     *
     * @var string
     */
    public $invoiceId;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @example 100757
     *
     * @var string
     */
    public $jobNo;

    /**
     * @example 0
     *
     * @var int
     */
    public $passengerType;

    /**
     * @example 1111
     *
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectTitle;

    /**
     * @example 01323
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'costCenterId'   => 'cost_center_id',
        'costCenterName' => 'cost_center_name',
        'departmentId'   => 'department_id',
        'departmentName' => 'department_name',
        'invoiceId'      => 'invoice_id',
        'invoiceTitle'   => 'invoice_title',
        'jobNo'          => 'job_no',
        'passengerType'  => 'passenger_type',
        'projectCode'    => 'project_code',
        'projectTitle'   => 'project_title',
        'userId'         => 'user_id',
        'userName'       => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costCenterId) {
            $res['cost_center_id'] = $this->costCenterId;
        }
        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }
        if (null !== $this->departmentId) {
            $res['department_id'] = $this->departmentId;
        }
        if (null !== $this->departmentName) {
            $res['department_name'] = $this->departmentName;
        }
        if (null !== $this->invoiceId) {
            $res['invoice_id'] = $this->invoiceId;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }
        if (null !== $this->jobNo) {
            $res['job_no'] = $this->jobNo;
        }
        if (null !== $this->passengerType) {
            $res['passenger_type'] = $this->passengerType;
        }
        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }
        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passengerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cost_center_id'])) {
            $model->costCenterId = $map['cost_center_id'];
        }
        if (isset($map['cost_center_name'])) {
            $model->costCenterName = $map['cost_center_name'];
        }
        if (isset($map['department_id'])) {
            $model->departmentId = $map['department_id'];
        }
        if (isset($map['department_name'])) {
            $model->departmentName = $map['department_name'];
        }
        if (isset($map['invoice_id'])) {
            $model->invoiceId = $map['invoice_id'];
        }
        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }
        if (isset($map['job_no'])) {
            $model->jobNo = $map['job_no'];
        }
        if (isset($map['passenger_type'])) {
            $model->passengerType = $map['passenger_type'];
        }
        if (isset($map['project_code'])) {
            $model->projectCode = $map['project_code'];
        }
        if (isset($map['project_title'])) {
            $model->projectTitle = $map['project_title'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}

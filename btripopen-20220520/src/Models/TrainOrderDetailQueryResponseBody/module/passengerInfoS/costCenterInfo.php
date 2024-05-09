<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\passengerInfoS;

use AlibabaCloud\Tea\Model;

class costCenterInfo extends Model
{
    /**
     * @var string
     */
    public $cascadeDeptName;

    /**
     * @example 111111
     *
     * @var string
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @example 123456
     *
     * @var string
     */
    public $costCenterNo;

    /**
     * @example 582000002311
     *
     * @var string
     */
    public $departId;

    /**
     * @var string
     */
    public $departName;

    /**
     * @example 11111
     *
     * @var string
     */
    public $invoiceId;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @example 123456
     *
     * @var string
     */
    public $passengerId;

    /**
     * @example 1234
     *
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectTitle;
    protected $_name = [
        'cascadeDeptName' => 'cascade_dept_name',
        'costCenterId'    => 'cost_center_id',
        'costCenterName'  => 'cost_center_name',
        'costCenterNo'    => 'cost_center_no',
        'departId'        => 'depart_id',
        'departName'      => 'depart_name',
        'invoiceId'       => 'invoice_id',
        'invoiceTitle'    => 'invoice_title',
        'passengerId'     => 'passenger_id',
        'projectCode'     => 'project_code',
        'projectTitle'    => 'project_title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cascadeDeptName) {
            $res['cascade_dept_name'] = $this->cascadeDeptName;
        }
        if (null !== $this->costCenterId) {
            $res['cost_center_id'] = $this->costCenterId;
        }
        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }
        if (null !== $this->costCenterNo) {
            $res['cost_center_no'] = $this->costCenterNo;
        }
        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }
        if (null !== $this->departName) {
            $res['depart_name'] = $this->departName;
        }
        if (null !== $this->invoiceId) {
            $res['invoice_id'] = $this->invoiceId;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }
        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }
        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }
        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return costCenterInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cascade_dept_name'])) {
            $model->cascadeDeptName = $map['cascade_dept_name'];
        }
        if (isset($map['cost_center_id'])) {
            $model->costCenterId = $map['cost_center_id'];
        }
        if (isset($map['cost_center_name'])) {
            $model->costCenterName = $map['cost_center_name'];
        }
        if (isset($map['cost_center_no'])) {
            $model->costCenterNo = $map['cost_center_no'];
        }
        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }
        if (isset($map['depart_name'])) {
            $model->departName = $map['depart_name'];
        }
        if (isset($map['invoice_id'])) {
            $model->invoiceId = $map['invoice_id'];
        }
        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }
        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }
        if (isset($map['project_code'])) {
            $model->projectCode = $map['project_code'];
        }
        if (isset($map['project_title'])) {
            $model->projectTitle = $map['project_title'];
        }

        return $model;
    }
}

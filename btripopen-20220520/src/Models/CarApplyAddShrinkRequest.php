<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class CarApplyAddShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $cause;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $cityCodeSet;

    /**
     * @description This parameter is required.
     *
     * @example 2022-07-12 14:52:52
     *
     * @var string
     */
    public $date;

    /**
     * @example 2022-07-12 18:51:25
     *
     * @var string
     */
    public $finishedDate;

    /**
     * @example project1413
     *
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description This parameter is required.
     *
     * @example IRGS1413
     *
     * @var string
     */
    public $thirdPartApplyId;

    /**
     * @example QA1411
     *
     * @var string
     */
    public $thirdPartCostCenterId;

    /**
     * @example GA15131
     *
     * @var string
     */
    public $thirdPartInvoiceId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $timesTotal;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $timesType;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $timesUsed;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $travelerStandardShrink;

    /**
     * @description This parameter is required.
     *
     * @example OPEN1415614
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'cause'                  => 'cause',
        'city'                   => 'city',
        'cityCodeSet'            => 'city_code_set',
        'date'                   => 'date',
        'finishedDate'           => 'finished_date',
        'projectCode'            => 'project_code',
        'projectName'            => 'project_name',
        'status'                 => 'status',
        'thirdPartApplyId'       => 'third_part_apply_id',
        'thirdPartCostCenterId'  => 'third_part_cost_center_id',
        'thirdPartInvoiceId'     => 'third_part_invoice_id',
        'timesTotal'             => 'times_total',
        'timesType'              => 'times_type',
        'timesUsed'              => 'times_used',
        'title'                  => 'title',
        'travelerStandardShrink' => 'traveler_standard',
        'userId'                 => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cause) {
            $res['cause'] = $this->cause;
        }
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }
        if (null !== $this->cityCodeSet) {
            $res['city_code_set'] = $this->cityCodeSet;
        }
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->finishedDate) {
            $res['finished_date'] = $this->finishedDate;
        }
        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }
        if (null !== $this->projectName) {
            $res['project_name'] = $this->projectName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->thirdPartApplyId) {
            $res['third_part_apply_id'] = $this->thirdPartApplyId;
        }
        if (null !== $this->thirdPartCostCenterId) {
            $res['third_part_cost_center_id'] = $this->thirdPartCostCenterId;
        }
        if (null !== $this->thirdPartInvoiceId) {
            $res['third_part_invoice_id'] = $this->thirdPartInvoiceId;
        }
        if (null !== $this->timesTotal) {
            $res['times_total'] = $this->timesTotal;
        }
        if (null !== $this->timesType) {
            $res['times_type'] = $this->timesType;
        }
        if (null !== $this->timesUsed) {
            $res['times_used'] = $this->timesUsed;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->travelerStandardShrink) {
            $res['traveler_standard'] = $this->travelerStandardShrink;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CarApplyAddShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cause'])) {
            $model->cause = $map['cause'];
        }
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }
        if (isset($map['city_code_set'])) {
            $model->cityCodeSet = $map['city_code_set'];
        }
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['finished_date'])) {
            $model->finishedDate = $map['finished_date'];
        }
        if (isset($map['project_code'])) {
            $model->projectCode = $map['project_code'];
        }
        if (isset($map['project_name'])) {
            $model->projectName = $map['project_name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['third_part_apply_id'])) {
            $model->thirdPartApplyId = $map['third_part_apply_id'];
        }
        if (isset($map['third_part_cost_center_id'])) {
            $model->thirdPartCostCenterId = $map['third_part_cost_center_id'];
        }
        if (isset($map['third_part_invoice_id'])) {
            $model->thirdPartInvoiceId = $map['third_part_invoice_id'];
        }
        if (isset($map['times_total'])) {
            $model->timesTotal = $map['times_total'];
        }
        if (isset($map['times_type'])) {
            $model->timesType = $map['times_type'];
        }
        if (isset($map['times_used'])) {
            $model->timesUsed = $map['times_used'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['traveler_standard'])) {
            $model->travelerStandardShrink = $map['traveler_standard'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}

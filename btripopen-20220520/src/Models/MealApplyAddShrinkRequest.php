<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class MealApplyAddShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applyUserShrink;

    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var int
     */
    public $invoiceId;

    /**
     * @var string
     */
    public $itineraryListShrink;

    /**
     * @var int
     */
    public $mealAmount;

    /**
     * @var string
     */
    public $mealCause;

    /**
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectTitle;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $thirdPartApplyId;

    /**
     * @var string
     */
    public $thirdPartCostCenterId;

    /**
     * @var string
     */
    public $thirdPartInvoiceId;
    protected $_name = [
        'applyUserShrink' => 'apply_user',
        'costCenterId' => 'cost_center_id',
        'invoiceId' => 'invoice_id',
        'itineraryListShrink' => 'itinerary_list',
        'mealAmount' => 'meal_amount',
        'mealCause' => 'meal_cause',
        'projectCode' => 'project_code',
        'projectTitle' => 'project_title',
        'status' => 'status',
        'thirdPartApplyId' => 'third_part_apply_id',
        'thirdPartCostCenterId' => 'third_part_cost_center_id',
        'thirdPartInvoiceId' => 'third_part_invoice_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyUserShrink) {
            $res['apply_user'] = $this->applyUserShrink;
        }

        if (null !== $this->costCenterId) {
            $res['cost_center_id'] = $this->costCenterId;
        }

        if (null !== $this->invoiceId) {
            $res['invoice_id'] = $this->invoiceId;
        }

        if (null !== $this->itineraryListShrink) {
            $res['itinerary_list'] = $this->itineraryListShrink;
        }

        if (null !== $this->mealAmount) {
            $res['meal_amount'] = $this->mealAmount;
        }

        if (null !== $this->mealCause) {
            $res['meal_cause'] = $this->mealCause;
        }

        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }

        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_user'])) {
            $model->applyUserShrink = $map['apply_user'];
        }

        if (isset($map['cost_center_id'])) {
            $model->costCenterId = $map['cost_center_id'];
        }

        if (isset($map['invoice_id'])) {
            $model->invoiceId = $map['invoice_id'];
        }

        if (isset($map['itinerary_list'])) {
            $model->itineraryListShrink = $map['itinerary_list'];
        }

        if (isset($map['meal_amount'])) {
            $model->mealAmount = $map['meal_amount'];
        }

        if (isset($map['meal_cause'])) {
            $model->mealCause = $map['meal_cause'];
        }

        if (isset($map['project_code'])) {
            $model->projectCode = $map['project_code'];
        }

        if (isset($map['project_title'])) {
            $model->projectTitle = $map['project_title'];
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

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyAddRequest\applyUser;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyAddRequest\itineraryList;

class MealApplyAddRequest extends Model
{
    /**
     * @var applyUser
     */
    public $applyUser;

    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var int
     */
    public $invoiceId;

    /**
     * @var itineraryList[]
     */
    public $itineraryList;

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
        'applyUser' => 'apply_user',
        'costCenterId' => 'cost_center_id',
        'invoiceId' => 'invoice_id',
        'itineraryList' => 'itinerary_list',
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
        if (null !== $this->applyUser) {
            $this->applyUser->validate();
        }
        if (\is_array($this->itineraryList)) {
            Model::validateArray($this->itineraryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyUser) {
            $res['apply_user'] = null !== $this->applyUser ? $this->applyUser->toArray($noStream) : $this->applyUser;
        }

        if (null !== $this->costCenterId) {
            $res['cost_center_id'] = $this->costCenterId;
        }

        if (null !== $this->invoiceId) {
            $res['invoice_id'] = $this->invoiceId;
        }

        if (null !== $this->itineraryList) {
            if (\is_array($this->itineraryList)) {
                $res['itinerary_list'] = [];
                $n1 = 0;
                foreach ($this->itineraryList as $item1) {
                    $res['itinerary_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $model->applyUser = applyUser::fromMap($map['apply_user']);
        }

        if (isset($map['cost_center_id'])) {
            $model->costCenterId = $map['cost_center_id'];
        }

        if (isset($map['invoice_id'])) {
            $model->invoiceId = $map['invoice_id'];
        }

        if (isset($map['itinerary_list'])) {
            if (!empty($map['itinerary_list'])) {
                $model->itineraryList = [];
                $n1 = 0;
                foreach ($map['itinerary_list'] as $item1) {
                    $model->itineraryList[$n1] = itineraryList::fromMap($item1);
                    ++$n1;
                }
            }
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

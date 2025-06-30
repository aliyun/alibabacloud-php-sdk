<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyQueryResponseBody\module\applyUser;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\MealApplyQueryResponseBody\module\itineraryList;

class module extends Model
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
     * @var string
     */
    public $gmtCreate;

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
     * @var int
     */
    public $projectId;

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

    /**
     * @var string
     */
    public $thirdPartProjectId;
    protected $_name = [
        'applyUser' => 'apply_user',
        'costCenterId' => 'cost_center_id',
        'gmtCreate' => 'gmt_create',
        'invoiceId' => 'invoice_id',
        'itineraryList' => 'itinerary_list',
        'mealAmount' => 'meal_amount',
        'mealCause' => 'meal_cause',
        'projectId' => 'project_id',
        'status' => 'status',
        'thirdPartApplyId' => 'third_part_apply_id',
        'thirdPartCostCenterId' => 'third_part_cost_center_id',
        'thirdPartInvoiceId' => 'third_part_invoice_id',
        'thirdPartProjectId' => 'third_part_project_id',
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

        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
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

        if (null !== $this->projectId) {
            $res['project_id'] = $this->projectId;
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

        if (null !== $this->thirdPartProjectId) {
            $res['third_part_project_id'] = $this->thirdPartProjectId;
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

        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
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

        if (isset($map['project_id'])) {
            $model->projectId = $map['project_id'];
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

        if (isset($map['third_part_project_id'])) {
            $model->thirdPartProjectId = $map['third_part_project_id'];
        }

        return $model;
    }
}

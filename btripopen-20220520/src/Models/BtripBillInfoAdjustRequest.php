<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class BtripBillInfoAdjustRequest extends Model
{
    /**
     * @var int
     */
    public $primaryId;

    /**
     * @var string
     */
    public $thirdPartCostCenterId;

    /**
     * @var string
     */
    public $thirdPartDepartmentId;

    /**
     * @var string
     */
    public $thirdPartInvoiceId;

    /**
     * @var string
     */
    public $thirdPartProjectId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'primaryId' => 'primary_id',
        'thirdPartCostCenterId' => 'third_part_cost_center_id',
        'thirdPartDepartmentId' => 'third_part_department_id',
        'thirdPartInvoiceId' => 'third_part_invoice_id',
        'thirdPartProjectId' => 'third_part_project_id',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->primaryId) {
            $res['primary_id'] = $this->primaryId;
        }

        if (null !== $this->thirdPartCostCenterId) {
            $res['third_part_cost_center_id'] = $this->thirdPartCostCenterId;
        }

        if (null !== $this->thirdPartDepartmentId) {
            $res['third_part_department_id'] = $this->thirdPartDepartmentId;
        }

        if (null !== $this->thirdPartInvoiceId) {
            $res['third_part_invoice_id'] = $this->thirdPartInvoiceId;
        }

        if (null !== $this->thirdPartProjectId) {
            $res['third_part_project_id'] = $this->thirdPartProjectId;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['primary_id'])) {
            $model->primaryId = $map['primary_id'];
        }

        if (isset($map['third_part_cost_center_id'])) {
            $model->thirdPartCostCenterId = $map['third_part_cost_center_id'];
        }

        if (isset($map['third_part_department_id'])) {
            $model->thirdPartDepartmentId = $map['third_part_department_id'];
        }

        if (isset($map['third_part_invoice_id'])) {
            $model->thirdPartInvoiceId = $map['third_part_invoice_id'];
        }

        if (isset($map['third_part_project_id'])) {
            $model->thirdPartProjectId = $map['third_part_project_id'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}

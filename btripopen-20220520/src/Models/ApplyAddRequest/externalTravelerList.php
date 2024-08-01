<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest;

use AlibabaCloud\Tea\Model;

class externalTravelerList extends Model
{
    /**
     * @var string
     */
    public $attribute;

    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $externalUserId;

    /**
     * @var int
     */
    public $invoiceId;

    /**
     * @var string
     */
    public $paymentDepartmentId;

    /**
     * @var string
     */
    public $paymentDepartmentName;

    /**
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectTitle;

    /**
     * @var string
     */
    public $thirdPartInvoiceId;

    /**
     * @var string
     */
    public $thirdpartCostCenterId;

    /**
     * @var string
     */
    public $thirdpartDepartId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userNameEn;
    protected $_name = [
        'attribute'             => 'attribute',
        'costCenterId'          => 'cost_center_id',
        'externalUserId'        => 'external_user_id',
        'invoiceId'             => 'invoice_id',
        'paymentDepartmentId'   => 'payment_department_id',
        'paymentDepartmentName' => 'payment_department_name',
        'projectCode'           => 'project_code',
        'projectTitle'          => 'project_title',
        'thirdPartInvoiceId'    => 'third_part_invoice_id',
        'thirdpartCostCenterId' => 'thirdpart_cost_center_id',
        'thirdpartDepartId'     => 'thirdpart_depart_id',
        'userName'              => 'user_name',
        'userNameEn'            => 'user_name_en',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['attribute'] = $this->attribute;
        }
        if (null !== $this->costCenterId) {
            $res['cost_center_id'] = $this->costCenterId;
        }
        if (null !== $this->externalUserId) {
            $res['external_user_id'] = $this->externalUserId;
        }
        if (null !== $this->invoiceId) {
            $res['invoice_id'] = $this->invoiceId;
        }
        if (null !== $this->paymentDepartmentId) {
            $res['payment_department_id'] = $this->paymentDepartmentId;
        }
        if (null !== $this->paymentDepartmentName) {
            $res['payment_department_name'] = $this->paymentDepartmentName;
        }
        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }
        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
        }
        if (null !== $this->thirdPartInvoiceId) {
            $res['third_part_invoice_id'] = $this->thirdPartInvoiceId;
        }
        if (null !== $this->thirdpartCostCenterId) {
            $res['thirdpart_cost_center_id'] = $this->thirdpartCostCenterId;
        }
        if (null !== $this->thirdpartDepartId) {
            $res['thirdpart_depart_id'] = $this->thirdpartDepartId;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->userNameEn) {
            $res['user_name_en'] = $this->userNameEn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return externalTravelerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attribute'])) {
            $model->attribute = $map['attribute'];
        }
        if (isset($map['cost_center_id'])) {
            $model->costCenterId = $map['cost_center_id'];
        }
        if (isset($map['external_user_id'])) {
            $model->externalUserId = $map['external_user_id'];
        }
        if (isset($map['invoice_id'])) {
            $model->invoiceId = $map['invoice_id'];
        }
        if (isset($map['payment_department_id'])) {
            $model->paymentDepartmentId = $map['payment_department_id'];
        }
        if (isset($map['payment_department_name'])) {
            $model->paymentDepartmentName = $map['payment_department_name'];
        }
        if (isset($map['project_code'])) {
            $model->projectCode = $map['project_code'];
        }
        if (isset($map['project_title'])) {
            $model->projectTitle = $map['project_title'];
        }
        if (isset($map['third_part_invoice_id'])) {
            $model->thirdPartInvoiceId = $map['third_part_invoice_id'];
        }
        if (isset($map['thirdpart_cost_center_id'])) {
            $model->thirdpartCostCenterId = $map['thirdpart_cost_center_id'];
        }
        if (isset($map['thirdpart_depart_id'])) {
            $model->thirdpartDepartId = $map['thirdpart_depart_id'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }
        if (isset($map['user_name_en'])) {
            $model->userNameEn = $map['user_name_en'];
        }

        return $model;
    }
}

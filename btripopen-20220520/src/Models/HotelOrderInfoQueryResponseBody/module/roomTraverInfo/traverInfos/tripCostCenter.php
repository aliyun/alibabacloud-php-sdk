<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo\traverInfos;

use AlibabaCloud\Dara\Model;

class tripCostCenter extends Model
{
    /**
     * @var string
     */
    public $costCenterCode;

    /**
     * @var string
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @var string
     */
    public $externalExtField;

    /**
     * @var int
     */
    public $feeType;

    /**
     * @var int
     */
    public $invoiceId;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectTitle;
    protected $_name = [
        'costCenterCode' => 'cost_center_code',
        'costCenterId' => 'cost_center_id',
        'costCenterName' => 'cost_center_name',
        'externalExtField' => 'external_ext_field',
        'feeType' => 'fee_type',
        'invoiceId' => 'invoice_id',
        'invoiceTitle' => 'invoice_title',
        'projectCode' => 'project_code',
        'projectTitle' => 'project_title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterCode) {
            $res['cost_center_code'] = $this->costCenterCode;
        }

        if (null !== $this->costCenterId) {
            $res['cost_center_id'] = $this->costCenterId;
        }

        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }

        if (null !== $this->externalExtField) {
            $res['external_ext_field'] = $this->externalExtField;
        }

        if (null !== $this->feeType) {
            $res['fee_type'] = $this->feeType;
        }

        if (null !== $this->invoiceId) {
            $res['invoice_id'] = $this->invoiceId;
        }

        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }

        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }

        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
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
        if (isset($map['cost_center_code'])) {
            $model->costCenterCode = $map['cost_center_code'];
        }

        if (isset($map['cost_center_id'])) {
            $model->costCenterId = $map['cost_center_id'];
        }

        if (isset($map['cost_center_name'])) {
            $model->costCenterName = $map['cost_center_name'];
        }

        if (isset($map['external_ext_field'])) {
            $model->externalExtField = $map['external_ext_field'];
        }

        if (isset($map['fee_type'])) {
            $model->feeType = $map['fee_type'];
        }

        if (isset($map['invoice_id'])) {
            $model->invoiceId = $map['invoice_id'];
        }

        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
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

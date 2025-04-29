<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class InvoiceAddRequest extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $bankName;

    /**
     * @var string
     */
    public $bankNo;

    /**
     * @var string
     */
    public $taxNo;

    /**
     * @var string
     */
    public $tel;

    /**
     * @var string
     */
    public $thirdPartId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $unitType;
    protected $_name = [
        'address' => 'address',
        'bankName' => 'bank_name',
        'bankNo' => 'bank_no',
        'taxNo' => 'tax_no',
        'tel' => 'tel',
        'thirdPartId' => 'third_part_id',
        'title' => 'title',
        'type' => 'type',
        'unitType' => 'unit_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->bankName) {
            $res['bank_name'] = $this->bankName;
        }

        if (null !== $this->bankNo) {
            $res['bank_no'] = $this->bankNo;
        }

        if (null !== $this->taxNo) {
            $res['tax_no'] = $this->taxNo;
        }

        if (null !== $this->tel) {
            $res['tel'] = $this->tel;
        }

        if (null !== $this->thirdPartId) {
            $res['third_part_id'] = $this->thirdPartId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->unitType) {
            $res['unit_type'] = $this->unitType;
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
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['bank_name'])) {
            $model->bankName = $map['bank_name'];
        }

        if (isset($map['bank_no'])) {
            $model->bankNo = $map['bank_no'];
        }

        if (isset($map['tax_no'])) {
            $model->taxNo = $map['tax_no'];
        }

        if (isset($map['tel'])) {
            $model->tel = $map['tel'];
        }

        if (isset($map['third_part_id'])) {
            $model->thirdPartId = $map['third_part_id'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['unit_type'])) {
            $model->unitType = $map['unit_type'];
        }

        return $model;
    }
}

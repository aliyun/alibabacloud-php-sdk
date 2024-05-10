<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class InvoiceAddRequest extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $bankName;

    /**
     * @example 123456
     *
     * @var string
     */
    public $bankNo;

    /**
     * @example 12345
     *
     * @var string
     */
    public $taxNo;

    /**
     * @example 123
     *
     * @var string
     */
    public $tel;

    /**
     * @description This parameter is required.
     *
     * @example 340049
     *
     * @var string
     */
    public $thirdPartId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $title;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $unitType;
    protected $_name = [
        'address'     => 'address',
        'bankName'    => 'bank_name',
        'bankNo'      => 'bank_no',
        'taxNo'       => 'tax_no',
        'tel'         => 'tel',
        'thirdPartId' => 'third_part_id',
        'title'       => 'title',
        'type'        => 'type',
        'unitType'    => 'unit_type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return InvoiceAddRequest
     */
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

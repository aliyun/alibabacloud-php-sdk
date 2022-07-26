<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

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
    public $corpId;

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
     * @var string
     */
    public $userId;
    protected $_name = [
        'address'     => 'address',
        'bankName'    => 'bank_name',
        'bankNo'      => 'bank_no',
        'corpId'      => 'corp_id',
        'taxNo'       => 'tax_no',
        'tel'         => 'tel',
        'thirdPartId' => 'third_part_id',
        'title'       => 'title',
        'type'        => 'type',
        'userId'      => 'user_id',
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
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
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
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
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
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\useRule;

use AlibabaCloud\Dara\Model;

class entryWithVoucherRule extends Model
{
    /**
     * @var string
     */
    public $voucherRemark;

    /**
     * @var int[]
     */
    public $voucherTypes;
    protected $_name = [
        'voucherRemark' => 'VoucherRemark',
        'voucherTypes' => 'VoucherTypes',
    ];

    public function validate()
    {
        if (\is_array($this->voucherTypes)) {
            Model::validateArray($this->voucherTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->voucherRemark) {
            $res['VoucherRemark'] = $this->voucherRemark;
        }

        if (null !== $this->voucherTypes) {
            if (\is_array($this->voucherTypes)) {
                $res['VoucherTypes'] = [];
                $n1 = 0;
                foreach ($this->voucherTypes as $item1) {
                    $res['VoucherTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['VoucherRemark'])) {
            $model->voucherRemark = $map['VoucherRemark'];
        }

        if (isset($map['VoucherTypes'])) {
            if (!empty($map['VoucherTypes'])) {
                $model->voucherTypes = [];
                $n1 = 0;
                foreach ($map['VoucherTypes'] as $item1) {
                    $model->voucherTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

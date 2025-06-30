<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\discountDesc;

use AlibabaCloud\Dara\Model;

class discountDetail extends Model
{
    /**
     * @var string[]
     */
    public $labelName;

    /**
     * @var string
     */
    public $moneyDesc;
    protected $_name = [
        'labelName' => 'label_name',
        'moneyDesc' => 'money_desc',
    ];

    public function validate()
    {
        if (\is_array($this->labelName)) {
            Model::validateArray($this->labelName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelName) {
            if (\is_array($this->labelName)) {
                $res['label_name'] = [];
                $n1 = 0;
                foreach ($this->labelName as $item1) {
                    $res['label_name'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->moneyDesc) {
            $res['money_desc'] = $this->moneyDesc;
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
        if (isset($map['label_name'])) {
            if (!empty($map['label_name'])) {
                $model->labelName = [];
                $n1 = 0;
                foreach ($map['label_name'] as $item1) {
                    $model->labelName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['money_desc'])) {
            $model->moneyDesc = $map['money_desc'];
        }

        return $model;
    }
}

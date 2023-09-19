<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\discountDesc;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelName) {
            $res['label_name'] = $this->labelName;
        }
        if (null !== $this->moneyDesc) {
            $res['money_desc'] = $this->moneyDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return discountDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['label_name'])) {
            if (!empty($map['label_name'])) {
                $model->labelName = $map['label_name'];
            }
        }
        if (isset($map['money_desc'])) {
            $model->moneyDesc = $map['money_desc'];
        }

        return $model;
    }
}

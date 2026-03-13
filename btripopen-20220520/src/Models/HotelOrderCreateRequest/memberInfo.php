<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCreateRequest;

use AlibabaCloud\Dara\Model;

class memberInfo extends Model
{
    /**
     * @var string
     */
    public $cardNo;

    /**
     * @var string
     */
    public $realName;
    protected $_name = [
        'cardNo' => 'card_no',
        'realName' => 'real_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cardNo) {
            $res['card_no'] = $this->cardNo;
        }

        if (null !== $this->realName) {
            $res['real_name'] = $this->realName;
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
        if (isset($map['card_no'])) {
            $model->cardNo = $map['card_no'];
        }

        if (isset($map['real_name'])) {
            $model->realName = $map['real_name'];
        }

        return $model;
    }
}

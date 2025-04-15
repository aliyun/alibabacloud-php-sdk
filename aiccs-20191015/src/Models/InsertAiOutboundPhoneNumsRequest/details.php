<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\InsertAiOutboundPhoneNumsRequest;

use AlibabaCloud\Dara\Model;

class details extends Model
{
    /**
     * @var string
     */
    public $bizData;

    /**
     * @var string
     */
    public $phoneNum;
    protected $_name = [
        'bizData' => 'BizData',
        'phoneNum' => 'PhoneNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizData) {
            $res['BizData'] = $this->bizData;
        }

        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
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
        if (isset($map['BizData'])) {
            $model->bizData = $map['BizData'];
        }

        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }

        return $model;
    }
}

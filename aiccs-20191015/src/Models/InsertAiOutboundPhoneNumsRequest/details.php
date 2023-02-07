<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\InsertAiOutboundPhoneNumsRequest;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $bizData;

    /**
     * @example 150****0000
     *
     * @var string
     */
    public $phoneNum;
    protected $_name = [
        'bizData'  => 'BizData',
        'phoneNum' => 'PhoneNum',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return details
     */
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

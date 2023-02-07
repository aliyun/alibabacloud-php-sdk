<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\InsertAiOutboundPhoneNumsResponseBody\data;

use AlibabaCloud\Tea\Model;

class failInfo extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $bizData;

    /**
     * @example 号码格式异常
     *
     * @var string
     */
    public $msg;

    /**
     * @example 150****0000
     *
     * @var string
     */
    public $phoneNum;
    protected $_name = [
        'bizData'  => 'BizData',
        'msg'      => 'Msg',
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
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizData'])) {
            $model->bizData = $map['BizData'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }

        return $model;
    }
}

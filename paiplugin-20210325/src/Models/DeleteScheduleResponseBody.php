<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20210325\Models;

use AlibabaCloud\Tea\Model;

class DeleteScheduleResponseBody extends Model
{
    /**
     * @description 返回数据
     *
     * @var string
     */
    public $data;

    /**
     * @description 错误码
     *
     * @var int
     */
    public $errorCode;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'data'         => 'Data',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteScheduleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        return $model;
    }
}

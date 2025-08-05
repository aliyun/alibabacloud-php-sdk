<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\TestEventSourceConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the check item.
     *
     * @example CHECK_CONNECTION
     *
     * @var string
     */
    public $checkItem;

    /**
     * @description The error message.
     *
     * @example Connection established successfully.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description Indicates whether the check item is executed.
     *
     * @example true
     *
     * @var string
     */
    public $isSucceed;
    protected $_name = [
        'checkItem' => 'CheckItem',
        'errorMsg' => 'ErrorMsg',
        'isSucceed' => 'IsSucceed',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkItem) {
            $res['CheckItem'] = $this->checkItem;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->isSucceed) {
            $res['IsSucceed'] = $this->isSucceed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckItem'])) {
            $model->checkItem = $map['CheckItem'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['IsSucceed'])) {
            $model->isSucceed = $map['IsSucceed'];
        }

        return $model;
    }
}

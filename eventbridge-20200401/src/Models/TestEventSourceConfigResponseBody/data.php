<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\TestEventSourceConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $checkItem;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $isSucceed;
    protected $_name = [
        'checkItem' => 'CheckItem',
        'errorMsg' => 'ErrorMsg',
        'isSucceed' => 'IsSucceed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

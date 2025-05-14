<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RealtimeDialogAssistResponseBody\data;

use AlibabaCloud\Dara\Model;

class assistSop extends Model
{
    /**
     * @var string
     */
    public $assistSop;

    /**
     * @var string
     */
    public $intentCode;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @var bool
     */
    public $isDefault;
    protected $_name = [
        'assistSop' => 'assistSop',
        'intentCode' => 'intentCode',
        'intentName' => 'intentName',
        'isDefault' => 'isDefault',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assistSop) {
            $res['assistSop'] = $this->assistSop;
        }

        if (null !== $this->intentCode) {
            $res['intentCode'] = $this->intentCode;
        }

        if (null !== $this->intentName) {
            $res['intentName'] = $this->intentName;
        }

        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
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
        if (isset($map['assistSop'])) {
            $model->assistSop = $map['assistSop'];
        }

        if (isset($map['intentCode'])) {
            $model->intentCode = $map['intentCode'];
        }

        if (isset($map['intentName'])) {
            $model->intentName = $map['intentName'];
        }

        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }

        return $model;
    }
}

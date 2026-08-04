<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class CreateAccountProfileInfoRequest extends Model
{
    /**
     * @var string
     */
    public $accountJson;
    protected $_name = [
        'accountJson' => 'AccountJson',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountJson) {
            $res['AccountJson'] = $this->accountJson;
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
        if (isset($map['AccountJson'])) {
            $model->accountJson = $map['AccountJson'];
        }

        return $model;
    }
}

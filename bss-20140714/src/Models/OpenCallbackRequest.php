<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bss\V20140714\Models;

use AlibabaCloud\Dara\Model;

class OpenCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $paramStr;
    protected $_name = [
        'paramStr' => 'paramStr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramStr) {
            $res['paramStr'] = $this->paramStr;
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
        if (isset($map['paramStr'])) {
            $model->paramStr = $map['paramStr'];
        }

        return $model;
    }
}

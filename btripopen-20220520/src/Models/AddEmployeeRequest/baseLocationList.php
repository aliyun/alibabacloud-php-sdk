<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\AddEmployeeRequest;

use AlibabaCloud\Dara\Model;

class baseLocationList extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'code' => 'code',
        'level' => 'level',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        return $model;
    }
}

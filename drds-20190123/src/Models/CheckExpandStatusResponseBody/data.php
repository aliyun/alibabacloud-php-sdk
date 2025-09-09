<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CheckExpandStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $isActive;

    /**
     * @var string
     */
    public $msg;
    protected $_name = [
        'isActive' => 'IsActive',
        'msg' => 'Msg',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isActive) {
            $res['IsActive'] = $this->isActive;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
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
        if (isset($map['IsActive'])) {
            $model->isActive = $map['IsActive'];
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        return $model;
    }
}

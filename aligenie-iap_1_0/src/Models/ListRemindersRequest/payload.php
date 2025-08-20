<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\ListRemindersRequest;

use AlibabaCloud\Dara\Model;

class payload extends Model
{
    /**
     * @var bool
     */
    public $isDebug;
    protected $_name = [
        'isDebug' => 'IsDebug',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDebug) {
            $res['IsDebug'] = $this->isDebug;
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
        if (isset($map['IsDebug'])) {
            $model->isDebug = $map['IsDebug'];
        }

        return $model;
    }
}

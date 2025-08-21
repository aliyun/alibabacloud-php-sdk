<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayModeControlResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $openPlayMode;
    protected $_name = [
        'openPlayMode' => 'OpenPlayMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->openPlayMode) {
            $res['OpenPlayMode'] = $this->openPlayMode;
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
        if (isset($map['OpenPlayMode'])) {
            $model->openPlayMode = $map['OpenPlayMode'];
        }

        return $model;
    }
}

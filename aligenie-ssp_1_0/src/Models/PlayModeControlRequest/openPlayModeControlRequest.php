<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayModeControlRequest;

use AlibabaCloud\Tea\Model;

class openPlayModeControlRequest extends Model
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openPlayMode) {
            $res['OpenPlayMode'] = $this->openPlayMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openPlayModeControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenPlayMode'])) {
            $model->openPlayMode = $map['OpenPlayMode'];
        }

        return $model;
    }
}

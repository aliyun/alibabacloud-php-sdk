<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class HangupOperateRequest extends Model
{
    /**
     * @var string
     */
    public $callId;

    /**
     * @var bool
     */
    public $immediateHangup;
    protected $_name = [
        'callId' => 'CallId',
        'immediateHangup' => 'ImmediateHangup',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->immediateHangup) {
            $res['ImmediateHangup'] = $this->immediateHangup;
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
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['ImmediateHangup'])) {
            $model->immediateHangup = $map['ImmediateHangup'];
        }

        return $model;
    }
}

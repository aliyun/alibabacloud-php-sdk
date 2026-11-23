<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceEvent;

use AlibabaCloud\Dara\Model;

class header extends Model
{
    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'event' => 'event',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->event) {
            $res['event'] = $this->event;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
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
        if (isset($map['event'])) {
            $model->event = $map['event'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        return $model;
    }
}

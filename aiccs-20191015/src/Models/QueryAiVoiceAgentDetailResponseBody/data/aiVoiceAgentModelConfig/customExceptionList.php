<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig;

use AlibabaCloud\Dara\Model;

class customExceptionList extends Model
{
    /**
     * @var bool
     */
    public $exceptionSign;

    /**
     * @var string
     */
    public $exceptionType;

    /**
     * @var string
     */
    public $reply;

    /**
     * @var bool
     */
    public $supportBreak;
    protected $_name = [
        'exceptionSign' => 'ExceptionSign',
        'exceptionType' => 'ExceptionType',
        'reply' => 'Reply',
        'supportBreak' => 'SupportBreak',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceptionSign) {
            $res['ExceptionSign'] = $this->exceptionSign;
        }

        if (null !== $this->exceptionType) {
            $res['ExceptionType'] = $this->exceptionType;
        }

        if (null !== $this->reply) {
            $res['Reply'] = $this->reply;
        }

        if (null !== $this->supportBreak) {
            $res['SupportBreak'] = $this->supportBreak;
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
        if (isset($map['ExceptionSign'])) {
            $model->exceptionSign = $map['ExceptionSign'];
        }

        if (isset($map['ExceptionType'])) {
            $model->exceptionType = $map['ExceptionType'];
        }

        if (isset($map['Reply'])) {
            $model->reply = $map['Reply'];
        }

        if (isset($map['SupportBreak'])) {
            $model->supportBreak = $map['SupportBreak'];
        }

        return $model;
    }
}

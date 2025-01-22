<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateProgramResponseBody extends Model
{
    /**
     * @var ChannelAssemblyProgram
     */
    public $program;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'program'   => 'Program',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->program) {
            $this->program->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->program) {
            $res['Program'] = null !== $this->program ? $this->program->toArray($noStream) : $this->program;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Program'])) {
            $model->program = ChannelAssemblyProgram::fromMap($map['Program']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

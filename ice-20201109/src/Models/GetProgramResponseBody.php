<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetProgramResponseBody extends Model
{
    /**
     * @description The information about the program.
     *
     * @var ChannelAssemblyProgram
     */
    public $program;

    /**
     * @description **Request ID**
     *
     * @example xxx-xxxx-xxxxx-xxxx
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'program' => 'Program',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->program) {
            $res['Program'] = null !== $this->program ? $this->program->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProgramResponseBody
     */
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

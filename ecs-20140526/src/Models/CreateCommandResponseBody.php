<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateCommandResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $commandId;
    protected $_name = [
        'requestId' => 'RequestId',
        'commandId' => 'CommandId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCommandResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }

        return $model;
    }
}

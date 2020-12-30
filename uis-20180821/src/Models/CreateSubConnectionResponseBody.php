<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\Tea\Model;

class CreateSubConnectionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $uisSubConnectionId;
    protected $_name = [
        'requestId'          => 'RequestId',
        'uisSubConnectionId' => 'UisSubConnectionId',
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
        if (null !== $this->uisSubConnectionId) {
            $res['UisSubConnectionId'] = $this->uisSubConnectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UisSubConnectionId'])) {
            $model->uisSubConnectionId = $map['UisSubConnectionId'];
        }

        return $model;
    }
}

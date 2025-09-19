<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPushAllTaskResponseBody\pushTaskRsp;

class ModifyPushAllTaskResponseBody extends Model
{
    /**
     * @var pushTaskRsp
     */
    public $pushTaskRsp;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pushTaskRsp' => 'PushTaskRsp',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->pushTaskRsp) {
            $this->pushTaskRsp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushTaskRsp) {
            $res['PushTaskRsp'] = null !== $this->pushTaskRsp ? $this->pushTaskRsp->toArray($noStream) : $this->pushTaskRsp;
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
        if (isset($map['PushTaskRsp'])) {
            $model->pushTaskRsp = pushTaskRsp::fromMap($map['PushTaskRsp']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

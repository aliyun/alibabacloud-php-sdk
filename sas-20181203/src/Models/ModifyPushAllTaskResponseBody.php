<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPushAllTaskResponseBody\pushTaskRsp;
use AlibabaCloud\Tea\Model;

class ModifyPushAllTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pushTaskRsp
     */
    public $pushTaskRsp;
    protected $_name = [
        'requestId'   => 'RequestId',
        'pushTaskRsp' => 'PushTaskRsp',
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
        if (null !== $this->pushTaskRsp) {
            $res['PushTaskRsp'] = null !== $this->pushTaskRsp ? $this->pushTaskRsp->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPushAllTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PushTaskRsp'])) {
            $model->pushTaskRsp = pushTaskRsp::fromMap($map['PushTaskRsp']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPushAllTaskResponseBody\pushTaskRsp;
use AlibabaCloud\Tea\Model;

class ModifyPushAllTaskResponseBody extends Model
{
    /**
     * @description The ID of the server group to which the server belongs.
     *
     * @var pushTaskRsp
     */
    public $pushTaskRsp;

    /**
     * @description HEALTH_CHECK,OVAL_ENTITY
     *
     * @example 91EB4AC7-7FEF-4C72-BE49-4414E459AEC2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pushTaskRsp' => 'PushTaskRsp',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushTaskRsp) {
            $res['PushTaskRsp'] = null !== $this->pushTaskRsp ? $this->pushTaskRsp->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PushTaskRsp'])) {
            $model->pushTaskRsp = pushTaskRsp::fromMap($map['PushTaskRsp']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

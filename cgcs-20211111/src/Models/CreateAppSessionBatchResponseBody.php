<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class CreateAppSessionBatchResponseBody extends Model
{
    /**
     * @description 自定义会话id
     *
     * @var string
     */
    public $customTaskId;

    /**
     * @description 平台会话id
     *
     * @var string
     */
    public $platformTaskId;

    /**
     * @description 请求id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customTaskId'   => 'CustomTaskId',
        'platformTaskId' => 'PlatformTaskId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customTaskId) {
            $res['CustomTaskId'] = $this->customTaskId;
        }
        if (null !== $this->platformTaskId) {
            $res['PlatformTaskId'] = $this->platformTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppSessionBatchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomTaskId'])) {
            $model->customTaskId = $map['CustomTaskId'];
        }
        if (isset($map['PlatformTaskId'])) {
            $model->platformTaskId = $map['PlatformTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

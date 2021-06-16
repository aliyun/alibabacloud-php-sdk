<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectTaskFlowResponseBody\object;
use AlibabaCloud\Tea\Model;

class ListDevopsProjectTaskFlowResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $successful;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var object[]
     */
    public $object;
    protected $_name = [
        'errorMsg'   => 'ErrorMsg',
        'requestId'  => 'RequestId',
        'successful' => 'Successful',
        'errorCode'  => 'ErrorCode',
        'object'     => 'Object',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successful) {
            $res['Successful'] = $this->successful;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->object) {
            $res['Object'] = [];
            if (null !== $this->object && \is_array($this->object)) {
                $n = 0;
                foreach ($this->object as $item) {
                    $res['Object'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDevopsProjectTaskFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Successful'])) {
            $model->successful = $map['Successful'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Object'])) {
            if (!empty($map['Object'])) {
                $model->object = [];
                $n             = 0;
                foreach ($map['Object'] as $item) {
                    $model->object[$n++] = null !== $item ? object::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

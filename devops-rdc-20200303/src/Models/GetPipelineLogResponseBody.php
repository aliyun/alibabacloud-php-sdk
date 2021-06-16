<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineLogResponseBody\object;
use AlibabaCloud\Tea\Model;

class GetPipelineLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var object[]
     */
    public $object;
    protected $_name = [
        'requestId'    => 'RequestId',
        'errorMessage' => 'ErrorMessage',
        'success'      => 'Success',
        'errorCode'    => 'ErrorCode',
        'object'       => 'Object',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
     * @return GetPipelineLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
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

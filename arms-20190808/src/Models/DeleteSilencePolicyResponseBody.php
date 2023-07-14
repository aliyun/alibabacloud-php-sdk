<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteSilencePolicyResponseBody extends Model
{
    /**
     * @description Indicates whether the silence policy was deleted successfully. Valid values:
     *
     *   `true`: The silence policy was deleted successfully.
     *   `false`: The silence policy failed to be deleted.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The operation that you want to perform. Set the value to **DeleteSilencePolicy**.
     *
     * @example A5EC8221-08F2-4C95-9AF1-49FD998C****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isSuccess' => 'IsSuccess',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSilencePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

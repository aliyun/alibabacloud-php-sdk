<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class EnableAdviceServiceResponseBody extends Model
{
    /**
     * @description The message returned for the operation. Valid values:
     *
     *   **Success** is returned if the operation is successful.
     *   An error message is returned if the operation fails.
     *
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example E1745C03-7CCE-55CF-932E-08121AAFA6AF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableAdviceServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
